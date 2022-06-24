<!-- // SWITCH STATEMENT

1. Kadang kita hanya butuh menggunakan kondisi sederhana di if statement,
    seperti hanya menggunakan perbandingan ==
2. Switch adlaah statement percabangan yang sama dengan if, namun lebih sederhana cara pembuatannya
3. Kondisi di switch statement hanya untuk perbandingan == -->

<?php

    // NOTE Switch Statement

    echo "SWITCH STATEMENT \n";echo "<br/>";

    $angka = 10;
    $angka2 = 20;

    switch ($angka) {
        case 10:
            echo "Angka 1 Lebih Kecil dari Angka 2" . PHP_EOL;
            break;
        case $angka2:
            echo "Angka 1 sama dengan Angka 2" . PHP_EOL;
            break;
        case 30:
            echo "Angka 1 lebih besar dari Angka 2" . PHP_EOL;
            break;
        default:
            echo "Angka 1 tidak sama dengan Angka 2" . PHP_EOL;
            break;
    }

    echo "<br/>";echo "<br/>";
    // NOTE Syntax Alternatif
    // 1. sama seperti if statement, switch statement juga menyediakan syntax alternatif
    // 2. tanpa menggunakan {}
    // 3. namun untuk menggunakan ini, kita harus menggunakan kata kunci endswitch di akhir switch statement

    echo "\nSyntax Alternatif \n";echo "<br/>";
    switch ($angka) :
        case 10:
            echo "Angka 1 Lebih Kecil dari Angka 2" . PHP_EOL;
            break;
        case $angka2:
            echo "Angka 1 sama dengan Angka 2" . PHP_EOL;
            break;
        case 30:
            echo "Angka 1 lebih besar dari Angka 2" . PHP_EOL;
            break;
        default:
            echo "Angka 1 tidak sama dengan Angka 2" . PHP_EOL;
            break;
    endswitch;