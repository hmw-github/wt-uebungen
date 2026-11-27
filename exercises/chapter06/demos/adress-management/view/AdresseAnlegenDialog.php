<?php
namespace view;

/**
 * AdresseAnlegenDialog – Eingabeformular für eine Adresse (das "V" in MVC)
 *
 * Derselbe Dialog wird für zwei Fälle verwendet:
 *   - Neu anlegen ($neuAnlegen = true):  leeres Formular, Name editierbar
 *   - Bearbeiten  ($neuAnlegen = false): Formular mit vorhandenen Daten,
 *     der Name ist schreibgeschützt, weil er als Schlüssel dient.
 *
 * Je nach Fall schickt der Button "speichern" eine andere Aktion an den
 * Controller (neueAdresseSpeichern bzw. adressBearbeitungSpeichern).
 */
class AdresseAnlegenDialog {
	private $name = "";
	private $plz = 0;
	private $ort = "";
	private $neuAnlegen;

	/**
	 * @param bool $neuAnlegen true = neue Adresse, false = bearbeiten
	 */
	public function __construct($neuAnlegen) {
		$this->neuAnlegen = $neuAnlegen;
	}

	/**
	 * Gibt die komplette HTML-Seite mit dem Formular aus.
	 *
	 * @param string $message Fehlermeldung aus der Prüfung (leer = erster
	 *                        Aufruf ohne Fehler)
	 */
	public function anzeigen($message) {
		// --- 1. Vorbereitung: Titel, Aktion und Feldwerte festlegen ---
		if ($this->neuAnlegen) {
			$titel = "Adresse anlegen";
			$aktion = "neueAdresseSpeichern";
			$nurLesen = "";
			if ($message != "") {
				// Aufruf nach Validierungsfehler: bisherige Eingaben wieder
				// ins Formular schreiben, damit der Benutzer sie korrigieren
				// kann und nicht alles neu eingeben muss.
				$this->name = $_POST['nameNeu'];
				$this->plz = $_POST['plzNeu'];
				$this->ort = $_POST['ortNeu'];
			}
		} else {
			$titel = "Adresse bearbeiten";
			$aktion = "adressBearbeitungSpeichern";
			$nurLesen = "readonly"; // Name darf nicht geändert werden
			if ($message == "") {
				// Erster Aufruf: Daten der in der Liste gewählten Adresse
				// über das DAO laden.
				$auswahl = $_POST['auswahl'];
				$adr = $_SESSION['adressenDAO']->gibAdresseZuName($auswahl);
				$this->name = $adr->getName();
				$this->plz = $adr->getPlz();
				$this->ort = $adr->getOrt();
			} else {
				// Aufruf nach Validierungsfehler: Eingaben übernehmen.
				$this->name = $_POST['nameNeu'];
				$this->plz = $_POST['plzNeu'];
				$this->ort = $_POST['ortNeu'];
			}
		}

		// --- 2. Ausgabe der HTML-Seite ---
		// Nach dem schließenden PHP-Tag wird alles direkt als HTML ausgegeben.
		// Das Tag "<?=" ist die Kurzform von "<?php echo" und fügt einen Wert
		// ein. Benutzereingaben immer mit htmlspecialchars() ausgeben (XSS).
		// (Achtung: Das schließende PHP-Tag beendet PHP sogar in einem
		// //-Kommentar, deshalb steht es hier nicht ausgeschrieben.)
?>
<!DOCTYPE html>
<html>
	<head>
	<title><?php echo $titel; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Pfade sind relativ zu index.php, da die Seite von dort ausgeliefert wird -->
	<link rel="stylesheet" href="css/style.css">
	<script src="js/funktionen.js" type="text/javascript"></script>
	</head>
	<body>
		<h1>Adressverwaltung</h1>
		<!-- Alle Formulare schicken ihre Daten an den Front Controller index.php -->
		<form method="post" action="index.php" name="eingabeFormular">
			<!-- Verstecktes Feld: teilt dem Controller mit, welche Aktion
			     ausgeführt werden soll. Wird per JavaScript gesetzt. -->
			<input type="hidden" id="aktion" name="aktion" value="<?=$aktion?>">
			<fieldset>
				<legend><?=$titel?></legend>
				<table class="layout">
					<tr>
						<td>Name</td>
						<td><input name="nameNeu" type="text" size="30" value="<?=htmlspecialchars($this->name)?>" <?=$nurLesen?>></td>
					</tr>
					<tr>
						<td>PLZ</td>
						<td><input name="plzNeu" type="text" size="30" value="<?=htmlspecialchars($this->plz)?>"></td>
					</tr>
					<tr>
						<td>Ort</td>
						<td><input name="ortNeu" type="text" size="30" value="<?=htmlspecialchars($this->ort)?>"></td>
					</tr>
				</table>
				<!-- Fehlermeldung (per CSS ausgeblendet, wenn leer) -->
				<p class="meldung"><?=htmlspecialchars($message)?></p>
				<div class="actions">
					<!-- "abbrechen" führt einfach zurück zur Suche -->
					<input type="button" value="abbrechen" onclick="behandleButton('eingabeFormular', 'suchen');">
					<input type="button" class="btn-primary" value="speichern" onclick="behandleButton('eingabeFormular', '<?=$aktion?>');">
				</div>
			</fieldset>
		</form>
	</body>
</html>
<?php
	}
}
?>