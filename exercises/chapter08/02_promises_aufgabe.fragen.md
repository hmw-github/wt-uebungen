## 8.2 Promises (`02_promises_aufgabe.html`)

1. Was ist ein Promise? Welche Zustände kann es haben?
2. Was bewirken `resolve` und `reject` in `erzeugeZahlenPromise()`?
3. Was machen `.then()` und `.catch()`? Was bekommt die Funktion in `.then()` übergeben?
4. Warum erscheinen die Zahlen nicht in der Reihenfolge, in der die Promises erzeugt wurden?
5. Was ist der Unterschied zwischen `console.log()` und `console.error()`?
6. Wie prüft man, ob eine Zahl gerade ist?

<details><summary>Erwartete Antworten</summary>

1. Ein Objekt, das das Ergebnis einer asynchronen Operation darstellt. Zustände: pending, fulfilled, rejected.
2. `resolve(wert)` erfüllt das Promise mit einem Wert, `reject(fehler)` weist es ab.
3. `.then(fn)` wird bei Erfolg mit dem Ergebniswert aufgerufen, `.catch(fn)` bei Fehler mit dem Fehler.
4. Jedes Promise wird nach einer zufälligen Verzögerung erfüllt. Die Reihenfolge der Ergebnisse hängt von der Verzögerung ab, nicht von der Erzeugung.
5. `error` wird als Fehler (rot) markiert und kann in der Konsole gefiltert werden.
6. `zahl % 2 === 0`.
</details>
