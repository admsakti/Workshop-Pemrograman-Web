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

$sql = "INSERT INTO mhs (nim, nama, alamat, email)
VALUES ('E32231221', 'Muzan', 'Kyoto', 'e32231221@polije.sch.id')";

if ($conn->query($sql) === true) {
    echo "Satu data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>