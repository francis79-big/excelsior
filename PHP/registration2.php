<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "szakdolgozat_nagyferenc_excelsior";


function EmailIsUsed($email){         //függvény, ami ellenörzi a regisztrálni kívánt email címet, hogy létezik e már
  $returnValue=false;
  $sql=sprintf("SELECT * FROM `users` WHERE `emailAdd`='%s'", $email);
  //Catlakozás a szerverhez és az adatbázis kiválasztása vagy sikertelen csatlakozás
  $connection = new mysqli ($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['db']) or header('Location: ../HTML/registration.php?erorr=3'); 
  $result=$connection->query($sql);
  if($result->num_rows>0){
    //van talalat
    $returnValue=true;
  }
  $connection->close();
  return $returnValue;
}


if(isset($_POST['registration']))
{
    $email = $_POST['email'];
    $userName = $_POST['userName'];
    $phoneNum = $_POST['phoneNum'];
    $password1 = $_POST['password_1'];
    $password2 = $_POST['password_2'];
    if($password1==$password2){

      //meghívja a függvényt lecsekkolni az emailt létezik-e!
      if(EmailIsUsed($email)) header('Location: ../HTML/registration.php?error=1');   //Létező cím, kappja az error üzenetet
      else{
        //szabad a cím, mehet az adatbázois manipuláció
        //Catlakozás a szerverhez és az adatbázis kiválasztása vagy sikertelen csatlakozás
        $connection = new mysqli ($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['db']) or header('Location: ../HTML/registration.php?erorr=3'); 
        $sql = sprintf("INSERT INTO `users`(`UserName`, `emailAdd`, `TelNumber`, `pass`) VALUES ('%s','%s','%s','%s')",$userName, $email, $phoneNum, $password1);
        $result=$connection->query($sql);
        $connection->close();
        if($result){
          header('Location: ../HTML/login.php?success=ok');   //Megtörténik a regisztráció, melyet a felhesználóval szintén tudatunk
        }else{
          header('Location: ../HTML/registration.php?erorr=3'); //sikertelen csatlakozás
        }
      }
      
    }else{
     
      header('Location: ../HTML/registration.php?error=2');
    }

    
    
}

?>