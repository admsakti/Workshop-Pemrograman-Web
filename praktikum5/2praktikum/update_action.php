<?php 
include 'connection.php';

$nik            = $_POST["nik"];
$nama_lengkap   = $_POST["nama_lengkap"];
$gender         = $_POST["jenis_kelamin"];
$tanggal_lahir  = $_POST["tanggal_lahir"];
$agama          = $_POST["agama"];
$tinggi_badan   = $_POST["tinggi_badan"];
$hobi           = $_POST["hobi"];
$telepon        = $_POST["telepon"];
$alamat         = $_POST["alamat"];
$email          = $_POST["email"];
$user           = $_POST["username"];
$pass           = $_POST["userpass"];

$sql = "UPDATE members SET
nik='$nik',
nama_lengkap='$nama_lengkap', 
gender='$gender', 
tanggal_lahir='$tanggal_lahir', 
agama='$agama', 
tinggi_badan='$tinggi_badan', 
hobi= '$hobi',
telepon='$telepon', 
alamat='$alamat', 
email='$email',
username='$user', 
userpass='$pass'
WHERE nik='$nik'";
$conn->query($sql);

header("location: home.php");
exit();
?>