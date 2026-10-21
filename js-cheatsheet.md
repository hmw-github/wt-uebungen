# JavaScript Cheat-Sheet

Alle JavaScript-Sprachmittel und Browser-APIs, die in den Übungen und
Musterlösungen (Kapitel 4–9) vorkommen – mit Beispielen aus dem
Portfolio-Projekt. **Kap.** = Kapitel der ersten Verwendung.

- [JavaScript einbinden](#javascript-einbinden)
- [Variablen, Datentypen & Operatoren](#variablen-datentypen--operatoren)
- [Kontrollstrukturen](#kontrollstrukturen)
- [Funktionen](#funktionen)
- [Klassen](#klassen)
- [Arrays & Strings](#arrays--strings)
- [Fehlerbehandlung](#fehlerbehandlung)
- [JSON & localStorage](#json--localstorage)
- [DOM: Elemente finden & ändern](#dom-elemente-finden--ändern)
- [Events](#events)
- [AJAX: XMLHttpRequest, Promises, fetch](#ajax-xmlhttprequest-promises-fetch)
- [REST-Client](#rest-client)
- [Bootstrap per JavaScript](#bootstrap-per-javascript)

---

## JavaScript einbinden

| Weg | Kap. | Beispiel im Projekt |
|---|---|---|
| Intern | 5 | `<script> console.log("Startseite wird geladen..."); </script>` |
| Extern | 5 | `<script src="js/begruessung.js"></script>` |
| Extern mit `defer` | 4 | `<script src="js/main.js" defer></script>` |
| Event-Attribut | 5 | `<button onclick="zeigeAlert()">Info anzeigen</button>` |
| `javascript:`-URL | 5 | `<a href="javascript:alert('…')">Kleinen Fakt anzeigen</a>` |

```html
<!-- Bootstrap-JS vor dem eigenen Skript, das es benutzt -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/main.js" defer></script>
```

- `defer` führt das Skript erst aus, wenn das HTML fertig geparst ist.
- Ohne `defer` läuft ein Skript sofort – Elemente *unterhalb* existieren
  dann noch nicht. Darum steht `<script>` oft am Ende von `<body>`.
- Ausgabe zum Testen: `console.log(…)`, `console.error(…)`, `alert(…)`.

---

## Variablen, Datentypen & Operatoren

| Schlüsselwort | Kap. | Gültigkeit | Neu zuweisbar |
|---|---|---|---|
| `let` | 5 | Block `{ }` | ja |
| `const` | 5 | Block `{ }` | nein |
| `var` | 5 | ganze Funktion (veraltet) | ja |

```js
let naechsteId = 1;
const listenName = "Meine Projekte";
var istInitialisiert = true;

typeof naechsteId;           // "number"
typeof listenName;           // "string"
typeof istInitialisiert;     // "boolean"

"Kapitel " + 5;              // "Kapitel 5" – Zahl wird zum String
naechsteId == "1";           // true  – Vergleich mit Typumwandlung
naechsteId === "1";          // false – strikter Vergleich (bevorzugen!)
```

| Operator | Kap. | Beispiel |
|---|---|---|
| `+` (Verkettung) | 5 | `"Hallo, " + name + "!"` |
| `++` | 5 | `naechsteId++` |
| `+=` | 5 | `textContent += text + "\n"` |
| `%` (Modulo) | 8 | `objekt.number % 2 === 0` |
| `===` / `!==` | 5 | `aenderungen.titel !== undefined` |
| `&&` / `\|\|` / `!` | 5 | `kontaktanfrage.rueckmeldung \|\| "keine Angabe"` |
| `? :` (ternär) | 5 | `kontaktanfrage.newsletter ? "ja" : "nein"` |
| `instanceof` | 5 | `projekt instanceof Webprojekt` |

Datentypen: `number`, `string`, `boolean`, `undefined`, `null`, `object`
(auch Arrays), `function`.

---

## Kontrollstrukturen

```js
if (!projekt) {
    return;
} else if (…) {
    …
} else {
    …
}

for (let i = 0; i < this._projekte.length; i++) { … }   // mit Index
for (const projekt of projekte) { … }                    // über die Werte

switch (projektliste.anzahl) {
    case 0:
        ausgabe("Keine Projekte mehr vorhanden.");
        break;                    // ohne break: weiter in den nächsten case
    case 1:
        ausgabe("Noch ein Projekt vorhanden.");
        break;
    default:
        ausgabe("Noch mehrere Projekte vorhanden.");
}
```

---

## Funktionen

| Form | Kap. | Beispiel |
|---|---|---|
| Deklaration | 5 | `function zeigeAlert() { alert("Hallo …"); }` |
| Anonyme Funktion | 5 | `function(p) { return p.id === id; }` |
| Pfeilfunktion | 4 | `() => { … }`, `(a, b) => a.jahr - b.jahr` |
| `async`-Funktion | 5 | `async function loadProjects() { … }` |
| Callback | 5 | Funktion als Parameter: `addEventListener("click", () => { … })` |

```js
function ausgabe(text) {
    console.log(text);
    document.getElementById("ausgabe").textContent += text + "\n";
}

const projekt = this._projekte.find((p) => p.id === id);
```

---

## Klassen

```js
class Projekt {
    constructor(id, titel, jahr) {
        this._id = id;
        this._titel = titel;
        this.jahr = jahr;            // ruft schon den Setter auf
    }

    get titel() {                    // Zugriff: p.titel
        return this._titel;
    }

    set titel(neuerTitel) {          // Zuweisung: p.titel = "…"
        this._titel = neuerTitel;
    }

    set jahr(neuesJahr) {
        if (neuesJahr < 2000) {
            throw "Jahr darf nicht vor 2000 liegen!";
        }
        this._jahr = neuesJahr;
    }

    toString() {
        return this._titel + " (" + this._jahr + ")";
    }
}

class Webprojekt extends Projekt {
    constructor(id, titel, jahr, technologie) {
        super(id, titel, jahr);      // Basisklassen-Konstruktor, vor this!
        this._technologie = technologie;
    }

    toString() {
        return super.toString() + ", Technologie: " + this._technologie;
    }
}

const wetterApp = new Projekt(3, "Wetter-App", 2024);
```

- `_titel` mit Unterstrich: speichert den Wert, damit sich der Setter
  `titel` nicht endlos selbst aufruft.

---

## Arrays & Strings

| Methode | Kap. | Wirkung | Beispiel |
|---|---|---|---|
| `[]` | 5 | leeres Array | `this._projekte = []` |
| `.length` | 5 | Anzahl Elemente | `projekte.length` |
| `push(x)` | 5 | hinten anhängen | `this._projekte.push(projekt)` |
| `find(fn)` | 5 | erstes passendes Element oder `undefined` | `projekte.find(p => p.id === id)` |
| `splice(i, n)` | 5 | `n` Elemente ab Index `i` entfernen | `this._projekte.splice(i, 1)[0]` |
| `sort(fn)` | 5 | sortiert das Array selbst | `sort((a, b) => a.jahr - b.jahr)` |
| `forEach(fn)` | 9 | für jedes Element | `projekte.forEach(function (p) { … })` |
| `[...arr]` | 5 | Kopie (Spread) | `return [...this._projekte];` |
| `const [a, b] = arr` | 5 | Destrukturierung | `const [erstesProjekt, zweitesProjekt] = …` |
| `localeCompare` | 9 | Strings alphabetisch vergleichen | `sort((p1, p2) => p1.titel.localeCompare(p2.titel))` |
| `includes(s)` | 7 | enthält Teilstring? | `emailFeld.value.includes('@')` |
| `trim()` | 7 | Leerzeichen am Rand entfernen | `nameFeld.value.trim().length >= 5` |
| `String(x)` | 9 | in String umwandeln | `String(projekt.jahr)` |
| `Math.random()` / `Math.floor()` | 8 | Zufallszahl / abrunden | `Math.floor(Math.random() * 100)` |

- `sort()` ohne Vergleichsfunktion sortiert **als String** – für Zahlen
  immer `(a, b) => a - b` angeben.

---

## Fehlerbehandlung

```js
try {
    projektliste.aktualisieren(wetterApp.id, { jahr: 1999 });
} catch (fehler) {
    ausgabe("Fehler abgefangen: " + fehler);
}

throw "Jahr darf nicht vor 2000 liegen!";   // Kap. 5
throw new Error("Serverfehler");            // Kap. 8 – fehler.message
```

---

## JSON & localStorage

| Methode | Kap. | Wirkung |
|---|---|---|
| `JSON.stringify(obj)` | 5 | Objekt → JSON-String |
| `JSON.parse(text)` | 5 | JSON-String → Objekt |
| `localStorage.setItem(k, v)` | 5 | speichert einen **String** dauerhaft im Browser |
| `localStorage.getItem(k)` | 5 | liest ihn wieder (oder `null`) |

```js
const kontaktanfrage = {
    name: document.getElementById("nameFeld").value,
    newsletter: document.getElementById("newsletterFeld").checked
};

localStorage.setItem("kontaktanfrage", JSON.stringify(kontaktanfrage));
location.href = "kontaktanfrage-bestaetigung.html";    // Seite wechseln

// auf der Bestätigungsseite
const gespeichert = localStorage.getItem("kontaktanfrage");
if (gespeichert) {
    const anfrage = JSON.parse(gespeichert);
    begruessung.textContent = "Vielen Dank, " + anfrage.name + "!";
}
```

- JSON: Schlüssel und Strings immer in `"…"`, keine Funktionen, kein `undefined`.
- Ohne `stringify` würde `"[object Object]"` gespeichert.
- `sessionStorage` funktioniert gleich, gilt aber nur für den aktuellen Tab.
- Ansehen: DevTools → Anwendung → Local Storage.

---

## DOM: Elemente finden & ändern

| Methode / Eigenschaft | Kap. | Beispiel im Projekt |
|---|---|---|
| `document.getElementById(id)` | 4 | `document.getElementById("hauptnav")` |
| `document.querySelector(css)` | 5 | `querySelector('input[name="rueckmeldung"]:checked')` |
| `querySelectorAll(css)` | 5 | `projekteKoerper.querySelectorAll("tr")` |
| `.children[i]` | 5 | `zeile.children[2]` (dritte Zelle) |
| `.value` | 5 | Inhalt eines Eingabefelds |
| `.checked` | 5 | Checkbox/Radio angehakt? |
| `.textContent` | 5 | Text setzen/lesen (sicher, kein HTML) |
| `.innerHTML` | 8 | HTML setzen; `= ""` leert ein Element |
| `document.createElement(tag)` | 5 | `document.createElement("tr")` |
| `.appendChild(el)` / `.append(el)` | 5 | Element als letztes Kind einfügen |
| Attribute als Eigenschaft | 5 | `link.href = …`, `link.target = "_blank"`, `button.type = "button"` |
| `.className` | 7 | `karte.className = "card projekt-card"` |
| `.classList.add/remove/toggle` | 4 | `hauptnav.classList.toggle("offen")` |
| `.dataset` | 9 | `karte.dataset.jahr = "2026"` → `data-jahr="2026"` |
| `.style` | 9 | `buttonPanel.style = 'text-align: center'` |

```js
// Kap. 5: Projekttabelle per DOM aufbauen
for (const projekt of projekte) {
    const zeile = document.createElement("tr");

    const titelZelle = document.createElement("td");
    titelZelle.textContent = projekt.titel;
    zeile.appendChild(titelZelle);

    const link = document.createElement("a");
    link.href = projekt.link;
    link.target = "_blank";
    link.textContent = "Repository";
    …
    projekteKoerper.appendChild(zeile);
}
```

- `textContent` statt `innerHTML` für Benutzerdaten – sonst wird
  eingeschleustes HTML ausgeführt (XSS).
- `classList.toggle(k)` gibt zurück, ob die Klasse danach gesetzt ist;
  `toggle(k, bool)` setzt bzw. entfernt sie gezielt.

---

## Events

| Event | Kap. | Auslöser | Beispiel |
|---|---|---|---|
| `DOMContentLoaded` | 4 | HTML fertig geladen | `document.addEventListener("DOMContentLoaded", …)` |
| `load` | 8 | Seite inkl. Bilder geladen | `window.addEventListener("load", onLoad)` |
| `click` | 4 | Mausklick | Burger-Button, Filter-Button |
| `submit` | 5 | Formular wird abgeschickt | `kontaktFormular.addEventListener("submit", …)` |
| `blur` | 7 | Feld verliert den Fokus | Formularvalidierung |
| `keyup` | 8 | Taste losgelassen | `<input onkeyup="ladeVorschlag()">` |

```js
document.addEventListener("DOMContentLoaded", () => {
    const burgerButton = document.getElementById("burgerButton");
    const hauptnav = document.getElementById("hauptnav");

    if (!burgerButton || !hauptnav) {
        return;                       // Element fehlt auf dieser Seite
    }

    burgerButton.addEventListener("click", () => {
        const istOffen = hauptnav.classList.toggle("offen");
        burgerButton.classList.toggle("offen", istOffen);
    });
});

kontaktFormular.addEventListener("submit", (event) => {
    event.preventDefault();           // Formular nicht absenden
    …
});

// Kap. 7: Validierung mit Bootstrap-Klassen
emailFeld.addEventListener('blur', function() {
    if (emailFeld.value.includes('@')) {
        emailFeld.classList.remove('is-invalid');
        emailFeld.classList.add('is-valid');
    } else {
        emailFeld.classList.remove('is-valid');
        emailFeld.classList.add('is-invalid');
    }
});
```

- Drei Varianten: HTML-Attribut (`onclick="…"`), Eigenschaft
  (`button.onclick = function () { … }`) oder – bevorzugt –
  `addEventListener`.
- Im Formular: `onsubmit="return false;"` verhindert das Absenden
  ebenfalls (Kap. 8).

---

## AJAX: XMLHttpRequest, Promises, fetch

### XMLHttpRequest (Kap. 8)

```js
var xhr = new XMLHttpRequest();

xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {   // 4 = fertig
        document.getElementById("ergebnis").innerHTML = xhr.responseText;
    }
};

xhr.open("GET", "hinweis.php?praefix=" + wert, true);  // true = asynchron
xhr.send();
```

### Promises (Kap. 8)

```js
function erzeugeZahlenPromise() {
    return new Promise(function(resolve, reject) {
        setTimeout(function() {
            resolve('{"number": ' + Math.floor(Math.random() * 100) + '}');
        }, Math.random() * 500);
    });
}

erzeugeZahlenPromise()
    .then(function(ergebnis) { … })      // bei resolve
    .catch(function(fehler) { … });      // bei reject oder Fehler
```

### fetch mit `.then()` (Kap. 8)

```js
fetch("hinweis.php?praefix=" + wert)
    .then(function(response) {
        if (!response.ok) {                  // Status nicht 2xx
            throw new Error("Serverfehler");
        }
        return response.text();              // oder response.json()
    })
    .then(function(text) {
        document.getElementById("ergebnis").innerHTML = text;
    })
    .catch(function(fehler) { … });
```

### fetch mit `async`/`await` und POST (Kap. 8)

```js
async function sende() {
    try {
        const response = await fetch("echo.php", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ titel: titel, jahr: jahr })
        });
        const ergebnis = await response.json();
        …
    } catch (fehler) {
        document.getElementById("ergebnis").innerHTML = "Fehler beim Senden der Daten.";
    }
}
```

| Baustein | Bedeutung |
|---|---|
| `response.ok` / `response.status` | Erfolg (2xx) / HTTP-Statuscode |
| `response.text()` / `response.json()` | Body als Text bzw. als JS-Objekt (liefert ein Promise) |
| `await` | wartet auf ein Promise – nur in `async`-Funktionen |
| `setTimeout(fn, ms)` | Funktion verzögert ausführen |

---

## REST-Client

Kap. 9: Die Projekte-Seite arbeitet nur noch über die eigene REST-API.

| Aktion | HTTP | Aufruf |
|---|---|---|
| alle laden | `GET` | `fetch(API_URL + '/projekte')` |
| anlegen | `POST` | `fetch(API_URL + '/projekt', { method: 'POST', … })` |
| ändern | `PUT` | `fetch(API_URL + '/projekt/' + id, { method: 'PUT', … })` |
| löschen | `DELETE` | `fetch(API_URL + '/projekt/' + id, { method: 'DELETE' })` |

```js
const API_URL = 'api';

async function ladeProjekte() {
    try {
        const antwort = await fetch(API_URL + '/projekte');
        const projekte = await antwort.json();

        const liste = document.getElementById('projekteListe');
        liste.innerHTML = '';
        projekte.sort((p1, p2) => p1.titel.localeCompare(p2.titel));
        projekte.forEach(function (projekt) {
            liste.appendChild(erzeugeKarte(projekt));
        });
    } catch (fehler) {
        console.error('Fehler beim Laden der Projekte:', fehler);
    }
}

async function projektLoeschen(id) {
    await fetch(API_URL + '/projekt/' + id, { method: 'DELETE' });
    await ladeProjekte();           // Liste neu laden
}
```

---

## Bootstrap per JavaScript

```js
// Kap. 7/9: Modal öffnen und schließen
var modal = bootstrap.Modal.getOrCreateInstance(document.getElementById('bearbeitenModal'));
modal.show();
modal.hide();
```

```html
<!-- ohne eigenes JS: Schließen-Button im Modal -->
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
```

- `bootstrap` gibt es erst, wenn `bootstrap.bundle.min.js` eingebunden ist.
- Validierung: `is-valid` / `is-invalid` am Feld; `invalid-feedback`
  wird dann automatisch eingeblendet (bei Radio-Gruppen per
  `classList.toggle('d-block', …)` nachhelfen).

---

*Erhoben aus allen `.js`-, `.html`- und `.php`-Dateien in `exercises/`
und `solutions/` (Stand Oktober 2026).*
