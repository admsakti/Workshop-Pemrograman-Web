<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname) or die("Koneksi Gagal");

$sql = "DELETE FROM mhs WHERE nim='E32221850'";
if ($conn->query($sql) === true) {
    echo "Record berhasil dihapus";
} else {
    echo "Record gagal dihapus";
}

$conn->close();
?>