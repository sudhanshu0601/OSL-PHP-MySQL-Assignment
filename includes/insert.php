<?php
require '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $age = (int) $_POST['age'];
    $email = $conn->real_escape_string($_POST['email']);

    $sql = "INSERT INTO students (name, age, email) VALUES ('$name', $age, '$email')";
    if (!$conn->query($sql)) {
        echo "Error: " . $conn->error;
    }

    header("Location: ../public/index.php");
    exit();
}
