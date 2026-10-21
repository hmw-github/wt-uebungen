# TODOs – Übung 1: JavaScript-Grundlagen (Projektliste und JSON)

Diese Übung entwickelt eine Klasse `Projektliste`, die ein Array von
`Projekt`-Objekten (bzw. `Webprojekt`-Objekten als Unterklasse) verwaltet
und Operationen zum Einfügen, Aktualisieren, Löschen und Auflisten
anbietet. Anschließend werden Projektdaten als JSON im `localStorage`
gespeichert und wieder gelesen. In diesem zusammenhängenden Szenario
werden Variablen, Datentypen und Operatoren, Kontrollstrukturen, Arrays,
Objekte, Klassen mit Vererbung sowie JSON und `localStorage` eingeübt.
Welches Sprachmittel Sie an welcher Stelle einsetzen, entscheiden Sie
selbst.

Nutzen Sie für alle Textausgaben die vorhandene Funktion `ausgabe(text)`.

## 01_js_grundlagen_aufgabe.html – Teil 1: Klassen Projekt und Webprojekt
1. TODO 1: Es gibt eine Klasse `Projekt`. Ein Projekt wird mit `id`, `titel` und `jahr` erzeugt. Die `id` kann von außen gelesen, aber nicht geändert werden; `titel` und `jahr` können gelesen und geändert werden. Ein Jahr vor 2000 wird abgewiesen: Der Versuch erzeugt einen Fehler, den der Aufrufer abfangen kann. Wird ein Projekt in einen String umgewandelt, erhält man eine lesbare Zusammenfassung (z.B. `Portfolio-Website (2024)`).
2. TODO 2: Es gibt eine Klasse `Webprojekt`. Ein Webprojekt ist ein Projekt (alles aus TODO 1 gilt weiterhin) und hat zusätzlich eine lesbare und änderbare `technologie`. Es wird mit `id`, `titel`, `jahr` und `technologie` erzeugt. Seine Textdarstellung ist die eines Projekts, ergänzt um die Technologie (z.B. `Portfolio-Website (2024), Technologie: HTML, CSS`), ohne dass dieser Teil doppelt programmiert wird.

## Teil 2: Klasse Projektliste
Der Konstruktor (`this._projekte = []`) sowie die Hilfsmethoden `anzahl` (Getter) und `alsArray()` sind bereits vorgegeben.

3. TODO 3: `hinzufuegen(projekt)` nimmt ein Projekt am Ende der Liste auf und bestätigt dies in der Ausgabe.
4. TODO 4: `aktualisieren(id, aenderungen)` übernimmt die Werte aus dem Objekt `aenderungen` (mögliche Eigenschaften: `titel`, `jahr`, `technologie`) in das Projekt mit der passenden `id`. Nur die übergebenen Eigenschaften werden geändert. Eine `technologie` wird nur bei Webprojekten übernommen. Gibt es keine passende `id`, erscheint eine Fehlermeldung und nichts wird geändert; sonst eine Bestätigung.
5. TODO 5: `entfernen(id)` löscht das Projekt mit der passenden `id` aus der Liste und bestätigt dies. Gibt es kein solches Projekt, erscheint eine Fehlermeldung.
6. TODO 6: `auflisten(id)` gibt ohne Argument alle Projekte (je eine Zeile) und die Gesamtanzahl aus. Mit `id` wird nur dieses eine Projekt ausgegeben, oder eine Fehlermeldung, falls es nicht existiert.
7. TODO 7: Nach `sortierenNachJahr()` stehen die Projekte nach Jahr aufsteigend geordnet in der Liste. Die Sortierung wird in der Ausgabe bestätigt.

## Teil 3: Hauptteil – Projektliste verwenden

8. TODO 8: Die Ausgabe zeigt Folgendes:
    - Variablen `naechsteId` (Startwert 1, später änderbar), `listenName` (unveränderlich) und `istInitialisiert`, deklariert mit den drei verschiedenen Schlüsselwörtern von JavaScript. Zu jeder Variablen werden Name und Datentyp ausgegeben.
    - Wert und Datentyp des Ausdrucks `"Kapitel " + 5`.
    - Das Ergebnis eines Vergleichs von `naechsteId` mit dem String `"1"`, einmal mit und einmal ohne Typprüfung.
9. TODO 9: Eine `Projektliste` enthält mindestens drei Projekte mit aufsteigenden ids, davon mindestens ein Webprojekt.
10. TODO 10: Die Ausgabe zeigt alle Projekte chronologisch nach Jahr geordnet.
11. TODO 11: Ein Projekt wird erfolgreich geändert. Ein zweiter Änderungsversuch mit einem Jahr vor 2000 bringt das Skript nicht zum Absturz: Stattdessen erscheint die Fehlermeldung aus der Klasse `Projekt` in der Ausgabe, und das Skript läuft weiter.
12. TODO 12: Die ersten beiden Projekte der Liste stehen in zwei eigenen, sprechend benannten Variablen (in einer einzigen Anweisung aus `alsArray()` gewonnen) und werden ausgegeben.
13. TODO 13: Die Ausgabe zeigt, wie ein vorhandenes Projekt gelöscht wird und der Löschversuch für eine nicht vorhandene id scheitert. Danach wird die aktuelle Listengröße in Worten bewertet: eigener Text für 0, 1 und 2 Projekte sowie ein Text für alle anderen Fälle.

## Teil 4: JSON und localStorage

Das Objekt, das Sie hier in JSON umwandeln, hat bewusst dieselbe Form
(titel, technologie, jahr) wie die Projektdaten, die später (Kapitel 9)
als JSON-Antwort einer echten REST-Schnittstelle geliefert werden.

**Hinweis**: localStorage speichert Daten pro Ursprung (Origin) im Browser.
Beim Öffnen dieser Datei direkt über `file://` funktioniert dies i.d.R.
zuverlässig, solange Sie dieselbe Datei erneut laden bzw. dieselbe
Browser-Registerkarte verwenden.

14. TODO 14: Ein Projekt mit titel "Portfolio-Website", technologie "PHP, REST" und jahr 2026 erscheint als JSON-Text in der Ausgabe.
15. TODO 15: Dieser JSON-Text liegt anschließend unter dem Schlüssel "letztesProjekt" im lokalen Speicher des Browsers (prüfbar in den Entwicklertools unter „Application/Speicher“). Er bleibt auch nach einem Neuladen der Seite erhalten.
16. TODO 16: Der gespeicherte Wert wird wieder aus dem lokalen Speicher geholt und in ein Objekt zurückverwandelt. Mindestens zwei seiner Eigenschaften erscheinen einzeln in der Ausgabe. Damit ist der Rundgang Objekt -> JSON-Text -> Objekt vollständig.
