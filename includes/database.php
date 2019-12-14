<?php
//making a database connection
$database = "mustang";
$databasehost = "localhost";
$databaseuser= "adhigunarsa";
$databasepassword = "Th0mf0rd";
$connection = mysqli_connect($databasehost,$databaseuser,$databasepassword,$database);
if(!$connection){
  echo "connection error";
}


?>
