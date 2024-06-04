<html>
    <head>
    <link rel="stylesheet" href="styles.css"> 
    </head>
    <body>
        <h2>Create Account!</h2>
            <form action="create_account_data.php" method="post">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br><br>
                <label for="password">Password:</label>
                <input type="text" id="password" name="password" required><br><br>
                <input type="submit" value="Create">
            </form>
    </body>
</html>
