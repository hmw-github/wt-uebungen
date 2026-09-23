## 7.4 Cards (`04_cards_aufgabe`)

1. Wie ist eine Bootstrap-Card aufgebaut (`card`, `card-header`, `card-body`, `card-text`, `card-footer`)?
2. Warum steckt jede Card in einer Spalte `col-md-6`? Wie viele Cards stehen nebeneinander?
3. Wie erzeugt man per JavaScript ein Element mit Klassen und ID (`className`, `id`)?
4. Was sind `data-*`-Attribute? Wie greift man mit `dataset` darauf zu (`dataset.jahr` ↔ `data-jahr`)?
5. Warum bekommt jede Card eine eindeutige `cardId` und die Elemente IDs wie `card1-titel`?
6. Wie übergibt man beim `addEventListener` einen Parameter an eine Funktion (`projektBearbeiten(cardId)`)?
7. Wie erzeugt man „Technologie:“ fett gefolgt von einem `span`?

<details><summary>Erwartete Antworten</summary>

1. `div.card` enthält optional `card-header`, einen `card-body` mit Inhalten (`card-title`, `card-text`) und optional `card-footer`.
2. Die Cards stehen im Grid: Ab `md` belegt jede 6 von 12 Spalten, also zwei nebeneinander, darunter eine pro Zeile.
3. `el.className = "card"` (oder `classList.add`), `el.id = "…"`.
4. Eigene Attribute zum Speichern von Daten im HTML. `el.dataset.jahr = 2026` setzt `data-jahr="2026"`.
5. Damit man eine bestimmte Card und ihre Felder später (Modal in 7.7) gezielt wiederfindet.
6. Mit einer anonymen Funktion: `button.addEventListener("click", () => projektBearbeiten(cardId));`
7. `strong` mit `textContent = "Technologie: "` und `span` mit dem Wert erzeugen, beide an das `p` anhängen.
</details>
