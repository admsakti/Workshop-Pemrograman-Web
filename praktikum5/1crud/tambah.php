<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>
    <br>
    <h3>Isi Form di Bawah ini:</h3>
    <div class="container">
        <a class="button" href="index.php">Home</a>
        <br><br><br>
        <form action="tambahaksi.php" method="post">
            <table>
                <tr>
                    <td>NIM : </td>
                    <td><input type="text" name="nim"></td>
                </tr>
                <tr>
                    <td>Nama : </td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Program Studi : </td>
                    <td><input type="text" name="prodi"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>