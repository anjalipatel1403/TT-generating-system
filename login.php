<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Log In</h1>
        <form action="login_process.php" method="POST">
            <label for="username">Email:</label>
            <input type="email" id="username" name="username" placeholder="Enter your Gmail" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter password" required>
            
            <button type="submit">Log In</button>
        </form>
        <p><a href="forgot_password.php">Forgot Password?</a></p>
    </div>
</body>
</html>
