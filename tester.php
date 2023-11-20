<?php
// Nilai Evaluasi
$nilaiEvaluasi = 75;

// Inisialisasi variabel pesan
$pesan = '';

// Branching berdasarkan nilai evaluasi
if ($nilaiEvaluasi < 60) {
    $pertanyaanMateri = true; // Anggap ada pertanyaan tentang materi
    if ($pertanyaanMateri) {
        $pesan = "Nilai Anda rendah dan ada pertanyaan tentang materi. Berikan bantuan langsung.";
    } else {
        $pesan = "Nilai Anda rendah, tetapi tidak ada pertanyaan tentang materi. Sarankan untuk membaca ulang materi.";
    }
} elseif ($nilaiEvaluasi >= 60 && $nilaiEvaluasi <= 80) {
    $pesan = "Nilai Anda cukup baik. Sarankan untuk berkonsultasi dengan dosen atau tutor.";
} else {
    $pesan = "Performa belajar Anda baik. Namun, disarankan untuk konsolidasi dan pemahaman yang lebih dalam.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Struktur Branching Evaluasi Belajar</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Hasil Evaluasi Belajar - UAI Helpdesk</h2>
    <table>
        <tr>
            <th>Nilai Evaluasi</th>
            <th>Pesan</th>
        </tr>
        <tr>
            <td><?php echo $nilaiEvaluasi; ?></td>
            <td><?php echo $pesan; ?></td>
        </tr>
    </table>
</body>
</html>
