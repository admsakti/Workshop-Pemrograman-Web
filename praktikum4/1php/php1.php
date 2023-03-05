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
echo "Koneksi Berhasil";
?>