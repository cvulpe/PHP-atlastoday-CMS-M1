<?php

$host = 'localhost';
$user = 'root';
$password = "";
$dbName = 'blog';

$conn = new Mysqli($host, $user, $password, $dbName);

if ($conn->connect_error) {
    die("Database connection error: " . $conn->connect_error);
}