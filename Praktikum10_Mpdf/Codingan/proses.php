<?php
include "koneksi.php";

$nama = $_POST['nama'];
$file = $_FILES['foto']['name'];
$tmp  = $_FILES['foto']['tmp_name'];
$size = $_FILES['foto']['size'];

$ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
$valid = ['jpg','jpeg','png','gif'];

$folder = "gambar/";
$namaBaru = rand(1000,999999) . "." . $ext;

// cek ekstensi
if(!in_array($ext, $valid)){
    die("Ekstensi tidak valid! <a href='input_foto.php'>Kembali</a>");
}

// cek ukuran (1MB)
if($size > 1000000){
    die("Ukuran foto terlalu besar! <a href='input_foto.php'>Kembali</a>");
}

// upload
move_uploaded_file($tmp, $folder.$namaBaru);

// simpan database
$query = "INSERT INTO namasiswa (nama, foto) VALUES ('$nama', '$namaBaru')";

if($koneksi->query($query)){
    echo "Berhasil disimpan<br>";
    echo "<img src='gambar/$namaBaru' height='200'><br>";
    echo "<a href='tampil_foto.php'>Lihat Semua Foto</a>";
}else{
    echo "Gagal menyimpan";
}
?>
