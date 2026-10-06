## 1 Wie funktioniert das Internet? (`01-internet.pdf`)

### Begriffe

1. Was ist das Internet? Welche Arten von Netzen sind darin zusammengeschlossen?
2. Was versteht man unter einem Computer-Netzwerk? Welche Komponenten gehören dazu?
3. Was ist ein Intranet und wie unterscheidet es sich vom Internet?
4. Was ist der Unterschied zwischen einem LAN und einem WAN? Nennen Sie je ein Beispiel.
5. Ist das Internet „eine Menge vernetzter Computer“? Warum ist diese Definition zu kurz gegriffen?

<details><summary>Erwartete Antworten</summary>

1. Ein weltweiter Zusammenschluss verschiedenster Computer-Netzwerke: Firmennetze, Wissenschaftsnetze, militärische Netze (z.B. MILNET) sowie regionale und überregionale Betreibernetze (z.B. Telekom, Vodafone).
2. Eine Menge von Rechnern, die über Infrastrukturkomponenten (Netzwerkadapter, Zwischensysteme wie Router/Switches) und Kabel miteinander verbunden sind.
3. Ein Intranet ist das interne Netz einer Firma bzw. Organisation. Es ist nur für deren Mitglieder zugänglich, kann aber über das Internet mit anderen Netzen verbunden sein.
4. Sie unterscheiden sich in der Reichweite. LAN (Local Area Network): lokal begrenzt, z.B. Heim- oder Hochschulnetz. WAN (Wide Area Network): große Entfernungen, z.B. das Netz eines Providers über ganz Deutschland.
5. Das Internet verbindet nicht einzelne Rechner, sondern **Netzwerke**, die unterschiedliche Reichweiten, Topologien und Protokolle haben können. Gerade das Verbinden dieser heterogenen Teilnetze ist die eigentliche Leistung.
</details>

### Kommunikationsprotokolle

1. Was ist ein Kommunikationsprotokoll? Nennen Sie zwei Beispiele.
2. Welche drei wesentlichen Aufgaben muss ein Kommunikationsprotokoll lösen?
3. Warum ist die vollständige und fehlerfreie Übertragung einer E-Mail keine triviale Aufgabe?
4. Warum braucht man „Wegsuche“? Warum gibt es nicht einfach eine feste Leitung von Sabine zu Robert?

<details><summary>Erwartete Antworten</summary>

1. Ein Regelwerk, das den Ablauf der Kommunikation im Netzwerk festlegt (Format der Nachrichten, Reihenfolge, Reaktion auf Fehler). Beispiele: TCP/IP, HTTP, SMTP.
2. Eindeutige Adressierbarkeit (genau ein Empfänger), Wegsuche (geeigneten Weg durch das Netz finden), vollständige und fehlerfreie Übertragung.
3. Die E-Mail wird in mehrere Pakete zerlegt, die einzeln und evtl. auf unterschiedlichen Wegen übertragen werden. Pakete können verloren gehen, doppelt oder in falscher Reihenfolge ankommen und müssen beim Empfänger wieder korrekt zusammengesetzt werden.
4. Zwischen zwei Rechnern gibt es sehr viele mögliche Wege über verschiedene Teilnetze. Feste Leitungen zwischen allen Rechnern wären nicht bezahlbar. Außerdem kann bei Ausfall oder Überlast einer Strecke ein anderer Weg gewählt werden.
</details>

### Protokollschichten

1. Warum wird die Nachrichtenkommunikation in Schichten zerlegt? Welche Vorteile bringt das?
2. Nennen Sie die vier Schichten aus dem Skript von oben nach unten und je ein Protokoll dazu.
3. Was passiert mit einer Nachricht beim Senden auf dem Weg durch die Schichten? Was passiert beim Empfangen?
4. Was ist ein Header? Wie viele Header hat ein Ethernet-Paket, das eine HTTP-Anfrage transportiert?
5. Das ISO/OSI-Referenzmodell hat eigentlich sieben Schichten. Welches Modell zeigt die Abbildung im Skript?
6. Kann man das Ethernet-Kabel gegen WLAN tauschen, ohne den Browser zu ändern? Warum?

<details><summary>Erwartete Antworten</summary>

