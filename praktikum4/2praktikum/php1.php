<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

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

$sql = "CREATE TABLE mhs (
    nim CHAR(9) PRIMARY KEY,
    nama VARCHAR(30),
    alamat VARCHAR(50),
    email VARCHAR(30),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === true) {
    echo "Table berhasil dibuat.<br>";
} else {
    echo "Table gagal dibuat";
}

$conn->close();
?>