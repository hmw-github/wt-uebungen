# TODOs – Übung 2: Formularverarbeitung mit POST

## kontakt-verarbeiten.php

1. TODO 1: Die Bestätigung aus TODO 2 und TODO 3 erscheint nur, wenn Name UND E-Mail-Adresse übermittelt wurden und nicht leer sind. In allen anderen Fällen erscheint die Fehlermeldung aus TODO 4, auch beim direkten Aufruf der Seite ohne Formular. Es entstehen dabei keine PHP-Warnungen.
2. TODO 2: Alle Formularwerte stehen in Variablen bereit: `$name`, `$email`, `$nachricht`, `$betreff`, `$rueckmeldung` und `$newsletter`. Fehlen Betreff oder Rückmeldungsart in der Anfrage, haben die Variablen sinnvolle Standardwerte (z.B. "anfrage" bzw. "email") statt eine Warnung auszulösen. `$newsletter` ist ein Wahrheitswert: `true` genau dann, wenn die Checkbox angekreuzt wurde.
3. TODO 3: Eine Bestätigung fasst Name, E-Mail, Betreff, Rückmeldungsart, Nachricht und Newsletter-Status ("ja"/"nein") zusammen. Benutzereingaben erscheinen dabei immer wörtlich und werden nie als HTML interpretiert: Gibt man z.B. `<b>Test</b>` oder `<script>alert(1)</script>` als Namen ein, steht genau dieser Text auf der Seite (Schutz vor Cross-Site-Scripting, XSS).
4. TODO 4: Fehlen Name oder E-Mail-Adresse (oder sind leer), erscheint eine Fehlermeldung, dass beide Pflichtfelder sind.

## index.php, kontakt.html, projekte.html, ueber-mich.html, rechtliches/impressum.html
Keine TODOs. `index.php` liegt bereits fertig als PHP-Startseite vor (kein Teil einer eigenen Übung - die PHP-Sprachgrundlagen werden stattdessen eigenständig in `01_php_basics_aufgabe.php` geübt). Alle Links auf die Startseite zeigen auf `index.php`, und das Kontaktformular in `kontakt.html` sendet wieder klassisch per `action="kontakt-verarbeiten.php"` und `method="post"` an den Server (statt wie in Kapitel 5 per JavaScript in den localStorage).

