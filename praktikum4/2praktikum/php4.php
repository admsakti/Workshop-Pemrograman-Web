<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname) or die("Koneksi Gagal");

$sql = "UPDATE mhs SET alamat='Bandung' WHERE nim='E32221999'";
if ($conn->query($sql) === true) {
    echo "Record berhasil diupdate";
} else {
    echo "Record gagal diupdate";
}

$conn->close();
?>