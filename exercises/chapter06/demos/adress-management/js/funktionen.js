/*
 * funktionen.js – Hilfsfunktionen im Browser
 *
 * Alle Buttons der Anwendung (außer "suchen") sind normale Buttons, keine
 * Submit-Buttons. Beim Klick wird eine dieser Funktionen aufgerufen: Sie trägt
 * die gewünschte Aktion in das versteckte Feld "aktion" ein und schickt dann
 * das Formular an index.php. Der Controller liest dieses Feld aus und weiß
 * so, was zu tun ist.
 */

// Setzt die Aktion und schickt das Formular ab.
// formular: name-Attribut des Formulars, aktion: Name der Controller-Aktion
function behandleButton(formular, aktion) {
	document.getElementById("aktion").value = aktion;
	document.forms[formular].submit();
}

// Wie behandleButton(), aber mit Prüfung und Sicherheitsabfrage:
// Nur wenn eine Adresse gewählt UND das Löschen bestätigt wurde,
// wird das Formular abgeschickt.
function behandleLoeschenButton(aktion) {
	if (!adresseSelektiert()) {
		alert('Bitte wählen Sie eine Adresse aus!');
	} else {
		var ok = confirm("Wirklich löschen?");

		if (ok) {
			document.getElementById("aktion").value = aktion;
			document.forms['formular'].submit();
		}
	}
}

// Liefert true, falls eine Adresse selektiert wurde
function adresseSelektiert() {
	var ergebnis = false; // nichts selektiert
	var name = localStorage.selekierterName;

	ergebnis = (name !== undefined);

	return ergebnis;
}

// speichert den gewählten Namen im localstorage,
// Parameter ist das selektierte RadioButton-Element
function behandleSelektion(radio) {
	localStorage.selekierterName = radio.value;
}

// löscht den selektierten Namen aus dem Local Storage
function selektiertenNamenZurücksetzen() {
	localStorage.removeItem('selekierterName');
}
