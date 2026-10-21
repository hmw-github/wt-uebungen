# TODOs – Formulare

## kontakt.php
1. TODO 1: Das Textfeld für den Namen erscheint im Bootstrap-Stil (volle
   Breite, abgerundeter Rahmen, farbiges Leuchten beim Fokussieren).
2. TODO 2: Das E-Mail-Feld (id="emailFeld") erscheint ebenso im
   Bootstrap-Stil.
3. TODO 3: Die beiden Radiobuttons "Bevorzugte Rückmeldung" erscheinen im
   Bootstrap-Stil und stehen samt Beschriftung nebeneinander in einer
   Zeile. Ein Klick auf die Beschriftung wählt den jeweiligen Radiobutton
   aus.
4. TODO 4: Die Auswahlliste "Betreff" erscheint im Bootstrap-Stil (volle
   Breite, Bootstrap-eigener Auswahlpfeil).
5. TODO 5: Das Nachrichtenfeld erscheint im Bootstrap-Stil.
6. TODO 6: Die Newsletter-Checkbox erscheint im Bootstrap-Stil, mit sauber
   daneben ausgerichteter Beschriftung.
7. TODO 7: Für die vier Felder Name, E-Mail, "Bevorzugte Rückmeldung" und
   Nachricht gibt es je einen passenden Hinweistext (z.B. "Bitte geben Sie
   eine gültige E-Mail-Adresse ein."). Er ist zunächst unsichtbar und
   erscheint rot direkt unter dem Feld, sobald das Feld als ungültig
   markiert ist (siehe TODO 8–11). Die beiden Radiobuttons teilen sich
   einen gemeinsamen Hinweis, der über die id "rueckmeldungFeedback"
   erreichbar ist.
8. TODO 8: Verlässt man das E-Mail-Feld, wird die Eingabe sofort
   bewertet: Enthält sie ein "@", erscheint das Feld grün umrandet mit
   Häkchen; andernfalls rot umrandet mit dem Hinweistext aus TODO 7.
   Beim erneuten Verlassen wird neu bewertet, das Feld ist also nie
   gleichzeitig als gültig und ungültig markiert. Der Code steht im
   vorgegebenen script-Block. (Bewusst eine einfache clientseitige
   Demo-Prüfung, keine vollständige E-Mail-Validierung.)
9. TODO 9: Gleiches Verhalten für das Namensfeld: gültig ab mindestens 5
   Zeichen, wobei Leerzeichen am Anfang und Ende nicht mitzählen
   ("   Al   " ist also ungültig).
10. TODO 10: Verlässt man einen der beiden Rückmeldung-Radiobuttons,
    werden beide bewertet: grün, sobald einer von ihnen ausgewählt ist,
    sonst rot. Zusätzlich ist der gemeinsame Hinweistext
    "rueckmeldungFeedback" genau dann sichtbar, wenn keiner ausgewählt
    ist. Hinweis: Bootstrap blendet diesen Hinweis hier nicht automatisch
    ein, da er zu keinem einzelnen Eingabefeld gehört. Sie müssen also
    selbst für seine Sichtbarkeit sorgen.
11. TODO 11: Gleiches Verhalten für das Nachrichtenfeld: gültig, wenn es
    mehr als nur Leerzeichen enthält, sonst ungültig.

## ueber-mich.html
- (kein TODO-Marker) Die Seite enthält bereits die vollständige Lösung
  aus Übung 1 (Tabs) als fertige Ausgangsbasis – keine eigenen Aufgaben.

(projekte.html und rechtliches/impressum.html unterscheiden sich nur
durch den aktualisierten Kopfkommentar-Titel bzw. sind unverändert;
css/* und js/* sind unverändert – daher hier nicht aufgeführt.)
