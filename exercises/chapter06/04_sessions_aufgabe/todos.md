# TODOs – Übung 6: Session-Handling

## kontakt.php
1. TODO 1: PHP-Session mit `session_start()` starten. Dies muss vor jeder Ausgabe geschehen, deshalb steht der dafür vorgesehene PHP-Block bereits ganz am Dateianfang, noch vor `<!DOCTYPE html>`.
2. TODO 2: Mit `isset()` prüfen, ob `$_SESSION['gaestebucheintraege']` bereits existiert. Falls nicht, als leeres Array initialisieren.
3. TODO 3: Falls das Gästebuch-Formular abgeschickt wurde (Textfeld "gbnachricht" gesetzt und nicht leer): einen neuen Eintrag der Form `date("H:i:s d.m.Y") . " - " . <Nachricht>` an `$_SESSION['gaestebucheintraege']` anhängen. `htmlspecialchars()` auf der Nachricht anwenden, um XSS zu vermeiden.
4. TODO 4: Alle bisher gesammelten Einträge aus `$_SESSION['gaestebucheintraege']` in einer Schleife als HTML-Liste (`<li>`) im Abschnitt "Gästebuch" ausgeben.

## kontakt-verarbeiten.php, index.php, projekte.html, ueber-mich.html, rechtliches/impressum.html
Keine TODOs. `kontakt-verarbeiten.php` enthält bereits die fertig gelöste Fassung von Übung 5 (Kopfkommentar-Präfix "LÖSUNGSVORSCHLAG"). Die übrigen Seiten wurden gegenüber Übung 5 nur im Kopfkommentar aktualisiert und verweisen jetzt konsequent auf `kontakt.php` statt `kontakt.html` (Folge der Umstellung der Kontaktseite auf PHP für das Session-Gästebuch).
