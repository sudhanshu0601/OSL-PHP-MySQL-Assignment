<?php
require '../config/db.php';

$result = $conn->query("SELECT * FROM students");

echo "<table><tr><th>Name</th><th>Age</th><th>Email</th><th></th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['name']}</td>
            <td>{$row['age']}</td>
            <td>{$row['email']}</td>
            <td>
                <form method='GET' action='../includes/delete.php'>
                    <input type='hidden' name='id' value='{$row['id']}'>
                    <button type='submit' id='deleteBtn'>Delete</button>
                </form>
            </td>
        </tr>";
}
echo "</table>";
