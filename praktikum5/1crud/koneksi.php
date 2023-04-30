<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_kampus";

$conn = new mysqli($servername, $username, $password, $dbname) or die("Koneksi error!" . $conn->connect_error);

// echo "Koneksi Berhasil";
?>