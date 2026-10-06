## 2 Wie funktioniert das World Wide Web? (`02-www.pdf`)

### Begriffe

1. Was ist das World Wide Web? Ist es dasselbe wie das Internet?
2. Was ist der Unterschied zwischen einer Website, einem Webdokument und einer Homepage?
3. Welche vier Bausteine braucht man, um Dokumente im WWW bereitzustellen, zu adressieren, zu beschreiben und zu übertragen?
4. Wer gilt als Erfinder des WWW, wann und wo entstand es? Was ist das W3C?
5. Welche Rolle spielte NCSA Mosaic (1993) für die Verbreitung des WWW?

<details><summary>Erwartete Antworten</summary>

1. Ein interaktives Informationssystem, das den weltweiten Austausch digitaler Dokumente ermöglicht. Es ist ein Dienst des Internet (siehe Kapitel 1), nicht das Internet selbst.
2. Ein Webdokument ist eine einzelne Seite bzw. ein einzelnes Objekt. Eine Website ist ein Hypertext-System aus mehreren zusammenhängenden Webdokumenten. Die Homepage (Startseite) ist der zentrale Einstiegspunkt einer Website.
3. Web-Server (stellt Dokumente bereit), URL (Adressierung), HTML (Beschreibung der Dokumente), HTTP (Übertragung). Zum Zugriff braucht man zusätzlich einen Browser.
4. Tim Berners-Lee (mit Robert Cailliau) am Kernforschungszentrum CERN: Memo 1989, erster Server/Browser 1990. Das W3C (World Wide Web Consortium, gegründet 1994) standardisiert die Web-Technologien (z.B. HTML, CSS).
5. Es war der erste WWW-Browser mit grafischer Oberfläche. Damit wurde das Web auch für Nicht-Fachleute einfach nutzbar.
</details>

### Hypertext

1. Was unterscheidet ein Hypertext-Dokument von einem herkömmlichen Textdokument?
2. Warum ist ein Hypertext-Dokument „multimedial“? Welche Inhalte kann es enthalten?
3. Was ist ein Hypertext-System? Warum nennt man das WWW ein *verteiltes* Hypertext-System?
4. Welche Probleme entstehen durch die Verteilung? Wie äußern sie sich für Nutzer/-innen?
5. Welche Definition passt am besten: „ein Textdokument mit Links“, „ein baumartig organisierter Text“ oder „ein Dokument mit Text und Multimedia-Inhalten, das Verweise auf andere Hypertexte enthalten kann“?

<details><summary>Erwartete Antworten</summary>

1. Herkömmliche Texte werden sequentiell gelesen und liegen meist lokal vor. Hypertexte enthalten Querverweise (Hyperlinks) auf andere Hypertext-Dokumente, man kann also nicht-linear „springen“.
2. Neben Text kann es Grafiken, Bilder, Audio- und Video-Clips sowie Animationen enthalten.
3. Ein Software-System, das den Zugriff auf Hypertext-Dokumente ermöglicht. Verteilt, weil die Dokumente auf beliebigen Servern im Internet liegen. Hyperlinks können jeden dieser Server ansprechen.
4. Ein Server kann nicht erreichbar sein, ein Dokument kann gelöscht oder umbenannt worden sein. Für Nutzer/-innen: „toter Link“, z.B. Fehler 404 oder Timeout.
5. Die dritte. Ein Hypertext ist nicht nur Text mit Links und nicht zwingend baumartig, sondern ein Netz aus multimedialen Dokumenten.
</details>

### HTTP(S)

1. Wofür steht HTTP? Auf welchen Protokollen baut es auf?
2. Welche Standard-Ports verwenden HTTP und HTTPS? Was unterscheidet die beiden?
3. Woraus besteht jede HTTP-Nachricht? Was bedeutet es, dass HTTP-Nachrichten Text-Nachrichten sind?
4. Wie können Sie die HTTP-Nachrichten beim Aufruf einer Webseite selbst ansehen?
5. Erklären Sie die Zeilen des Request-Headers: `GET / HTTP/1.1`, `Host`, `User-Agent`, `Accept`, `Cookie`.
6. Erklären Sie die Zeilen des Reply-Headers: `HTTP/1.1 200 OK`, `Server`, `Date`, `Content-Type`. Was steht im Body?
7. Warum muss bei `GET / HTTP/1.1` zusätzlich der `Host`-Header mitgeschickt werden?

<details><summary>Erwartete Antworten</summary>

