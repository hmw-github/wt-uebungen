## 3.4 Hyperlinks (`04_hyperlinks_aufgabe`)

1. Wie ist ein Link aufgebaut? Welche Rolle hat das Attribut `href`?
2. Was ist der Unterschied zwischen einem absoluten und einem relativen Link? Geben Sie je ein Beispiel aus der Übung an.
3. Was bedeutet `../` in einem Pfad? Warum braucht `rechtliches/impressum.html` den Pfad `../index.html`?
4. Wie öffnet man einen Link in einem neuen Tab?
5. Wie macht man ein Bild zu einem Link?
6. Welche Aufgabe haben `header`, `nav` und `footer`? Was ändert sich optisch dadurch?
7. Wie kann man einen `button` als Link verwenden (zwei Möglichkeiten)?

<details><summary>Erwartete Antworten</summary>

1. `<a href="ziel">Linktext</a>`. `href` gibt das Ziel des Links an.
2. Absolut: vollständige URL mit Protokoll und Host (`https://github.com/alexberger`). Relativ: Pfad ausgehend von der aktuellen Datei (`projekte.html`, `rechtliches/impressum.html`).
3. Eine Verzeichnisebene nach oben. Das Impressum liegt im Unterordner, die Startseite eine Ebene höher.
4. Mit `target="_blank"`.
5. Das `<img>` wird in ein `<a>` gesetzt: `<a href="index.html"><img …></a>`.
6. Sie sind semantische Elemente (Kopfbereich, Navigation, Fußbereich). Optisch ändern sie ohne CSS nichts, sie verbessern aber Struktur und Barrierefreiheit.
7. `<a href="projekte.html"><button>…</button></a>` (so in der Musterlösung) oder ein Button mit `onclick="location.href='projekte.html'"`. Hinweis zur Diskussion: Ein `button` in einem `a` ist laut HTML-Spezifikation eigentlich ungültig (interaktives Element in interaktivem Element). Sauberer ist ein `<a>`, das per CSS wie ein Button aussieht (so ab Kapitel 4 mit der Klasse `btn`).
</details>
