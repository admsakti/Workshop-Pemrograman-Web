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

// sql to delete a record
$sql = "DELETE FROM mhs WHERE nama='Leon'";

if ($conn->query($sql) === true) {
    echo "Data berhasil dihapus";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>