<?php 
require "koneksi.php";
if (isset($_REQUEST["submit"])) {
    $nik = $_REQUEST["nik"];
    $nama_lengkap = $_REQUEST["nama_lengkap"];
    $gender = $_REQUEST["jenis_kelamin"];
    $tanggal_lahir = $_REQUEST["tanggal_lahir"];
    $agama = $_REQUEST["agama"];
    $tinggi_badan = $_REQUEST["tinggi_badan"];
    $hobi = $_REQUEST["hobi"];
    $telepon = $_REQUEST["telepon"];
    $alamat = $_REQUEST["alamat"];
    $email = $_REQUEST["email"];
    $user = $_REQUEST["username"];
    $pass = $_REQUEST["userpass"];

    $sql = "INSERT INTO members (nik, nama_lengkap, gender, tanggal_lahir, agama, tinggi_badan, hobi, telepon, alamat, email, username, userpass)
    VALUES ('$nik', '$nama_lengkap', '$gender', '$tanggal_lahir', '$agama', '$tinggi_badan', '$hobi', '$telepon', '$alamat', '$email', '$user', '$pass')";
    if ($conn->query($sql) === true) {
        echo "<script type='text/javascript'>alert('Data Berhasil Ditambahkan');</script>";
    } else {
        echo "<script type='text/javascript'>alert('Data Gagal Ditambahkan');</script>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrasi Pengguna</title>
</head>

<body>
    <div>
        <form action="registrasi.php" method="post">
            <table border="0">
                <tr>
                    <td><label for="nik">NIK</label></td>
                    <td>
                        <input type="text" name="nik" id="nik" placeholder="Masukkan Nomor KTP" required />
                    </td>
                </tr>
                <tr>
                    <td><label for="nama">Nama Lengkap</label></td>
                    <td>
                        <input type="text" name="nama_lengkap" id="nama" placeholder="Masukkan Nama Lengkap" required />
                    </td>
                </tr>
                <tr>
                    <td><label for="jk">Jenis kelamin</label></td>
                    <td>
                        <input type="radio" name="jenis_kelamin" id="jk" value="pria" required />
                        Pria
                        <input type="radio" name="jenis_kelamin" id="jk" value="wanita" required />
                        Wanita
                    </td>
                </tr>
                <tr>
                    <td><label for="tgl_lahir">Tanggal Lahir</label></td>
                    <td>
                        <input type="date" name="tanggal_lahir" id="tgl_lahir" required />
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
                        <input type="number" name="tinggi_badan" id="tinggi" placeholder="Masukkan Tinggi Badan" />
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
                        <input type="text" name="telepon" id="telepon" required placeholder="Masukkan Nomor Telepon" />
                    </td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td>
                        <input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat" />
                    </td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td>
                        <input type="text" name="email" id="email" placeholder="Masukkan Email" required />
                    </td>
                </tr>
                <tr>
                    <td><label for="username">Username</label></td>
                    <td>
                        <input type="text" name="username" id="username" placeholder="Masukkan Username" required />
                    </td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td>
                        <input type="text" name="userpass" id="password" placeholder="Masukkan Password" required />
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
    </div>
</body>

</html>