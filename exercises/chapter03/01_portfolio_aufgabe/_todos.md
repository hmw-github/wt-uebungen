# TODOs – 01_portfolio_aufgabe

**Aufgabenstellung:**
    Bauen Sie die Portfolio-Website von Alex Berger auf: HTML-Grundgerüst,
    strukturierter Text, Listen, ein Navigationsmenü mit Links, Bilder und
    eine Projekttabelle. Die TODO-Nummern zählen pro Datei. Die Seite
    "Kontakt" ist bereits fertig, das Kontaktformular folgt in Übung 2.

## index.html

*Grundgerüst (3.2)*

1. TODO 1: Ergänzen Sie die HTML5-Dokumenttyp-Deklaration (DOCTYPE).
2. TODO 2: Vergeben Sie den title "Alex Berger - Portfolio - Startseite".
3. TODO 3: Ergänzen Sie ein meta-Tag, das den Zeichensatz auf UTF-8 setzt.
4. TODO 4: Ergänzen Sie ein meta-Tag für den viewport (width=device-width, initial-scale=1.0), damit die Seite auch auf mobilen Geräten gut dargestellt wird.

*Hyperlinks (3.5)*

5. TODO 5: Ein Bild ("images/logo.svg", alt="Logo Alex Berger", 100x50 Pixel) im header VOR der Navigation, das gleichzeitig als Link zur Startseite ("index.html") funktioniert.
6. TODO 6: Ein nav-Element im header mit je einem relativen Link (selbes Verzeichnis) zu den drei anderen Seiten: ueber-mich.html, projekte.html und kontakt.html. Linktexte: "Über mich", "Projekte", "Kontakt".

*Grundgerüst (3.2)*

7. TODO 7: Eine Überschrift der Ebene 1 mit dem Text "Alex Berger" und darunter ein Absatz (p) mit einem kurzen Begrüßungstext (z.B. Studiengang und Schwerpunkt).

*Hyperlinks (3.5)*

8. TODO 8: Einen button unterhalb der Begrüßung, der als Hyperlink zu "projekte.html" funktioniert (Button-Text: "Projekte ansehen").

*Textstrukturierung (3.3)*

9. TODO 9: Einen div-Container, der einen weiteren Absatz enthält. In diesem Absatz sollen ein Wort fett (strong) und ein anderes Wort kursiv (em) dargestellt werden (z.B. stärkste bzw. liebste Technologien).
10. TODO 10: Innerhalb eines weiteren Absatzes ein span-Element, mit dem ein einzelnes Wort per inline-style (z.B. color) hervorgehoben wird (z.B. aktuelles Lieblingsthema).
11. TODO 11: Einen Absatz mit zwei Zeilen, die durch einen manuellen Zeilenumbruch (br) getrennt sind (z.B. Studiengang in Zeile 1, Hochschule in Zeile 2).
12. TODO 12: Einen pre-Block, der ein kleines Code-Beispiel (z.B. eine Zeile Pseudocode oder ein Lieblings-"Hello World") unverändert (mit Einrückung) darstellt.
13. TODO 13: Eine horizontale Trennlinie (hr) am Ende des Inhaltsbereichs.

*Hyperlinks (3.5)*

14. TODO 14: Einen footer am Ende der Seite mit einem absoluten Link zu "https://github.com/alexberger", der in einem NEUEN Tab geöffnet wird (Linktext: "GitHub"), sowie einem relativen Link zu "rechtliches/impressum.html" (Linktext: "Impressum").

*Grundgerüst (3.2)*

15. TODO 15: Fügen Sie im body einen HTML-Kommentar ein, der Sie als Autor/-in dieser Seite nennt.

## ueber-mich.html

Das Grundgerüst (DOCTYPE, head, Überschriften) ist bereits vorhanden.

1. TODO 1: Logo-Bild ("images/logo.svg") als Link zu index.html, analog zu index.html.
2. TODO 2: nav mit Links zu index.html ("Startseite"), projekte.html und kontakt.html.
3. TODO 3: Ein Bild mit RELATIVEM Pfad "images/profil.svg", einem aussagekräftigen alt-Text, sowie width="200" und height="200", direkt nach der Überschrift. Zusätzlich ein title-Attribut, das als Tooltip "Foto aus dem Jahr 2024" anzeigt.
4. TODO 4: Eine nummerierte Liste (ol) mit mind. 3 Stationen des (fiktiven) Werdegangs (z.B. Abitur, Studienbeginn, Praktikum), in chronologischer Reihenfolge.
5. TODO 5: Eine verschachtelte, ungeordnete Liste (ul) der Fähigkeiten, gruppiert in zwei Unterlisten "Frontend" und "Backend" (jeweils mind. 2 Einträge). Für die Frontend-Unterliste list-style-type: circle verwenden.
6. TODO 6: Ein Bild mit ABSOLUTEM Pfad "https://img.shields.io/badge/GitHub-alexberger-blue" (ein GitHub-Badge) mit passendem alt-Text, im Abschnitt "Fähigkeiten".
7. TODO 7: Eine Definitionsliste (dl) mit 2 Fachbegriffen aus dem Bereich Web-Technologien (dt), z.B. "REST" und "MVC", und deren kurzer Erklärung (dd).
8. TODO 8: Als HTML-Kommentar eine kurze Begründung ergänzen, welches Bildformat (JPEG, PNG, SVG oder GIF) sich für das Logo dieser Website (mit transparentem Hintergrund und klaren Formen) am besten eignet und warum.
9. TODO 9: footer mit GitHub-Link (neuer Tab) und Impressum-Link ("rechtliches/impressum.html"), analog zu index.html.

## projekte.html

Grundgerüst, header und footer sind bereits vorhanden.

1. TODO 1: Eine caption mit dem Text "Meine Projekte".
2. TODO 2: Einen thead-Bereich mit einer Kopfzeile: "Projekt", "Technologie", "Jahr", "Link".
3. TODO 3: Einen tbody-Bereich mit 3 Datenzeilen zu den Projekten "Wetter-App" (JavaScript, Fetch API, 2024), "Rezeptsammlung" (PHP, MySQL, 2025) und "Portfolio-Website" (siehe TODO 4). Jede Zeile soll in der Spalte "Link" einen Link auf das jeweilige GitHub-Repository enthalten (z.B. "https://github.com/alexberger/wetter-app").
4. TODO 4: Das Projekt "Portfolio-Website" (dieses Projekt!) besteht aus zwei Teilzeilen mit unterschiedlicher Technologie ("HTML &amp; CSS (Konzept)" und "JavaScript, PHP, REST (Umsetzung)"), beide aus dem Jahr 2026. rowspan nutzen, damit sich der Projektname "Portfolio-Website" über beide Zeilen erstreckt.
5. TODO 5: Einen tfoot-Bereich mit einer Zusammenfassungszeile ("Anzahl Projekte: 3"), deren Zelle sich per colspan über alle 4 Spalten erstreckt.

## rechtliches/impressum.html

1. TODO 1: Ein relativer Link ins übergeordnete Verzeichnis (also eine Ebene höher), der zurück zur Startseite ("../index.html") führt. Linktext: "Zurück zur Startseite".

## kontakt.html

- (kein TODO-Marker) Die Seite ist bereits vollständig (Grundgerüst, header, footer). Sie dient in dieser Übung nur als Navigationsziel; das Kontaktformular wird in Übung 2 ergänzt.
