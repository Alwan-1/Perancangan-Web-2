<?php
include 'koneksi.php';
require_once __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// =======================
// BUAT PDF
// =======================
$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4'
]);

$css = '
body { font-family: Arial; font-size: 11px; }
table { width:100%; border-collapse: collapse; }
th { background:#4CAF50; color:white; padding:8px; }
td { border:1px solid #ccc; padding:8px; text-align:center; }
img { height:80px; }
';

$data = mysqli_query($koneksi, "SELECT * FROM namasiswa ORDER BY id ASC");

$html = '<h3 align="center">DATA FOTO SISWA</h3>
<table>
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Foto</th>
</tr>';

while ($d = mysqli_fetch_assoc($data)) {
    $foto = 'gambar/' . $d['foto'];
    $html .= "
    <tr>
        <td>{$d['id']}</td>
        <td>{$d['nama']}</td>
        <td><img src='$foto'></td>
    </tr>";
}

$html .= '</table>';

$mpdf->WriteHTML($css, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($html, \Mpdf\HTMLParserMode::HTML_BODY);

// SIMPAN PDF
$pdfFile = "Data_Foto_Siswa.pdf";
$mpdf->Output($pdfFile, 'F');

// =======================
// KIRIM EMAIL
// =======================
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'alwanmudhaffar392@gmail.com';
    $mail->Password   = 'hhmn pylg pljk cnqm';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('alwanmudhaffar392@gmail.com', 'Sistem Foto');
    $mail->addAddress('sansztar@gmail.com');

    $mail->addAttachment($pdfFile);

    $mail->isHTML(true);
    $mail->Subject = 'Laporan Data Foto Siswa';
    $mail->Body    = '
        <b>DATA FOTO SISWA</b><br><br>
        Terlampir laporan data foto siswa dalam bentuk PDF.<br>
        Tanggal: ' . date('d-m-Y H:i:s');

    $mail->send();

    unlink($pdfFile);

    echo "<script>
        alert('PDF berhasil dikirim ke email');
        window.location='tampil_foto.php';
    </script>";

} catch (Exception $e) {
    echo "Gagal mengirim email: {$mail->ErrorInfo}";
}
