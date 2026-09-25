## 8.5 Gästebuch mit AJAX (`05_ajax_gaestebuch_aufgabe`)

1. Was ändert sich für Nutzer/-innen gegenüber dem Gästebuch aus Übung 6.4?
2. Warum gibt es eine eigene Datei `api.php` neben dem Controller? Welche Teile des MVC-Gästebuchs werden wiederverwendet?
3. Wie unterscheidet `api.php` zwischen „Liste laden“ und „Eintrag speichern“?
4. Wann wird `onLoad()` aufgerufen?
5. Wie sieht die JSON-Antwort des Servers aus, und wie greift man in JavaScript auf `entries` zu?
6. Warum bleiben die Einträge auch mit AJAX erhalten (Session)? Schickt `fetch()` das Session-Cookie mit?
7. Warum schützt `htmlspecialchars()` im Model weiterhin vor XSS, obwohl die Einträge jetzt per JavaScript eingefügt werden? Worauf muss `fillList()` achten?

<details><summary>Erwartete Antworten</summary>

1. Das Absenden und Laden der Einträge geschieht ohne Neuladen der Seite.
2. `api.php` liefert JSON statt HTML. Das Model `Gaestebuch` (Session-Speicherung) wird wiederverwendet.
3. Über das Feld `action` im JSON-Body (`"list"` bzw. `"save"`).
4. Beim Laden der Seite, um die vorhandenen Einträge anzuzeigen.
5. `{"entries": ["…", "…"]}`; `antwort.entries` ist ein Array.
6. Die Session liegt auf dem Server. `fetch` sendet Cookies bei Anfragen an denselben Origin standardmäßig mit.
7. Die Einträge werden im Model schon maskiert gespeichert. Die vorgegebene `createListElement()` fügt sie aber mit `textContent` ein, das ist bereits sicher. Dadurch wird doppelt maskiert: Eine Eingabe wie `<b>` erscheint als `&lt;b&gt;`. Guter Diskussionspunkt: Maskiert wird dort, wo ausgegeben wird (PHP-View mit `htmlspecialchars`, JS mit `textContent`), nicht schon beim Speichern.
</details>