1. Hypertext Transfer Protocol. Es basiert auf TCP/IP und hat deshalb Ports als Kommunikationsendpunkte.
2. Port 80 für HTTP und 443 für HTTPS. Bei HTTPS sind die Nachrichten zusätzlich verschlüsselt („secure“, mittels TLS), sodass Dritte unterwegs nicht mitlesen oder manipulieren können.
3. Aus einem Nachrichtenkopf (Header) und einem Nachrichtenkörper (Body) mit den Nutzdaten. Header sind als Klartext für Menschen gut lesbar und können z.B. mit Entwicklertools oder cURL direkt angesehen werden.
4. Mit den Entwicklertools des Browsers (F12, Reiter „Netzwerk“ / „Network“), alternativ z.B. mit `curl -v`.
5. Methode GET für den Pfad `/` mit Protokollversion 1.1; `Host`: angefragter Server; `User-Agent`: Browser und Betriebssystem des Clients; `Accept`: akzeptierte Antwortformate mit Gewichtung `q`; `Cookie`: zuvor vom Server gesetzte Daten (z.B. Sitzungs- oder Tracking-ID).
6. Protokollversion, Statuscode 200 und Statustext „OK“; `Server`: verwendete Webserver-Software (nginx); `Date`: Zeitpunkt der Antwort; `Content-Type`: Art und Zeichenkodierung des Bodys (HTML in UTF-8). Im Body steht die HTML-Seite selbst.
7. Auf einem Server (einer IP-Adresse) können viele Websites laufen (virtuelle Hosts). Am `Host`-Header erkennt der Webserver, welche Website gemeint ist.
</details>

### HTTP-Methoden und Statuscodes

1. Welches sind die am häufigsten verwendeten HTTP-Methoden? Wofür verwendet man sie?
2. Was ist der Unterschied zwischen GET und POST, z.B. beim Absenden eines Formulars?
3. Was bewirken PUT, DELETE und OPTIONS?
4. Welche Antwort passt am besten: „SEND und RECEIVE“, „GET und PUT“ oder „GET und POST“?
5. Welche Bedeutung haben die Statuscodes 200, 204, 301, 400, 403, 404, 500 und 501?
6. Was bedeutet jeweils die erste Ziffer eines Statuscodes (2xx, 3xx, 4xx, 5xx)?
7. Bei einem Statuscode 301: Woher weiß der Browser, wohin er weitergeleitet wird?

<details><summary>Erwartete Antworten</summary>

1. GET (Ressource anfordern) und POST (Daten an den Server senden, z.B. Formulardaten).
2. Bei GET werden Parameter in der URL als Query übertragen (sichtbar, landen in Verlauf und Lesezeichen). Bei POST stehen die Daten im Body der Anfrage. Für Daten, die etwas verändern oder sensibel sind, verwendet man POST.
3. PUT ersetzt die Ressource durch das mitgeschickte Datenpaket, DELETE löscht die Ressource, OPTIONS erfragt die Kommunikationsoptionen der Zielressource (z.B. erlaubte Methoden). Hinweis zur Diskussion: In der Tabelle im Skript steht bei DELETE versehentlich „Anfrage der entsprechenden Ressource“. Gemeint ist das Löschen.
4. „GET und POST“. GET und PUT sind zwar auch gültige Methoden, GET und POST sind aber die gängigsten. SEND und RECEIVE gibt es nicht.
5. 200: Erfolg mit Ergebnis; 204: Erfolg ohne Ergebnis; 301: dauerhaft verschoben; 400: fehlerhafte Anfrage; 403: keine Berechtigung; 404: Ressource nicht gefunden; 500: interner Serverfehler; 501: Funktion nicht implementiert.
6. 2xx: Erfolg, 3xx: Umleitung, 4xx: Fehler des Clients (Anfrage), 5xx: Fehler des Servers.
7. Aus dem `Location`-Header der Antwort, der die neue Adresse enthält.
</details>

### Software-Bausteine des WWW

1. Beschreiben Sie in drei Schritten, wie eine Interaktion zwischen Browser und Webserver abläuft.
2. Was ist der Unterschied zwischen einer statischen Webseite und einer, die von einem Generator-Skript erzeugt wird?
3. Welche Komponenten müssen in einer Webarchitektur mindestens vorhanden sein? Welche sind optional (Application Server, Firewall, Proxy, Gateway)?
4. Nennen Sie je drei populäre Webbrowser und Webserver.
5. Welche Interpreter enthält ein Webbrowser standardmäßig und wofür?
6. Was sind Software-Bausteine des WWW: „HTTP-Client und -Server“, „URL und URI“ oder „Webbrowser und Webserver“?

<details><summary>Erwartete Antworten</summary>

1. (1) Der Browser fordert über eine URI ein Dokument beim Webserver an. (2) Der Server prüft, ob er das Dokument unverändert liefern kann (statisch) oder ob es ein Generator-Skript ist, das erst ein HTML-Dokument erzeugt. (3) Das Dokument wird an den Browser zurückgeschickt und dort angezeigt.
2. Eine statische Seite liegt fertig als Datei auf dem Server und wird unverändert ausgeliefert. Eine generierte Seite wird bei jeder Anfrage von einem Programm (z.B. PHP, siehe Kapitel 6) neu erzeugt, z.B. mit Daten aus einer Datenbank.
3. Notwendig sind Webbrowser und Webserver. Application Server, Firewall, Proxy und Gateway sind in der Praxis häufig, aber nicht zwingend erforderlich.
4. Browser: Chrome, Safari, Edge, Firefox. Server: Apache, nginx, Microsoft IIS.
5. HTML (Struktur und Inhalt), CSS (Darstellung) und JavaScript (Verhalten und Interaktion). Diese drei Themen behandeln die Kapitel 3 bis 5.
6. „Webbrowser und Webserver“. URL und URI sind Adressierungsschemata, keine Software. „HTTP-Client und -Server“ ist zu allgemein: Auch z.B. cURL ist ein HTTP-Client.
</details>

