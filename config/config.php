<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freshcery";
try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    echo "Connected successfully";

}

catch( PDOException $e)
{

    echo "Connection failed: " . $e->getMessage();
}