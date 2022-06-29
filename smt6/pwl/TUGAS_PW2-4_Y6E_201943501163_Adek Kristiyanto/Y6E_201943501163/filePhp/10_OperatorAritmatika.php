<!-- // OPERATOR ARITMATIKA

1. +$variabel >> bilangan positif
2. -$variabel >> bilangan negatif
3. $variabel + $variabel >> penjumlahan
4. $variabel - $variabel >> pengurangan
5. $variabel * $variabel >> perkalian
6. $variabel / $variabel >> pembagian
7. $variabel % $variabel >> moduluss
8. $variabel ** $variabel >> pangkat -->

<?php
echo '<h1>'."OPERATOR ARITMATIKA".'</h1> <br> <p>' . PHP_EOL.PHP_EOL;

    $a = 14;
    echo "bilangan positif : " . +$a . "\n";echo "<br/>";

    $b = 20;
    echo "bilangan negatif : " . -$b . "\n";echo "<br/>";

    $c = $a + $b;
    echo "penjumlahan : " . $c . "\n";echo "<br/>";

    $d = $a - $b;
    echo "pengurangan : " . $d . "\n";echo "<br/>";

    $e = $a * $b;
    echo "perkalian : " . $e . "\n";echo "<br/>";

    $f = $a / $b;
    echo "pembagian : " . $f . "\n";echo "<br/>";

    $g = $a % 3;
    echo "modulus : " . $g . "\n";echo "<br/>";

    $h = $a ** 3;
    echo "pangkat : " . $h . "\n";echo "<br/>";