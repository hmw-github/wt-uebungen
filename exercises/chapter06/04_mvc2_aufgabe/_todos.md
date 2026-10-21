# TODOs – Übung 4: Model-View-Controller (MVC2)

Das Gästebuch aus Übung 3 wird hier als eigene kleine MVC2-Anwendung im Unterordner `gaestebuch/` neu strukturiert (Model/View/Controller getrennt statt einer einzelnen Datei). Zu bearbeiten sind `gaestebuch/Gaestebuch.php` (Model), `gaestebuch/GaestebuchView.php` (View) und `gaestebuch/Controller.php` (Controller) – in dieser Reihenfolge, da der Controller auf Model und View aufbaut.

## gaestebuch/Gaestebuch.php (Model)
1. TODO 1: Sobald ein `Gaestebuch`-Objekt erzeugt wurde, steht in `$_SESSION['gaestebucheintraege']` eine Liste der Einträge bereit: beim allerersten Mal leer (ohne PHP-Warnung), danach mit allen bisherigen Einträgen.
2. TODO 2: Nach einem Aufruf von `hinzufuegen($text)` steht am Ende des Gästebuchs ein neuer Eintrag der Form `14:05:09 21.10.2026 - <text>`. HTML in `$text` wird bei der späteren Anzeige wörtlich dargestellt und nie ausgeführt (XSS-Schutz).
3. TODO 3: `alleEintraege()` liefert die Liste aller bisherigen Einträge (in der Reihenfolge ihres Eintragens).

## gaestebuch/GaestebuchView.php (View)
1. TODO 1: Eine View wird mit dem Model erzeugt, das sie darstellen soll (`new GaestebuchView($gaestebuch)`), und merkt es sich in der vorhandenen Eigenschaft `$gaestebuch`.
2. TODO 2: `render()` gibt eine vollständige HTML-Seite aus, die genauso aussieht wie die übrigen Portfolio-Seiten (Stylesheet, `<header>` mit Logo, Burger-Button und Navigation, `<footer>`; Vorlage z.B. `../kontakt.php`). Alle Links, Bilder und Stylesheets funktionieren auch aus dem Unterordner `gaestebuch/` heraus. Der Inhalt besteht aus:
    - der Überschrift "Gästebuch",
    - einem Formular mit Textfeld "gbnachricht" und Button "Eintragen", das per POST an diese Seite zurücksendet,
    - darunter allen Einträgen des Models als Aufzählungsliste,
    - einem Link zurück zur Kontaktseite.

## gaestebuch/Controller.php (Controller)
1. TODO 1: `verarbeiteAnfrage()` beantwortet einen Aufruf des Gästebuchs. Wurde eine nicht leere Nachricht (Feld "gbnachricht") abgeschickt, landet sie im Gästebuch. In jedem Fall erscheint danach die Gästebuch-Seite mit allen Einträgen. Der Controller erzeugt selbst kein HTML und greift nicht direkt auf die Session zu: Das übernehmen Model und View.

## gaestebuch/index.php
Keine TODOs. Diese Datei ist laut Aufgabenstellung bereits vollständig fertig verdrahtet (Einstiegspunkt): sie registriert per `spl_autoload_register()` das Autoloading der Klassen, startet die Session mit `session_start()` und ruft `(new Controller())->verarbeiteAnfrage()` auf.

## kontakt.php, index.php, projekte.html, ueber-mich.html, rechtliches/impressum.html
Keine TODOs.
- (kein TODO-Marker) kontakt.php: Das bisher direkt eingebettete Session-Gästebuch-Formular samt Einträge-Liste (Übung 3) wurde entfernt und durch einen einfachen Link `<a href="gaestebuch/index.php" class="btn">Zum Gästebuch</a>` ersetzt, da das Gästebuch nun als eigenständige MVC2-Anwendung im Unterordner `gaestebuch/` läuft.

Die übrigen Seiten (`index.php`, `projekte.html`, `ueber-mich.html`, `rechtliches/impressum.html`) sind gegenüber Übung 3 inhaltlich unverändert (bzw. nur Kopfkommentar aktualisiert).

- (kein TODO-Marker) `projekte.json` liegt nur für den Fall bei, dass Sie Ihre eigene `projekte.html` aus Kapitel 5 weiterverwenden, die die Projekte per `fetch()` daraus lädt (siehe Übung 2).
