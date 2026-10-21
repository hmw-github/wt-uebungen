# TODOs – 02_rest_api_aufgabe

In api/tests.http sind Testaufrufe vorbereitet, mit denen die Implementierung getestet werden kann.

## api/service.php
Das URL-Rewriting (jede Anfrage unterhalb von api/ landet bei service.php,
der ursprüngliche Pfad steht in $_REQUEST['_url']) ist bereits vollständig
über die nginx.conf des Docker-Setups eingerichtet und kein Teil dieser
Übung (siehe Kopfkommentar der Datei sowie den Abschnitt "Wie die
Umleitung mit nginx funktioniert" im README). Ebenfalls fertig vorgegeben
sind die Datenhaltung in der PHP-Session (`$_SESSION['projekte']`,
beim ersten Aufruf mit den Beispieldaten befüllt), die CORS-Header samt
Behandlung der OPTIONS-Preflight-Anfrage sowie die Zuordnung von Methode
und Pfad zur passenden Operation.

Die Datenhaltung erfolgt pro Browser-Session, die Änderungen gelten also nur für den jeweiligen Client.

*Lesende Operationen (GET)*

1. TODO 1: `GET /projekte` liefert mit Status 200 alle aktuell gespeicherten Projekte als JSON-Array.
2. TODO 2: `GET /projekt/{id}` liefert mit Status 200 genau das Projekt mit dieser id als JSON-Objekt. Gibt es kein Projekt mit dieser id, lautet die Antwort Status 404 mit leerem Body.

*Schreibende Operationen (POST, PUT, DELETE)*

3. TODO 3: `POST /projekt` legt aus den im Request-Body als JSON gesendeten Daten (`titel`, `technologie`, `jahr`, `link`) ein neues Projekt an. Es erhält eine neue id, die größer ist als alle bisherigen. Die Antwort (Status 200) ist das neue Projekt inklusive seiner id als JSON. Ein anschließendes `GET /projekte` enthält das neue Projekt.
4. TODO 4: `PUT /projekt/{id}` überschreibt `titel`, `technologie`, `jahr` und `link` des Projekts mit dieser id durch die im Body gesendeten Werte. Die id bleibt unverändert. Antwort: Status 200 mit dem aktualisierten Projekt als JSON. Existiert die id nicht, lautet die Antwort Status 404, und es wird nichts angelegt.
5. TODO 5: `DELETE /projekt/{id}` entfernt das Projekt mit dieser id. Antwort: Status 200 mit leerem Body. Ein anschließendes `GET /projekte` enthält es nicht mehr, und `GET /projekt/{id}` liefert 404. Existiert die id nicht, lautet die Antwort Status 404.

## Übrige Dateien
Die Website-Dateien (index.php, projekte.html, kontakt.php, ...) enthalten keine TODOs und entsprechen dem Stand aus Kapitel 8. Die Projekte-Seite nutzt die Schnittstelle noch nicht - das ist Gegenstand von Übung 3.
