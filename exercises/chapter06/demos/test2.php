<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Demo</title>
</head>
<body>
<?php
    $name = 'Anna';
?>
    <h1>Hallo <?php echo $name; ?> !</h1>
    <h1>Hallo <?=$name?> !</h1>

    <p>
        Stand: <?php echo date('d.m.Y H:m:i'); ?>

        <ul>
<?php
        for ($i = 1; $i < 10; ++$i) {
            $quadrat = $i * $i;
            echo "<li>" . $quadrat . "</li>";
        }
?>
        </ul>
    </p>
</body>
</html>