## 8.3 Fetch mit GET (`03_fetch_get_aufgabe`)

1. Was liefert `fetch()` zurück?
2. Was bedeutet `response.ok`? Warum löst ein HTTP-Fehler wie 404 nicht automatisch `.catch()` aus?
3. Warum liefert `response.text()` wieder ein Promise? Wie verkettet man die `.then()`-Aufrufe?
4. Was passiert mit einem `throw` innerhalb eines `.then()`?
5. Welche Fehler landen im `.catch()`?
6. Welche Vorteile hat `fetch()` gegenüber `XMLHttpRequest`?

<details><summary>Erwartete Antworten</summary>

1. Ein Promise, das mit einem `Response`-Objekt erfüllt wird.
2. `true` bei Statuscodes 200–299. `fetch` weist nur bei Netzwerkfehlern ab, eine Fehlerantwort des Servers ist trotzdem eine Antwort.
3. Der Body wird als Stream gelesen und kann noch unterwegs sein. Wird in einem `.then()` ein Promise zurückgegeben, wartet das nächste `.then()` auf dessen Ergebnis.
4. Das nachfolgende Promise wird abgewiesen, die nächsten `.then()` werden übersprungen, `.catch()` wird ausgeführt.
5. Netzwerkfehler, selbst geworfene Fehler (z.B. bei `!response.ok`) und Fehler in den `.then()`-Funktionen.
6. Promise-basiert, kürzer, lesbarer, keine readyState-Abfrage.
</details>
