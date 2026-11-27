<?php
namespace controller;

use model\Adresse;
use view\AdresseAnlegenDialog;
use view\AdressenSuchenDialog;

/**
 * Controller – die Steuerung der Anwendung (das "C" in MVC)
 *
 * Der Controller nimmt jede Anfrage von index.php entgegen und entscheidet
 * anhand des Formularfelds "aktion", was zu tun ist:
 *   - Er arbeitet mit dem Model (Adresse, AdressenDAO), um Daten zu prüfen,
 *     zu speichern oder zu löschen.
 *   - Er wählt die View (einen Dialog) aus, die die Antwortseite erzeugt.
 *
 * Der Controller selbst erzeugt KEIN HTML – das ist Aufgabe der Views.
 * Einstiegspunkt ist die Methode run() ganz unten.
 */
class Controller {
	public function __construct() {
	}

	/**
	 * Aktion "filterAnzeigen": Suchseite nur mit dem Filter anzeigen,
	 * noch ohne Ergebnisliste (Startseite).
	 */
	public function filterAnzeigen() {
		$dialog = new AdressenSuchenDialog();
		$dialog->filterAnzeigen();
	}

	/**
	 * Aktion "suchen": Suchseite mit Filter und passender Ergebnisliste
	 * anzeigen. Wird auch nach anderen Aktionen aufgerufen, um zur Liste
	 * zurückzukehren.
	 *
	 * @param string $message Meldung, die über der Liste angezeigt wird
	 *                        (leer = keine Meldung)
	 */
	public function suchen($message) {
		$dialog = new AdressenSuchenDialog();
		$dialog->ergebnisseAnzeigen($message);
	}

	/**
	 * Aktion "neueAdresseAnlegen": leeres Eingabeformular anzeigen.
	 */
	public function neueAdresseAnlegen() {
		$dialog = new AdresseAnlegenDialog(true); // true = neu anlegen
		$dialog->anzeigen("");
	}

	/**
	 * Aktion "neueAdresseSpeichern": Eingaben aus dem Formular prüfen und
	 * als neue Adresse speichern.
	 */
	public function neueAdresseSpeichern() {
		try {
			// Model-Objekt aus den Formulardaten erzeugen ...
			$adr = new Adresse(
				$_POST['nameNeu'],
				$_POST['plzNeu'],
				$_POST['ortNeu']
			);
			// ... prüfen lassen (wirft bei ungültigen Daten eine Exception) ...
			$adr->pruefe();
			// ... und über das DAO speichern.
			$_SESSION['adressenDAO']->erzeugeAdresse($adr);
			// Anschließend zurück zur Ergebnisliste.
			$this->suchen("");
		} catch (\Exception $e) {
			// Prüfung fehlgeschlagen: Formular erneut anzeigen, diesmal mit
			// Fehlermeldung. Der Dialog übernimmt die bisherigen Eingaben.
			// (Der Backslash in \Exception bedeutet: die Klasse aus dem
			// globalen Namespace, nicht controller\Exception.)
			$dialog = new AdresseAnlegenDialog(true);
			$dialog->anzeigen($e->getMessage());
		}
	}

	/**
	 * Aktion "adresseBearbeiten": Formular mit den Daten der in der Liste
	 * gewählten Adresse anzeigen. Das Feld "auswahl" enthält den Namen der
	 * Adresse (Wert des gewählten Radio-Buttons).
	 */
	public function adresseBearbeiten() {
		if (!isset($_POST['auswahl'])) {
			// Kein Radio-Button gewählt -> zurück zur Liste mit Hinweis.
			$this->suchen("Bitte wählen Sie eine Adresse aus!");
		} else {
			$dialog = new AdresseAnlegenDialog(false); // false = bearbeiten
			$dialog->anzeigen("");
		}
	}

	/**
	 * Aktion "adressBearbeitungSpeichern": geänderte Daten prüfen und
	 * übernehmen. Ablauf wie bei neueAdresseSpeichern().
	 */
	public function adressBearbeitungSpeichern() {
		try {
			$adr = new Adresse(
				$_POST['nameNeu'],
				$_POST['plzNeu'],
				$_POST['ortNeu']
			);
			$adr->pruefe();
			$_SESSION['adressenDAO']->aendereAdresse($adr);
			$this->suchen("Adresse geändert!");
		} catch (\Exception $e) {
			$dialog = new AdresseAnlegenDialog(false);
			$dialog->anzeigen($e->getMessage());
		}
	}

	/**
	 * Aktion "adresseLoeschen": die in der Liste gewählte Adresse löschen.
	 * Die Sicherheitsabfrage ("Wirklich löschen?") erfolgt bereits im
	 * Browser, siehe behandleLoeschenButton() in js/funktionen.js.
	 */
	public function adresseLoeschen() {
		if (!isset($_POST['auswahl'])) {
			$this->suchen("Bitte wählen Sie eine Adresse aus!");
		} else {
            $auswahl = $_POST['auswahl'];
			$_SESSION['adressenDAO']->loescheAdresse($auswahl);
			$this->suchen("");
		}
	}

	/**
	 * Einstiegspunkt für jede Anfrage (wird von index.php aufgerufen).
	 *
	 * Liest das versteckte Formularfeld "aktion" und ruft die passende
	 * Methode auf. Den Wert setzt die JavaScript-Funktion behandleButton()
	 * beim Klick auf einen Button.
	 */
	public function run() {
		// Beim allerersten Aufruf wurde noch kein Formular abgeschickt,
		// also gibt es auch keine Aktion -> Startseite anzeigen.
        if (!isset($_POST['aktion']))
			$aktion = 'filterAnzeigen';
        else
            $aktion = $_POST['aktion'];

		// Aktion -> Methode zuordnen. Für eine neue Aktion muss hier ein
		// weiterer case-Zweig ergänzt werden.
        switch ($aktion) {
			case 'filterAnzeigen':
				$this->filterAnzeigen();
				break;
			case 'suchen':
				$this->suchen("");
				break;
			case 'neueAdresseAnlegen':
				$this->neueAdresseAnlegen();
				break;
			case 'adresseBearbeiten':
				$this->adresseBearbeiten();
				break;
			case 'adresseLoeschen':
				$this->adresseLoeschen();
				break;
			case 'neueAdresseSpeichern':
				$this->neueAdresseSpeichern();
				break;
			case 'adressBearbeitungSpeichern':
				$this->adressBearbeitungSpeichern();
				break;
			default:
				// Unbekannte Aktion (z.B. manipuliertes Formular).
				// htmlspecialchars() verhindert, dass eingeschleuster
				// HTML-/JavaScript-Code ausgeführt wird (XSS).
				echo "Fehler: Aktion " . htmlspecialchars($aktion) . " ist ungültig!";
				break;
		}
	}
}
?>