<?php

$servername = "localhost";
$username = "Nik";
$password = "gg52ggWhale3169";
$dbname = "hotels";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}