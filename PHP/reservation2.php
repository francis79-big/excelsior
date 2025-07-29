<?php
session_start();

    $userID = $_SESSION["id"];                                            
    $roomID = $_POST['chosenRoom'];                     
    $arrivalDate = $_POST['arrival'];
    $departureDate = $_POST['departure'];

$db = new mysqli('localhost','root','','szakdolgozat_nagyferenc_excelsior');    //csatlakozás az adatbázishoz
//Ellenörizzük a foglalásokat, hogy van e ütközés
$query = mysqli_query($db, "SELECT * FROM `reservations` WHERE `Room_ID` = '$roomID' AND (ArrivalDate BETWEEN '$arrivalDate' AND '$departureDate' OR DepartureDate BETWEEN '$arrivalDate' AND '$departureDate')");
    

$failed = mysqli_num_rows($query);
if ($failed == 1) {
    //ütköző foglalások, hibaüzenet
    header('Location: ../HTML/reservation.php?error=1');
}elseif(isset($_POST['reservation'])){
    $sql = mysqli_query($db, "INSERT INTO `reservations`(`User_ID`, `Room_ID`, `ArrivalDate`, `DepartureDate`) VALUES ('$userID','$roomID','$arrivalDate','$departureDate')");
      
    
    header('Location: ../index.php?success');
    //echo '<a href="../index.php"><button>Vissza a főoldalra!</button></a>';
    $db->close();  
    


}
?>