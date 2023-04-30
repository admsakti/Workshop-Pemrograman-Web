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
        <a class="button" href="index.php">Home</a>
        <br><br><br>
        <?php 
        include 'koneksi.php';
        
        $id = $_GET['id'];
        $sql = "SELECT * FROM mahasiswa WHERE id='$id'";
        $data = $conn->query($sql);
        while ($d = $data->fetch_array()) {
        ?>
        <form action="update.php" method="post">
            <table>
                <tr>
                    <td>NIM : </td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="nim" value="<?php echo $d['nim']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Nama : </td>
                    <td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
                </tr>
                <tr>
                    <td>Program Studi : </td>
                    <td><input type="text" name="prodi" value="<?php echo $d['prodi']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
        <?php } ?>
    </div>
</body>

</html>