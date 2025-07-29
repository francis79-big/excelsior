<?php  
 //load_data.php  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "szakdolgozat_nagyferenc_excelsior";
    $roomID = $_POST['room'];
    //Catlakozás a szerverhez és az adatbázis kiválasztása
    $connection = mysqli_connect ($servername, $username, $password, $db) or die($connection->error);
 $output = '';  
 //var_dump($_POST);
 //print_r($_POST["chosenRoom"]);
 if(isset($_POST["room"]))  
 {  
      if($_POST["room"] != '')  
      {  
           $query2 = "SELECT `Bedrooms`, `Toilet`, `Bathroom`, `Kitchen`, `Air_Conditioner`, `Balcony`, `WIFI`, `LED TV`, `Minibar` FROM components WHERE id = $roomID";  
      }  
      else  
      {  
           echo 'Válasszon ki egy szobatípust!';  
      }  
      $result = mysqli_query($connection, $query2);  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= $row["Bedrooms"].', '.$row["Toilet"].', '.$row["Bathroom"].', '.$row["Kitchen"].', '.$row["Air_Conditioner"].', '.$row["Balcony"].', '.$row["WIFI"].', '.$row["LED TV"].', '.$row["Minibar"]; //.$row["Bedrooms"].$row["Toilet"].$row["Bathroom"].$row["Kitchen"].$row["Air_Conditioner"].$row["Balcony"].$row["WIFI"].$row["LED TV"].$row["Minibar"];  
      }  
      echo $output;
      
 }  
 ?>