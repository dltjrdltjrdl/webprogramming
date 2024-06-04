<?php
// MySQL 데이터베이스 연결 정보
$db = mysqli_connect('localhost', 'root', '') or die('Unable to connect to the database');
mysqli_select_db($db,'song_info') or die(mysqli_error($db));

// 데이터베이스에서 데이터 가져오기
$query = 'SELECT song_title,song_artist,song_lyrics
        FROM 
            song
        WHERE
            song_id = 1';
$result = mysqli_query($db, $query) or die(mysqli_error($db));
?>
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
        <h1>Many Languages Song Lyrics Sharing Web</h1>
        <nav>
            <ul>
                <li><a href="homepage_success.php">Home</a></li>
                <li><a href="upload.php">Upload Lyrics</a></li>
                <li><a href="browse.php">Browse Songs</a></li>
                <li><a href="homepage.php">Logout</a></li>
                <li><a href="create_account.php">Create Account</a></li>
            </ul>
        </nav>
    </header>
    <h2>Recent upload Song Details</h2>
        <table border="1">
            <tr>
                <th>Title</th>
                <th>Artist</th>
                <th>Lyrics</th>
            </tr>
            <?php
                while($row = mysqli_fetch_assoc($result)){
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($row['song_title']) . '</td>';
                    echo '<td>' . htmlspecialchars($row['song_artist']) . '</td>';
                    echo '<td>' . nl2br(htmlspecialchars($row['song_lyrics'])) . '</td>';
                    echo '</tr>';
                }
            ?>
        </table>
</body>
</html>