1. Jede Schicht löst eine klar abgegrenzte Teilaufgabe mit sinkendem Abstraktionsniveau. Das beherrscht die Komplexität und sorgt für Modularität: Schichten können unabhängig voneinander entwickelt und ausgetauscht werden, solange die Schnittstellen gleich bleiben.
2. Anwendungsschicht (HTTP, SMTP, FTP), Transportschicht (TCP, UDP), Internetschicht (IP), Link-Schicht (Ethernet, ATM).
3. Beim Senden wird die Nachricht von oben nach unten durchgereicht, jede Schicht ergänzt ihren eigenen Header. Beim Empfänger werden die Schichten in umgekehrter Reihenfolge durchlaufen, jede Schicht wertet ihren Header aus und entfernt ihn.
4. Ein Header ist protokollspezifische Verwaltungsinformation (z.B. Adressen, Prüfsummen). Hier vier: Ethernet-, IP-, TCP- und HTTP-Header vor den Anwendungsdaten.
5. Das vereinfachte TCP/IP-Modell (Internet-Modell) mit vier Schichten. Im OSI-Modell sind z.B. Anwendungs-, Darstellungs- und Sitzungsschicht getrennt, ebenso Sicherungs- und Bitübertragungsschicht.
6. Ja. Nur die Link-Schicht ändert sich, die darüberliegenden Schichten (IP, TCP, HTTP) bleiben unverändert. Genau das ist der Vorteil der Schichtenbildung.
</details>

### IP- und TCP-Pakete

1. Welche Information im IP-Header sorgt dafür, dass ein Paket den richtigen **Rechner** erreicht?
2. Welche Information im TCP-Header sorgt dafür, dass ein Paket die richtige **Anwendung** erreicht?
3. Wozu dienen Sequence Number und Acknowledgment Number im TCP-Header?
4. Wozu dient das Feld „Time to Live“ im IP-Header?
5. Wozu enthalten beide Header eine Checksum?
6. Was ist der Unterschied zwischen TCP und UDP?

<details><summary>Erwartete Antworten</summary>

1. Source Address und Destination Address (IP-Adressen von Absender und Empfänger).
2. Source Port und Destination Port, z.B. Port 80/443 für den Webserver.
3. Sie nummerieren die übertragenen Daten. Der Empfänger bestätigt, was er erhalten hat. So kann TCP fehlende Pakete erneut senden und die richtige Reihenfolge wiederherstellen (vollständige, fehlerfreie Übertragung).
4. Ein Zähler, der bei jedem Router verringert wird. Bei 0 wird das Paket verworfen, damit es bei Routing-Fehlern nicht endlos im Netz kreist.
5. Damit der Empfänger Übertragungsfehler im Header (IP) bzw. im Segment (TCP) erkennen kann.
6. TCP ist verbindungsorientiert und zuverlässig (Bestätigungen, Wiederholung, Reihenfolge). UDP ist verbindungslos und ohne diese Garantien, dafür schneller und schlanker (z.B. für DNS, Streaming, Spiele).
</details>

### Aufbau des Internet

1. Welches Problem entsteht, wenn Rechner in Teilnetzen mit unterschiedlichen Protokollen (z.B. Ethernet und ATM) kommunizieren sollen?
2. Mit welchen drei Maßnahmen wurde dieses Problem gelöst?
3. Ordnen Sie Backbone, WAN und LAN von der schnellsten zur langsamsten Verbindung. Wie hängen sie zusammen?
4. Was ist ein Backbone und woraus besteht es technisch?
5. Was sind Peering Points und welche Rolle spielen sie (z.B. DE-CIX in Frankfurt)?
6. Wie ist ein Endkunde (z.B. Ihr Heimanschluss) an das Internet angebunden?

<details><summary>Erwartete Antworten</summary>

1. Die Teilnetze „sprechen“ je nach Schicht unterschiedliche Protokolle und Nachrichtenformate. Nachrichten können nicht ohne Weiteres von einem ins andere Netz übertragen werden.
2. Hierarchischer Aufbau (Backbone → WAN → LAN), einheitliches Basisprotokoll (TCP auf Basis von IP) und Netzwerkkomponenten, die die Teilnetze verbinden.
3. Backbone → WAN → LAN. Backbones verbinden WANs miteinander, an jedes WAN sind LANs angebunden.
4. Die größten Datenstrecken des Internet mit sehr großer Bandbreite. Technisch Glasfaserkabel, in denen die Daten als Lichtwellen übertragen werden.
5. Knotenpunkte, an denen Backbones verschiedener Betreiber miteinander verbunden werden und regionale Netze angebunden sind. Dort tauschen die Netzbetreiber Daten direkt aus.
6. Über seinen Netzbetreiber (Provider). Dessen regionales Netz ist an Peering Points mit den Backbones verbunden.
</details>

