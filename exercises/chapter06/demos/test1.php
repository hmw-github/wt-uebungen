<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function test1($werte) {
        return count($werte);
    }

    $anzahl = test1("aa", 1, true);
    echo "anzahl: $anzahl";
?>
</body>
</html>