# TODOs – Übung 3: Session-Handling

**Aufgabenstellung:**
Die Kontaktseite bekommt zusätzlich ein kleines Gästebuch: Über ein
Textfeld können Besucher/-innen eine kurze, öffentliche Nachricht
hinterlassen, die mit Uhrzeit/Datum versehen dauerhaft (für die Dauer
der Session) in einer Liste gesammelt wird. In Kapitel 6.5 (Übung 4)
wird dieses Gästebuch in das MVC2-Muster überführt, in Kapitel 8
(AJAX) wird es per Fetch statt per Seitenneuladen aktualisiert.
Ergänzen Sie an den TODO-Stellen den fehlenden PHP-Code:

## kontakt.php
1. TODO 1: PHP-Session mit `session_start()` starten. Dies muss vor jeder Ausgabe geschehen, deshalb steht der dafür vorgesehene PHP-Block bereits ganz am Dateianfang, noch vor `<!DOCTYPE html>`.
2. TODO 2: Mit `isset()` prüfen, ob `$_SESSION['gaestebucheintraege']` bereits existiert. Falls nicht, als leeres Array initialisieren.
3. TODO 3: Falls das Gästebuch-Formular abgeschickt wurde (Textfeld "gbnachricht" gesetzt und nicht leer): einen neuen Eintrag der Form `date("H:i:s d.m.Y") . " - " . <Nachricht>` an `$_SESSION['gaestebucheintraege']` anhängen. `htmlspecialchars()` auf der Nachricht anwenden, um XSS zu vermeiden.
4. TODO 4: Alle bisher gesammelten Einträge aus `$_SESSION['gaestebucheintraege']` in einer Schleife als HTML-Liste (`<li>`) im Abschnitt "Gästebuch" ausgeben.

## kontakt-verarbeiten.php, index.php, projekte.html, ueber-mich.html, rechtliches/impressum.html
Keine TODOs. `kontakt-verarbeiten.php` enthält bereits die fertig gelöste Fassung von Übung 2 (Kopfkommentar-Präfix "LÖSUNGSVORSCHLAG"). Die übrigen Seiten wurden gegenüber Übung 2 nur im Kopfkommentar aktualisiert und verweisen jetzt konsequent auf `kontakt.php` statt `kontakt.html` (Folge der Umstellung der Kontaktseite auf PHP für das Session-Gästebuch).

- (kein TODO-Marker) `projekte.json` liegt nur für den Fall bei, dass Sie per prepare.sh bzw. prepare.cmd Ihre eigene `projekte.html` aus Kapitel 5 weiterverwenden, die die Projekte per `fetch()` daraus lädt (siehe Übung 2).

## Nur bei Wiederverwendung der eigenen Dateien nötig (prepare.sh / prepare.cmd)

1. In allen übernommenen Seiten (`projekte.html`, `ueber-mich.html`) die Links auf die Kontaktseite von `kontakt.html` auf `kontakt.php` ändern. Ihre alte `kontakt.html` wird nicht mehr benötigt.
