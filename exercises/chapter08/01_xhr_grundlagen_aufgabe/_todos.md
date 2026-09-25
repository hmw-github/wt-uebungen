# TODOs – Übung 1: XHR-Grundlagen (Technologie-Finder)

## index.html
1. TODO 1: Ein neues `XMLHttpRequest`-Objekt erzeugen.
2. TODO 2: Eine `onreadystatechange`-Funktion registrieren, die prüft, ob `xhr.readyState == 4` und `xhr.status == 200` ist.
3. TODO 3: In diesem Fall den Inhalt von `xhr.responseText` in das Ergebnis-Element (`id="ergebnis"`) schreiben.
4. TODO 4: Eine GET-Anfrage an `"hinweis.php?praefix=" + wert` öffnen (`open`) und absenden (`send`).

## hinweis.php
1. TODO 1: Das Array `$technologien` so filtern, dass nur Einträge übrig bleiben, deren Anfang (unabhängig von Groß-/Kleinschreibung) mit dem Wert aus `$_GET['praefix']` übereinstimmt (mit `strtolower()` und `strpos()`, Treffer bei Position 0).
2. TODO 2: Die gefundenen Technologien als kommagetrennte Liste ausgeben (z.B. "PHP,PostgreSQL"), falls mindestens ein Treffer existiert, sonst den Text "kein Treffer!" ausgeben.

Hinweis: Diese Teilübung ist eine eigenständige Beispielanwendung (kein Teil der fortlaufenden Portfolio-Website), ein Vergleich mit `chapter07/03_modal_aufgabe` liefert daher keine sinnvollen zusätzlichen Erkenntnisse; die TODO-Marker decken den gesamten zu ergänzenden Code ab.
