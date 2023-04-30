<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data_kampus";

function conn_server($dbname=null) {
    global $servername, $username, $password;
    $conn = new mysqli($servername, $username, $password, $dbname) or die("Koneksi Gagal");
    return $conn;
}

// Koneksi ke server dan Membuat database
$conn = conn_server();

$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === true) {
    echo "Database berhasil dibuat.<br>";
} else {
    echo "Database gagal dibuat";
}


// Koneksi ke database dan Membuat table
$conn = conn_server($dbname);

$sql = "CREATE TABLE mahasiswa (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nim CHAR(9) NOT NULL,
    nama VARCHAR(32) NOT NULL,
    prodi VARCHAR(32) NOT NULL
)";
if ($conn->query($sql) === true) {
    echo "Table berhasil dibuat.<br>";
} else {
    echo "Table gagal dibuat";
}

$conn->close();
?>