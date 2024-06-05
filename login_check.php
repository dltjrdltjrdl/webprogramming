<?php

$db = mysqli_connect('localhost', 'root', '') or die('Unable to connect to the database');
mysqli_select_db($db,'song_info') or die(mysqli_error($db));

$username = mysqli_real_escape_string($db, $_POST['username']);
$password = mysqli_real_escape_string($db, $_POST['password']);

$query = "SELECT 
        user_name, user_pass
         FROM 
        users 
         WHERE
        user_name='$username'";

$result = mysqli_query($db, $query) or die(mysqli_error($db));

while($row = mysqli_fetch_assoc($result)){
    $h_pass  = $row['user_pass'];
    $h_name = $row['user_name'];
    echo $h_pass, $h_name;
    if($password == $h_pass && $h_name==$username){
        echo 'Login Succeessful.';
        header('Location: profile_setup.php');
        exit();
    }
}

    header('Location: login_fail.php');

?>