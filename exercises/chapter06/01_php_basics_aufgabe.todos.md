# TODOs – Übung 1: PHP-Grundlagen

Diese Übung ist eine eigenständige Datei ohne Bezug zur Portfolio-Website
und enthält folgende Übungen:

- **PHP-Grundlagen und Ausgabe** (TODO 1–4): Variablen, `gettype()`,
  String-Verkettung, `date()`.
- **Kontrollstrukturen und Arrays** (TODO 5–8): indiziertes Array mit
  `foreach`, assoziatives Array, `switch`, `for`-Schleife.
- **Funktionen und Klassen** (TODO 9–13): Referenzparameter, `class`,
  `extends`, `parent::`.

## 01_php_basics_aufgabe.php – Teil 1: Steckbrief
1. TODO 1: Drei Variablen anlegen: `$name` (String, "Alex Berger"), `$studiengang` (String, "Angewandte Informatik") und `$eingeschrieben` (Boolean, true).
2. TODO 2: Mit `gettype()` den Datentyp jeder der drei Variablen als `<li>`-Eintrag ausgeben.
3. TODO 3: Mittels `echo` und String-Verkettung (Operator `.`) einen Begrüßungssatz ausgeben, der `$name` und `$studiengang` kombiniert.
4. TODO 4: Mit `date()` das aktuelle Datum und die aktuelle Uhrzeit im Format `"H:i:s d.m.Y"` ermitteln und als "Stand: ..." ausgeben.

## Teil 2: Kontrollstrukturen und Arrays

5. TODO 5: Indiziertes Array `$jahre` mit den Werten 2022, 2023, 2024, 2025, 2026 anlegen, alle Werte mittels `foreach` in einer Variablen `$summe` aufsummieren und die Summe ausgeben.
6. TODO 6: Assoziatives Array `$technologien` anlegen (Technologie => Erfahrung in Jahren, mindestens 3 Einträge). Mit `foreach ($technologien as $technologie => $jahre)` iterieren und für jeden Eintrag eine Tabellenzeile (`<tr><td>...</td><td>...</td></tr>`) ausgeben.
7. TODO 7: Variable `$note` (Ganzzahl 1-6) anlegen und mittels `switch` (oder `match`) den passenden deutschen Notentext ausgeben (1=sehr gut … 6=ungenügend).
8. TODO 8: Variable `$basiszahl` anlegen und mittels `for`-Schleife das kleine Einmaleins dieser Zahl ausgeben (`$basiszahl * 1` bis `$basiszahl * 10`), jede Zeile als eigener Listeneintrag.

## Teil 3: Funktionen und Klassen

9. TODO 9: Funktion `pruefeVorzeichen($zahl, &$ergebnis)` schreiben, die `$zahl` per Wert entgegennimmt und per Referenz in `$ergebnis` den String `"positiv"`, `"negativ"` oder `"null"` ablegt, je nachdem ob `$zahl > 0`, `< 0` oder `== 0` ist. Die Funktion selbst gibt nichts zurück.
10. TODO 10: `pruefeVorzeichen()` für eine Beispielzahl aufrufen und den über die Referenzvariable ermittelten Wert von `$ergebnis` ausgeben.
11. TODO 11: Klasse `Projekt` mit den privaten Eigenschaften `$titel` und `$technologie`, einem Konstruktor `__construct($titel, $technologie)` und einer Methode `__toString()` erstellen, die einen String wie `"'Titel' - Technologie"` zurückgibt.
12. TODO 12: Klasse `Webprojekt` erstellen, die von `Projekt` erbt (`extends Projekt`) und zusätzlich die private Eigenschaft `$jahr` sowie einen eigenen Konstruktor besitzt, der den Konstruktor der Basisklasse über `parent::__construct(...)` aufruft. `__toString()` überschreiben, sodass zusätzlich das Jahr ausgegeben wird, wobei die Basisklassen-Darstellung über `parent::__toString()` wiederverwendet wird.
13. TODO 13: Ein `Projekt` und ein `Webprojekt` instanziieren und beide (z.B. mit `echo`) ausgeben.
