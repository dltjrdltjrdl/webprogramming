<?php

$db = mysqli_connect('localhost', 'root', '') or die('Unable to connect to the database');
mysqli_select_db($db,'song_info') or die(mysqli_error($db));

$query = "SELECT 
profile_name,profile_email,profile_intro
 FROM 
profile_info 
 WHERE
profile_id=1";

$result = mysqli_query($db, $query) or die(mysqli_error($db));

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Many Languages Song Lyrics Sharing Web</title>
        <link rel="stylesheet" href="styles.css"> 
    </head>
    <body>
        
    <header>
        <h1>Many Languages Song Lyrics Sharing Web</h1>
        <nav>
            <ul>
                <li><a href="homepage_setup.php">Home</a></li>
                <li><a href="upload.php">Upload Lyrics</a></li>
                <li><a href="browse.php">Browse Songs</a></li>
                <li><a href="profile_display.php">Your Profile</a></li>
                <li><a href="profile_setup.php">Edit Profile</a></li>
                <li><a href="homepage.php">Logout</a></li>
                <li><a href="create_account.php">Create Account</a></li>
            </ul>
        </nav>
    </header>
<table border="1">
            <tr>
                <th>Username</th>
                <th>User Email</th>
                <th>Introduction</th>
            </tr>
            <?php
                while($row = mysqli_fetch_assoc($result)){
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($row['profile_name']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['profile_email']) . '</td>';
                    echo '<td>' . nl2br(htmlspecialchars($row['profile_intro'])) . '</td>';
                    echo '</tr>';
                }
            ?>
        </table>
    </body>
</html>