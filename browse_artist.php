<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Song</title>
</head>
<body>
    <h1>Browse Song</h1>
    <form action="browse_check_artist.php" method="post">
        <label for="title">Enter the song's artist:</label>
        <input type="text" id="title" name="title" required><br>
        <input type="submit" value="Search">
    </form>
    <a href="browse.php">Do you want to search by song's title? Click here</a>
</body>
</html>