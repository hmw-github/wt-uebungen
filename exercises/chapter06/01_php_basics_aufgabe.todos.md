# TODOs – Übung 1: PHP-Grundlagen

Diese Übung ist eine eigenständige Datei ohne Bezug zur Portfolio-Website
und enthält folgende Übungen:

- **PHP-Grundlagen und Ausgabe** (TODO 1–4)
- **Kontrollstrukturen und Arrays** (TODO 5–8)
- **Funktionen und Klassen** (TODO 9–13)

Welche Sprachmittel Sie dafür einsetzen, entscheiden Sie selbst.

## 01_php_basics_aufgabe.php – Teil 1: Steckbrief
1. TODO 1: Die Steckbriefdaten liegen in drei Variablen vor: `$name` ("Alex Berger"), `$studiengang` ("Angewandte Informatik") und `$eingeschrieben` (ja, als Wahrheitswert).
2. TODO 2: Die Liste unter dem Steckbrief zeigt für jede der drei Variablen ihren Datentyp an, wie PHP ihn ermittelt (je ein Listeneintrag, z.B. "$name ist vom Typ: string").
3. TODO 3: Ein Begrüßungssatz nennt Name und Studiengang, z.B. "Hallo, ich heiße Alex Berger und studiere Angewandte Informatik."
4. TODO 4: Unter dem Steckbrief steht der aktuelle Zeitpunkt im Format "Stand: 14:05:09 21.10.2026" (Uhrzeit, dann Datum). Beim Neuladen aktualisiert er sich.

## Teil 2: Kontrollstrukturen und Arrays

5. TODO 5: Die Projektjahre 2022, 2023, 2024, 2025 und 2026 liegen gemeinsam in einer Variablen `$jahre`. Angezeigt wird ihre Summe (10120), die das Skript selbst berechnet, ohne dass ein Jahr einzeln im Rechenausdruck vorkommt.
6. TODO 6: Die Tabelle zeigt mindestens drei Technologien mit der jeweiligen Erfahrung in Jahren an (eine Zeile pro Technologie, zwei Spalten). Die Daten liegen in einer einzigen Variablen `$technologien`, in der jede Technologie direkt ihrer Erfahrung zugeordnet ist.
7. TODO 7: Für eine Note in der Variablen `$note` (Ganzzahl 1–6) erscheint der deutsche Notentext (1 = sehr gut, 2 = gut, 3 = befriedigend, 4 = ausreichend, 5 = mangelhaft, 6 = ungenügend). Ändert man den Wert von `$note`, ändert sich der Text passend.
8. TODO 8: Für eine Zahl in der Variablen `$basiszahl` erscheint ihr kleines Einmaleins (bei 3 also von `3 x 1 = 3` bis `3 x 10 = 30`), jede Rechnung als eigener Listeneintrag. Ändert man `$basiszahl`, passt sich die ganze Liste an.

## Teil 3: Funktionen und Klassen

9. TODO 9: Es gibt eine Funktion `pruefeVorzeichen`, die eine Zahl und eine Ergebnisvariable entgegennimmt. Nach dem Aufruf steht in der Ergebnisvariablen des Aufrufers `"positiv"`, `"negativ"` oder `"null"`, passend zum Vorzeichen der Zahl. Die Funktion hat keinen Rückgabewert und gibt selbst nichts aus.
10. TODO 10: Für eine Beispielzahl wird angezeigt, ob sie positiv, negativ oder null ist. Der Text stammt aus der Ergebnisvariablen, die `pruefeVorzeichen()` befüllt hat.
11. TODO 11: Es gibt eine Klasse `Projekt`, die mit Titel und Technologie erzeugt wird. Von außen sind diese Werte nicht direkt zugreifbar. Gibt man ein Projekt mit `echo` aus, erscheint z.B. `'Portfolio-Website' - HTML, CSS`.
12. TODO 12: Es gibt eine Klasse `Webprojekt`, die ein `Projekt` ist und zusätzlich ein (ebenfalls von außen nicht zugreifbares) Jahr hat. Sie wird mit Titel, Technologie und Jahr erzeugt. Mit `echo` ausgegeben erscheint die Darstellung eines Projekts, ergänzt um das Jahr (z.B. `'Gästebuch' - PHP (2026)`). Titel und Technologie werden dabei nicht doppelt verwaltet, und die Textdarstellung wird nicht doppelt programmiert.
13. TODO 13: Auf der Seite erscheinen ein Projekt und ein Webprojekt in ihrer jeweiligen Textdarstellung.
