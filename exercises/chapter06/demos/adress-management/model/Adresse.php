<?php
namespace model;

/**
 * Adresse – fachliches Datenobjekt (Teil des "M" in MVC)
 *
 * Eine Adresse besteht aus Name, Postleitzahl und Ort. Die Klasse kennt
 * außerdem die Regeln, wann eine Adresse gültig ist (Methode pruefe()).
 * Diese Geschäftsregeln gehören ins Model – nicht in den Controller und
 * nicht in die View.
 *
 * Der Name dient in dieser Anwendung als eindeutiger Schlüssel und kann
 * deshalb nach dem Anlegen nicht mehr geändert werden (kein setName()).
 */
class Adresse {
	private $name;
	private $plz;
	private $ort;

	function __construct($name, $plz, $ort) {
		$this->name = $name;
		$this->plz = $plz;
		$this->ort = $ort;
	}

	/**
	 * Prüft, ob die Adresse gültig ist. Die Regeln werden der Reihe nach
	 * geprüft (Name, PLZ, Ort); gemeldet wird der erste gefundene Fehler.
	 *
	 * Statt true/false zurückzugeben, wirft die Methode bei einem Fehler eine
	 * Exception mit einer lesbaren Meldung. Der Controller fängt sie ab und
	 * zeigt die Meldung im Formular an.
	 *
	 * @throws \Exception falls eine Regel verletzt ist
	 */
	function pruefe() {
		$meldung = "ok";

		if (!isset($this->name) || $this->name == "") {
			$meldung = "Der Name darf nicht leer sein!";
		} else if ($this->plz == "") {
			$meldung = "Die Postleitzahl darf nicht leer sein!";
		} else if (!is_numeric($this->plz) || $this->plz <= 0) {
			$meldung = "Die Postleitzahl muss eine Zahl > 0 sein!";
		} else if ($this->ort == "") {
			$meldung = "Der Ort darf nicht leer sein!";
		}

		if ($meldung != "ok")
			// Backslash: Exception ist eine Klasse aus dem globalen Namespace.
			throw new \Exception($meldung);
	}

	// Getter und Setter für den Zugriff auf die privaten Attribute
	function getName() {
		return $this->name;
	}
	function getPlz() {
		return $this->plz;
	}
	function getOrt() {
		return $this->ort;
	}
	function setPlz($plz) {
		$this->plz = $plz;
	}
	function setOrt($ort) {
		$this->ort = $ort;
	}
}
?>