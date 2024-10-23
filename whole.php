<?php
session_start();

// Initialize error and success messages
$error = "";
$success = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        // SIGNUP action
        if ($_POST['action'] == 'signup') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            // Validate email and password
            if (filter_var($username, FILTER_VALIDATE_EMAIL) && preg_match("/(?=.*\d)(?=.*[a-zA-Z]).{6,}/", $password)) {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $success = "Signup successful! You can now log in.";
            } else {
                $error = "Invalid email or password format. Email must be Gmail and password must be at least 6 characters long with letters and numbers.";
            }
        }

        // LOGIN action
        elseif ($_POST['action'] == 'login') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            // Check if user exists in session
            if (isset($_SESSION['username']) && $_SESSION['username'] == $username && $_SESSION['password'] == $password) {
                $success = "Login successful! Welcome to the Timetable Management System.";
            } else {
                $error = "Invalid login credentials. Please sign up first.";
            }
        }

        // FORGOT PASSWORD action
        elseif ($_POST['action'] == 'forgot') {
            $success = "Please contact the admin for password recovery.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Timetable Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            background-color: green;
            color: white;
            padding: 10px;
            margin-bottom: 20px;
        }
        button, .button {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .message {
            color: green;
            font-weight: bold;
            margin-top: 10px;
        }
        .error {
            color: red;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Online Timetable Management System</h1>

    <?php
    if (!empty($success)) {
        echo "<div class='message'>$success</div>";
    }
    if (!empty($error)) {
        echo "<div class='error'>$error</div>";
    }
    ?>

    <!-- Signup Form -->
    <h2>Sign Up</h2>
    <form method="POST" action="">
        <input type="email" name="username" placeholder="Enter your Gmail" required pattern=".+@gmail.com">
        <input type="password" name="password" placeholder="Enter password" required pattern="(?=.*\d)(?=.*[a-zA-Z]).{6,}">
        <input type="hidden" name="action" value="signup">
        <button type="submit">Sign Up</button>
    </form>

    <p>Already have an account? <a href="#login">Log In</a></p>

    <!-- Login Form -->
    <h2>Log In</h2>
    <form method="POST" action="">
        <input type="email" name="username" placeholder="Enter your Gmail" required>
        <input type="password" name="password" placeholder="Enter password" required>
        <input type="hidden" name="action" value="login">
        <button type="submit">Log In</button>
    </form>

    <p><a href="#forgot" onclick="document.getElementById('forgot-password').submit();">Forgot Password?</a></p>

    <!-- Forgot Password Form (hidden) -->
    <form id="forgot-password" method="POST" action="" style="display: none;">
        <input type="hidden" name="action" value="forgot">
    </form>
</div>

</body>
</html>
