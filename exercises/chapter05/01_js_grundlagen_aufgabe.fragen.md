## 5.1 JavaScript-Grundlagen (`01_js_grundlagen_aufgabe.html`)

### Sprachkonzepte und Klassen

1. Was ist der Unterschied zwischen `var`, `let` und `const`?
2. Welche Datentypen gibt es in JavaScript? Was liefert `typeof`?
3. Was ergibt `"Kapitel " + 5`? Warum?
4. Was ist der Unterschied zwischen `==` und `===`? Was ergeben `1 == "1"` und `1 === "1"`?
5. Wie definiert man eine Klasse mit Konstruktor? Wozu dient `this`?
6. Was sind Getter und Setter? Was bedeutet das `#` in `this.#titel`? Warum kann der Getter `titel` nicht einfach `this.titel` zurückgeben?
7. Was bedeuten `extends` und `super`? Wann muss `super(...)` aufgerufen werden?
8. Was prüft `instanceof`?
9. Wie funktionieren `throw` und `try...catch`?
10. Was ist der Unterschied zwischen einer klassischen `for`-Schleife und `for...of`?
11. Welche Array-Methoden werden gebraucht? Was machen sie?
12. Warum braucht `sort()` für Zahlen eine Vergleichsfunktion? Wie sieht sie aus?
13. Was ist Destrukturierung, z.B. `const [a, b] = [1, 2];`?
14. Wie ist ein `switch` aufgebaut? Warum braucht man `break`?

<details><summary>Erwartete Antworten</summary>

1. `var`: funktionsweiter Gültigkeitsbereich, veraltet. `let`: blockweit, änderbar. `const`: blockweit, nicht neu zuweisbar.
2. `number`, `string`, `boolean`, `undefined`, `null`, `bigint`, `symbol`, `object` (inkl. Arrays, Funktionen: `typeof` liefert `"function"`). `typeof` gibt den Typ als String zurück.
3. `"Kapitel 5"` (String): Beim `+` mit einem String wird die Zahl umgewandelt und verkettet.
4. `==` vergleicht nach Typumwandlung, `===` ohne. `true` bzw. `false`.
5. `class Projekt { #id; … constructor(id, titel, jahr) { this.#id = id; … } }`. `this` ist das aktuelle Objekt.
6. Methoden, die wie Eigenschaften benutzt werden (`p.titel`, `p.titel = …`) und dabei prüfen oder umrechnen können. `#titel` ist ein privates Attribut: Es muss im Klassenrumpf deklariert werden und ist nur innerhalb der Klasse zugänglich (`p.#titel` außerhalb ist ein Syntaxfehler), auch nicht in Unterklassen. So kann z.B. die Jahresprüfung nicht umgangen werden. Da `#titel` ein anderer Name als `titel` ist, ruft sich der Getter bzw. Setter nicht selbst auf (`this.titel` im Getter wäre eine Endlosschleife).
7. `extends` erbt von einer Klasse, `super(...)` ruft den Konstruktor der Basisklasse auf (vor dem ersten Zugriff auf `this`), `super.methode()` die Methode der Basisklasse.
8. Ob ein Objekt eine Instanz einer Klasse (oder Unterklasse) ist.
9. `throw new Error("…")` löst einen Fehler aus. Im `try` ausgelöste Fehler werden im `catch (e)` abgefangen, `e.message` enthält die Meldung.
10. Die `for`-Schleife läuft über einen Index (nötig z.B. für `splice(i, 1)`), `for...of` direkt über die Werte.
11. `push`: anhängen; `find`: erstes passendes Element (oder `undefined`); `splice(i, n)`: n Elemente ab Index i entfernen; `sort`: sortiert das Array selbst.
12. Ohne Vergleichsfunktion wird als String sortiert. `(a, b) => a.jahr - b.jahr`.
13. Werte eines Arrays werden der Reihe nach einzelnen Variablen zugewiesen.
14. `switch (x) { case 0: …; break; default: … }`. Ohne `break` läuft die Ausführung in den nächsten `case` weiter.
</details>

### JSON und localStorage

1. Was ist JSON? Wofür wird es verwendet?
2. Wie unterscheidet sich JSON von einem JavaScript-Objekt-Literal?
3. Was machen `JSON.stringify()` und `JSON.parse()`? Welcher Datentyp kommt jeweils heraus?
4. Was ist `localStorage`? Welche Werte kann man darin speichern?
5. Warum muss man ein Objekt vor dem Speichern in `localStorage` in JSON umwandeln?
6. Wie lange bleiben Daten im `localStorage` erhalten? Worin unterscheidet sich `sessionStorage`?
7. Wo kann man den Inhalt von `localStorage` im Browser ansehen?

<details><summary>Erwartete Antworten</summary>

1. JavaScript Object Notation: ein textbasiertes Format für Datenaustausch (z.B. zwischen Client und Server, später REST).
2. Schlüssel und Strings stehen immer in doppelten Anführungszeichen. Keine Funktionen, kein `undefined`, keine Kommentare.
3. `stringify`: Objekt → String. `parse`: String → Objekt.
4. Ein Schlüssel-Wert-Speicher im Browser, pro Origin. Er speichert nur Strings.
5. Sonst wird `toString()` verwendet und es steht `"[object Object]"` im Speicher.
6. Dauerhaft, bis sie gelöscht werden. `sessionStorage` gilt nur für den aktuellen Tab.
7. DevTools → Anwendung/Speicher → Local Storage.
</details>
