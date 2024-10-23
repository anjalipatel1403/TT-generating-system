<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Sign Up</h1>
        <form action="signup_process.php" method="POST">
            <label for="username">Email:</label>
            <input type="email" id="username" name="username" placeholder="Enter your Gmail" required pattern=".+@gmail.com">
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter password" required pattern="(?=.*\d)(?=.*[a-zA-Z]).{6,}">
            
            <button type="submit">Sign Up</button>
        </form>
        <p>Already have an account? <a href="login.php">Log In</a></p>
    </div>
</body>
</html>
