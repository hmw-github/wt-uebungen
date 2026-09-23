## 5.3 JSON (`03_json_aufgabe.html`)

1. Was ist JSON? Wofür wird es verwendet?
2. Wie unterscheidet sich JSON von einem JavaScript-Objekt-Literal?
3. Was machen `JSON.stringify()` und `JSON.parse()`? Welcher Datentyp kommt jeweils heraus?
4. Was ist `localStorage`? Welche Werte kann man darin speichern?
5. Warum muss man ein Objekt vor dem Speichern in `localStorage` in JSON umwandeln?
6. Wie lange bleiben Daten im `localStorage` erhalten? Worin unterscheidet sich `sessionStorage`?
7. Wo kann man den Inhalt von `localStorage` im Browser ansehen?

<details><summary>Erwartete Antworten</summary>

1. JavaScript Object Notation: ein textbasiertes Format für Datenaustausch (z.B. zwischen Client und Server, später REST).
2. Schlüssel und Strings stehen immer in doppelten Anführungszeichen. Keine Funktionen, kein `undefined`, keine Kommentare.
3. `stringify`: Objekt → String. `parse`: String → Objekt.
4. Ein Schlüssel-Wert-Speicher im Browser, pro Origin. Er speichert nur Strings.
5. Sonst wird `toString()` verwendet und es steht `"[object Object]"` im Speicher.
6. Dauerhaft, bis sie gelöscht werden. `sessionStorage` gilt nur für den aktuellen Tab.
7. DevTools → Anwendung/Speicher → Local Storage.
</details>
