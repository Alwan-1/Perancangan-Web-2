<?php
include "koneksi.php";
$data = $koneksi->query("SELECT * FROM namasiswa ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tampil Foto</title>

    <style>
        body{
            font-family: Arial, sans-serif;
        }
        table{
            border-collapse: collapse;
            width: 700px;
        }
        th, td{
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }
        th{
            background: #4CAF50;
            color: white;
        }
        img{
            height: 80px;
        }
        .btn{
            padding: 8px 14px;
            text-decoration: none;
            color: white;
            border-radius: 4px;
            font-size: 14px;
        }
        .pdf{
            background: #2196F3;
        }
        .email{
            background: #FF5722;
        }
        .add{
            background: #4CAF50;
        }
        .delete{
            color: red;
        }
    </style>
</head>
<body>

<h2>DATA FOTO SISWA</h2>

<!-- TOMBOL AKSI -->
<p>
    <a href="input_foto.php" class="btn add">+ Tambah Foto</a>
    <a href="cetak_pdf.php" target="_blank" class="btn pdf">📄 Jadi PDF</a>
    <a href="kirim_pdf_email.php" class="btn email"
       onclick="return confirm('Kirim PDF ke email?')">📧 Kirim Email</a>
</p>

<table>
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Foto</th>
    <th>Hapus</th>
</tr>

<?php while($d = $data->fetch_assoc()){ ?>
<tr>
    <td><?= $d['id'] ?></td>
    <td><?= $d['nama'] ?></td>
    <td>
        <img src="gambar/<?= $d['foto'] ?>">
    </td>
    <td>
        <a href="delete.php?id=<?= $d['id'] ?>" 
           class="delete"
           onclick="return confirm('Yakin hapus data?')">
           Hapus
        </a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>
