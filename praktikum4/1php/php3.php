<?php 
$servername = "localhost";
$username = "root";
$password = "";

// Create Connections
$conn = new mysqli($servername, $username, $password);

// Check Connections
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

// Create Database
$sql = "CREATE DATABASE mydb";
if ($conn->query($sql) === true) {
    echo "Database Berhasil Dibuat";
} else {
    echo "Pembuatan Database Gagal: " . $conn->error;
}

$conn->close();
?>