<?php
namespace view;

/**
 * AdressenSuchenDialog – Such- und Übersichtsseite (das "V" in MVC)
 *
 * Die Seite besteht aus zwei Teilen:
 *   1. Filter (Name, PLZ, Ort, Sortierung) mit Button "suchen"
 *   2. Suchergebnisse: Tabelle der passenden Adressen mit den Buttons
 *      Neueintrag, Bearbeiten und Löschen
 *
 * filterAnzeigen() gibt nur Teil 1 aus (Startseite),
 * ergebnisseAnzeigen() gibt Teil 1 und Teil 2 aus.
 */
class AdressenSuchenDialog {
	private $name = "";
	private $plz = 0;
	private $ort = "";
	private $sortierung = "";

	public function __construct() {
		// Filterwerte aus dem Formular übernehmen (fehlende Felder = leer).
		// Der Operator ?? liefert den rechten Wert, falls der linke nicht
		// existiert. So bleibt der Filter nach dem Suchen ausgefüllt.
		$this->name = $_POST['name'] ?? "";
		$this->plz = $_POST['plz'] ?? "";
		$this->ort = $_POST['ort'] ?? "";
		$this->sortierung = $_POST['sortierung'] ?? "";
	}

	/**
	 * Startseite: nur den Filter anzeigen, ohne Ergebnisliste.
	 */
	public function filterAnzeigen() {
		$this->filterAnzeigenIntern(true, "");
	}

	/**
	 * Gibt den Seitenanfang und den Filterbereich aus.
	 *
	 * @param bool   $finish  true = Seite hier abschließen (</form></body></html>),
	 *                        false = offen lassen, damit ergebnisseAnzeigen()
	 *                        die Ergebnistabelle im selben Formular anhängen kann
	 * @param string $message (wird hier nicht verwendet)
	 */
	public function filterAnzeigenIntern($finish, $message) {
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Adressen suchen</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Pfade sind relativ zu index.php, da die Seite von dort ausgeliefert wird -->
		<link rel="stylesheet" href="css/style.css">
		<script src="js/funktionen.js" type="text/javascript"></script>
		<script>
			// Bei jedem Neuladen der Seite ist keine Adresse ausgewählt.
			selektiertenNamenZurücksetzen();
		</script>
	</head>
	<body>
		<h1>Adressverwaltung</h1>
		<!-- Ein einziges Formular für Filter UND Ergebnisliste: So werden beim
		     Klick auf "Bearbeiten" oder "Löschen" auch der gewählte
		     Radio-Button (auswahl) und die Filterwerte mitgeschickt. -->
		<form method="post" action="index.php" name="formular">
			<!-- Verstecktes Feld mit der Aktion für den Controller. Standard ist
			     "suchen" (Submit-Button), die anderen Buttons ändern den Wert
			     per JavaScript. -->
			<input type="hidden" id="aktion" name="aktion" value="suchen">
			<fieldset>
				<legend>Filter</legend>
				<table class="layout">
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" value="<?=htmlspecialchars($this->name)?>"></td>
					<td>Postleitzahl</td>
					<td><input type="text" name="plz" value="<?=htmlspecialchars($this->plz)?>"></td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td>Ort</td>
					<td><input type="text" name="ort" value="<?=htmlspecialchars($this->ort)?>"></td>
					<td>Sortierung</td>
					<td>
						<!-- Die zuletzt gewählte Sortierung bleibt ausgewählt -->
						<select name="sortierung">
							<option value="sortName"
<?php
							if ($this->sortierung == 'sortName') {
								echo "selected";
							}
?>
							>Name</option>
							<option value="sortPlz"
<?php
							if ($this->sortierung == 'sortPlz') {
								echo "selected";
							}
?>
							>PLZ</option>
							<option value="sortOrt"
<?php
							if ($this->sortierung == 'sortOrt') {
								echo "selected";
							}
?>
							>Ort</option>
						</select>
					</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td colspan="4">&nbsp;</td>
					<td><input name="suchenButton" type="submit" value="suchen"></td>
				</tr>
			</table>
		</fieldset>
<?php
		if ($finish) {
?>
	</form></body></html>
<?php
		}
	}

	/**
	 * Suchseite mit Filter und Ergebnisliste anzeigen.
	 *
	 * @param string $message Hinweis über der Liste (leer = kein Hinweis)
	 */
	public function ergebnisseAnzeigen($message) {
		// Passende Adressen beim Model (DAO) abfragen.
		$liste = $_SESSION['adressenDAO']->gibAdressenZuFilter(
            $this->name, $this->plz, $this->ort, $this->sortierung);
		// Seitenanfang und Filter ausgeben, Formular dabei offen lassen.
		$this->filterAnzeigenIntern(false, $message);
?>
		<fieldset>
			<legend>Suchergebnisse</legend>
		<!-- Jeder Button setzt per JavaScript eine andere Aktion und schickt
		     dann das Formular ab (siehe js/funktionen.js). -->
		<div class="toolbar">
			<input type="button" class="btn-primary" value="Neueintrag" onclick="behandleButton('formular', 'neueAdresseAnlegen');">
			<input type="button" value="Bearbeiten" onclick="behandleButton('formular', 'adresseBearbeiten');">
			<input type="button" class="btn-danger" value="Löschen" onclick="behandleLoeschenButton('adresseLoeschen');">
		</div>
<?php
		if (!empty($message)) {
			echo '<p class="meldung">' . htmlspecialchars($message) . '</p>';
		}
?>
		<table id="sucherergebnisse">
			<thead>
				<tr><th>&nbsp;</th><th>Name</th><th>PLZ</th><th>Ort</th></tr>
			</thead>
			<tbody>
<?php
		if (empty($liste)) {
			echo '<tr><td colspan="4" class="leer">Keine Adressen gefunden.</td></tr>';
		}
		// Eine Tabellenzeile pro Adresse. Der Radio-Button "auswahl" enthält
		// den Namen der Adresse; er wird beim Bearbeiten/Löschen an den
		// Controller geschickt. Ein Klick auf die Zeile wählt den Button aus.
		foreach ($liste as $adresse) {
?>
			<tr onclick="this.querySelector('input').click();">
				<td><input type="radio" name="auswahl"
					value="<?=htmlspecialchars($adresse->getName())?>"
					onclick="event.stopPropagation(); behandleSelektion(this);">
				</td>
				<td><?=htmlspecialchars($adresse->getName())?></td>
				<td><?=htmlspecialchars($adresse->getPlz())?></td>
				<td><?=htmlspecialchars($adresse->getOrt())?></td>
			</tr>
<?php
		}
?>
			</tbody>
		</table>
		</fieldset>
		</form>
		</body>
		</html>
<?php
	}
}
?>