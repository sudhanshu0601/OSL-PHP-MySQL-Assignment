<?php
$host = 'localhost';
$db = 'school_db';
$user = 'root'; // or your MySQL username
$pass = '';     // your MySQL password

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
