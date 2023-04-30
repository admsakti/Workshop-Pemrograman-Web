<?php 
require "connection.php";

$nik            = $_REQUEST["nik"];
$nama_lengkap   = $_REQUEST["nama_lengkap"];
$gender         = $_REQUEST["jenis_kelamin"];
$tanggal_lahir  = $_REQUEST["tanggal_lahir"];
$agama          = $_REQUEST["agama"];
$tinggi_badan   = $_REQUEST["tinggi_badan"];
$hobi           = $_REQUEST["hobi"];
$telepon        = $_REQUEST["telepon"];
$alamat         = $_REQUEST["alamat"];
$email          = $_REQUEST["email"];
$user           = $_REQUEST["username"];
$pass           = $_REQUEST["userpass"];

$sql = "INSERT INTO members
(nik, nama_lengkap, gender, tanggal_lahir, 
agama, tinggi_badan, hobi, telepon, alamat, 
email, username, userpass)
VALUES 
('$nik', '$nama_lengkap', '$gender', '$tanggal_lahir', 
'$agama', '$tinggi_badan', '$hobi', '$telepon', '$alamat', 
'$email', '$user', '$pass')";
$conn->query($sql);

header("location: home.php");
exit();
?>