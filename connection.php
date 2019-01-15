<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE todo";

// Use database
$sql = "USE DATABASE todo";

// Create Tables 
$sql = "CREATE TABLE IF NOT EXISTS tasktable (
taskName VARCHAR(50) NOT NULL,
taskDate DATE NOT NULL,
progress VARCHAR(50) NOT NULL
)";
?>