<?php
session_start();


if(isset($_GET['success'])){
    echo '<script>alert("Sikeres regisztráció\nJelentkezz be!");</script>';
}

if(isset($_GET['error'])){
    switch($_GET['error']){
        case 1: echo '<script>alert("Sikertelen bejelentkezés, ellenőrizze az adatokat!");</script>'; break;
        //Nem lehet a reservation.php oldalt megtekinteni, még abban az esetben sem, ha a böngészőben közvetlenül írjuk be a címét, rejtett oldal míg be nincs bejelentkezve
        case 2:  echo '<script>alert("Jelnetkezzen be az oldal megtekintéséhez!");</script>'; break;
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
            <h2>Foglalás / Bejelentkezés</h2><br>
            <form method="POST" action="../PHP/login2.php" id="logInPHP">
                <div class="login-div">
                    <div class="form-group">
                        <label for="">Emailcím</label>
                        <input class="form-control" type="email" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jelszó</label>
                        <input class="form-control" type="password" name="password" id="password" required>
                    </div>
                    <div class="form-group">
                        <button onclick="logInClick_()" type="submit" class="submit-btn" name="singUp">Bejelentkezés</button>
                    </div>
                </div>
            </form>
        </div>
        <div>A foglalás <a href="registration.php"> regisztráció</a>-hoz kötött!</div>
    </div>

    <script src="../JS/login.js"></script>
    
    


</body>

</html>