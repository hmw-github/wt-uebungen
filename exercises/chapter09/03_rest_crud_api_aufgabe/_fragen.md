## 9.3 REST-CRUD-API (`03_rest_crud_api_aufgabe`)

1. Wie liest man den JSON-Body einer POST- oder PUT-Anfrage in PHP?
2. Wie vergibt man eine neue fortlaufende ID? Warum ist `count($projekte) + 1` problematisch, wenn schon Projekte gelöscht wurden?
3. Warum antwortet POST mit dem neu angelegten Projekt? Welcher Statuscode wäre eigentlich passender?
4. Wie ändert man ein Element in einem Array innerhalb einer `foreach`-Schleife (Referenz `&` bzw. Zugriff über den Index)?
5. Wie entfernt man ein Element aus einem Array (`array_splice` vs. `unset`)? Was passiert mit den Indizes?
6. Warum werden die Projekte in `$_SESSION` gespeichert? Welche Nachteile hat das?
7. Was ist CORS, und wozu dient die OPTIONS-Anfrage (Preflight)?

<details><summary>Erwartete Antworten</summary>

1. `json_decode(file_get_contents('php://input'), true)`.
2. Höchste vorhandene ID + 1 (z.B. `max(array_column($projekte, 'id')) + 1`). Mit `count + 1` kann eine ID doppelt vergeben werden, wenn schon gelöscht wurde.
3. Der Client erfährt so die vom Server vergebene ID. Nach REST wäre 201 Created passender, die Übung verlangt 200.
4. `foreach ($arr as &$p)` oder `foreach ($arr as $i => $p) { $arr[$i][…] = …; }`. Ohne `&` ändert man nur eine Kopie.
5. `array_splice($arr, $i, 1)` entfernt und nummeriert neu. `unset` hinterlässt eine Lücke im Index, die `json_encode` in ein Objekt statt eines Arrays verwandelt.
6. Es geht ohne Datenbank. Daten gelten nur pro Browser/Client und gehen mit der Session verloren.
7. Cross-Origin Resource Sharing: Der Server erlaubt per Header Anfragen von fremden Origins. Bei „nicht einfachen“ Anfragen (PUT, DELETE, JSON-Body) fragt der Browser vorher per OPTIONS an, ob die Anfrage erlaubt ist.
</details>
