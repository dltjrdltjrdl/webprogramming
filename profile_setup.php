<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Your Profile Update</h1>
    <form method="POST" action="profile_insert.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="intro">Introduction:</label>
        <textarea id="intro" name="intro" rows="10" cols="50" required></textarea><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>