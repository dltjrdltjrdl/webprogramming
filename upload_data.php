<?php
// MySQL 데이터베이스 연결 정보
$db = mysqli_connect('localhost','root','') or die('Unable to connect');

mysqli_select_db($db,'song_info') or die(mysqli_error($db));

$title = mysqli_real_escape_string($db, $_POST['title']);
$artist = mysqli_real_escape_string($db, $_POST['artist']);
$lyrics = mysqli_real_escape_string($db, $_POST['lyrics']);

$query = "INSERT INTO song 
            (song_title, song_artist, song_lyrics) 
        VALUES 
            ('$title', '$artist', '$lyrics')";

mysqli_query($db,$query) or die(mysqli_error($db));

    header('Location: homepage_success.php');
?>
<html>
    <head>
    <link rel="stylesheet" href="styles.css"> 
    </head>
    <body>
        
    </body>
</html>