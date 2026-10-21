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
1. TODO 1: Die Seite kann sich Daten eines Besuchers über mehrere Seitenaufrufe hinweg merken (Session). Der dafür vorgesehene PHP-Block steht bereits ganz am Dateianfang, noch vor `<!DOCTYPE html>`.
2. TODO 2: In `$_SESSION['gaestebucheintraege']` steht immer eine Liste der Gästebuch-Einträge bereit. Beim allerersten Aufruf ist sie leer (ohne PHP-Warnung). Bei jedem weiteren Aufruf bleiben die bisherigen Einträge erhalten.
3. TODO 3: Wird das Gästebuch-Formular (Textfeld "gbnachricht") mit einer nicht leeren Nachricht abgeschickt, kommt ein neuer Eintrag ans Ende des Gästebuchs, z.B. `14:05:09 21.10.2026 - Schöne Seite!`. Bei leerer Nachricht oder normalem Seitenaufruf passiert nichts. HTML in der Nachricht wird später wörtlich angezeigt und nie ausgeführt (XSS-Schutz).
4. TODO 4: Im Abschnitt "Gästebuch" erscheinen alle bisher gesammelten Einträge als Aufzählungsliste, in der Reihenfolge ihres Eintragens. Auch nach dem Neuladen der Seite oder einem Wechsel auf andere Seiten und zurück sind sie noch da.

## kontakt-verarbeiten.php, index.php, projekte.html, ueber-mich.html, rechtliches/impressum.html
Keine TODOs. `kontakt-verarbeiten.php` enthält bereits die fertig gelöste Fassung von Übung 2 (Kopfkommentar-Präfix "LÖSUNGSVORSCHLAG"). Die übrigen Seiten wurden gegenüber Übung 2 nur im Kopfkommentar aktualisiert und verweisen jetzt konsequent auf `kontakt.php` statt `kontakt.html` (Folge der Umstellung der Kontaktseite auf PHP für das Session-Gästebuch).

- (kein TODO-Marker) `projekte.json` liegt nur für den Fall bei, dass Sie Ihre eigene `projekte.html` aus Kapitel 5 weiterverwenden, die die Projekte per `fetch()` daraus lädt (siehe Übung 2).