### URIs und URLs

1. Wofür stehen URI und URL? Wie hängen sie zusammen?
2. Ist `mailto:someone@example.com` eine URL? Wo könnte man sie in einer Webseite verwenden?
3. Wie lautet die allgemeine Syntax einer URL? Welche Teile sind optional?
4. Zerlegen Sie `http://localhost:8080/test/index.html?name=Maier&vorname=Erna#abschnitt3` in seine Bestandteile.
5. Wie werden mehrere Schlüssel-Wert-Paare in einer Query getrennt? Wie wird die Query vom Pfad getrennt?
6. Welcher Port wird verwendet, wenn in `https://www.wikipedia.de` keiner angegeben ist?
7. Wozu dient ein Fragment? Was muss im HTML-Dokument existieren, damit `#abschnitt3` funktioniert?
8. Wird das Fragment an den Server übertragen? Was folgt daraus?

<details><summary>Erwartete Antworten</summary>

1. URI: Uniform Resource Identifier, identifiziert eine Ressource weltweit eindeutig. URL: Uniform Resource Locator, enthält zusätzlich den Weg zum Auffinden der Ressource. URLs sind eine Teilmenge der URIs. Hinweis zur Diskussion: Im Skript steht „unique“ statt „uniform“.
2. Es ist eine URI, aber keine URL im engeren Sinne, da sie keinen Ort beschreibt, an dem eine Ressource abgerufen wird. Verwendung z.B. in einem Link: `<a href="mailto:someone@example.com">`, der das E-Mail-Programm öffnet.
3. `[Protokoll://]computer-name[:port][/dokumenten-pfad][Query][Fragment]`. Nur der Computername ist Pflicht, alles in eckigen Klammern ist optional.
4. Protokoll `http`, Computername `localhost`, Port `8080`, Pfad `/test/index.html`, Query `?name=Maier&vorname=Erna`, Fragment `#abschnitt3`.
5. Paare werden mit `&` getrennt, Schlüssel und Wert mit `=`. Die Query beginnt mit `?`.
6. Port 443, der Standard-Port für HTTPS.
7. Es bezeichnet eine Position innerhalb des Dokuments, zu der der Browser springt (sinnvoll bei langen Seiten). Es muss ein HTML-Element mit `id="abschnitt3"` geben.
8. Nein, das Fragment wird nur im Browser ausgewertet. Der Server kann es nicht sehen und darauf nicht reagieren, und ein Sprung innerhalb der Seite löst keine neue Anfrage aus.
</details>

### Namensauflösung mit DNS

1. Warum genügt der Hostname `www.spiegel.de` nicht, um eine Nachricht an den Server zu schicken?
2. Wozu dient das Shell-Kommando `ping`? Welche Informationen liefert es außer der Erreichbarkeit?
3. Wie ist der DNS-Namensraum aufgebaut? In welcher Richtung wird ein Name wie `www.thi.de` interpretiert?
4. Was sind Root-Server?
5. Wer übernimmt auf Ihrem Rechner die Namensauflösung, und mit wem kommuniziert dieser?
6. Warum können `www.thi.de` und `mail.thi.de` auf unterschiedliche Rechner zeigen?

<details><summary>Erwartete Antworten</summary>

1. Für die Übertragung über IP (und damit TCP und HTTP) wird eine IP-Adresse benötigt. Der Hostname muss zuerst in eine IP-Adresse umgesetzt werden.
2. Es prüft, ob ein Server antwortet. Zusätzlich zeigt es die aufgelöste IP-Adresse, die Antwortzeit, die TTL der Antwortpakete und eine Verluststatistik.
3. Als weltweiter hierarchischer Baum. Ausgehend von der Nulldomain (Root) wird der Name rückwärts gelesen: `de` → `thi` → `www`.
4. Die Namens-Server der Nulldomain an der Spitze der Hierarchie. Sie sind der Einstieg in jede Namensauflösung und verweisen auf die Server der Top-Level-Domains (z.B. `.de`).
5. Ein im Betriebssystem konfigurierter Namensdienst-Server (z.B. vom Router oder Provider). Dieser fragt nacheinander die Root-, Top-Level- und Domain-Server ab.
6. Unter einer Domain kann es mehrere Hosts geben. Jeder Name hat im DNS einen eigenen Eintrag mit eigener IP-Adresse.
</details>
