## Task 2: Promises erzeugen, verketten und kombinieren (`tasks/02_promise_ketten_aufgabe`)

1. Warum erscheint „starteKette() ist fertig (die Kette läuft noch).“ vor „Wartezeit vorbei, würfle ...“, obwohl die Zeile im Code nach der Kette steht?
2. Was passiert in der Kette aus TODO 3, wenn `wuerfeln()` abgewiesen wird? Welche `.then()`-Funktionen werden noch ausgeführt?
3. Was wäre anders, wenn im ersten `.then()` `wuerfeln();` statt `return wuerfeln();` stünde?
4. Wie lange dauert `dreiWuerfel()` ungefähr (siehe Zeitstempel)? Wie lange würde es dauern, wenn man die drei Würfe nacheinander mit `await` ausführt?
5. Was passiert bei `Promise.all()`, wenn einer der drei Würfe eine 1 ergibt? Erhält man die anderen beiden Zahlen?
6. Wann wird der `finally`-Teil ausgeführt, und wofür ist er in der Praxis nützlich (z.B. bei `fetch`)?
7. Welche Vor- und Nachteile hat die async/await-Variante gegenüber der `.then()`-Kette?

<details><summary>Erwartete Antworten</summary>

1. Die `.then()`-Aufrufe registrieren nur Handler und kehren sofort zurück. Die Handler laufen erst, wenn das jeweilige Promise erfüllt ist, also nach Ende des aktuellen Codes (frühestens nach 1 Sekunde).
2. Das von `.then()` gelieferte Promise wird abgewiesen, alle folgenden `.then()`-Handler werden übersprungen und direkt `.catch()` (danach `.finally()`) ausgeführt.
3. Das nächste `.then()` würde nicht auf den Wurf warten und `undefined` als `zahl` erhalten; ein späterer Fehler (Wurf 1) würde nicht im `.catch()` landen („Uncaught (in promise)“).
4. Etwa so lange wie der langsamste Wurf (max. ca. 1 s), weil alle drei gleichzeitig laufen. Nacheinander mit `await` addieren sich die Verzögerungen (bis ca. 3 s).
5. `Promise.all()` wird sofort mit dem ersten Fehler abgewiesen; die Ergebnisse der anderen Würfe gehen verloren. (Alternative: `Promise.allSettled()` liefert Status und Wert/Fehler jedes einzelnen Promises.)
6. Immer, egal ob erfüllt oder abgewiesen. Nützlich für Aufräumarbeiten, z.B. Ladeanzeige ausblenden oder einen Button wieder aktivieren.
7. Vorteil: liest sich wie sequenzieller Code, Zwischenergebnisse in normalen Variablen, gewohntes `try/catch`. Nachteil: Verleitet dazu, unabhängige Aufgaben unnötig nacheinander statt parallel auszuführen; `await` nur in `async`-Funktionen (bzw. Modulen) erlaubt.
</details>
