<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password, $dbname) or die("Koneksi Gagal");

$sql = "INSERT INTO mhs (nim, nama, alamat, email) VALUES
    ('E32221274', 'Sakti', 'Blitar', 'sakti@polije.ac.id'),
    ('E32221274', 'Sakti', 'Blitar', 'sakti@polije.ac.id'),
    ('E32221274', 'Sakti', 'Blitar', 'sakti@polije.ac.id')
";
if ($conn->query($sql) === true) {
    echo "Record berhasil ditambahkan";
} else {
    echo "Record gagal ditambahkan";
}



$conn->close();
?>