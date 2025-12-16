<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Alert Notification</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            min-height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            background: linear-gradient(135deg, #1f2933, #111827);
            font-family: 'Poppins', sans-serif;
        }

        .card-alert{
            width:100%;
            max-width:600px;
            background:#ffffff;
            border-radius:16px;
            padding:30px;
            box-shadow:0 15px 40px rgba(0,0,0,0.25);
        }

        .card-alert h4{
            font-weight:700;
            color:#1f2933;
        }

        .subtitle{
            font-size:14px;
            color:#6b7280;
            margin-bottom:25px;
        }

        .btn-send{
            background:#2563eb;
            border:none;
            padding:12px;
            font-weight:600;
        }

        .btn-send:hover{
            background:#1e40af;
        }
    </style>
</head>
<body>

<div class="card-alert">
    <h4 class="text-center">Email Alert System</h4>
    <p class="text-center subtitle">
        Form pengiriman notifikasi otomatis menggunakan PHPMailer
    </p>

    <form action="kirim_email.php" method="POST">

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" placeholder="Nomor Induk Mahasiswa" required>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label class="form-label">Kelas</label>
                <input type="text" name="kelas" class="form-control" placeholder="Contoh: TI-3A" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Program Studi</label>
                <input type="text" name="prodi" class="form-control" placeholder="Teknik Informatika" required>
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label">Institusi</label>
            <input type="text" name="universitas" class="form-control" placeholder="Nama Universitas" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email Penerima</label>
            <input type="email" name="email" class="form-control" placeholder="contoh@email.com" required>
        </div>

        <div class="mb-4">
            <label class="form-label">Catatan Tambahan</label>
            <textarea name="pesan" class="form-control" rows="3" placeholder="Pesan tambahan (opsional)"></textarea>
        </div>

        <button type="submit" name="send" class="btn btn-send w-100">
            🚀 Kirim Alert Email
        </button>

    </form>
</div>

</body>
</html>
