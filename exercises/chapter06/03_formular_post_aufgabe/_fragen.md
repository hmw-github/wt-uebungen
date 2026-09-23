## 6.3 Formularverarbeitung mit POST (`03_formular_post_aufgabe`)

1. Wie gelangen die Werte aus `kontakt.html` in `kontakt-verarbeiten.php`? Welche Rolle spielen `action`, `method` und `name`?
2. Was ist `$_POST`?
3. Warum reicht `isset()` für Pflichtfelder nicht aus? Wie prüft man zusätzlich auf „nicht leer“?
4. Warum ist `$_POST['newsletter']` bei nicht angehakter Checkbox nicht gesetzt? Wie macht man daraus einen Boolean?
5. Wofür verwendet man `??` bei `betreff` und `rueckmeldung`?
6. Was ist XSS? Was macht `htmlspecialchars()` genau?
7. Warum reicht die `required`-Prüfung im Browser nicht aus?

<details><summary>Erwartete Antworten</summary>

1. Der Browser sendet die Felder als Schlüssel (`name`) und Wert per POST an die URL aus `action`.
2. Ein superglobales Array mit den per POST gesendeten Formularwerten.
3. Ein leeres Textfeld wird trotzdem mitgesendet (leerer String). Zusätzlich `!empty()` oder `trim(...) !== ""` prüfen.
4. Nicht angehakte Checkboxen werden nicht mitgesendet. `$newsletter = isset($_POST['newsletter']);`
5. Um einen Standardwert zu setzen, falls der Wert fehlt.
6. Cross-Site-Scripting: Eingeschleuster Code wird im Browser anderer ausgeführt. `htmlspecialchars()` wandelt `<`, `>`, `&`, `"`, `'` in HTML-Entities um.
7. Browserprüfungen lassen sich umgehen (DevTools, direkte HTTP-Anfragen). Der Server muss selbst prüfen.
</details>
