## Task 3: Daten per Fetch/POST senden (`tasks/03_fetch_post_karten_aufgabe`)

1. Was passiert, wenn man `event.preventDefault()` weglässt?
2. Warum wird der Handler mit `addEventListener("submit", …)` am Formular registriert und nicht mit `onclick` am Button?
3. Welche drei Angaben im zweiten Argument von `fetch()` machen aus der GET- eine POST-Anfrage mit JSON-Daten, und wozu dient jede?
4. Welchen Statuscode liefert der Server bei Erfolg, und was bedeutet er? Ist `response.ok` dann `true`?
5. Warum ist der neue Beitrag nach dem Neuladen der Seite verschwunden, und warum erhält jeder neue Beitrag die id 101? Was müsste ein „echter“ Server anders machen?
6. Wozu wird der Button während des Sendens deaktiviert, und warum wird er im `finally`-Block wieder aktiviert (statt am Ende des `try`-Blocks)?
7. Im Netzwerk-Tab erscheint vor dem POST-Request teilweise ein `OPTIONS`-Request. Was ist das?

<details><summary>Erwartete Antworten</summary>

1. Der Browser sendet das Formular klassisch ab und lädt die Seite neu; der Fetch-Request wird abgebrochen bzw. sein Ergebnis geht verloren.
2. `submit` wird auch beim Drücken der Eingabetaste ausgelöst, und die HTML-Validierung (`required`) findet vorher statt – ein leeres Formular löst kein `submit` aus.
3. `method: "POST"` (HTTP-Methode), `headers: { "Content-Type": "application/json" }` (teilt dem Server das Format des Bodys mit), `body: JSON.stringify(...)` (die eigentlichen Daten als String).
4. `201 Created` – eine neue Ressource wurde angelegt. Ja, `ok` ist für alle Statuscodes 200–299 `true`.
5. JSONPlaceholder ist ein Test-Server, der das Anlegen nur simuliert und nichts speichert. Er hat 100 Beiträge und antwortet daher immer mit der nächsten id 101. Ein echter Server würde den Beitrag in einer Datenbank speichern und eine eindeutige id vergeben (vgl. Übung 5, AJAX-Gästebuch, und Kapitel 9, REST).
6. Um doppeltes Absenden durch mehrfaches Klicken zu verhindern. `finally` wird auch im Fehlerfall ausgeführt; stünde die Zeile im `try`-Block, bliebe der Button nach einem Fehler dauerhaft deaktiviert.
7. Ein CORS-Preflight: Da der Request an einen anderen Ursprung geht und `Content-Type: application/json` kein „einfacher“ Header ist, fragt der Browser zuerst per `OPTIONS` nach, ob der Server die Anfrage erlaubt.
</details>
