<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Connection to Server
$conn = new mysqli($servername, $username, $password) or die("Koneksi Gagal");

// SQL to Create Database
$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === true) {
    echo "Database Berhasil Dibuat.<br>";
} else {
    echo "Pembuatan Database Gagal: " . $conn->error;
}

// Connection to Server with use $dbname
$conn = new mysqli($servername, $username, $password, $dbname) or die("Koneksi Gagal");

// SQL to Create Table
$sql = "CREATE TABLE input (
nama VARCHAR(30),
addr VARCHAR(50),
tlp VARCHAR(12)
)"; 
if ($conn->query($sql) === true) {
    echo "Table input Berhasil Dibuat.<br>";
} else {
    echo "Pembuatan Table Gagal: " . $conn->error;
}

$conn->close();
?>