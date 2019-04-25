<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="retco_mm";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

