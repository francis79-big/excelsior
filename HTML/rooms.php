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
            <h1>Szobák</h1>

            <div>Kényelmes 2-3-4-5 ágyas szobák várják vendégeinket.<br>

                Minden szobában saját zuhanyzó, WC és televízió található.<br>

                A társalgóban hűtőszekrény.
            </div>
        </div>
    </div>
</body>

</html>