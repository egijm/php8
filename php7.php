<?php
$hari = "hujan";
if ($hari == "hujan") {
    echo "saya bawa payung";
}

echo "<hr>";

if ($hari == "hujan") {
    echo "saya bawa payung";
} else {
    echo "saya tidak bawa payung";
}

$nilai = 10;
if ($nilai >= 75 && $nilai <= 100) {
    echo "Nilai anda $nilai, anda <b>lulus</b>";
} elseif ($nilai >= 0 && $nilai <= 74) {
    echo "Nilai anda $nilai, anda <b>tidak lulus</b>";
}

echo "<hr>";

#4 variabel

if ($nilai >= 91 AND $nilai <= 100)  :

echo "Nilai Anda $nilai, nilai Anda A";

elseif ($nilai >= 83 AND $nilai < 91) :

echo "Nilai Anda $nilai, nilai Anda B";

elseif ($nilai >= 75 AND $nilai < 83) :

echo "Nilai Anda $nilai, nilai Anda C";     

elseif ($nilai >= 0 and $nilai < 75) :
    echo "nilai anda $nilai, nilkai anda D";
else :
    echo "nilai anda $nilai, tidak adapenilaian seperti ini";
endif;