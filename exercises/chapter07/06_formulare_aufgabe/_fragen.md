## 7.6 Formulare (`06_formulare_aufgabe`)

1. Welche Bootstrap-Klassen gibt es für Formularelemente (`form-control`, `form-select`, `form-check`, `form-check-input`, `form-check-label`)?
2. Warum werden Radiobuttons und Checkboxen anders gestaltet als Textfelder?
3. Was bewirkt `form-check-inline`?
4. Wie funktionieren `is-valid`, `is-invalid` und `invalid-feedback` zusammen?
5. Warum muss `invalid-feedback` direkt nach dem Eingabefeld stehen? Warum braucht die Rückmeldung zusätzlich `d-block`?
6. Wann tritt das Event `blur` auf? Wie registriert man einen Listener dafür?
7. Was macht `trim()`? Warum prüft man `wert.trim().length`?
8. Warum ersetzt die clientseitige Prüfung nicht die serverseitige aus Übung 6.2?

<details><summary>Erwartete Antworten</summary>

1. `form-control` für input/textarea, `form-select` für select, `form-check` als Hülle für Checkbox/Radio mit `form-check-input` und `form-check-label`.
2. Sie haben ihr Label daneben statt darüber und eine andere Form.
3. Mehrere Optionen stehen nebeneinander statt untereinander.
4. `is-valid`/`is-invalid` am Feld färben es grün/rot. Ein `invalid-feedback`-Element wird nur sichtbar, wenn das vorhergehende Geschwisterelement `is-invalid` hat.
5. Bootstrap blendet das Feedback per CSS-Geschwisterselektor (`.is-invalid ~ .invalid-feedback`) ein. Bei den Radiobuttons ist es kein Geschwister der inputs, deshalb blendet man es mit `d-block` (display: block) selbst ein.
6. Wenn ein Element den Fokus verliert. `feld.addEventListener("blur", function () { … })`.
7. Entfernt Leerzeichen am Anfang und Ende, sodass „ “ nicht als gültige Eingabe zählt.
8. JavaScript kann deaktiviert oder umgangen werden. Die Prüfung im Browser dient der Benutzerfreundlichkeit, die im Server der Sicherheit.
</details>
