<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create Connections
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connections
if ($conn->connect_error) {
    die("Connestion failed: " . $conn->connect_error);
}

// sql to Create Table
$sql = "CREATE TABLE mhs (
nim VARCHAR(9),
nama VARCHAR(30),
alamat VARCHAR(50),
email VARCHAR(30),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === true) {
    echo "Table mhs Created Succesfully.";
} else {
    echo "Error Creating Table: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>