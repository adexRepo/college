<!-- // OPERATOR PENUGASAN

1. Operator penugasan di PHP sama seperti bahasa pemrograman lainnya,
    yaitu dengan menggunakan karakter = (sama dengan)
2. Operator penugasan sudah sering digunakan, terutama ketika mengubah value sebuah variabel,
3.Namun selain hal itu, operasi penugasan juga bisa digunakan untuk operasi aritmatika.
4. jenis - jenisnya :
    $a += $b >> $a = $a + b
    $a -= $b >> $a = $a - b
    $a *= $b >> $a = $a * b
    $a /= $b >> $a = $a / b
    $a %= $b >> $a = $a % b -->

<?php

echo '<h1>'."Operator Penugasan".'</h1> <br> <p>' . PHP_EOL.PHP_EOL;

    $a = 10;
    $b = 20;

    $a +=$b;
    echo "a = $a\n"; // 30
    echo "<br/>";

    $a -=$b;
    echo "a = $a\n"; // 10
    echo "<br/>";

    $a *=$b;
    echo "a = $a\n"; // 200
    echo "<br/>";

    $a /=$b;
    echo "a = $a\n"; // 2
    echo "<br/>";

    $a %=2;
    echo "a = $a\n"; // 0
    echo "<br/>";
