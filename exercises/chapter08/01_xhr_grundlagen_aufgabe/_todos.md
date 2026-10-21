# TODOs – Übung 1: XHR-Grundlagen (Technologie-Finder)

## index.html
1. TODO 1: Für jede Anfrage steht ein Objekt bereit, mit dem der Browser im Hintergrund, also ohne Neuladen der Seite, mit dem Server kommunizieren kann (klassische AJAX-Technik aus 8.2, noch ohne Fetch).
2. TODO 2: Das Skript wird über den Fortschritt der Anfrage informiert und reagiert nur dann, wenn die Antwort vollständig und erfolgreich (HTTP-Status 200) angekommen ist.
3. TODO 3: In diesem Fall erscheint der Antworttext des Servers im Ergebnis-Element (`id="ergebnis"`). Tippt man z.B. "j", steht dort "JavaScript".
4. TODO 4: Die Anfrage geht per GET an `hinweis.php`, mit dem aktuell eingegebenen Text als Parameter `praefix`. In den Entwicklertools (Reiter Netzwerk) sieht man bei jedem Tastendruck eine solche Anfrage.

## hinweis.php
1. TODO 1: In `$treffer` stehen nur die Technologien, die mit dem übergebenen Präfix beginnen, unabhängig von Groß-/Kleinschreibung: `?praefix=p` und `?praefix=P` liefern beide PHP. `?praefix=sql` liefert MySQL nicht, da "sql" nicht am Anfang steht.
2. TODO 2: Die Antwort ist eine kommagetrennte Liste der Treffer ohne Leerzeichen (z.B. "PHP,PostgreSQL"). Gibt es keinen Treffer, lautet die Antwort "kein Treffer!". Prüfen Sie das direkt im Browser, z.B. mit `hinweis.php?praefix=b`.

Hinweis: Diese Teilübung ist eine eigenständige Beispielanwendung (kein Teil der fortlaufenden Portfolio-Website), ein Vergleich mit `chapter07/03_modal_aufgabe` liefert daher keine sinnvollen zusätzlichen Erkenntnisse; die TODO-Marker decken den gesamten zu ergänzenden Code ab.
