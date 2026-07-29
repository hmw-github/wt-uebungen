# TODOs – Cards

## projekte.html
1. TODO 1: Karte für die Wetter-App (card1) erstellen: `div class="card"`
   mit `card-header` (Titel "Wetter-App", `id="card1-titel"`), `card-body`
   mit zwei Grid-Zeilen (`row`/`col-4`/`col-8`) für Technologie
   ("JavaScript, Fetch API", `id="card1-technologie"`) und Jahr ("2024",
   `id="card1-jahr"`) sowie `card-footer` mit Link "Repository"
   (`https://github.com/alexberger/wetter-app`, `target="_blank"`,
   Klasse "btn btn-outline-secondary btn-sm") und Button "Bearbeiten"
   (Klasse "btn btn-primary btn-sm", `onclick="projektBearbeiten('card1')"`).
2. TODO 2: Analoge Karte für die Rezeptsammlung (card2, Technologie
   "PHP, MySQL", Jahr "2025", Link
   `https://github.com/alexberger/rezeptsammlung`) mit den ids
   card2-titel/card2-technologie/card2-jahr und
   `projektBearbeiten('card2')`.
3. TODO 3: Analoge Karte für die Portfolio-Website (card3, Technologie
   "HTML, CSS, JavaScript, PHP, REST", Jahr "2026", Link
   `https://github.com/alexberger/portfolio`) mit den ids
   card3-titel/card3-technologie/card3-jahr, `projektBearbeiten('card3')`
   sowie zusätzlichem Attribut `data-jahr="2026"` am äußersten `div.card`
   (wird vom Hervorheben-Button benötigt).
4. TODO 4: JavaScript-Funktion `projektBearbeiten(cardId)` implementieren,
   die (als Platzhalter für Übung 7) eine Meldung mit der übergebenen
   cardId anzeigt, z.B. per `alert(...)` oder `console.log(...)`.

## css/style.css
- (kein TODO-Marker) Neue Regel `.card.hervorgehoben` (gelber 3px-Rahmen)
  ergänzt – wird vom bereits vorhandenen Filter-Button-Skript ("Projekte
  aus 2026 hervorheben") verwendet, um Karten mit `data-jahr="2026"`
  optisch hervorzuheben.

(ueber-mich.html und rechtliches/impressum.html unterscheiden sich nur
durch den aktualisierten Kopfkommentar-Titel – daher hier nicht
aufgeführt.)
