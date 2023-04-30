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

$sql = "CREATE TABLE members (
    nik CHAR(16) PRIMARY KEY,
    nama_lengkap VARCHAR(32),
    gender VARCHAR(16),
    tanggal_lahir DATE,
    agama VARCHAR(16),
    tinggi_badan VARCHAR(16),
    hobi VARCHAR(64),
    telepon VARCHAR(16) UNIQUE,
    alamat VARCHAR(64),
    email VARCHAR(32) UNIQUE,
    username VARCHAR(32),
    userpass VARCHAR(64),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === true) {
    echo "Table berhasil dibuat.<br>";
} else {
    echo "Table gagal dibuat";
}

$conn->close();
?>