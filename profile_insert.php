<?php

$db = mysqli_connect('localhost', 'root', '') or die('Unable to connect to the database');
mysqli_select_db($db,'song_info') or die(mysqli_error($db));

$query = 'DROP TABLE IF EXISTS profile_info';
mysqli_query($db, $query) or die(mysqli_error($db));

$query = 'CREATE TABLE profile_info(
    profile_name    VARCHAR(255)    NOT NULL,
    profile_email   VARCHAR(255)    NOT NULL,
    profile_intro   TEXT            NOT NULL,
    profile_id      INTEGER UNSIGNED AUTO_INCREMENT,

    PRIMARY KEY (profile_id)
)
ENGINE=MyISAM';

mysqli_query($db,$query) or die(mysqli_error($db));

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$intro = mysqli_real_escape_string($db, $_POST['intro']);

$query = "INSERT INTO profile_info 
            (profile_name, profile_email, profile_intro) 
        VALUES 
            ('$username', '$email', '$intro')";

mysqli_query($db,$query) or die(mysqli_error($db));

header('Location: homepage_setup.php');
?>
