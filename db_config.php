<?php
$host = 'localhost';
$db = 'music_player_app';
$user = 'root';
$pass = '';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
