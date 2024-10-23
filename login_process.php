<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the user has signed up
    if (isset($_SESSION['username']) && $_SESSION['username'] == $username && $_SESSION['password'] == $password) {
        echo "Login successful! Welcome to the Timetable Management System.";
    } else {
        echo "Invalid login credentials. Please check your email or password.";
    }
}
?>
