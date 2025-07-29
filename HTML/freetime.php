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
            <h1>Szabadidő</h1><br>
            <table id="freeTimeTable">
                <tr>
                    <td colspan="2">1908 őszén a napilapok az alábbi eseményről tudósítottak: új Royal Orfeum épül a főváros szívében, 
                        az Erzsébet krt. 31. szám alatt és a vele kapcsolatos Hársfa utcai nagy épülettömb területén. 
                        Az építkezés Gaál Bertalan építész tervei alapján zajlott, Keleti Hermann és Fodor Oszkár megbízásából. 
                        A megnyitóra október 1-én került sor. A Royal Orfeum az akkori legmodernebb színháztechnikai berendezésekkel büszkélkedhetett, 
                        nézőtere 789 fő számára nyújtott szórakozási lehetőséget, és egy télikert is gazdagította az elegáns miliőt. 
                       </td>
                    <td><img src="../IMG/FreeTime_Theatre.jpg" alt="SSzínház" width="200" height="150"></td>
                </tr>
                <tr>
                    <td><img src="../IMG/FreeTime_SkatePark.jpg" alt="SkatePark" width="200" height="150"></td>
                    <td colspan="2">Messze vagyunk még Venice Beach-től, de a BMX-esek, gördeszkások és korisok is találhatnak maguknak ingyenes gyakorlópályákat, poolokat. Például az Erzsébet téren, az Óbuda Skateparkban, a Daru-domb skateparkban, a Zuglói skateparkban, a Nehru-parton.

                        Tipp: nem kell feltétlenül nekünk gördülni, a deszkásokat nézni is jó időtöltés.</td>
                </tr>
                <tr>
                    <td colspan="2">Heti 2-3 ingyenes jam session estével készül a Hollán Ernő utcai BJC, a város egyik legautentikusabb jazzklubja. Érdemes megtekinteni a pontos programot ITT, de általában a szerdák és a péntek-szombatok a közös örömzenélés estjei. 22:00-22:30-tól indul a jammelés.

                        Tipp: akár egyedül is jó program lehet egy BJC-s jammelés, jól lehet ismerkedni zeneszerető közegben</td>
                    <td><img src="../IMG/FreeTime_JazzClub.jpg" alt="JazzClub" width="200" height="150"></td>
                    <td></td>
                </tr>
                <tr>
                    <td><img src="../IMG/topar.jpg" alt="Topár lovastanya" width="200" height="150"></td>
                    <td>Van lehetőség lovaglásra a 7km-re lévő Kertai Topár lovas tanyán. Horgászoknak itt vannak a
                        Szajki
                        tavak vizei, a
                        Széki-tó vagy a Balaton.</td>
                    <td><img src="../IMG/szajkito.jpg" alt="Szajki-tó" width="200" height="150"></td>
                </tr>
                <tr>
                    <td><img src="../IMG/kalandpark.jpg" alt="Sobri Jóska Bakonyi Kalandpark" width="200" height="150">
                    </td>
                    <td>Gyerekeknek Kislődön a Sobri Jóska Bakonyi Kalandpark, Edericsen Afrika Múzeum és Állatkert van!
                    </td>
                    <td><img src="../IMG/afrikamuzeum.jpg" alt="Afrika Múzeum" width="200" height="150"></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>