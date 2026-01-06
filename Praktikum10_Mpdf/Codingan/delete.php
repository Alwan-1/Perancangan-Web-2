<?php
include "koneksi.php";

$id = $_GET['id'];

$ambil = $koneksi->query("SELECT foto FROM namasiswa WHERE id=$id");
$data = $ambil->fetch_assoc();
unlink("gambar/".$data['foto']);

$koneksi->query("DELETE FROM namasiswa WHERE id=$id");

header("Location: tampil_foto.php");
?>
