<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create Connections
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connections
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$sql = "INSERT INTO mhs (nim, nama, email)
VALUES ('E32221274', 'Sakti Bayu Nugraha', 'e32221274@polije.sch.id')";

if ($conn->query($sql) === true) {
    echo "Satu data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>