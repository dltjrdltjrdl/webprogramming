<html>
    <head>
    <link rel="stylesheet" href="styles.css"> 
    </head>
    <body>
        <h2>Upload Song Lyrics</h2>
            <form action="upload_data.php" method="post">
                <label for="title">Song Title:</label>
                <input type="text" id="title" name="title" required><br><br>
                <label for="artist">Song Artist:</label>
                <input type="text" id="artist" name="artist" required><br><br>
                <label for="lyrics">Song Lyrics:</label><br>
                <textarea id="lyrics" name="lyrics" rows="10" cols="50" required></textarea><br><br>
                <input type="submit" value="Upload">
            </form>
    </body>
</html>
