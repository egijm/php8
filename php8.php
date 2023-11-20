<?php
for ($i=1; $i < 3; $i++ ) {
    echo "$i<b>AKU</b><br>";
}

echo "<hr>";
for ($i=1; $i >= 1 ; $i--) :
    echo "$i. sma pgri cibinong - <br> ";
endfor;

$a = 1;
while ($a <= 10) {
    echo "$a. belajar11 <br>";
    $a++;
}

$a = 1;
do {
    echo "$a. belajar <br>";
    $a++;
} while ($a <= 10);

$b = 2;
do{
echo "$b<br>";
 $b=$b+2;
}while ($b <= 10);

$b = 15;
do {
    echo "$b<br>";
    $b = $b - 2;
} while ($b >= 0);


$siswa = ["a", "b", "c", "d", "e", "F", "G", "H"];
$no = 1;
sort($siswa);
foreach ($siswa as $s) {
    echo "$no. $s <br>";
    $no++;
}

