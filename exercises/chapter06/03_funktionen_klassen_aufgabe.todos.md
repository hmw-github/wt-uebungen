# TODOs – Übung 3: Funktionen und Klassen

## 03_funktionen_klassen_aufgabe.php
1. TODO 1: Funktion `pruefeVorzeichen($zahl, &$ergebnis)` schreiben, die `$zahl` per Wert entgegennimmt und per Referenz in `$ergebnis` den String `"positiv"`, `"negativ"` oder `"null"` ablegt, je nachdem ob `$zahl > 0`, `< 0` oder `== 0` ist. Die Funktion selbst gibt nichts zurück.
2. TODO 2: `pruefeVorzeichen()` für eine Beispielzahl aufrufen und den über die Referenzvariable ermittelten Wert von `$ergebnis` ausgeben.
3. TODO 3: Klasse `Projekt` mit den privaten Eigenschaften `$titel` und `$technologie`, einem Konstruktor `__construct($titel, $technologie)` und einer Methode `__toString()` erstellen, die einen String wie `"'Titel' - Technologie"` zurückgibt.
4. TODO 4: Klasse `Webprojekt` erstellen, die von `Projekt` erbt (`extends Projekt`) und zusätzlich die private Eigenschaft `$jahr` sowie einen eigenen Konstruktor besitzt, der den Konstruktor der Basisklasse über `parent::__construct(...)` aufruft. `__toString()` überschreiben, sodass zusätzlich das Jahr ausgegeben wird, wobei die Basisklassen-Darstellung über `parent::__toString()` wiederverwendet wird.
5. TODO 5: Ein `Projekt` und ein `Webprojekt` instanziieren und beide (z.B. mit `echo`) ausgeben.
