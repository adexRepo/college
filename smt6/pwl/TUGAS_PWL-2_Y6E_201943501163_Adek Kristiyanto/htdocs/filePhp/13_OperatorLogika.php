<!-- // OPERATOR LOGIKA

1. Operator logika adalah operator untuk membandingkan dua nilai boolean
2. Hasil dari operator logika adalah boolean lagi
3. Operator logika yang digunakan adalah :
    $a && $b (AND) >> true jika kedua nilai boolean benar
    $a || $b (OR) >> true jika salah satu nilai boolean benar
    !$a (NOT) >> true jika nilai a boolean salah
    $a xor $b (XOR) >> true jika salah satu nilai boolean benar , tapi kalo keduanya true maka false
 -->

<?php

    echo "Operator Logika\n";echo "<br/>";echo "<br/>";

    $a = true;
    $b = false;

    echo "a && b : ";
    var_dump($a && $b); // hasilnya false
    echo "<br/>";

    echo "a || b : ";
    var_dump($a || $b); // hasilnya true
    echo "<br/>";

    echo "!a : ";
    var_dump(!$a); // hasilnya false
    echo "<br/>";

    echo "a xor b : ";
    var_dump($a xor $b); // hasilnya true
    