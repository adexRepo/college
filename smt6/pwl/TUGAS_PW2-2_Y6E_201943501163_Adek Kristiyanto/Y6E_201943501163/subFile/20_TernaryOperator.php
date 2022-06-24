<!-- // TERNARY OPERATOR

1. Kadang ada kasus kita butuh melakukan pengecekan kondisi menggunakan if statement, lalu jika
    benar kita ingin memberi nilai terhadap variabel dengan nilai X dan jika salah dengan nilai Y
2. Penggunaan if statement pada kasus seperti ini bisa disingkat menggunakan ternary operator
3. Ternary Operator menggunakan kata kunci ? dan : -->

<?php

    // NOTE Ternary Operator
    echo "TERNARY OPERATOR \n";echo "<br/>";echo "<br/>";

    $angka = 10;
    $angka2 = 20;

    $hasil = ($angka > $angka2) ? "Y" : "N";
    echo "Hasilnya : $hasil" . PHP_EOL;
