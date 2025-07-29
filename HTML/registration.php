<?php
session_start();


if(isset($_GET['error'])){
    switch($_GET['error']){
        case 1:  echo '<script>alert("A regisztrálni kívánt e-mail cím már létezik, használjon másikat!")</script>'; break;
        case 2:  echo '<script>alert("A megadott jelszó és annak megerősítése nem egyezik, ellenőrizze!")</script>'; break;
        case 3:  echo '<script>alert("Sikertelenadatbázis csatlakozáés")</script>'; break;
    }
}


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
            <h2>Regisztráció</h2><br>
            <form method="POST" action="../PHP/registration2.php" id="regPHP">
                <div class="reg-div">
                    <div class="form-group">
                        <label>Emailcím</label>
                        <input class="form-control" type="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label>Felhasználó név</label>
                        <input class="form-control" type="text" name="userName" required>
                    </div>
                    <div class="form-group">
                        <label>Telefonszám</label>
                        <input class="form-control" type="text" name="phoneNum" required>
                    </div>
                    <div class="form-group">
                        <label>Jelszó</label>
                        <input class="form-control" type="password" name="password_1" required minlength="4">
                    </div>
                    <div class="form-group">
                        <label>Jelszó megerősítése</label>
                        <input class="form-control" type="password" name="password_2" required>
                    </div><br>
                    <div>
                        <label for="privacy-statement">Adatvédelm nyilatkozat elfogadása</label>
                        <input class="form-control" type="checkbox" name="privacy-statement" required="required">
                    </div><br><br>
                    <div class="form-group">
                        <button onclick="regClick_()" type="submit" class="submit-btn" name="registration">Regisztrálás</button>
                    </div>
                </div>
            </form>
        </div>

        <script src="../JS/registration.js"></script>

</body>

</html>