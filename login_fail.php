<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Many Languages Song Lyrics Sharing Web</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
<header>
    <h1>Login</h1>
    <p>invalid login information!</p>
    <form action="login_check.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
    <a href="create_account.php">Don't have an account? Register here</a>
</body>
</html>