<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create Connections
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connetions
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$sql = "UPDATE mhs SET alamat='Jambi' WHERE nama='Kuro'";

if ($conn->query($sql) === true) {
    echo "Data berhasil diupdate";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>