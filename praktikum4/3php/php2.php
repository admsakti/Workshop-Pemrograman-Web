<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

$conn = new mysqli($servername, $username,$password, $dbname) or die("Koneksi Gagal");

$nama = $_REQUEST["nama"];
$alamat = $_REQUEST["alamat"];
$telpon = $_REQUEST["telp"];

$sql = "INSERT INTO input (nama, addr, tlp)
VALUES ('$nama', '$alamat', '$telpon')";
if ($conn->query($sql) === true) {
    echo "Data Berhasil Ditambahkan";
} else {
    echo "Data Gagal Ditambahkan";
}

$conn->close();
?>