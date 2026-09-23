## 3.7 Formulare (`07_formulare_aufgabe`)

1. Was bedeuten die Attribute `action` und `method` eines Formulars?
2. Was ist der Unterschied zwischen GET und POST beim Absenden?
3. Wozu dient das Attribut `name` eines Eingabefelds? Und wozu `id`?
4. Wie verknüpft man ein `label` mit einem Eingabefeld und welchen Vorteil hat das?
5. Was bewirkt `required`? Was bringt `type="email"` gegenüber `type="text"`?
6. Warum müssen zwei Radiobuttons denselben `name` haben? Wozu dient `value`?
7. Wie wählt man eine `option` in einem `select` vor?
8. Was ist der Unterschied zwischen `input` und `textarea`?
9. Was wird bei einer nicht angehakten Checkbox an den Server gesendet?

<details><summary>Erwartete Antworten</summary>

1. `action`: URL, an die die Daten gesendet werden. `method`: HTTP-Methode (GET oder POST).
2. GET hängt die Daten sichtbar an die URL (Länge begrenzt, als Link teilbar). POST sendet sie im Request-Body.
3. `name` ist der Schlüssel, unter dem der Wert gesendet wird. `id` identifiziert das Element eindeutig in der Seite (für label, CSS, JS).
4. `<label for="nameFeld">` und `<input id="nameFeld">` (oder Feld im label einschließen). Klick auf das label fokussiert das Feld, Screenreader lesen das label vor.
5. `required`: Browser verhindert das Absenden bei leerem Feld. `type="email"` prüft das Format und zeigt auf Smartphones eine passende Tastatur.
6. Radiobuttons mit gleichem `name` bilden eine Gruppe, in der nur einer wählbar ist. `value` ist der gesendete Wert.
7. Mit dem Attribut `selected`.
8. `input` ist einzeilig (leeres Element), `textarea` mehrzeilig mit Start- und End-Tag.
9. Nichts: Das Feld fehlt komplett in den gesendeten Daten (wichtig für Kapitel 6).
</details>

</details>
