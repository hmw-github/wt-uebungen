## 6.3 Sessions (`03_sessions_aufgabe`)

1. Warum „vergisst“ der Server ohne Sessions alles zwischen zwei Anfragen?
2. Wie funktioniert eine PHP-Session?
3. Warum muss `session_start()` vor jeder Ausgabe stehen?
4. Wie liest und schreibt man Werte in `$_SESSION`?
5. Warum muss man `$_SESSION['gaestebucheintraege']` zuerst als leeres Array initialisieren?
6. Wie hängt man in PHP ein Element an ein Array an?
7. Warum wird `kontakt.html` zu `kontakt.php`?
8. Wer sieht die Gästebucheinträge – alle Besucher oder nur man selbst? Warum?

<details><summary>Erwartete Antworten</summary>

1. Jede HTTP-Anfrage ist unabhängig, der Server kennt keinen Zusammenhang zwischen ihnen.
2. PHP erzeugt eine Session-ID, schickt sie als Cookie (`PHPSESSID`) an den Browser und speichert die Daten unter dieser ID auf dem Server. Bei jeder Anfrage sendet der Browser das Cookie mit.
3. Das Session-Cookie wird als HTTP-Header gesendet, und Header müssen vor dem Body kommen.
4. Wie bei einem assoziativen Array: `$_SESSION['schluessel'] = wert;`
5. Sonst ist der Schlüssel beim ersten Aufruf nicht vorhanden (Warnung, `foreach` über `null`).
6. `$array[] = $wert;` (oder `array_push`).
7. Nur `.php`-Dateien werden vom Server durch PHP ausgeführt.
8. Nur man selbst, denn die Session ist an den eigenen Browser gebunden. Ein echtes Gästebuch bräuchte eine Datenbank.
</details>
