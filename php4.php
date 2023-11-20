<?php
echo "<h2>array 2 dimensi - array asosiatif<h2>";
$nilai = [
    "daffa" => [
        "matematika" => 80,
        "ppkn" => 75,
        "fisika" => 85,
    ],
    "faiz" => [
        "matematika" => 85,
        "ppkn" => 80,
        "fisika" => 85,
    ],
    "jaiz" => [
        "matematika" => 90,
        "ppkn" => 70,
        "fisika" => 90,
    ],
    ];
var_dump($nama);
echo "<br>";
echo $nilai["faiz"]["ppkn"];
echo "<br>";
echo '<pre>' . var_export($nilai, true) . '<pre>';