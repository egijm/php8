<?php
    echo "<h3>belajar variabel</h3>";
    $a1 = 10;
    $a2 = 4;
    echo "$a1 + $a2 = " . ($a1 + $a2);
    echo "<br>";
    echo "$a1 x $a2 = " . ($a1 * $a2);
     echo "<br>";
    echo "$a1 - $a2 = " . ($a1 - $a2);
     echo "<br>";
    echo "$a1 : $a2 = " . ($a1 / $a2);
     echo "<br>";
    echo "$a1 % $a2 = " . ($a1 % $a2);

    $a = 10;
    $b = 5;
    $c = $a + 5;
    $d = $b + (10 * 5);
    $e = $d - $c;

    echo "<h3>Tipe Data Integer<h3>";
     echo "<br>";
    echo "Variabel a: {$a} <br>";
    echo "Variabel b: {$b} <br>";
    echo "Variabel c: {$c} <br>";
    echo "Variabel d: {$d} <br>";
    echo "Variabel e: {$e} <br>";

    echo "<h3>Tipe Data Float<h3>";
     echo "<br>";
    $nilaiMatematika = 5.1;
    $nilaiIPA = 6.7;
    $nilaiBahasaIndonesia = 9.3;

    # hitung nilai rata-rata
    $rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

    # Tampilkan data

    echo "Matematika: {$nilaiMatematika} <br>";
    echo "IPA: {$nilaiIPA} <br>";
    echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
    echo "Rata-rata: {$rataRata} <br>";

    # lihat tipe data dari variabel $rataRata
    var_dump($rataRata);

       echo "<h3>Data Boolean<h3>";
     echo "<br>";
     
    $apakahSiswaLulus = true;
    $apakahSiswaSudahUjian = false;

    var_dump($apakahSiswaLulus);
    echo "<br>";
    var_dump($apakahSiswaSudahUjian);
    
     echo "<h3>Tipe Data String<h3>";
     echo "<br>";
    $namaDepan = "Ibnu"; # pakai tanda petik dua
$namaBelakang = 'Jakaria'; # pakai tanda petik satu

# menggabungkan dua variabel dengan tanda
# petik dua
$namaLengkap = "{$namaDepan} {$namaBelakang}";

# anda juga bisa menggabungkan string dengan menggunakan tanda titik (.)
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

# [Tampilkan Data]
# kita bisa memasukkan variabel lain jika menggunakan tanda petik dua
echo "Nama Depan: {$namaDepan} <br>"; 
# ada pun jika pakai tanda petik satu, kita tidak bisa memasukkan variabel 
# di dalam string akan tetapi menggabungkannya dengan operator titik (.)
echo 'Nama Belakang: ' . $namaBelakang . '<br>';

echo $namaLengkap;

echo"<h3>Tipe Data Array echo<h3>";
     echo "<br>";
     $siswa = ["Wahid Abdullah", 'Elmo Bachtiar', "Lendis Fabri"];
     echo $siswa[2]; // "Wahid Abdullah"