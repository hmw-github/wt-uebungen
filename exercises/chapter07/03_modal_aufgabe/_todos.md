# TODOs – Modal

## projekte.html
1. TODO 1: Modal-Grundstruktur erstellen: `div class="modal"
   id="bearbeitenModal"` > `div class="modal-dialog"` >
   `div class="modal-content"` mit `modal-header` (Titel "Projekt
   bearbeiten", Schließen-Button `button class="btn-close"
   data-bs-dismiss="modal"`), `modal-body` mit drei Formularfeldern
   (je label + `input class="form-control"`): Titel (`id="modalTitel"`),
   Technologie (`id="modalTechnologie"`), Jahr (`id="modalJahr"`,
   `type="number"`), sowie `modal-footer` mit den Buttons "Abbrechen"
   (Klasse "btn btn-secondary", `onclick="schließen()"`) und "Speichern"
   (Klasse "btn btn-primary", `onclick="speichern()"`).
2. TODO 2: JavaScript-Funktion `projektBearbeiten(cardId)` implementieren:
   liest die aktuellen Werte aus den Elementen `cardId+"-titel"`,
   `cardId+"-technologie"`, `cardId+"-jahr"` aus, schreibt sie in die
   Modal-Eingabefelder (modalTitel, modalTechnologie, modalJahr), merkt
   sich die cardId (z.B. in einer Modul-Variable) und zeigt das Modal via
   `bootstrap.Modal.getOrCreateInstance(modalElement).show()` an.
3. TODO 3: JavaScript-Funktion `schließen()` implementieren, die das
   Modal via `bootstrap.Modal.getOrCreateInstance(modalElement).hide()`
   wieder ausblendet, ohne etwas zu speichern.
4. TODO 4: JavaScript-Funktion `speichern()` implementieren, die die
   aktuellen Werte aus den Modal-Eingabefeldern zurück in die
   entsprechenden Karten-Elemente (`cardId+"-titel"` usw.) schreibt. Dabei
   auch das `data-jahr`-Attribut der Karte selbst
   (`document.getElementById(cardId).dataset.jahr`) auf den neuen
   Jahreswert aktualisieren, damit der Hervorheben-Button
   (`[data-jahr="2026"]`) die Karte nach einer Jahresänderung weiterhin
   findet. Anschließend das Modal ebenfalls schließen (z.B. durch Aufruf
   von `schließen()`).

(ueber-mich.html und rechtliches/impressum.html unterscheiden sich nur
durch den aktualisierten Kopfkommentar-Titel bzw. sind unverändert;
css/* und js/* sind unverändert – daher hier nicht aufgeführt.)
