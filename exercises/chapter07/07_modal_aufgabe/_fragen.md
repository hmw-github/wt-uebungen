## 7.7 Modal (`07_modal_aufgabe`)

1. Was ist ein Modal-Dialog? Wann setzt man ihn ein?
2. Wie ist ein Bootstrap-Modal aufgebaut (`modal` > `modal-dialog` > `modal-content` > header/body/footer)?
3. Was bewirkt `data-bs-dismiss="modal"`?
4. Wie öffnet und schließt man ein Modal per JavaScript (`bootstrap.Modal.getOrCreateInstance(...).show()`/`.hide()`)?
5. Warum muss man sich die `cardId` zwischen `projektBearbeiten()` und `speichern()` merken? Wo speichert man sie?
6. Wie liest man einen Wert aus einem `span` und wie schreibt man ihn in ein Eingabefeld (und umgekehrt)?
7. Warum muss `dataset.jahr` der Card nach dem Speichern aktualisiert werden?
8. Werden die Änderungen dauerhaft gespeichert? Was passiert beim Neuladen der Seite?

<details><summary>Erwartete Antworten</summary>

1. Ein Dialog über der Seite, der die Interaktion mit dem Rest blockiert, bis er geschlossen wird, z.B. zum Bearbeiten oder Bestätigen.
2. Wie in der Frage angegeben. `modal-header` enthält Titel und Schließen-Button, `modal-body` den Inhalt, `modal-footer` die Aktions-Buttons.
3. Bootstrap schließt das Modal beim Klick automatisch, ohne eigenen Code.
4. `const m = bootstrap.Modal.getOrCreateInstance(document.getElementById("bearbeitenModal")); m.show(); m.hide();`
5. `speichern()` muss wissen, welche Card bearbeitet wird. Man speichert sie in einer Variablen außerhalb der Funktionen.
6. Lesen: `span.textContent`, schreiben ins Feld: `input.value = …`; zurück umgekehrt.
7. Der Hervorheben-Button sucht Cards über `[data-jahr="2026"]`. Ohne Aktualisierung passt das Attribut nicht mehr zum angezeigten Jahr.
8. Nein, die Änderungen stehen nur im DOM. Nach dem Neuladen sind sie weg (in Kapitel 9 speichert man sie über die REST-API).
</details>