### Netzwerkkomponenten

1. Warum benötigt man Netzwerkkomponenten wie Gateways und Router?
2. Ordnen Sie Gateway, Router, Bridge und Switch den Protokollschichten zu.
3. Was macht ein Gateway? Nennen Sie ein Beispiel.
4. Was ist die Aufgabe eines Routers? Welche Header-Information wertet er aus?
5. Was ist der Unterschied zwischen einer Bridge und einem Router?
6. In welchem Gerät zu Hause stecken typischerweise mehrere dieser Komponenten zugleich?

<details><summary>Erwartete Antworten</summary>

1. Sie verbinden die verschiedenen Teilnetze, ermöglichen den hierarchischen Aufbau und übersetzen zwischen unterschiedlichen Protokollen.
2. Gateway: Anwendungsschicht. Router: Internetschicht. Bridge und Switch: Link-Schicht.
3. Es verbindet Netzwerke zu einem neuen System und übersetzt bei Bedarf zwischen Anwendungsprotokollen, z.B. E-Mail → SMS oder Fax → E-Mail.
4. Er verbindet autarke Subnetze und leitet Pakete anhand der Ziel-IP-Adresse (Destination Address im IP-Header) auf dem passenden Weg weiter.
5. Eine Bridge verbindet Segmente desselben Netzes auf der Link-Schicht und hält lokale Nachrichten im eigenen Segment (Verkehrsmanagement). Ein Router verbindet eigenständige Netze auf der Internetschicht anhand von IP-Adressen.
6. Im Heim-Router (z.B. Fritz!Box): Router zum Provider, eingebauter Switch für die LAN-Buchsen, WLAN-Access-Point (Bridge zwischen WLAN und Ethernet).
</details>

### Internet-Dienste

1. Nennen Sie vier Dienste des Internet und ihre Aufgabe.
2. Wozu dient DNS? Was passiert ohne DNS beim Aufruf von `www.hs-example.de`?
3. Welche Protokolle gehören zur E-Mail? Was ist der Unterschied zwischen SMTP und POP/IMAP?
4. Sind WWW und Internet dasselbe? Was meint man eigentlich mit „ich gehe ins Internet“?
5. Welches sind Internet-Dienste: „WWW, SMTP, DNS“, „TCP/IP, UDP“ oder „Amazon, Google, Ebay“? Begründen Sie.
6. Braucht HTTP die Protokolle TCP und IP?

<details><summary>Erwartete Antworten</summary>

1. DNS (Umsetzung logischer Namen in IP-Adressen), LDAP (Zugriff auf Verzeichnisse und Login), E-Mail mit SMTP/POP/IMAP (elektronischer Nachrichtenaustausch), WWW mit HTTP (weltweites Informationssystem).
2. DNS setzt den logischen Namen in eine IP-Adresse um. Ohne DNS wüsste der Browser nicht, an welche IP-Adresse er die Anfrage schicken soll. Man müsste die IP-Adresse direkt eingeben.
3. SMTP, POP und IMAP. SMTP versendet Mails (Client → Server und Server → Server), POP/IMAP holen Mails vom Server ab (POP lädt herunter, IMAP verwaltet sie auf dem Server).
4. Nein. Das WWW ist nur ein Dienst unter vielen im Internet. Gemeint ist, dass man mit einem Webbrowser das WWW nutzen möchte.
5. „WWW, SMTP, DNS“. TCP/IP und UDP sind Transport-/Netzwerkprotokolle, auf denen Dienste aufbauen. Amazon, Google und Ebay sind Anbieter bzw. Anwendungen, die das WWW nutzen.
6. Ja. HTTP liegt in der Anwendungsschicht und nutzt TCP (Transport) und IP (Internetschicht) für die Übertragung. Hinweis zur Diskussion: HTTP/3 nutzt statt TCP das Protokoll QUIC über UDP, IP wird aber in jedem Fall benötigt.
</details>
