<?php 
require "connection.php";

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
    <a href="create.php">Tambah Data</a>
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
            <th>Opsi Data</th>
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
            <td>
                <a href="update.php?nik=<?= $member['nik']; ?>">Update</a>
                <a href="delete.php?nik=<?= $member['nik']; ?>">Delete</a>
                <a href="member.php?nik=<?= $member['nik']; ?>">Details</a>
            </td>
        </tr>
        <?php endwhile;?>
    </table>
</body>

</html>