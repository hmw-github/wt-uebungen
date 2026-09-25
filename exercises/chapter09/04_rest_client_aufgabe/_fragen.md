## 9.4 REST-Client (`04_rest_client_aufgabe`)

1. Welche Anfrage (Methode + URL) gehört zu Laden, Anlegen, Ändern und Löschen eines Projekts?
2. Wie sendet man mit `fetch()` eine PUT- bzw. DELETE-Anfrage?
3. Woran erkennt `speichern()`, ob ein neues Projekt angelegt oder ein bestehendes geändert werden soll?
4. Warum lädt man nach jeder Änderung die Liste mit `ladeProjekte()` neu, statt die Karte direkt zu ändern? Welche Nachteile hat das?
5. Wozu dient `projekteCache`?
6. Wie leert man einen Container vor dem Neuaufbau (z.B. `innerHTML = ""` oder `replaceChildren()`)?
7. Warum muss man `ladeProjekte()` nach `await fetch(...)` aufrufen und nicht direkt danach ohne `await`?
8. Was ändert sich gegenüber der Modal-Lösung aus Übung 7.3 für die Dauerhaftigkeit der Daten?

<details><summary>Erwartete Antworten</summary>

1. GET `api/projekte`, POST `api/projekt`, PUT `api/projekt/{id}`, DELETE `api/projekt/{id}`.
2. `fetch(url, { method: "PUT", headers: { "Content-Type": "application/json" }, body: JSON.stringify(daten) })` bzw. `fetch(url, { method: "DELETE" })`.
3. `aktuelleProjektId` ist `null` → POST (neu), sonst PUT (ändern).
4. Die Anzeige entspricht garantiert dem Stand des Servers (z.B. neue ID). Nachteil: eine zusätzliche Anfrage pro Änderung.
5. Die zuletzt geladenen Projektdaten, damit `projektBearbeiten()` das Modal ohne erneute Anfrage füllen kann.
6. `container.innerHTML = "";` oder `container.replaceChildren();`
7. Sonst wird die Liste evtl. geladen, bevor der Server die Änderung verarbeitet hat, und die alte Liste wird angezeigt.
8. Die Änderungen liegen jetzt auf dem Server (in der Session) und bleiben beim Neuladen der Seite erhalten.
</details>
