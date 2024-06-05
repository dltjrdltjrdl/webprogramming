<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Many Languages Song Lyrics Sharing Web</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <h1>Browse Song</h1>
    <form action="browse_check_title.php" method="post">
        <label for="title">Enter the song's title:</label>
        <input type="text" id="title" name="title" required><br>
        <input type="submit" value="Search">
    </form>
    <a href="browse_artist.php">Do you want to search by artist? Click here</a>
</body>
</html>