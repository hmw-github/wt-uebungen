## 3.2 Kontaktformular (`02_kontaktformular_aufgabe`)

1. Wie funktioniert ein Formular?
2. Was bedeuten die Attribute `action` und `method` eines Formulars?
3. Was ist der Unterschied zwischen GET und POST beim Absenden?
4. Wozu dient das Attribut `name` eines Eingabefelds? Und wozu `id`?
5. Wie verknüpft man ein `label` mit einem Eingabefeld und welchen Vorteil hat das?
6. Was bewirkt `required`? Was bringt `type="email"` gegenüber `type="text"`?
7. Warum müssen zwei Radiobuttons denselben `name` haben? Wozu dient `value`?
8. Wie wählt man eine `option` in einem `select` vor?
9. Was ist der Unterschied zwischen `input` und `textarea`?
10. Was wird bei einer nicht angehakten Checkbox an den Server gesendet?

<details><summary>Erwartete Antworten</summary>

1. Bei einem `submit`-Ereignis (z.B. submit-Button gedrückt) wird das Formular an den mit `action` spezifizierten URL gesendet. `method` definiert, wie die Eingabefelder übertragen werden. Ist `action` leer (oder fehlt), so wird die selbe Seite nochmal angefordert.
2. `action`: URL, an die die Daten gesendet werden. `method`: HTTP-Methode (GET oder POST).
3. GET hängt die Daten sichtbar an die URL (Länge begrenzt, als Link teilbar). POST sendet sie im Request-Body.
4. `name` ist der Schlüssel, unter dem der Wert gesendet wird. `id` identifiziert das Element eindeutig in der Seite (für label, CSS, JS).
5. `<label for="nameFeld">` und `<input id="nameFeld">` (oder Feld im label einschließen). Klick auf das label fokussiert das Feld, Screenreader lesen das label vor.
6. `required`: Browser verhindert das Absenden bei leerem Feld. `type="email"` prüft das Format und zeigt auf Smartphones eine passende Tastatur.
7. Radiobuttons mit gleichem `name` bilden eine Gruppe, in der nur einer wählbar ist. `value` ist der gesendete Wert.
8. Mit dem Attribut `selected`.
9. `input` ist einzeilig (leeres Element), `textarea` mehrzeilig mit Start- und End-Tag.
10. Nichts: Das Feld fehlt komplett in den gesendeten Daten (wichtig für Kapitel 6).
</details>
