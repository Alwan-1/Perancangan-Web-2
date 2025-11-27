<!DOCTYPE html>
<html>
<head>
<title>Upload Gambar</title>
</head>
<body>

<form method="post" action="proses.php" enctype="multipart/form-data">
<table>
<tr>
    <th colspan="2">UPLOAD FOTO</th>
</tr>

<tr>
    <td>Nama</td>
    <td><input type="text" name="nama" required></td>
</tr>

<tr>
    <td>Foto</td>
    <td><input type="file" name="foto" required></td>
</tr>

<tr>
    <td></td>
    <td><input type="submit" value="SIMPAN"></td>
</tr>
</table>
</form>

</body>
</html>
