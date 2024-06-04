<?php
// MySQL 데이터베이스 연결 정보
$db = mysqli_connect('localhost','root','') or die('Unable to connect');

mysqli_select_db($db,'song_info') or die(mysqli_error($db));

$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);


$query = "INSERT INTO users 
            (user_name, user_pass) 
        VALUES 
            ('$username', '$password')";

mysqli_query($db,$query) or die(mysqli_error($db));

    header('Location: login.php');
?>
<html>
    <head>
    <link rel="stylesheet" href="styles.css"> 
    </head>
    <body>
        
    </body>
</html>