<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>GymFit - Beranda</title>

<style>
/* -------- GLOBAL -------- */
body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    background: #000;
    color: white;
}

/* -------- BACKGROUND IMAGE -------- */
.bg-image {
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background-image: url('https://images.unsplash.com/photo-1517836357463-d25dfeac3438');
    background-size: cover;
    background-position: center;
    filter: blur(7px) brightness(60%);
    z-index: -2;
}

/* Overlay gelap */
.bg-overlay {
    position: fixed;
    top:0; left:0;
    width:100%; height:100%;
    background: rgba(0,0,0,0.45);
    z-index:-1;
}

/* -------- HERO -------- */
.hero {
    text-align: center;
    padding: 80px 20px;
}

.hero h1 {
    font-size: 55px;
    margin-bottom: 10px;
    font-weight: 800;
    text-shadow: 0 0 15px rgba(255,255,255,0.3);
}

.hero p {
    font-size: 20px;
    opacity: 0.9;
}

/* -------- NAVBAR -------- */
.navbar {
    text-align: center;
    backdrop-filter: blur(12px);
    background: rgba(255,255,255,0.08);
    padding: 12px 0;
    position: sticky;
    top: 0;
}

.navbar a {
    color: white;
    padding: 12px 20px;
    margin: 0 5px;
    font-weight: 500;
    display: inline-block;
    text-decoration: none;
    transition: 0.3s;
    border-radius: 8px;
}

.navbar a:hover {
    background: rgba(255,255,255,0.2);
}

/* -------- CARD UTAMA -------- */
.container {
    width: 80%;
    margin: 60px auto;
}

.card {
    background: rgba(255,255,255,0.1);
    padding: 30px;
    border-radius: 18px;
    backdrop-filter: blur(15px);
    box-shadow: 0 0 25px rgba(0,0,0,0.3);
    text-align: center;
}

.card h2 {
    font-size: 32px;
    margin-bottom: 15px;
    font-weight: 700;
}

/* -------- FOOTER -------- */
.footer {
    background: rgba(0,0,0,0.6);
    padding: 20px;
    text-align: center;
    margin-top: 60px;
    backdrop-filter: blur(10px);
}
</style>

</head>
<body>

<!-- Background Blur -->
<div class="bg-image"></div>
<div class="bg-overlay"></div>

<!-- HERO -->
<div class="hero">
    <h1>GymFit</h1>
    <p>Website Pemesanan Gym Online yang Modern & Aesthetic</p>
</div>

<!-- NAVBAR -->
<div class="navbar">
    <a href="indexs.php">Beranda</a>
    <a href="pemesanan2.php">Pemesanan</a>
    <a href="jadwal.php">Jadwal</a>
    <a href="kontak.php">Kontak</a>
    <a href="gambar2.php">Gambar</a>
</div>

<!-- CARD UTAMA -->
<div class="container">
    <div class="card">
        <h2>Selamat Datang di GymFit</h2>
        <p>Pesan jadwal gym Anda dengan mudah, cepat, dan nyaman.</p>
    </div>
</div>

<!-- FOOTER -->
<div class="footer">© 2025 GymFit</div>

</body>
</html>
