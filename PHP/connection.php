<?php
$servername = "sql204.epizy.com";
$user = "epiz_23024477";
$pass = "1haxAREfags9";
$dbname = "Memes";

// Create connection
$conn = new mysqli($servername, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    $response["success"] = 0;
    $response["message"] = "Connection failed";
    echo json_encode($response);
} else {
    $response["success"] = 1;
    $response["connection Successful"];
    echo json_encode($response);
}