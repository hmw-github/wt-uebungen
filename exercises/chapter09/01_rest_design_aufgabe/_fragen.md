## 9.1 REST-Design (`01_rest_design_aufgabe`)

1. Was ist REST? Was ist eine Ressource?
2. Welche HTTP-Methoden gibt es und welcher CRUD-Operation entsprechen sie?
3. Warum steht die Aktion in der Methode und nicht in der URL (`/projekt/5` statt `/loescheProjekt?id=5`)?
4. Warum lautet die Liste `/projekte`, das einzelne Projekt aber `/projekt/{id}`?
5. Was bedeuten „sicher“ und „idempotent“? Welche Methoden sind es?
6. Wie funktioniert der reguläre Ausdruck, der aus `{id}` ein `[0-9]+` macht? Warum braucht man `^` und `$`?
7. Wie liefert `preg_match()` das Ergebnis?

<details><summary>Erwartete Antworten</summary>

1. Representational State Transfer: ein Architekturstil, bei dem Ressourcen über URLs angesprochen und mit den HTTP-Methoden bearbeitet werden. Eine Ressource ist ein adressierbares Objekt (hier: Projekt).
2. GET = Read, POST = Create, PUT = Update (ersetzen), PATCH = teilweise Update, DELETE = Delete.
3. Die URL bezeichnet die Ressource, die Methode bestimmt die Operation. So bleibt die API einheitlich.
4. Dies ist die Konvention dieses Kurses (Sammlung im Plural, einzelne Ressource mit ID). Viele APIs verwenden auch `/projekte/{id}`.
5. Sicher: Die Methode ändert nichts (GET). Idempotent: Mehrfaches Ausführen hat dieselbe Wirkung wie einmaliges (GET, PUT, DELETE, nicht POST).
6. `[0-9]+` = eine oder mehrere Ziffern. `^`/`$` erzwingen, dass der ganze Pfad passt und nicht nur ein Teil.
7. `1` bei Treffer, `0` ohne Treffer, `false` bei Fehler.
</details>
