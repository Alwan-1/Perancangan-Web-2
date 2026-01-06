<?php
require_once __DIR__ . '/vendor/autoload.php';
include 'koneksi.php';

$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    'orientation' => 'P'
]);

// HEADER
$mpdf->SetHTMLHeader('
<h3 align="center">DATA FOTO SISWA</h3>
<hr>
');

// FOOTER
$mpdf->SetHTMLFooter('
<hr>
<div style="text-align:center;font-size:10px;">
Halaman {PAGENO}/{nbpg}
</div>
');

// CSS
$css = '
body { font-family: Arial; font-size: 11px; }
table { width:100%; border-collapse: collapse; }
th { background:#4CAF50; color:#fff; padding:8px; }
td { border:1px solid #ccc; padding:8px; text-align:center; }
img { height:80px; }
';

// DATA
$data = mysqli_query($koneksi, "SELECT * FROM namasiswa ORDER BY id ASC");

$html = '<table>
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

// TAMPILKAN PDF
$mpdf->Output('Data_Foto_Siswa.pdf', 'I');
