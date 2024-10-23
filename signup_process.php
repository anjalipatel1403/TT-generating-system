<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate email and password
    if (filter_var($username, FILTER_VALIDATE_EMAIL) && preg_match("/(?=.*\d)(?=.*[a-zA-Z]).{6,}/", $password)) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        echo "Signup successful! You can now <a href='login.php'>log in</a>.";
    } else {
        echo "Invalid email or password format. Email must be Gmail and password must be at least 6 characters long with letters and numbers.";
    }
}
?>
