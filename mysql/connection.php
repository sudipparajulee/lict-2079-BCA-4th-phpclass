<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "lict";

//connection in procedural way
$conn = mysqli_connect($server, $user, $pass, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//connection in object oriented way
$conn = new mysqli($server, $user, $pass, $db);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//connection in PDO way
try {
    $conn = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


