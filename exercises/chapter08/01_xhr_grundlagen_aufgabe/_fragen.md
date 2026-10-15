## 8.1 XHR-Grundlagen (`01_xhr_grundlagen_aufgabe`)

1. Was ist AJAX? Was ist der Unterschied zu einem normalen Seitenaufruf?
2. Was bedeutet „asynchron“?
3. Welche Schritte braucht eine XHR-Anfrage?
4. Was bedeuten `readyState == 4` und `status == 200`?
5. Wo steht die Antwort des Servers?
6. Wie liest `hinweis.php` den Parameter `praefix`? Warum müsste man ihn eigentlich mit `encodeURIComponent()` kodieren?
7. Was liefert `strpos()`, und warum muss man mit `=== 0` statt `== 0` bzw. `!strpos()` vergleichen?
8. Wie baut man aus einem Array eine kommagetrennte Liste?
9. Warum muss man die Übung über einen Webserver (Docker) statt per `file://` öffnen?

<details><summary>Erwartete Antworten</summary>

1. Asynchronous JavaScript and XML: JavaScript lädt Daten im Hintergrund nach und aktualisiert nur einen Teil der Seite, ohne sie neu zu laden.
2. Die Anfrage läuft im Hintergrund, der Code und die Seite laufen weiter. Die Antwort wird später in einer Callback-Funktion verarbeitet.
3. Objekt erzeugen, Handler registrieren, Anfrage mit Methode und URL öffnen, absenden.
4. `4` = Anfrage abgeschlossen (DONE), `200` = HTTP OK.
5. In `xhr.responseText` (als String).
6. Über `$_GET['praefix']`. Sonderzeichen wie `&`, `#`, Leerzeichen würden sonst die URL verfälschen.
7. Die Position des Treffers oder `false`. Ein Treffer an Position 0 ergibt mit `==` ebenfalls „falsch“, deshalb strikt `=== 0` vergleichen.
8. `implode(",", $treffer)`.
9. PHP muss von einem Server ausgeführt werden, und XHR ist auf `file://` nicht erlaubt.
</details>
