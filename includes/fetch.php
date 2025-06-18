<?php
require '../config/db.php';

$result = $conn->query("SELECT * FROM students");

echo "<table><tr><th>Name</th><th>Age</th><th>Email</th><th class='fourthCol'></th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['name']}</td>
            <td>{$row['age']}</td>
            <td>{$row['email']}</td>
            <td class='fourthCol'>
                <form method='POST' action='../includes/delete.php'>
                    <input type='hidden' name='id' value='{$row['id']}'>
                    <button type='submit'>Delete</button>
                </form>
            </td>
        </tr>";
}
echo "</table>";
