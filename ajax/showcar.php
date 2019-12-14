<?php

include("../includes/database.php");

$sql = "SELECT image_id, url FROM images";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $cars = array();
    while($row = $result->fetch_assoc()) {
        array_push($cars,$row);
    }
} 
echo json_encode($cars);
?>
