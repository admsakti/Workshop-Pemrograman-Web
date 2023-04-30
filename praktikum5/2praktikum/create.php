<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrasi Pengguna</title>
</head>

<body>
    <div class="container">
        <a class="button" href="home.php">Home</a>
        <br><br><br>
        <form action="create_action.php" method="post">
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
                        <input type="radio" name="jenis_kelamin" id="jk" value="Pria" required />
                        Pria
                        <input type="radio" name="jenis_kelamin" id="jk" value="Wanita" required />
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