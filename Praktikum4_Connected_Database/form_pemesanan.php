<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pemesanan | GymFit</title>

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

        /* FORM BOX */
        .form-box {
            width: 55%;
            margin: 40px auto;
            background: rgba(255,255,255,0.08);
            padding: 35px;
            border-radius: 15px;
            backdrop-filter: blur(12px);
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
        }

        .form-box label {
            font-size: 18px;
            font-weight: 600;
        }

        .form-box input, .form-box select {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            margin-bottom: 20px;
            border: none;
            border-radius: 10px;
            outline: none;
            background: rgba(255,255,255,0.2);
            color: white;
            font-size: 16px;
        }

        .form-box input::placeholder {
            color: #ddd;
        }

        /* BUTTON */
        .btn-submit {
            width: 100%;
            padding: 15px;
            background: #ffcc00;
            color: black;
            border-radius: 12px;
            border: none;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn-submit:hover {
            background: #ffb700;
        }

    </style>
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="logo">GYMFIT🔥</div>
    <div class="nav-menu">
        <a href="beranda.php">Beranda</a>
        <a href="pemesanan.php">Pemesanan</a>
        <a href="jadwal.php">Jadwal</a>
        <a href="kontak.php">Kontak</a>
    </div>
</div>

<!-- PAGE TITLE -->
<h1 class="page-title">Form Pemesanan Member</h1>

<!-- FORM -->
<div class="form-box">
    <form action="proses_pemesanan.php" method="POST">

        <label>Nama Lengkap</label>
        <input type="text" name="nama" placeholder="Masukkan nama lengkap Anda" required>

        <label>Email</label>
        <input type="email" name="email" placeholder="Masukkan email Anda" required>

        <label>Pilih Paket</label>
        <select name="paket" required>
            <option value="">-- Pilih Paket --</option>
            <option value="Basic">Basic - Rp 150.000 / bulan</option>
            <option value="Premium">Premium - Rp 250.000 / bulan</option>
            <option value="VIP Trainer">VIP Trainer - Rp 500.000 / bulan</option>
        </select>

        <label>Tanggal Mulai Latihan</label>
        <input type="date" name="tanggal_mulai" required>

        <label>Metode Pembayaran</label>
        <select name="pembayaran" required>
            <option value="">-- Pilih Metode --</option>
            <option value="Transfer Bank">Transfer Bank</option>
            <option value="QRIS">QRIS</option>
            <option value="Cash">Cash</option>
        </select>

        <button type="submit" class="btn-submit">Kirim Pemesanan</button>
    </form>
</div>

</body>
</html>
