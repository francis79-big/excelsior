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
            <h1>Bemutatkozás</h1><br>
            <h3>HOTEL EXCELSIOR</h3>
            <p>A legjobb választás!</p>

            <p>Ötcsillagos kényelem, kényeztetés, testi-lelki feltöltődés a kikapcsolódásra vágyóknak. 
                Konferenciatermek, 24 órás business center szolgáltatások és asszisztencia az üzleti élet utazóinak.</p><br>

            <p>
            <p>Megközelíthető:</p>
            <ul>
                <li>Budapest – Graz útvonalon kocsival a 8-as főúton</li>
                <li>vonattal</li>
                <li>busszal</li>
            </ul>
            </p><br>
            <p>wellness centruma közel 1000 négyzetméteren egyedülálló szauna parkkal és hozzátartozó pihenőparkkal várja vendégeit. 
                A wellness centrum több medencével többek közt 25- méteres úszómedencével, 
                melegvizes merülő medencével, jacuzzival, gyermekmedencével, valamint szoláriummal felszerelt.</p><br>

            <p>A szálloda egy 300 fős étteremmel és egy hajnalig nyitva tartó bárral várja vendégeit.
                Kényelmes pihenés, kikapcsolódás, családias környezet, házias ízek várják az idelátogatókat!</p>
        </div>
    </div>
</body>

</html>