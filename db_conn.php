<?php
$servername = "localhost";
$username = "root";
$dbname = "main";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 echo "Connected successfully";
?>