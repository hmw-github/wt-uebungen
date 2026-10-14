<?php

    // GET: Inputs als Query-String in URL
    // http://localhost:8006/demos/check.php?user=Anna&pwd=123456

    // POST: Inputs als Query-String in HTTP body
    // http://localhost:8006/demos/check.php
    // body: user=Anna&pwd=123456

    //var_dump($_GET);
    var_dump($_POST);

    if ($_POST['user'] == 'Anna' && $_POST['pwd'] == 123) {
        echo "<br>Super!";
    } else {
        echo "<br>Nope!";
    }
    