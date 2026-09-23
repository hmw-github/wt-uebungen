## 8.4 Fetch mit POST und async/await (`04_fetch_post_async_await_aufgabe`)

1. Was bewirken `async` und `await`? Was gibt eine `async`-Funktion immer zurück?
2. Wo darf `await` stehen?
3. Wie gibt man bei `fetch()` Methode, Header und Body an?
4. Warum setzt man den Header `Content-Type: application/json`?
5. Warum wird der Body mit `JSON.stringify()` erzeugt?
6. Wie fängt man mit `async`/`await` Fehler ab?
7. Warum kann PHP den JSON-Body nicht über `$_POST` lesen? Wie liest man ihn stattdessen?
8. Was bewirkt das zweite Argument `true` bei `json_decode()`?
9. Wie setzt man in PHP einen Response-Header, und was macht `json_encode()`?

<details><summary>Erwartete Antworten</summary>

1. `async` kennzeichnet eine asynchrone Funktion (sie gibt immer ein Promise zurück), `await` wartet auf ein Promise und liefert dessen Wert.
2. In `async`-Funktionen (und auf oberster Ebene in Modulen).
3. `fetch(url, { method: "POST", headers: { "Content-Type": "application/json" }, body: … })`
4. Damit der Server weiß, dass der Body JSON enthält.
5. Der Body muss ein String (bzw. Blob/FormData) sein, kein Objekt.
6. Mit `try { … } catch (e) { … }`.
7. `$_POST` wird nur bei Formular-Kodierung (`application/x-www-form-urlencoded`, `multipart/form-data`) befüllt. Den rohen Body liest man mit `file_get_contents("php://input")`.
8. Ein assoziatives Array statt eines Objekts.
9. `header("Content-Type: application/json");` (vor jeder Ausgabe). `json_encode()` wandelt ein PHP-Array in einen JSON-String um.
</details>
