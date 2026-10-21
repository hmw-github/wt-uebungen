# PHP Cheat-Sheet

Alle PHP-Sprachmittel und -Funktionen, die in den Übungen und
Musterlösungen (Kapitel 3, 6, 8 und 9) vorkommen – mit Beispielen aus dem
Portfolio-Projekt. **Kap.** = Kapitel der ersten Verwendung.

- [PHP in HTML einbetten](#php-in-html-einbetten)
- [Variablen, Datentypen & Strings](#variablen-datentypen--strings)
- [Arrays](#arrays)
- [Kontrollstrukturen](#kontrollstrukturen)
- [Funktionen](#funktionen)
- [Klassen & Objekte](#klassen--objekte)
- [Formulare: GET & POST](#formulare-get--post)
- [Sessions](#sessions)
- [MVC2: Model, View, Controller](#mvc2-model-view-controller)
- [JSON-Schnittstelle für AJAX](#json-schnittstelle-für-ajax)
- [REST-Schnittstelle](#rest-schnittstelle)
- [Funktionsübersicht](#funktionsübersicht)

---

## PHP in HTML einbetten

```php
<!DOCTYPE html>
<html>
<body>
    <?php
        $name = "Alex Berger";
    ?>
    <p>
        <?php echo "Hallo, ich heiße " . $name . "."; ?>
    </p>
</body>
</html>
```

- PHP läuft **auf dem Server**. Der Browser bekommt nur die Ausgabe
  (meist HTML), nie den PHP-Code.
- Dateien mit PHP-Code müssen auf `.php` enden (darum wird in Kap. 6 aus
  `index.html` die Datei `index.php`).
- Ausführung im Projekt über Docker (nginx + PHP-FPM), siehe
  `docker-compose.yml` im Kapitelordner, oder auf der Kommandozeile mit
  `php datei.php`.
- Reine PHP-Dateien (z.B. `api.php`, Klassen) beginnen mit `<?php` und
  lassen das schließende `?>` weg.

---

## Variablen, Datentypen & Strings

```php
$name = "Alex Berger";              // string
$jahr = 2026;                       // integer
$eingeschrieben = true;             // boolean
$technologien = ["HTML", "CSS"];    // array

echo gettype($name);                // "string"
echo "Hallo, " . $name . "!";       // . verkettet Strings
echo "Stand: " . date("H:i:s d.m.Y");
echo "<li>\$name ist vom Typ …</li>";   // \$ gibt ein $ aus
```

| Konstrukt | Kap. | Bedeutung |
|---|---|---|
| `$variable` | 6 | Variablen beginnen mit `$`, kein Schlüsselwort nötig |
| `.` | 6 | String-Verkettung (nicht `+`!) |
| `"…"` / `'…'` | 6 | in `"…"` werden Variablen ersetzt, in `'…'` nicht |
| `gettype($x)` | 6 | Typ als String: `string`, `integer`, `double`, `boolean`, `array`, `object`, `NULL` |
| `(int) $x` | 9 | Typumwandlung: `(int) $eingabe['jahr']` |
| `===` / `!==` | 3 | strikter Vergleich (Wert **und** Typ) |
| `==` | 6 | Vergleich mit Typumwandlung (`$_POST['pwd'] == 123`) |
| `??` | 6 | Null-Koaleszenz: Standardwert, falls nicht gesetzt |
| `? :` | 6 | ternärer Operator: `$newsletter ? "ja" : "nein"` |
| `+=`, `++` | 6 | `$summe += $jahr`, `$i++` |

```php
$betreff = $_POST['betreff'] ?? 'anfrage';
// gleichbedeutend mit:
$betreff = isset($_POST['betreff']) ? $_POST['betreff'] : 'anfrage';
```

---

## Arrays

```php
// Indiziertes Array (Schlüssel 0, 1, 2 …)
$jahre = [2022, 2023, 2024, 2025, 2026];

// Assoziatives Array (eigene Schlüssel)
$technologien = [
    "HTML" => 4,
    "CSS" => 4,
    "JavaScript" => 3,
    "PHP" => 2
];

// Array von assoziativen Arrays (Kap. 9: Projektdaten)
$projekte = [
    ['id' => 1, 'titel' => 'Wetter-App', 'jahr' => 2024],
    ['id' => 2, 'titel' => 'Rezeptsammlung', 'jahr' => 2025],
];

$treffer[] = $technologie;          // hinten anhängen
echo $projekte[0]['titel'];         // "Wetter-App"
```

| Funktion | Kap. | Wirkung | Beispiel |
|---|---|---|---|
| `count($a)` | 3 | Anzahl Elemente | `count($treffer) > 0` |
| `implode(sep, $a)` | 3 | Array → String | `implode(",", $treffer)` |
| `is_array($x)` | 3 | ist es ein Array? | Checkbox-Gruppen in `$_POST` |
| `array_splice($a, i, n)` | 9 | `n` Elemente ab `i` entfernen | Projekt löschen |
| `isset($a['k'])` | 6 | Schlüssel vorhanden und nicht `null`? | `isset($_POST['newsletter'])` |

---

## Kontrollstrukturen

```php
if ($zahl > 0) {
    $ergebnis = "positiv";
} elseif ($zahl < 0) {              // ein Wort: elseif
    $ergebnis = "negativ";
} else {
    $ergebnis = "null";
}

foreach ($jahre as $jahr) { … }                        // nur Werte
foreach ($technologien as $technologie => $jahre) { … } // Schlüssel => Wert
foreach ($_SESSION['projekte'] as $index => $projekt) { … }

for ($i = 1; $i <= 10; $i++) {
    echo "<li>7 * " . $i . " = " . (7 * $i) . "</li>";
}

switch ($note) {
    case 1:
        echo "sehr gut";
        break;
    case 2:
        echo "gut";
        break;
    default:
        echo "unbekannte Note";
}
```

- `break` beendet eine Schleife, `continue` springt zum nächsten Durchlauf
  (Kap. 9, `routen.php`).
- `match` (Kap. 6, Fragen) ist ein Ausdruck mit striktem Vergleich und
  braucht kein `break`.

---

## Funktionen

```php
function gibProjekt($id) {
    …
}

// Referenzparameter: & ändert die Variable des Aufrufers
function pruefeVorzeichen($zahl, &$ergebnis)
{
    if ($zahl > 0) {
        $ergebnis = "positiv";
    } …
}

$ergebnis = "";
pruefeVorzeichen(-8, $ergebnis);
echo $ergebnis;                     // "negativ"

// Anonyme Funktion als Parameter (Autoloader)
spl_autoload_register(function ($class) {
    require_once $class . '.php';
});
```

---

## Klassen & Objekte

```php
class Projekt
{
    private $titel;
    private $technologie;

    public function __construct($titel, $technologie)
    {
        $this->titel = $titel;           // -> greift auf Eigenschaften zu
        $this->technologie = $technologie;
    }

    public function __toString()         // bei echo $projekt
    {
        return "'" . $this->titel . "' - " . $this->technologie;
    }
}

class Webprojekt extends Projekt
{
    private $jahr;

    public function __construct($titel, $technologie, $jahr)
    {
        parent::__construct($titel, $technologie);
        $this->jahr = $jahr;
    }

    public function __toString()
    {
        return parent::__toString() . " (" . $this->jahr . ")";
    }
}

$webprojekt = new Webprojekt("Portfolio-Website", "HTML, CSS, …", 2026);
echo $webprojekt;
$controller->verarbeiteAnfrage();        // Methode aufrufen
```

| Konstrukt | Bedeutung |
|---|---|
| `private` / `public` | Sichtbarkeit von Eigenschaften und Methoden |
| `$this->x` | Eigenschaft/Methode des aktuellen Objekts (ohne `$` vor `x`) |
| `parent::methode()` | Methode der Basisklasse aufrufen |
| `new Klasse(…)` | Objekt erzeugen |
| `spl_autoload_register` | lädt `Klasse.php` automatisch beim ersten Gebrauch |
| `require_once` | bindet eine Datei genau einmal ein |

---

## Formulare: GET & POST

| Superglobal | Kap. | Inhalt |
|---|---|---|
| `$_POST` | 3 | Formularfelder bei `method="post"` (im HTTP-Body) |
| `$_GET` | 6 | Parameter aus der URL: `hinweis.php?praefix=Ja` |
| `$_REQUEST` | 9 | `$_GET` + `$_POST` zusammen |
| `$_SERVER['REQUEST_METHOD']` | 3 | `"GET"`, `"POST"`, `"PUT"`, `"DELETE"` … |
| `$_SESSION` | 6 | Session-Daten (siehe unten) |

```html
<form action="kontakt-verarbeiten.php" method="post">
    <input type="text" id="nameFeld" name="name" required>
    <input type="checkbox" id="newsletterFeld" name="newsletter" value="ja">
    …
</form>
```

```php
if (isset($_POST['name']) && isset($_POST['email'])
        && $_POST['name'] !== '' && $_POST['email'] !== '') {
    $name = $_POST['name'];
    $betreff = $_POST['betreff'] ?? 'anfrage';
    $newsletter = isset($_POST['newsletter']);   // Checkbox: nur gesetzt, wenn angehakt

    echo "<p>Vielen Dank, " . htmlspecialchars($name) . "!</p>";
} else {
    echo "<p>Name und E-Mail-Adresse sind Pflichtfelder.</p>";
}
```

- Der Schlüssel in `$_POST` ist das **`name`-Attribut** des Feldes, nicht die `id`.
- Benutzereingaben vor der Ausgabe immer mit `htmlspecialchars()`
  maskieren (Schutz vor XSS). `nl2br()` macht Zeilenumbrüche zu `<br>`.
- GET: Daten sichtbar in der URL (Lesezeichen, Suche). POST: Daten im
  Body (Formulare, Passwörter, Änderungen).
- Zum Debuggen: `var_dump($_POST);`

---

## Sessions

```php
<?php
    session_start();                 // GANZ oben, vor jeder Ausgabe!

    if (!isset($_SESSION['gaestebucheintraege'])) {
        $_SESSION['gaestebucheintraege'] = [];
    }

    if (isset($_POST['gbnachricht']) && $_POST['gbnachricht'] !== '') {
        $_SESSION['gaestebucheintraege'][] =
            date("H:i:s d.m.Y") . " - " . htmlspecialchars($_POST['gbnachricht']);
    }
?>
<!DOCTYPE html>
…
<form action="" method="post">       <!-- action="" = an dieselbe Seite -->
    <input type="text" name="gbnachricht">
    <input type="submit" value="Eintragen">
</form>
<ul>
    <?php
        foreach ($_SESSION['gaestebucheintraege'] as $eintrag) {
            echo "<li>" . $eintrag . "</li>";
        }
    ?>
</ul>
```

- `session_start()` sendet ein Cookie (`PHPSESSID`) und muss deshalb vor
  dem ersten HTML-Zeichen stehen – sonst „headers already sent“.
- Session-Daten liegen auf dem Server; der Browser kennt nur die Session-ID.
- Auch die REST-API in Kap. 9 speichert die Projekte in `$_SESSION`.

---

## MVC2: Model, View, Controller

Kap. 6, Ordner `gaestebuch/`: eine Klasse pro Datei.

| Datei | Rolle | Aufgabe |
|---|---|---|
| `index.php` | Einstieg (Front Controller) | Autoloader, `session_start()`, Controller aufrufen |
| `Controller.php` | Controller | Anfrage auswerten, Model ändern, View wählen |
| `Gaestebuch.php` | Model | Daten in `$_SESSION` verwalten |
| `GaestebuchView.php` | View | HTML ausgeben |

```php
// index.php
spl_autoload_register(function ($class) {
    require_once $class . '.php';
});
session_start();
$controller = new Controller();
$controller->verarbeiteAnfrage();

// Controller.php
class Controller
{
    public function verarbeiteAnfrage()
    {
        $gaestebuch = new Gaestebuch();
        if (isset($_POST['gbnachricht']) && $_POST['gbnachricht'] !== '') {
            $gaestebuch->hinzufuegen($_POST['gbnachricht']);
        }
        $view = new GaestebuchView($gaestebuch);
        $view->render();
    }
}

// Gaestebuch.php (Model)
class Gaestebuch
{
    public function hinzufuegen($text)
    {
        $_SESSION['gaestebucheintraege'][] = date("H:i:s d.m.Y") . " - " . htmlspecialchars($text);
    }

    public function alleEintraege()
    {
        return $_SESSION['gaestebucheintraege'];
    }
}

// GaestebuchView.php: PHP verlassen, HTML direkt ausgeben
public function render()
{
    ?>
    <!DOCTYPE html>
    <html> … </html>
    <?php
}
```

---

## JSON-Schnittstelle für AJAX

Kap. 8: PHP liest JSON aus dem Request-Body und antwortet mit JSON.

```php
// echo.php / gaestebuch/api.php
$daten = json_decode(file_get_contents("php://input"), true);   // true = assoz. Array
$action = $daten['action'] ?? '';

if ($action === 'save') {
    $gaestebuch->hinzufuegen($daten['message'] ?? '');
}

header("Content-Type: application/json");
echo json_encode(["entries" => $gaestebuch->alleEintraege()]);
```

```php
// hinweis.php: einfacher Text als Antwort auf GET
$praefix = $_GET['praefix'] ?? '';
foreach ($technologien as $technologie) {
    if (strpos(strtolower($technologie), strtolower($praefix)) === 0) {
        $treffer[] = $technologie;
    }
}
echo count($treffer) > 0 ? implode(",", $treffer) : "kein Treffer!";
```

- `$_POST` ist bei JSON-Requests **leer** – der Body muss über
  `php://input` gelesen werden.
- `header(…)` muss vor jeder Ausgabe (`echo`) stehen.

---

## REST-Schnittstelle

Kap. 9, `api/service.php`: eine Ressource „Projekt“, gesteuert über
HTTP-Methode und Pfad.

| Methode | Pfad | Aktion | Status |
|---|---|---|---|
| `GET` | `/projekte` | alle Projekte | 200 |
| `GET` | `/projekt/{id}` | ein Projekt | 200 / 404 |
| `POST` | `/projekt` | anlegen | 200 |
| `PUT` | `/projekt/{id}` | ändern | 200 / 404 |
| `DELETE` | `/projekt/{id}` | löschen | 200 / 404 |

```php
session_start();
header('Content-Type: application/json');

// CORS: Zugriff von anderen Origins erlauben
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {   // Preflight-Anfrage
    http_response_code(200);
    exit;
}

$methode = $_SERVER['REQUEST_METHOD'];
$pfad = '/' . ltrim($_REQUEST['_url'] ?? '/', '/');   // von nginx übergeben

if ($methode === 'GET' && $pfad === '/projekte') {
    gibAlleProjekte();
} elseif ($methode === 'PUT' && preg_match('#^/projekt/([0-9]+)$#', $pfad, $treffer)) {
    projektAktualisieren((int) $treffer[1]);       // $treffer[1] = erste Klammergruppe
} elseif …
} else {
    http_response_code(404);
}

function gibAlleProjekte() {
    http_response_code(200);
    echo json_encode($_SESSION['projekte']);
}
```

- `preg_match(muster, text, $treffer)` prüft einen regulären Ausdruck;
  `#` begrenzt das Muster, `^…$` = ganzer String, `([0-9]+)` = Zahl merken.
- Testen ohne Browser: `api/tests.http` (Erweiterung „REST Client“ in
  VS Code), z.B. `GET http://localhost:8019/02_rest_api_loesung/api/projekte`.

---

## Funktionsübersicht

| Funktion | Kap. | Wirkung |
|---|---|---|
| `echo` | 3 | Ausgabe (Sprachkonstrukt, keine Klammern nötig) |
| `var_dump($x)` | 6 | Typ und Inhalt ausgeben (Debugging) |
| `gettype($x)` | 6 | Datentyp als String |
| `date("H:i:s d.m.Y")` | 6 | aktuelles Datum/Uhrzeit formatiert |
| `isset($x)` | 6 | Variable/Schlüssel gesetzt und nicht `null`? |
| `count($a)` | 3 | Anzahl Elemente |
| `implode(",", $a)` | 3 | Array zu String verbinden |
| `is_array($x)` | 3 | Array? |
| `array_splice($a, i, n)` | 9 | Elemente entfernen |
| `htmlspecialchars($s)` | 3 | `< > & " '` maskieren (XSS-Schutz) |
| `nl2br($s)` | 3 | Zeilenumbrüche → `<br>` |
| `strtolower($s)` | 8 | in Kleinbuchstaben |
| `strpos($s, $teil)` | 8 | Position eines Teilstrings oder `false` (mit `===` prüfen!) |
| `str_replace($alt, $neu, $s)` | 9 | Teilstring ersetzen |
| `ltrim($s, '/')` | 9 | Zeichen links entfernen |
| `preg_match($muster, $s, $treffer)` | 9 | regulärer Ausdruck |
| `session_start()` | 6 | Session starten/fortsetzen |
| `header("…")` | 8 | HTTP-Header senden |
| `http_response_code(404)` | 9 | HTTP-Statuscode setzen |
| `json_encode($x)` | 8 | PHP-Wert → JSON-String |
| `json_decode($s, true)` | 8 | JSON-String → assoziatives Array |
| `file_get_contents("php://input")` | 8 | Roh-Body der Anfrage lesen |
| `spl_autoload_register(fn)` | 6 | Klassen automatisch laden |
| `require_once "datei.php"` | 6 | Datei einmalig einbinden |
| `php_sapi_name()` | 9 | `"cli"` bei Aufruf über die Kommandozeile |
| `exit` | 9 | Skript sofort beenden |

---

*Erhoben aus allen `.php`-Dateien sowie den zugehörigen `.html`- und
`.md`-Dateien in `exercises/` und `solutions/` (Stand Oktober 2026).*
