## 6.1 PHP-Grundlagen (`01_php_basics_aufgabe.php`)

1. Wo wird PHP ausgeführt, und was bekommt der Browser zu sehen?
2. Wie wird PHP in HTML eingebettet? Wie beginnen Variablen?
3. Was liefert `gettype()`? Welche Datentypen gibt es in PHP?
4. Mit welchem Operator verkettet man Strings? Was ist der Unterschied zwischen `'…'` und `"…"`?
5. Was bedeutet das Format `"H:i:s d.m.Y"` bei `date()`?
6. Was ist der Unterschied zwischen einem indizierten und einem assoziativen Array? Wie sieht `foreach` jeweils aus?
7. Was ist der Unterschied zwischen `switch` und `match`?
8. Was ist der Unterschied zwischen Wert- und Referenzparameter? Wie kennzeichnet man einen Referenzparameter?
9. Wie definiert man in PHP eine Klasse mit Konstruktor und privaten Eigenschaften? Wie greift man auf sie zu?
10. Was bewirkt `__toString()`?
11. Wie ruft man Konstruktor und Methoden der Basisklasse auf?
12. Wie erzeugt man ein Objekt und ruft eine Methode auf?

<details><summary>Erwartete Antworten</summary>

1. Auf dem Server. Der Browser erhält nur die Ausgabe (meist HTML), nie den PHP-Code.
2. `<?php … ?>`; Variablen beginnen mit `$`.
3. Den Typ als String, z.B. `string`, `integer`, `double`, `boolean`, `array`, `object`, `NULL`.
4. Mit `.`. In `"…"` werden Variablen ersetzt, in `'…'` nicht.
5. Stunde (24h):Minute:Sekunde Tag.Monat.Jahr (4-stellig).
6. Indiziert: Schlüssel 0, 1, 2 … → `foreach ($jahre as $jahr)`. Assoziativ: eigene Schlüssel → `foreach ($arr as $schluessel => $wert)`.
7. `switch` vergleicht lose und braucht `break`. `match` ist ein Ausdruck mit striktem Vergleich, der einen Wert zurückgibt.
8. Beim Wertparameter arbeitet die Funktion mit einer Kopie, beim Referenzparameter (`&`) mit der Originalvariable des Aufrufers.
9. `class Projekt { private $titel; public function __construct($titel) { $this->titel = $titel; } }`
10. Legt fest, welcher String entsteht, wenn das Objekt als String verwendet wird (z.B. bei `echo`).
11. `parent::__construct(...)`, `parent::__toString()`.
12. `$p = new Projekt("…", "…");`, `$p->methode();`
</details>
