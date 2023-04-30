<?php 
include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];

$sql = "INSERT INTO mahasiswa VALUES ('', '$nim', '$nama', '$prodi')";
$conn->query($sql);

header("location: index.php");
exit();
?>