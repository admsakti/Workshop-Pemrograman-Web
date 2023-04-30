<?php 
// header("Location: registrasi.php");
// die();

require "koneksi.php";

$sql = "SELECT * FROM members";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
</head>

<body>
    <h1>Data Member</h1>
    <a href="registrasi.php">Tambah Data</a>
    <hr>
    <table border="1">
        <tr>
            <th>NIK</th>
            <th>Nama Lengkap</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>Tinggi Badan</th>
            <th>Hobi</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Username</th>
            <th>Password</th>
            <th>Tanggal Registrasi</th>
        </tr>
        <?php while ($member = $result->fetch_assoc()) : ?>
        <tr>
            <td><?= $member["nik"]; ?></td>
            <td><?= $member["nama_lengkap"]; ?></td>
            <td><?= $member["gender"]; ?></td>
            <td><?= $member["tanggal_lahir"]; ?></td>
            <td><?= $member["agama"]; ?></td>
            <td><?= $member["tinggi_badan"]; ?></td>
            <td><?= $member["hobi"]; ?></td>
            <td><?= $member["telepon"]; ?></td>
            <td><?= $member["alamat"]; ?></td>
            <td><?= $member["email"]; ?></td>
            <td><?= $member["username"]; ?></td>
            <td><?= $member["userpass"]; ?></td>
            <td><?= $member["reg_date"]; ?></td>
        </tr>
        <?php endwhile;?>
    </table>
</body>

</html>