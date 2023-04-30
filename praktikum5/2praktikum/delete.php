<?php 
include 'connection.php';

$nik = $_GET['nik'];

$sql = "DELETE FROM members WHERE nik='$nik'";
$conn->query($sql);

header("location: home.php");
exit();
?>