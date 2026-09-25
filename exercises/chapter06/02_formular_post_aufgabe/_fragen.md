## 6.2 Formularverarbeitung mit POST (`02_formular_post_aufgabe`)

1. Wie gelangen die Werte aus `kontakt.html` in `kontakt-verarbeiten.php`? Welche Rolle spielen `action`, `method` und `name`?
2. Was ist `$_POST`?
3. Warum reicht `isset()` für Pflichtfelder nicht aus? Wie prüft man zusätzlich auf „nicht leer“?
4. Warum ist `$_POST['newsletter']` bei nicht angehakter Checkbox nicht gesetzt? Wie macht man daraus einen Boolean?
5. Wofür verwendet man `??` bei `betreff` und `rueckmeldung`?
6. Was ist XSS? Was macht `htmlspecialchars()` genau?
7. Warum reicht die `required`-Prüfung im Browser nicht aus?
8. Was ist der Unterschied zwischen `$_POST` und `$_GET`? Wann wäre ein Formular mit `method="get"` die bessere Wahl (z.B. ein Suchformular)?

<details><summary>Erwartete Antworten</summary>

1. Der Browser sendet die Felder als Schlüssel (`name`) und Wert per POST an die URL aus `action`.
2. Ein superglobales Array mit den per POST gesendeten Formularwerten.
3. Ein leeres Textfeld wird trotzdem mitgesendet (leerer String). Zusätzlich `!empty()` oder `trim(...) !== ""` prüfen.
4. Nicht angehakte Checkboxen werden nicht mitgesendet. `$newsletter = isset($_POST['newsletter']);`
5. Um einen Standardwert zu setzen, falls der Wert fehlt.
6. Cross-Site-Scripting: Eingeschleuster Code wird im Browser anderer ausgeführt. `htmlspecialchars()` wandelt `<`, `>`, `&`, `"`, `'` in HTML-Entities um.
7. Browserprüfungen lassen sich umgehen (DevTools, direkte HTTP-Anfragen). Der Server muss selbst prüfen.
8. `$_GET` enthält die Parameter aus der URL (Query-String), `$_POST` die Werte aus dem Request-Body. GET eignet sich für Abfragen ohne Seiteneffekte, deren Ergebnis man als Link teilen oder als Lesezeichen speichern möchte (Suche, Filter); POST für Daten, die etwas verändern oder nicht in der URL stehen sollen (Kontaktformular).
</details>
