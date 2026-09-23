## 6.2 Formularverarbeitung mit GET (`02_formular_get_aufgabe.php`)

1. Wie kommen GET-Parameter beim Server an? Wie sieht die URL nach dem Absenden aus?
2. Was ist `$_GET`? Was passiert, wenn man auf einen nicht vorhandenen Schlüssel zugreift?
3. Was prüft `isset()`? Was macht der Operator `??`?
4. Was bedeutet es, wenn ein Formular „an sich selbst“ gesendet wird?
5. Wie prüft man, ob ein String einen anderen enthält, ohne Groß-/Kleinschreibung zu beachten?
6. Warum sollte man den Suchbegriff im `value`-Attribut mit `htmlspecialchars()` ausgeben?
7. Wann ist GET die richtige Wahl, wann nicht?

<details><summary>Erwartete Antworten</summary>

1. Als Query-String an der URL: `…?technologie=php`.
2. Ein superglobales assoziatives Array mit den URL-Parametern. Ein fehlender Schlüssel erzeugt eine Warnung und liefert `null`.
3. `isset()` prüft, ob eine Variable existiert und nicht `null` ist. `$a ?? $b` liefert `$a`, falls gesetzt, sonst `$b`.
4. `action` zeigt auf dieselbe Datei (oder fehlt). Die Datei zeigt Formular und Ergebnis an.
5. `str_contains(strtolower($heuhaufen), strtolower($nadel))`.
6. Der Wert kommt vom Benutzer. Ohne Maskierung könnte er das Attribut mit `"` beenden und HTML/JS einschleusen (XSS).
7. Für lesende, teilbare Anfragen (Suche, Filter). Nicht für Passwörter, große Datenmengen oder Anfragen, die etwas ändern.
</details>
