## 5.2 JavaScript-Grundlagen (`02_js_basics_aufgabe.html`)

1. Was ist der Unterschied zwischen `var`, `let` und `const`?
2. Welche Datentypen gibt es in JavaScript? Was liefert `typeof`?
3. Was ergibt `"Kapitel " + 5`? Warum?
4. Was ist der Unterschied zwischen `==` und `===`? Was ergeben `1 == "1"` und `1 === "1"`?
5. Wie definiert man eine Klasse mit Konstruktor? Wozu dient `this`?
6. Was sind Getter und Setter? Warum speichert man Werte oft in `this._titel`?
7. Was bedeuten `extends` und `super`? Wann muss `super(...)` aufgerufen werden?
8. Was prüft `instanceof`?
9. Wie funktionieren `throw` und `try...catch`?
10. Was ist der Unterschied zwischen einer klassischen `for`-Schleife und `for...of`?
11. Welche Array-Methoden werden gebraucht (`push`, `find`, `splice`, `sort`)? Was machen sie?
12. Warum braucht `sort()` für Zahlen eine Vergleichsfunktion? Wie sieht sie aus?
13. Was ist Destrukturierung, z.B. `const [a, b] = liste.alsArray();`?
14. Wie ist ein `switch` aufgebaut? Warum braucht man `break`?

<details><summary>Erwartete Antworten</summary>

1. `var`: funktionsweiter Gültigkeitsbereich, veraltet. `let`: blockweit, änderbar. `const`: blockweit, nicht neu zuweisbar.
2. `number`, `string`, `boolean`, `undefined`, `null`, `bigint`, `symbol`, `object` (inkl. Arrays, Funktionen: `typeof` liefert `"function"`). `typeof` gibt den Typ als String zurück.
3. `"Kapitel 5"` (String): Beim `+` mit einem String wird die Zahl umgewandelt und verkettet.
4. `==` vergleicht nach Typumwandlung, `===` ohne. `true` bzw. `false`.
5. `class Projekt { constructor(id, titel, jahr) { this._id = id; … } }`. `this` ist das aktuelle Objekt.
6. Methoden, die wie Eigenschaften benutzt werden (`p.titel`, `p.titel = …`) und dabei prüfen oder umrechnen können. Der Unterstrich verhindert, dass der Setter sich selbst aufruft (Endlosschleife).
7. `extends` erbt von einer Klasse, `super(...)` ruft den Konstruktor der Basisklasse auf (vor dem ersten Zugriff auf `this`), `super.methode()` die Methode der Basisklasse.
8. Ob ein Objekt eine Instanz einer Klasse (oder Unterklasse) ist.
9. `throw new Error("…")` löst einen Fehler aus. Im `try` ausgelöste Fehler werden im `catch (e)` abgefangen, `e.message` enthält die Meldung.
10. Die `for`-Schleife läuft über einen Index (nötig z.B. für `splice(i, 1)`), `for...of` direkt über die Werte.
11. `push`: anhängen; `find`: erstes passendes Element (oder `undefined`); `splice(i, n)`: n Elemente ab Index i entfernen; `sort`: sortiert das Array selbst.
12. Ohne Vergleichsfunktion wird als String sortiert. `(a, b) => a.jahr - b.jahr`.
13. Werte eines Arrays werden der Reihe nach einzelnen Variablen zugewiesen.
14. `switch (x) { case 0: …; break; default: … }`. Ohne `break` läuft die Ausführung in den nächsten `case` weiter.
</details>
