# TODOs – Übung 2: Formularverarbeitung mit POST

## kontakt-verarbeiten.php

1. TODO 1: Mittels `isset()` und einer Leer-Prüfung prüfen, ob die Pflichtfelder `$_POST['name']` und `$_POST['email']` gesetzt UND nicht leer sind (if/else-Struktur selbst schreiben). Nur wenn dies zutrifft, wird der Block aus TODO 2 und TODO 3 ausgeführt.
2. TODO 2: Im if-Zweig alle Formularwerte in Variablen einlesen: `$name`, `$email`, `$nachricht` (direkt aus `$_POST`), `$betreff` und `$rueckmeldung` (mit dem Null-Coalescing-Operator `??` und sinnvollen Standardwerten, z.B. "anfrage" bzw. "email") sowie `$newsletter` (Boolean, per `isset()`, da Checkboxen nur bei Auswahl mitgesendet werden).
3. TODO 3: Im if-Zweig eine Bestätigung ausgeben, die `$name`, `$email`, `$betreff`, `$rueckmeldung`, `$nachricht` sowie den Newsletter-Status zusammenfasst. Jeder benutzergenerierte Wert muss dabei mit `htmlspecialchars(...)` geschützt werden (XSS-Vermeidung).
4. TODO 4: Im else-Zweig eine Fehlermeldung ausgeben, dass Name und E-Mail-Adresse Pflichtfelder sind.

## index.php, kontakt.html, projekte.html, ueber-mich.html, rechtliches/impressum.html
Keine TODOs. `index.php` liegt bereits fertig als PHP-Startseite vor (kein Teil einer eigenen Übung - die PHP-Sprachgrundlagen werden stattdessen eigenständig in `01_php_basics_aufgabe.php` geübt). Alle Links auf die Startseite zeigen auf `index.php`, und das Kontaktformular in `kontakt.html` sendet wieder klassisch per `action="kontakt-verarbeiten.php"` und `method="post"` an den Server (statt wie in Kapitel 5 per JavaScript in den localStorage).

## Nur bei Wiederverwendung der eigenen Dateien nötig
Falls Sie statt der vorgegebenen Seiten mit Ihren eigenen Seiten aus Kapitel 5 (`chapter05/02_einbinden_und_dom_aufgabe`) weiterarbeiten: Diese passen noch nicht zur PHP-Fassung der Website. Passen Sie sie daher wie folgt an (Vorlage: die vorgegebenen Dateien in diesem Ordner bzw. die Musterlösung):

1. `kontakt.html`: Im `<form>`-Tag das Attribut `id="kontaktFormular"` entfernen und `action` auf `"kontakt-verarbeiten.php"` setzen (`method="post"` bleibt). Ohne die id greift der Submit-Handler aus Kapitel 5 in `js/main.js` nicht mehr, und das Formular wird wieder an den Server gesendet.
2. Alle Seiten (`kontakt.html`, `projekte.html`, `ueber-mich.html`, `rechtliches/impressum.html`): Links auf die Startseite von `index.html` auf `index.php` ändern (im Impressum `../index.php`). Ihre alte `index.html` wird nicht mehr benötigt.
3. `projekte.html`: Keine Änderung nötig. Ihre Fassung aus Kapitel 5 lädt die Projekte per `fetch()` aus `projekte.json`, die deshalb auch in diesem Ordner vorliegt.
