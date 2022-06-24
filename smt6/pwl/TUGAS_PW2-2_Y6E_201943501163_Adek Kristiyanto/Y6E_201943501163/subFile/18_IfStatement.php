<!-- // IF Statement

1. Dalam PHP, if adalah salah satu kata kunci yang digunakan untuk Percabangan
2. Percabangan artinya kita bisa mengeksekusi kode program tertentu ketika suatu kondisi terpenuhi
3. Hampir di semua bahasa pemrograman mendukung if expression -->

<?php

    // NOTE If Statement
    echo "IF STATEMENT \n";echo "<br/>";

    $angka = 10;
    $angka2 = 20;

    if ($angka > $angka2) {
        echo "Angka 1 lebih besar dari Angka 2" . PHP_EOL;
    } elseif ($angka < $angka2) { // else if kondisi kedua
        echo "Angka 1 lebih kecil dari Angka 2" . PHP_EOL;
    } else { // jika if dan else if tidak terpenuhi, maka else aja yang akan dijalankan
        echo "Angka 1 sama dengan Angka 2" . PHP_EOL;
    }
    echo "<br/>";echo "<br/>";

// NOTE Syntax alternatif
// 1. Selain menggunakan {} (kurung kurawal), PHP juga menyediakan syntax alternatif untuk if statement
//  yaitu dengan menggunakan : (titik dua)
// 2. Namun untuk menggunakan ini, kita harus menggunakan kata kunci endif di akhir if statement

    echo "\nSyntax Alternatif \n";echo "<br/>";
    $angka = 31;
    $angka2 = 31;

    if ($angka > $angka2) :
        echo "Angka 1 lebih besar dari Angka 2" . PHP_EOL;
    elseif ($angka < $angka2) :
        echo "Angka 1 lebih kecil dari Angka 2" . PHP_EOL;
    else :
        echo "Angka 1 sama dengan Angka 2" . PHP_EOL;
    endif; // wajib jika menggunakan syntax alternatif