<?php

$servername = "";
$username = "";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {

    die("ERROR: Database Connection Failed: " . $conn->connect_error);

}

?>
