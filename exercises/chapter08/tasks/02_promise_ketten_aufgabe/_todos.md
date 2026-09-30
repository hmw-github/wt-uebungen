# TODOs – Task 2: Promises erzeugen, verketten und kombinieren

## index.html
1. TODO 1: `warte(ms)` gibt `new Promise(...)` zurück. In der übergebenen Funktion wird mit `setTimeout(resolve, ms)` dafür gesorgt, dass das Promise nach `ms` Millisekunden erfüllt wird. `reject` wird hier nicht benötigt.
2. TODO 2: `wuerfeln()` gibt ebenfalls ein neues Promise zurück. Darin mit `setTimeout` eine zufällige Verzögerung von 300 bis 1000 ms abwarten (`300 + Math.random() * 700`), dann `Math.floor(Math.random() * 6) + 1` würfeln. Bei einer 1 `reject(new Error("Eine 1 gewürfelt - verloren!"))`, sonst `resolve(zahl)`.
3. TODO 3: In `starteKette()` eine Kette bauen:
   - `warte(1000).then(...)`: „Wartezeit vorbei, würfle ...“ ausgeben und `return wuerfeln();`
   - `.then(function(zahl) {...})`: Zahl ausgeben; bei `zahl < 4` mit `throw new Error("Zahl zu klein: " + zahl)` abbrechen, sonst `return zahl * 10;`
   - `.then(function(punkte) {...})`: „Gewonnen! Punkte: …“ ausgeben
   - `.catch(...)`: Fehlermeldung mit `ausgabe("Fehler: " + error.message, true)` rot ausgeben
   - `.finally(...)`: „Kette beendet.“ ausgeben (wird in jedem Fall ausgeführt, siehe [MDN: Promise.prototype.finally()](https://developer.mozilla.org/de/docs/Web/JavaScript/Reference/Global_Objects/Promise/finally))
   - Nach der Kette: „starteKette() ist fertig (die Kette läuft noch).“ ausgeben.
4. TODO 4: In `dreiWuerfel()` `Promise.all([wuerfeln(), wuerfeln(), wuerfeln()])` aufrufen. Das `.then()` erhält ein Array mit den drei Zahlen (in der Reihenfolge der übergebenen Promises); Zahlen (z.B. mit `join(", ")`) und Summe ausgeben. Im `.catch()` die Fehlermeldung rot ausgeben. Siehe [MDN: Promise.all()](https://developer.mozilla.org/de/docs/Web/JavaScript/Reference/Global_Objects/Promise/all).
5. TODO 5: `starteKetteMitAwait()` mit `async` kennzeichnen und die Logik aus TODO 3 mit `await warte(1000)` und `const zahl = await wuerfeln()` formulieren. Fehler mit `try { … } catch (error) { … } finally { … }` behandeln.

Testen: Jeden Button mehrmals drücken, bis sowohl Erfolgs- als auch Fehlerfälle aufgetreten sind (1 gewürfelt, Zahl zu klein, gewonnen). Dabei auf die Zeitstempel achten.

Hinweis: Diese Übung ist rein clientseitig und kann direkt als lokale Datei im Browser geöffnet werden.
