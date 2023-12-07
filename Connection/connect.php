<?php
$DBname = 'test';
$Servername = 'localhost';
$Username = 'root';
$password = '';

$conn = new mysqli($Servername, $Username, $password, $DBname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "connected ";
}
