<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . "/PHPMailer/Exception.php";
require_once __DIR__ . "/PHPMailer/PHPMailer.php";
require_once __DIR__ . "/PHPMailer/SMTP.php";



// Pastikan form dikirim
if(!isset($_POST['send'])){
    die("Akses tidak valid!");
}

// Tangkap data form
$nama   = htmlspecialchars($_POST['nama']);
$nim    = htmlspecialchars($_POST['nim']);
$kelas  = htmlspecialchars($_POST['kelas']);
$prodi  = htmlspecialchars($_POST['prodi']);
$univ   = htmlspecialchars($_POST['universitas']);
$email  = htmlspecialchars($_POST['email']);
$pesan  = htmlspecialchars($_POST['pesan']);

$mail = new PHPMailer(true);

try {

    // SETUP SMTP
    $mail->isSMTP();
    $mail->Host       = "smtp.gmail.com";
    $mail->SMTPAuth   = true;
    $mail->Username   = "alwanmudhaffar392@gmail.com";
    $mail->Password   = "hhmnpylgpljkcnqm"; // app password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587; 

    // IDENTITAS EMAIL
    $mail->setFrom("alwanmudhaffar392@gmail.com", "Notification Bot");
    $mail->addAddress($email);

    // FORMAT EMAIL
    $mail->isHTML(true);
    $mail->Subject = "Notifikasi Sistem Akademik";

    $mail->Body = "
        <div style='font-family:Arial; line-height:1.6'>
            <h3 style='color:#2563eb;'>📢 Alert Notification</h3>
            <p>Berikut detail informasi yang dikirim:</p>

            <table cellpadding='6' cellspacing='0' border='1'>
                <tr><td><b>Nama</b></td><td>$nama</td></tr>
                <tr><td><b>NIM</b></td><td>$nim</td></tr>
                <tr><td><b>Kelas</b></td><td>$kelas</td></tr>
                <tr><td><b>Program Studi</b></td><td>$prodi</td></tr>
                <tr><td><b>Universitas</b></td><td>$univ</td></tr>
            </table>

            <p><b>Pesan Tambahan:</b><br>$pesan</p>

            <hr>
            <small>Dikirim otomatis pada " . date("d M Y, H:i") . "</small>
        </div>
    ";

    $mail->send();

    echo "
        <script>
            alert('Notifikasi email berhasil dikirim!');
            window.location.href='index.php';
        </script>
    ";

} catch (Exception $e) {
    echo "
        <script>
            alert('Email gagal dikirim!');
            window.history.back();
        </script>
    ";
}
