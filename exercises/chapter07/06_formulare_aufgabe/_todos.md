# TODOs – Formulare

## kontakt.php
1. TODO 1: Dem Textfeld für den Namen die Klasse "form-control" hinzufügen.
2. TODO 2: Dem E-Mail-Feld (id="emailFeld") die Klasse "form-control"
   hinzufügen.
3. TODO 3: Die beiden Radiobuttons "Bevorzugte Rückmeldung" mit Bootstrap
   gestalten: je ein umschließendes div class="form-check
   form-check-inline", die Klasse "form-check-input" auf dem input
   type="radio" sowie die Klasse "form-check-label" auf dem zugehörigen
   label.
4. TODO 4: Der Auswahlliste "Betreff" die Klasse "form-select" hinzufügen.
5. TODO 5: Dem textarea für die Nachricht die Klasse "form-control"
   hinzufügen.
6. TODO 6: Die Newsletter-Checkbox mit Bootstrap gestalten: ein
   umschließendes div class="form-check", die Klasse "form-check-input"
   auf dem input type="checkbox" sowie die Klasse "form-check-label" auf
   dem zugehörigen label.
7. TODO 7: Bei den vier Feldern Name, E-Mail, "Bevorzugte Rückmeldung" und
   Nachricht jeweils ein div class="invalid-feedback" mit passendem
   Hinweistext direkt nach dem jeweiligen Eingabeelement ergänzen (bei der
   Rückmeldung: nach den beiden Radiobutton-divs, mit
   id="rueckmeldungFeedback", da sich hier zwei Eingabeelemente ein
   gemeinsames Feedback-Element teilen).
8. TODO 8: Im vorgegebenen script-Block ein JavaScript-Snippet ergänzen,
   das beim Verlassen des E-Mail-Feldes (Event "blur") prüft, ob der
   eingegebene Wert ein "@"-Zeichen enthält: wenn ja, Klasse "is-invalid"
   entfernen und Klasse "is-valid" setzen; wenn nein, Klasse "is-valid"
   entfernen und Klasse "is-invalid" setzen (bewusst eine einfache
   clientseitige Demo-Prüfung, keine vollständige E-Mail-Validierung).
9. TODO 9: Analoges JavaScript-Snippet für das Namensfeld (Event "blur"):
   prüft, ob der (getrimmte) Wert mindestens 5 Zeichen lang ist, und
   setzt je nach Ergebnis "is-valid"/"is-invalid".
10. TODO 10: JavaScript-Snippet für die beiden Rückmeldung-Radiobuttons
    (`document.querySelectorAll('input[name="rueckmeldung"]')`): bei
    "blur" eines der beiden prüfen, ob mindestens einer checked ist, dann
    bei beiden "is-valid"/"is-invalid" setzen sowie zusätzlich "d-block"
    auf `rueckmeldungFeedback` bei Ungültigkeit setzen bzw. entfernen (das
    Feedback-Element ist hier kein direktes Geschwisterelement eines
    einzelnen Eingabefelds, daher blendet Bootstrap es nicht automatisch
    ein).
11. TODO 11: Analoges JavaScript-Snippet für das Nachrichtenfeld (Event
    "blur"): prüft, ob der (getrimmte) Wert nicht leer ist, und setzt je
    nach Ergebnis "is-valid"/"is-invalid".

## ueber-mich.html
- (kein TODO-Marker) Die Seite enthält bereits die vollständige Lösung
  aus Übung 5 (Tabs) als fertige Ausgangsbasis – keine eigenen Aufgaben.

(projekte.html und rechtliches/impressum.html unterscheiden sich nur
durch den aktualisierten Kopfkommentar-Titel bzw. sind unverändert;
css/* und js/* sind unverändert – daher hier nicht aufgeführt.)
