# TODOs – Übung 7: Model-View-Controller (MVC2)

Das Gästebuch aus Übung 6 wird hier als eigene kleine MVC2-Anwendung im Unterordner `gaestebuch/` neu strukturiert (Model/View/Controller getrennt statt einer einzelnen Datei). Zu bearbeiten sind `gaestebuch/Gaestebuch.php` (Model), `gaestebuch/GaestebuchView.php` (View) und `gaestebuch/Controller.php` (Controller) – in dieser Reihenfolge, da der Controller auf Model und View aufbaut.

## gaestebuch/Gaestebuch.php (Model)
1. TODO 1: Konstruktor `__construct()` implementieren. Er soll `$_SESSION['gaestebucheintraege']` als leeres Array initialisieren, falls es noch nicht existiert (`isset()` verwenden).
2. TODO 2: Methode `hinzufuegen($text)` implementieren. Sie soll einen neuen Eintrag der Form `date("H:i:s d.m.Y") . " - " . $text` (mit `$text` bereits per `htmlspecialchars()` abgesichert) an `$_SESSION['gaestebucheintraege']` anhängen.
3. TODO 3: Methode `alleEintraege()` implementieren, die das Array `$_SESSION['gaestebucheintraege']` zurückgibt.

## gaestebuch/GaestebuchView.php (View)
1. TODO 1: Konstruktor `__construct($gaestebuch)` implementieren, der das übergebene Model-Objekt in der Eigenschaft `$this->gaestebuch` speichert.
2. TODO 2: Methode `render()` implementieren. Sie soll ein komplettes HTML-Dokument ausgeben: eine Überschrift, ein Formular (`method="post"`, Textfeld "gbnachricht", Submit-Button "Eintragen"), einen Link zurück zu `../kontakt.php` sowie darunter eine HTML-Liste aller Einträge, abgerufen über `$this->gaestebuch->alleEintraege()`.

## gaestebuch/Controller.php (Controller)
1. TODO 1: Methode `verarbeiteAnfrage()` implementieren. Sie soll: ein Gästebuch-Objekt (Model) erzeugen; falls `$_POST['gbnachricht']` gesetzt und nicht leer ist, die Nachricht über `hinzufuegen()` des Models hinzufügen; anschließend ein `GaestebuchView`-Objekt (View) erzeugen, dem das Model übergeben wird; und dessen `render()`-Methode aufrufen.

## gaestebuch/index.php
Keine TODOs. Diese Datei ist laut Aufgabenstellung bereits vollständig fertig verdrahtet (Einstiegspunkt): sie registriert per `spl_autoload_register()` das Autoloading der Klassen, startet die Session mit `session_start()` und ruft `(new Controller())->verarbeiteAnfrage()` auf.

## kontakt.php, index.php, projekte.html, ueber-mich.html, rechtliches/impressum.html
Keine TODOs.
- (kein TODO-Marker) kontakt.php: Das bisher direkt eingebettete Session-Gästebuch-Formular samt Einträge-Liste (Übung 6) wurde entfernt und durch einen einfachen Link `<a href="gaestebuch/index.php" class="btn">Zum Gästebuch</a>` ersetzt, da das Gästebuch nun als eigenständige MVC2-Anwendung im Unterordner `gaestebuch/` läuft.

Die übrigen Seiten (`index.php`, `projekte.html`, `ueber-mich.html`, `rechtliches/impressum.html`) sind gegenüber Übung 6 inhaltlich unverändert (bzw. nur Kopfkommentar aktualisiert).
