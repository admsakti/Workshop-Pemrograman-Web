<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];

$sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim', prodi='$prodi' WHERE id='$id'";
$conn->query($sql);

header("location: index.php");
exit();
?>