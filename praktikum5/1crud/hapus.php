<?php 
include 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM mahasiswa WHERE id='$id'";
$conn->query($sql);

header("location: index.php");
exit();
?>