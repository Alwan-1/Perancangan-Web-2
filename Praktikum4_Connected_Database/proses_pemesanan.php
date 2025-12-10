<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pemesanan | GYMNess</title>

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #111;
            color: white;
        }

        /* NAVBAR */
        .navbar {
            display: flex;
            justify-content: space-between;
            padding: 15px 40px;
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(10px);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            font-size: 26px;
            font-weight: 700;
        }

        .nav-menu a {
            color: white;
            margin-left: 25px;
            text-decoration: none;
            font-size: 16px;
            transition: 0.3s;
        }

        .nav-menu a:hover {
            color: #ffcc00;
        }

        .page-title {
            text-align: center;
            margin-top: 40px;
            font-size: 40px;
            font-weight: 700;
        }

        /* RESULT BOX */
        .result-box {
            width: 55%;
            margin: 40px auto;
            background: rgba(255,255,255,0.09);
            padding: 35px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }

        .result-box h2 {
            margin-bottom: 15px;
            font-size: 28px;
            color: #ffcc00;
        }

        .result-item {
            margin-bottom: 15px;
            font-size: 18px;
        }

        .btn-back {
            display: block;
            width: 100%;
            text-align: center;
            padding: 15px;
            background: #ffcc00;
            color: black;
            border-radius: 12px;
            text-decoration: none;
            font-size: 18px;
            font-weight: 700;
            margin-top: 20px;
            transition: 0.3s;
        }

        .btn-back:hover {
            background: #ffb700;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">GYMNess🔥</div>
    <div class="nav-menu">
        <a href="beranda.php">Beranda</a>
        <a href="pemesanan.php">Pemesanan</a>
        <a href="jadwal.php">Jadwal</a>
        <a href="kontak.php">Kontak</a>
    </div>
</div>

<h1 class="page-title">Hasil Pemesanan Anda</h1>

<div class="result-box">
    <h2>Detail Pemesanan</h2>

    <?php
    // Ambil data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $paket = $_POST['paket'];
    $tanggal = $_POST['tanggal_mulai'];
    $pembayaran = $_POST['pembayaran'];

    echo "<div class='result-item'><b>Nama Lengkap:</b> $nama</div>";
    echo "<div class='result-item'><b>Email:</b> $email</div>";
    echo "<div class='result-item'><b>Paket Dipilih:</b> $paket</div>";
    echo "<div class='result-item'><b>Tanggal Mulai:</b> $tanggal</div>";
    echo "<div class='result-item'><b>Metode Pembayaran:</b> $pembayaran</div>";
    ?>

    <a href="pemesanan2.php" class="btn-back">Kembali ke Form</a>
</div>

</body>
</html>
