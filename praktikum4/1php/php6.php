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
VALUES ('E32231222', 'Leon', 'Magelang', 'e32231222@polije.ac.id'),
('E32231223', 'Kuro', 'Surabaya', 'e32231223@polije.ac.id'),
('E32231224', 'Mirai', 'Palembang', 'e32231224@polije.ac.id')";

if ($conn->query($sql) === true) {
    echo "Beberapa data berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>