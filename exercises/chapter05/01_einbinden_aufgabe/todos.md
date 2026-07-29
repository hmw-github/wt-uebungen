# TODOs – Übung 1: JavaScript einbinden

## index.html
1. TODO 1: Ergänzen Sie im `<script>`-Block im `<head>` ein `console.log()`, das eine Begrüßung ausgibt (z.B. "Startseite wird geladen...").
2. TODO 2: Ergänzen Sie einen Link, der als href das `javascript:`-Pseudo-Protokoll verwendet, um beim Klick direkt eine `alert()`-Meldung mit einem kurzen Fakt über diese Website anzuzeigen, z.B. `href="javascript:alert('Diese Seite wurde mit HTML, CSS und JavaScript gebaut.')"`.
3. TODO 3: Ergänzen Sie einen Button mit dem Text "Info anzeigen", der über das Attribut `onclick` die Funktion `zeigeAlert()` aufruft. (Diese Funktion wird in TODO 5 in der externen Datei definiert.)
4. TODO 4: Binden Sie am Ende des `<body>` die externe Datei "js/begruessung.js" per `<script src="..."></script>` ein.

## js/begruessung.js
5. TODO 5 (in Datei js/begruessung.js): Implementieren Sie dort die Funktion `zeigeAlert()`, die per `alert()` den Text "Hallo aus der externen Datei!" anzeigt.

## ueber-mich.html
- (kein TODO-Marker) Strukturvereinfachung gegenüber Kapitel 4: Die aufklappbaren `<details>`/`<summary>`-Blöcke ("Werdegang", "Fähigkeiten", "Find me on Github") wurden durch einfache `<h2>`/`<ul>`-Abschnitte ersetzt, der Abschnitt "Wichtige Begriffe" heißt jetzt nur noch "Begriffe". Diese Änderung ist inhaltlich unabhängig von den JS-TODOs dieser Übung und betrifft keinen der TODO-Punkte.

## Anmerkung zum Vorgänger-Vergleich
Die übrigen Dateien (kontakt.html, projekte.html, rechtliches/impressum.html, css/style.css, css/druck.css, js/main.js) entsprechen im Vergleich zu exercises/chapter04/07_responsive_design_aufgabe im Wesentlichen der bereits gelösten Vorkapitel-Übung (z.B. ist das Responsive-Media-Query in css/style.css bereits vollständig ausgefüllt) plus unwesentlicher redaktioneller Anpassungen (Formatierung, Farbwerte, vereinfachte Tabellenstruktur in projekte.html). Das ist der übliche Kapitel-zu-Kapitel-Übergang (Vorkapitel-Lösung als Ausgangsbasis) und wurde daher nicht separat als TODO-loser Fund aufgeführt.
