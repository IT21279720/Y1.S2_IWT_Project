<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "OnlineFitnessTrainer";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if($conn -> connect_error){
    die("ERROR: Could not connect. " . $conn->connect_error);
}

?>