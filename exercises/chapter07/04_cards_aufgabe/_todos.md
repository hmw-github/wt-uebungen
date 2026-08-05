# TODOs – Cards

## projekte.html
Die Projekte werden - wie schon die Tabelle in Übung 2 - dynamisch per
JavaScript aus dem Array `projekte` erzeugt, diesmal als Bootstrap-Card
statt als Tabellenzeile. Eine fertige Beispielkarte (Wetter-App) ist als
reines HTML vorgegeben, damit klar ist, welche Struktur pro Karte am Ende
herauskommen soll; sie ist zu löschen, sobald die JS-Erzeugung
funktioniert.

1. TODO 1: Pro Durchlauf der Schleife über `projekte` eine Spalte
   (`div class="col-md-6 mb-3"`) mit verschachteltem `div class="card"`
   (`dataset.jahr = projekt.jahr`) und darin einem `card-header`
   (`id` = `cardId + "-titel"`, Textinhalt `projekt.titel`) erzeugen.
   `cardId` ist `"card" + laufende Nummer` (1, 2, 3, ...).
2. TODO 2: `card-body` mit zwei Absätzen (`p class="card-text"`) erzeugen:
   "Technologie:" (fett, `strong`) gefolgt von einem `span`
   (`id` = `cardId + "-technologie"`, Wert `projekt.technologie`), analog
   "Jahr:" mit `id` = `cardId + "-jahr"` und Wert `projekt.jahr`.
3. TODO 3: `card-footer` mit Link "Repository" (`href` = `projekt.link`,
   `target="_blank"`, Klasse "btn btn-outline-secondary btn-sm") und
   Button "Bearbeiten" (Klasse "btn btn-primary btn-sm", ruft per
   Event-Listener `projektBearbeiten(cardId)` auf) erzeugen; fertige Karte
   in `projekteKoerper` einfügen.
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
