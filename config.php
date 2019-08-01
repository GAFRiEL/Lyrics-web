<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "lyrics_web";

$db = mysqli_connect($hostname, $username, $password, $database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>