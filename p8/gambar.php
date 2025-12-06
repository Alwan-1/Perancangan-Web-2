<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>GymFit - Galeri</title>

<style>
body { font-family: Arial; background:#f5f5f5; margin:0; }
.hero { background:#222; color:white; padding:35px; text-align:center; }
.navbar { background:#333; text-align:center; }
.navbar a { color:white; padding:15px 25px; display:inline-block; text-decoration:none; }
.navbar a:hover { background:#555; }

.container { width:85%; margin:30px auto; }
.card { background:white; padding:25px; border-radius:10px; box-shadow:0 4px 12px rgba(0,0,0,0.1); }

/* GALERI */
.gallery {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-top: 20px;
}
.gallery img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 12px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.2);
    transition: 0.3s;
}
.gallery img:hover { transform: scale(1.05); }

/* PAGINATION */
.pagination {
    margin-top: 25px;
    text-align: center;
}
.pagination a {
    padding: 10px 15px;
    background: #333;
    color: white;
    text-decoration: none;
    margin: 3px;
    border-radius: 6px;
}
.pagination a:hover {
    background: #555;
}
.pagination .active {
    background: #ff9900;
}
.footer { background:#222; color:white; text-align:center; padding:15px; margin-top:40px; }
</style>

</head>
<body>

<div class="hero">
    <h1>GymFit</h1>
    <p>Website Pemesanan Gym Online</p>
</div>

<div class="navbar">
    <a href="index.php">Beranda</a>
    <a href="pemesanan.php">Pemesanan</a>
    <a href="jadwal.php">Jadwal</a>
    <a href="kontak.php">Kontak</a>
    <a href="gambar.php">Gambar</a>
</div>

<div class="container">
    <div class="card">
        <h2>Galeri Gambar GymFit</h2>
        <p>Berikut beberapa foto gym dan fasilitas yang tersedia.</p>

        <?php  
        /* ---- DAFTAR GAMBAR ---- */
        $images = [
            "gym.jpg",
            "gymdeol.jpg",
            "dafar.jpg",
            "dea.jpg",
            "2.jpg",
            "gym10.jpg",
            "gym10.jpg",
            "img/gym7.jpg",
            "img/gym8.jpg",
            "img/gym9.jpg",
            "img/gym10.jpg"
        ];

        $per_page = 6;            // jumlah gambar per halaman
        $total_pages = 10;        // FIX selalu 10 halaman

        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        // Posisi gambar yang ditampilkan
        $start = ($page - 1) * $per_page;

        // Ambil gambar sesuai halaman
        $images_current = array_slice($images, $start, $per_page);
        ?>

        <!-- TAMPILKAN GAMBAR -->
        <div class="gallery">
            <?php if (count($images_current) > 0): ?>
                <?php foreach ($images_current as $img): ?>
                    <img src="<?php echo $img; ?>" alt="Gambar Gym">
                <?php endforeach; ?>
            <?php else: ?>
                <p style="text-align:center; padding:20px;">Tidak ada gambar di halaman ini.</p>
            <?php endif; ?>
        </div>

        <!-- PAGINATION -->
        <div class="pagination">

            <?php if ($page > 1): ?>
                <a href="?page=<?php echo $page-1; ?>">« Prev</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <a href="?page=<?php echo $i; ?>" class="<?php echo ($i == $page) ? 'active' : ''; ?>">
                    <?php echo $i; ?>
                </a>
            <?php endfor; ?>

            <?php if ($page < $total_pages): ?>
                <a href="?page=<?php echo $page+1; ?>">Next »</a>
            <?php endif; ?>

        </div>

    </div>
</div>

<div class="footer">© 2025 GymFit</div>

</body>
</html>
