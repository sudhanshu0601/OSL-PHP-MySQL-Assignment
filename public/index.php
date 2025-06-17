<?php include '../includes/insert.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
         <h2>Add Student</h2>
    <form method="POST">
        Name: <input type="text" name="name" required><br>
        Age: <input type="number" name="age" required><br>
        Email: <input type="email" name="email" required><br>
        <input type="submit" value="Add Student">
    </form>

    <h2>Student List</h2>
    <?php include '../includes/fetch.php'; ?>
    </div>
</body>
</html>