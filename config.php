<?php

// $host = 'localhost';
// $dbuser = 'postgres';
// $dbpass = '12345';
// $port = '5432';
// $dbname = 'BapasSafe';

$servername = "localhost";
$database = "bapassukses";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// script koneksi php postgree
// $conn = pg_connect(
//     "host=$host port=$port dbname=$dbname user=$dbuser password=$dbpass"
// );
