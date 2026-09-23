## 5.4 DOM-Werte lesen (`04_dom_werte_lesen_aufgabe`)

1. Was ist das DOM?
2. Wie findet man Elemente (`getElementById`, `querySelector`, `querySelectorAll`)?
3. Was liefert `.value` bei Textfeld, `select` und `textarea`? Wie prüft man eine Checkbox?
4. Wie ermittelt man den ausgewählten Radiobutton? Warum kann das Ergebnis `null` sein, und wie geht man damit um?
5. Wie registriert man einen Submit-Handler? Was macht `event.preventDefault()`?
6. Was bewirkt `location.href = "…"`?
7. Was ist der Unterschied zwischen `textContent` und `innerHTML`? Warum ist `textContent` hier sicherer?
8. Warum kann man Daten über `localStorage` von einer Seite zur nächsten übergeben?

<details><summary>Erwartete Antworten</summary>

1. Document Object Model: die Baumdarstellung der HTML-Seite als Objekte, die JavaScript lesen und ändern kann.
2. `getElementById("id")` per ID, `querySelector("css")` erstes passendes Element, `querySelectorAll("css")` alle passenden (NodeList).
3. Den eingegebenen bzw. gewählten Wert als String. Checkbox: `.checked` (true/false).
4. `document.querySelector('input[name="rueckmeldung"]:checked')`. Ist nichts ausgewählt, ist das Ergebnis `null`, daher vor `.value` prüfen (z.B. `feld ? feld.value : ""`).
5. `formular.addEventListener("submit", function (event) { … })`. `preventDefault()` verhindert das normale Absenden des Formulars.
6. Der Browser lädt die angegebene Seite (Weiterleitung).
7. `textContent` setzt reinen Text, `innerHTML` interpretiert HTML. Mit `textContent` können Nutzereingaben keinen HTML-/Skriptcode einschleusen (XSS).
8. Beide Seiten haben denselben Origin und teilen sich daher denselben `localStorage`.
</details>
