<?php
require '../config/db.php';

$result = $conn->query("SELECT * FROM students");

echo "<table border='1'><tr><th>Name</th><th>Age</th><th>Email</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['name']}</td><td>{$row['age']}</td><td>{$row['email']}</td></tr>";
}
echo "</table>";
?>
