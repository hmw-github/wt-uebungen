## 3.3 Listen (`03_listen_aufgabe`)

1. Welche drei Listenarten gibt es in HTML und wann verwendet man welche?
2. Welche Elemente dürfen direkt in `<ol>`/`<ul>` stehen?
3. Wie verschachtelt man eine Liste korrekt? Wo steht die innere `<ul>`?
4. Wie ändert man das Aufzählungszeichen einer Liste (z.B. auf Kreise)?
5. Wie ist eine Definitionsliste aufgebaut? Was bedeuten `dt` und `dd`?

<details><summary>Erwartete Antworten</summary>

1. `ol` (geordnet, Reihenfolge wichtig, z.B. Werdegang), `ul` (ungeordnet, z.B. Fähigkeiten), `dl` (Begriff–Erklärung, z.B. Glossar).
2. Nur `<li>`.
3. Die innere Liste steht **innerhalb** eines `<li>` der äußeren Liste, z.B. `<li>Frontend <ul>…</ul></li>`.
4. Per CSS-Eigenschaft `list-style-type`, z.B. `style="list-style-type: circle"` (Werte u.a. `disc`, `circle`, `square`, `none`).
5. `<dl>` enthält Paare aus `<dt>` (definition term, Begriff) und `<dd>` (definition description, Erklärung).
</details>
