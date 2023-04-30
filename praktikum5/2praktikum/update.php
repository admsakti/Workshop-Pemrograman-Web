<?php 
require "connection.php";

$nik = $_GET['nik'];
$sql = "SELECT * FROM members WHERE nik='$nik'";
$members = $conn->query($sql);
while ($member = $members->fetch_array()) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Update Data Mahasiswa</h1>
    <br>
    <h4>Klik <strong>SIMPAN</strong> untuk menyimpan perubahan data!</h4>
    <div class="container">
        <a class="button" href="home.php">Home</a>
        <br><br><br>
        <form action="update_action.php" method="post">
            <table border="0">
                <tr>
                    <td><label for="nik">NIK</label></td>
                    <td>
                        <input type="text" name="nik" id="nik" value="<?= $member['nik']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td><label for="nama">Nama Lengkap</label></td>
                    <td>
                        <input type="text" name="nama_lengkap" id="nama" value="<?= $member['nama_lengkap']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td><label for="jk">Jenis kelamin</label></td>
                    <td>
                        <input type="radio" name="jenis_kelamin" id="jk" value="Pria" required />
                        Pria
                        <input type="radio" name="jenis_kelamin" id="jk" value="Wanita" required />
                        Wanita
                    </td>
                </tr>
                <tr>
                    <td><label for="tgl_lahir">Tanggal Lahir</label></td>
                    <td>
                        <input type="date" name="tanggal_lahir" value="<?= $member['tanggal_lahir']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td><label for="agama">Agama</label></td>
                    <td>
                        <select name="agama" required id="agama">
                            <option>--Pilih Agama--</option>
                            <option value="Islam">Islam</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="tinggi">Tinggi Badan</label></td>
                    <td>
                        <input type="number" name="tinggi_badan" id="tinggi" value="<?= $member['tinggi_badan']; ?>" />
                        cm.
                    </td>
                </tr>
                <tr>
                    <td><label for="hobi">Hobi</label></td>
                    <td>
                        <input type="checkbox" name="hobi" id="hobi" value="Membaca" />Membaca
                        <input type="checkbox" name="hobi" id="hobi" value="Olahraga" />Olahraga
                        <input type="checkbox" name="hobi" id="hobi" value="Ngoding" />Ngoding
                    </td>
                </tr>
                <tr>
                    <td><label for="telepon">Telepon</label></td>
                    <td>
                        <input type="text" name="telepon" id="telepon" value="<?= $member['telepon']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td>
                        <input type="text" name="alamat" id="alamat" value="<?= $member['alamat']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td>
                        <input type="text" name="email" id="email" value="<?= $member['email']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td><label for="username">Username</label></td>
                    <td>
                        <input type="text" name="username" id="username" value="<?= $member['username']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td>
                        <input type="text" name="userpass" id="password" value="<?= $member['userpass']; ?>" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Submit" name="submit" />
                        <input type="reset" value="Cancel" name="cancel" />
                    </td>
                </tr>
            </table>
        </form>
        <?php } ?>
    </div>
</body>

</html>