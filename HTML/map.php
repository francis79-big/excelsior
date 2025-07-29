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
            <h1>Térkép</h1><br>

            <p><iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20480.12721995551!2d67.027054113736!3d24.849869786705717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e713f67be65%3A0xf76f692fc78f5977!2sHotel%20Excelsior%20Karachi!5e0!3m2!1shu!2shu!4v1611440749087!5m2!1shu!2shu" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
            </p>
        </div>
    </div>
</body>

</html>