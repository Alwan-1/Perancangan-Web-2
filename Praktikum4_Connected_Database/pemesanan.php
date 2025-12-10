<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pemesanan | GymNess</title>

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

        /* TITLE */
        .page-title {
            text-align: center;
            margin-top: 40px;
            font-size: 40px;
            font-weight: 700;
        }

        /* CONTENT BOX */
        .content-box {
            width: 60%;
            margin: 40px auto;
            background: rgba(255,255,255,0.08);
            padding: 30px;
            border-radius: 15px;
            backdrop-filter: blur(12px);
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
        }

        .content-box h3 {
            font-size: 24px;
            font-weight: 600;
        }

        .content-box p {
            font-size: 18px;
            line-height: 1.6;
        }

        /* BUTTON */
        .btn {
            display: inline-block;
            padding: 12px 25px;
            background: #ffcc00;
            color: black;
            font-weight: 700;
            border-radius: 10px;
            text-decoration: none;
            transition: 0.3s;
        }

        .btn:hover {
            background: #ffaa00;
        }

    </style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">GYMNess🔥</div>
    <div class="nav-menu">
        <a href="beranda.php">Beranda</a>
        <a href="pemesanan2.php">Pemesanan</a>
        <a href="jadwal.php">Jadwal</a>
        <a href="kontak.php">Kontak</a>
    </div>
</div>

<!-- TITLE -->
<h1 class="page-title">Pemesanan Member</h1>

<!-- CONTENT BOX -->
<div class="content-box">
    <h3>Pilih Paket Latihan</h3><br>

    <p><b>• Basic Package:</b> Rp 125.000 / bulan</p>
    <p><b>• Premium Package:</b> Rp 250.000 / bulan</p>
    <p><b>• VIP Trainer Package:</b> Rp 350.000 / bulan</p><br>

    <!-- Tombol ke form pemesanan -->
    <a href="form_pemesanan2.php" class="btn">Pesan Sekarang</a>
</div>

</body>
</html>
