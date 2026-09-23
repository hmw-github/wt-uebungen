## 4.3 Boxmodell (`03_boxmodell_aufgabe`)

1. Was ist der Unterschied zwischen `padding`, `border` und `margin`?
2. Warum wirkt vertikales `padding` bei einem Inline-Element wie `a` nicht wie erwartet? Was ändert `display: inline-block`?
3. Wie liest man `border: 1px solid #8d99ae`?
4. Was bewirkt `border-radius`?
5. Was ist der Unterschied zwischen `border-top` und `border`?
6. Wie kann man sich das Boxmodell eines Elements in den Browser-DevTools ansehen?

<details><summary>Erwartete Antworten</summary>

1. `padding`: Innenabstand zwischen Inhalt und Rahmen. `border`: Rahmen. `margin`: Außenabstand zu anderen Elementen.
2. Bei Inline-Elementen verschiebt vertikales padding keine anderen Elemente (keine Höhe im Zeilenfluss). `inline-block` bleibt in der Zeile, verhält sich aber wie eine Box mit Breite/Höhe/padding.
3. Rahmenbreite 1px, Stil durchgezogen, Farbe `#8d99ae`.
4. Abgerundete Ecken.
5. `border-top` setzt nur den oberen Rahmen.
6. Element untersuchen → Tab „Berechnet“/„Layout“ zeigt die Box mit allen Werten.
</details>
