<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If not logged in, redirect to login page
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCA Year Selection</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>BCA Year</h1>
        <div class="button-container">
            <a href="#" class="button">FYBCA</a>
            <a href="#" class="button">SYBCA</a>
            <a href="#" class="button">TYBCA</a>
        </div>
    </div>
</body>
</html>
