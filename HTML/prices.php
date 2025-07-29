<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Excelsior</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
    <div id="container">
        <div id="header"></div>
        <?php include_once("menu.php");?>
        <div class="clear"></div>

        <div id="content">
            <h1>Árak</h1>
        <p>&nbsp;</p>
        <p>4900Ft / fő /éj</p>
        <p>&nbsp;</p>

        <p>Gyerekeknek:</p>
        <p>5 éves korig ingyenes<br>
            10 éves korig 50%-os kedvezmény</p>
        <p>&nbsp;</p>
        <p>Csoportoknak külön kedvezmény!<br>
            Étkezés megbeszélés szerint!</p>
        </div>
    </div>
</body>

</html>