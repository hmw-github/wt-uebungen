# TODOs – Übung 3: Formularverarbeitung mit POST

## kontakt-verarbeiten.php

1. TODO 1: Mittels `isset()` und einer Leer-Prüfung prüfen, ob die Pflichtfelder `$_POST['name']` und `$_POST['email']` gesetzt UND nicht leer sind (if/else-Struktur selbst schreiben). Nur wenn dies zutrifft, wird der Block aus TODO 2 und TODO 3 ausgeführt.
2. TODO 2: Im if-Zweig alle Formularwerte in Variablen einlesen: `$name`, `$email`, `$nachricht` (direkt aus `$_POST`), `$betreff` und `$rueckmeldung` (mit dem Null-Coalescing-Operator `??` und sinnvollen Standardwerten, z.B. "anfrage" bzw. "email") sowie `$newsletter` (Boolean, per `isset()`, da Checkboxen nur bei Auswahl mitgesendet werden).
3. TODO 3: Im if-Zweig eine Bestätigung ausgeben, die `$name`, `$email`, `$betreff`, `$rueckmeldung`, `$nachricht` sowie den Newsletter-Status zusammenfasst. Jeder benutzergenerierte Wert muss dabei mit `htmlspecialchars(...)` geschützt werden (XSS-Vermeidung).
4. TODO 4: Im else-Zweig eine Fehlermeldung ausgeben, dass Name und E-Mail-Adresse Pflichtfelder sind.

## index.php, kontakt.html, projekte.html, ueber-mich.html, rechtliches/impressum.html
Keine TODOs. `index.php` liegt bereits fertig als PHP-Startseite vor (kein Teil einer eigenen Übung - die PHP-Sprachgrundlagen werden stattdessen eigenständig in `01_php_basics_aufgabe.php` geübt). Die übrigen Seiten wurden gegenüber Kapitel 5 lediglich im Kopfkommentar aktualisiert; das Kontaktformular in `kontakt.html` verweist bereits (unverändert seit Kapitel 3) korrekt auf `action="kontakt-verarbeiten.php"` mit `method="post"`.
