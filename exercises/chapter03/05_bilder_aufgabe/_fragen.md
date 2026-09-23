## 3.5 Bilder (`05_bilder_aufgabe`)

1. Welche Attribute braucht ein `<img>` mindestens? Warum ist `alt` wichtig?
2. Wann schreibt man einen relativen und wann einen absoluten Bildpfad? Was ist der Nachteil externer Bilder?
3. Warum gibt man `width` und `height` an, auch wenn das Bild schon die richtige Größe hat?
4. Was ist der Unterschied zwischen `alt` und `title`?
5. Vergleichen Sie JPEG, PNG, GIF und SVG: Wofür eignet sich welches Format? Welche unterstützen Transparenz?

<details><summary>Erwartete Antworten</summary>

1. `src` und `alt`. `alt` wird angezeigt, wenn das Bild nicht lädt, und von Screenreadern vorgelesen.
2. Relativ für eigene Bilder im Projekt, absolut für Bilder von anderen Servern. Externe Bilder können verschwinden oder sich ändern, und der fremde Server sieht die Aufrufe.
3. Der Browser reserviert den Platz schon vor dem Laden, dadurch springt das Layout nicht.
4. `alt` ist Ersatztext für das Bild, `title` ist ein zusätzlicher Tooltip beim Überfahren mit der Maus.
5. JPEG: Fotos, verlustbehaftet, keine Transparenz. PNG: Grafiken/Screenshots, verlustfrei, Transparenz. GIF: 256 Farben, einfache Animationen, einfache Transparenz. SVG: Vektorgrafik, beliebig skalierbar, Transparenz, ideal für Logos.
</details>
