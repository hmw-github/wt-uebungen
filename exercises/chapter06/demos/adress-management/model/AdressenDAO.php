<?php
namespace model;

/**
 * AdressenDAO – Data Access Object für Adressen (Teil des "M" in MVC)
 *
 * Ein DAO kapselt den Zugriff auf die gespeicherten Daten. Controller und
 * Views rufen nur die öffentlichen Methoden auf (erzeugen, suchen, ändern,
 * löschen) und wissen nicht, WO und WIE die Daten gespeichert sind.
 *
 * Hier liegen die Adressen in einem einfachen Array. Da das DAO-Objekt in
 * der Session gespeichert wird (siehe index.php), bleiben die Daten
 * erhalten, solange die Browser-Sitzung besteht. Möchte man später eine
 * Datenbank verwenden, muss nur diese Klasse geändert werden.
 */
class AdressenDAO {
	// Alle Adressen, mit dem Namen als Schlüssel:
	// [ "Singer, Georg" => Adresse-Objekt, ... ]
	private $daten = array(
    );

	/**
	 * Legt zwei Beispieladressen an, damit die Liste nicht leer ist.
	 */
	public function __construct() {
        $this->erzeugeAdresse(
            new Adresse("Singer, Georg", "12345", "Beispielhausen"));
        $this->erzeugeAdresse(
            new Adresse("Coder, Codie", "54321", "Sourcetown"));
	}

	/**
	 * Liefert alle Adressen, die zum Filter passen, sortiert zurück.
	 *
	 * Leere Filterfelder schränken nicht ein. Sind mehrere Felder gefüllt,
	 * müssen alle Bedingungen erfüllt sein (UND-Verknüpfung).
	 *
	 * @param string $name       Teil des Namens (z.B. "cod")
	 * @param string $plz        Anfang der PLZ (z.B. "12")
	 * @param string $ort        Teil des Orts
	 * @param string $sortierung "sortName", "sortPlz" oder "sortOrt"
	 * @return Adresse[]         gefilterte und sortierte Adressen
	 */
	public function gibAdressenZuFilter($name, $plz, $ort, $sortierung) {
		// 1. Filtern
		$ergebnis = array();
		foreach ($this->daten as $adresse) {
			if ($this->passt($adresse->getName(), $name)
				&& $this->passtAnfang($adresse->getPlz(), $plz)
				&& $this->passt($adresse->getOrt(), $ort)) {
				$ergebnis[] = $adresse;
			}
		}

		// 2. Sortieren: usort() erwartet eine Vergleichsfunktion, die
		// < 0, 0 oder > 0 liefert. "fn($a, $b) => ..." ist eine
		// Kurzschreibweise für eine anonyme Funktion (Arrow Function).
		switch ($sortierung) {
			case 'sortPlz':
				usort($ergebnis, fn($a, $b) => strcmp($a->getPlz(), $b->getPlz()));
				break;
			case 'sortOrt':
				usort($ergebnis, fn($a, $b) => strcasecmp($a->getOrt(), $b->getOrt()));
				break;
			default:
				usort($ergebnis, fn($a, $b) => strcasecmp($a->getName(), $b->getName()));
				break;
		}
		return $ergebnis;
	}

	// true, falls der Filter leer ist oder im Wert enthalten ist
	// (Groß-/Kleinschreibung wird ignoriert; mb_... beachtet auch Umlaute)
	private function passt($wert, $filter) {
		$filter = trim($filter);
		return $filter === "" || mb_stripos($wert, $filter) !== false;
	}

	// true, falls der Filter leer ist oder der Wert damit beginnt
	// (z.B. PLZ "12" findet 12345)
	private function passtAnfang($wert, $filter) {
		$filter = trim($filter);
		return $filter === "" || strpos($wert, $filter) === 0;
	}

	/**
	 * Liefert die Adresse mit dem angegebenen Namen.
	 */
	public function gibAdresseZuName($name) {
		return $this->daten[$name];
	}

	/**
	 * Löscht die Adresse mit dem angegebenen Namen.
	 */
	public function loescheAdresse($name) {
		unset($this->daten[$name]);
	}

	/**
	 * Speichert eine neue Adresse. Gibt es bereits eine Adresse mit diesem
	 * Namen, wird sie überschrieben (der Name ist der Schlüssel).
	 */
	public function erzeugeAdresse($adresse) {
		$this->daten[$adresse->getName()] = $adresse;
	}

	/**
	 * Übernimmt PLZ und Ort der übergebenen Adresse in die gespeicherte
	 * Adresse mit demselben Namen.
	 */
	public function aendereAdresse($adresse) {
		$adr = $this->daten[$adresse->getName()];
		if (isset($adr)) {
			$adr->setPlz($adresse->getPlz());
			$adr->setOrt($adresse->getOrt());
		}
	}
}
?>