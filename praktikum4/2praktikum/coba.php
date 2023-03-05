<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// CARA 1
// function conn_server($dbname = null) {
//     global $conn,
//         $servername,
//         $username,
//         $password;

//     $conn = new mysqli($servername, $username, $password, $dbname);
// }

// conn_server('mydb');
// if ($conn->connect_error) {
//     die("Koneksi Gagal");
// } 
// echo "Koneksi Berhasil.<br>";

// CARA 2
// function conn_server($dbname = null) {
//     global $servername,
//         $username,
//         $password;

//     $conn = new mysqli($servername, $username, $password, $dbname);
//     return $conn;
// }

// $conn = conn_server($dbname);
// if ($conn->connect_error) {
//     die("Koneksi Database Gagal");
// } 
// echo "Koneksi Database Berhasil.<br>";

$conn = new mysqli($servername,$username, $password, $dbname) or die("Koneksi Gagal");
echo "Koneksi Berhasil.<br>";


// echo date('h:i:s') . "<br>";
// sleep(5);
// echo date('h:i:s');

// die("End Here!");

// var_dump($conn);
$conn->close();
?>