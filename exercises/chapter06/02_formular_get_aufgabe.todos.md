# TODOs – Übung 2: Formularverarbeitung mit GET

## 04_formular_get_aufgabe.php

**Aufgabenstellung:**
Diese Seite enthält ein Suchformular, mit dem sich die (hier fest im
Code hinterlegten) Projekte nach Technologie filtern lassen. Das
Formular wird per GET an sich selbst gesendet - dadurch landet der
Suchbegriff sichtbar in der URL und die Ergebnisseite ist direkt als
Link teilbar. Ergänzen Sie an den TODO-Stellen den fehlenden PHP-Code:


1. TODO 1: Mittels `isset()` (oder dem Null-Coalescing-Operator `??`) prüfen, ob das Formular bereits abgeschickt wurde (d.h. ob `$_GET['technologie']` gesetzt ist).
2. TODO 2: Falls das Formular abgeschickt wurde: Das vorgegebene Array `$projekte` mit `foreach` iterieren und für jedes Projekt, dessen `technologie`-Eintrag den Suchbegriff aus `$_GET['technologie']` enthält (`str_contains()`, Groß-/Kleinschreibung ignorieren), eine `<li>`-Zeile mit Titel und Technologie ausgeben.
3. TODO 3: Das `value`-Attribut des Textfelds "technologie" erneut mit dem zuletzt gesuchten Wert aus `$_GET` befüllen, damit das Formular nach dem Absenden nicht leer erscheint (leerer String, falls noch nichts gesucht wurde).
