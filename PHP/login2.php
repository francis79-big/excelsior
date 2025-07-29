<?php


$email = $_POST['email'];
$password = $_POST['password'];

//Catlakozás a szerverhez és az adatbázis kiválasztása
$conn= new mysqli('localhost','root','','szakdolgozat_nagyferenc_excelsior');
$result=$conn->query(sprintf("SELECT * FROM `users` WHERE emailAdd = '%s' AND pass = '%s'", $email,$password));
$conn->close();
if($result->num_rows==1){
    //sikeres belépés
    $row=$result->fetch_array() ;
    session_start();
    $_SESSION["id"]=$row[0];
    $_SESSION["UserName"]= $row[1];
    header('Location: ../HTML/reservation.php');
}
else
{
    //sikertelken beépés
    header('Location: ../HTML/login.php?error=1');
    $db->close();
}

?>


