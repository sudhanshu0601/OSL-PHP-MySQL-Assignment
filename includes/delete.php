<?php
require '../config/db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = (int) $_POST['id'];

    $sql = "DELETE FROM students WHERE id = $id";
    if (!$conn->query($sql)) {
        echo "Error: " . $conn->error;
    } else {
        header("Location: ../public/index.php");
        exit();
    }
}