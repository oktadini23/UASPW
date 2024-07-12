
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h2>Tambah Data</h2>
    <form method="post" action="datamhs.php">
    <table>
        <tr>
            <td>id</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>Nim</td>
            <td><input type="text" name="nim"></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>

        <tr>
            <td>jenis kelamin</td>
            <td><input type="text" name="jeniskelamin"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat" ></textarea></td>
        </tr>

        <tr>
            <td>Program Studi</td>
            <td><input type="text" name="progdi"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" value="Simpan">
            <a href="tambah.php">Kembali</a>
            </td>
        </tr>
    </table>
   </form>
</body>
</html>