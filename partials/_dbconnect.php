<?php
//connecting database....
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "needtoshop";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    $err = mysqli_connect_error($conn);
  echo "Connection was not successful because of ". $err . "<br>";
}
?>