<?php
include "koneksi.php";
$data = $koneksi->query("SELECT * FROM namasiswa ORDER BY id DESC");
?>
<html>
<head>
<title>Tampil Foto</title>
</head>
<body>
<table border="1" width="500">
<tr>
    <th colspan="4">DATA FOTO</th>
</tr>
<tr>
    <th>ID</th>
    <th>NAMA</th>
    <th>FOTO</th>
    <th>DELETE</th>
</tr>
<?php while($d = $data->fetch_assoc()){ ?>
<tr>
    <td><?= $d['id'] ?></td>
    <td><?= $d['nama'] ?></td>
    <td><img src="gambar/<?= $d['foto'] ?>" width="60" height="80"></td>
    <td><a href="delete.php?id=<?= $d['id'] ?>">DELETE</a></td>
</tr>
<?php } ?>
</table>
</body>
</html>
