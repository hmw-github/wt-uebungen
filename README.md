# WT-Übungen: Web-Technologien

Übungsaufgaben und Musterlösungen zur Vorlesung Web-Technologien (Kapitel
3–9: HTML, CSS, JavaScript, PHP, Bootstrap, AJAX, REST). Die Foliensätze
liegen in `script/`.

## Durchgängiges Projekt: die Portfolio-Website von Alex Berger

Statt voneinander unabhängiger Einzelübungen bauen die Übungen ab Kapitel
3 Schritt für Schritt an ein- und derselben kleinen Portfolio-Website für
die fiktive Person **Alex Berger** (Studium Angewandte Informatik). Die
Website hat vier Seiten - Startseite, Über mich, Projekte, Kontakt - mit
gemeinsamem Navigationsmenü, und wächst über den gesamten Kurs hinweg:

| Kapitel | Was mit der Website passiert |
|---|---|
| 3 – HTML | Grundgerüst aller vier Seiten, Navigationsmenü, Bilder, Projekttabelle, Kontaktformular |
| 4 – CSS | Eigenes Stylesheet: Farben, Boxmodell, Layout mit Float, Media Query für Mobilgeräte |
| 5 – JavaScript | Externes Skript, Sprachgrundlagen anhand der Projektdaten, DOM-generierte Projekttabelle |
| 6 – PHP | Startseite wird `index.php`, Kontaktformular wird ausgewertet, Gästebuch mit Session-Handling im MVC2-Muster |
| 7 – Bootstrap | Komplettes Reskinning: Grid, Bootstrap-Tabellen/-Buttons, Projekt-Karten, Tabs, Formulare, Bearbeiten-Modal |
| 8 – AJAX | Das Gästebuch lädt und speichert Einträge per `fetch()` statt per Seitenneuladen |
| 9 – REST | Eigene REST-Schnittstelle für die Ressource "Projekt"; die Projekte-Seite lädt, legt an, bearbeitet und löscht Projekte ausschließlich über diese Schnittstelle |

Am Ende von Kapitel 9 ist aus der anfangs statischen HTML-Seite aus
Kapitel 3 eine vollständige Webanwendung mit eigenem REST-Backend
geworden.

Jedes Kapitel enthält dafür in `exercises/chapterNN/` und
`solutions/chapterNN/` jeweils den **kompletten aktuellen Stand der
Website** pro Übung (bereits in früheren Übungen gelöste Teile sind
enthalten und nicht Teil der TODOs) - siehe die jeweilige `README.md` im
Kapitelordner für Details zu den einzelnen Übungen, TODO-Konventionen und
zur Ausführung mit Docker.

Einige Übungen (v.a. in den Kapiteln 5, 6 und 8) sind bewusst
eigenständige, einzelne Dateien geblieben, die grundlegende
Sprachkonzepte anhand derselben Themen/Daten einüben, ohne dass dafür die
Website-Dateien selbst verändert werden müssen - auch das ist jeweils in
der Kapitel-README vermerkt.

## Konventionen

- Jede Übung besteht aus einem Aufgabenordner (`..._aufgabe/`) bzw.
  einer Aufgabendatei (`..._aufgabe.<ext>`) mit `TODO n:`-Kommentaren an den zu ergänzenden
  Stellen und einer vollständigen Musterlösung (`..._loesung/` bzw.
  `..._loesung.<ext>`) im entsprechenden `solutions/`-Ordner.
- Code-Dateien (HTML/CSS/JS/PHP) verwenden aus Encoding-Gründen
  durchgehend transliterierte Umlaute (ae/oe/ue/ss statt ä/ö/ü/ß).
  Nur HTML- und Markdown-Dateien (READMEs) nutzen echte Umlaute.
- Kapitel mit PHP-Anteil (6, 8, 9) bringen eine eigene `docker-compose.yml`
  mit (nginx + PHP-FPM), da diese Übungen einen PHP-fähigen Webserver
  benötigen. Kapitel 3, 4, 5 und 7 sind rein statisch und lassen sich
  direkt im Browser öffnen.
