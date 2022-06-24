<!-- // NULL COALESCING OPERATOR

1. Sebelumnya kita tahu bahwa data kosong direpresentasikan data NULL di PHP.
2. Dan hal yang paling repot di PHP adalah mengecek apakah sebuah data ada atau tidak dan juga,
    apakah data tersebut isinya null atau bukan.
3. Biasanya untuk melakukan itu, kita perlu menggunakan pengecekan if statement dengan function isset($var)
4. Untungnnya di php ada null Coalescing operator menggunakan ?? -->

<?php

    echo "Null Coalescing Operator\n";echo "<br/>";echo "<br/>";
    $a = null;

    echo "a ?? b : ";echo "<br/>";
    var_dump($a ?? "STROM"); // hasilnya STROM karena a null,
    echo "<br/>";echo "<br/>";

    $b = "TESTING";

    echo "a ?? b : ";echo "<br/>";
    var_dump($b ?? $a); // hasilnya TESTING karena B ada isinya
    echo "<br/>";

    $c = null;
    $d = $c ?? "GAADA ISINYA";

    echo $d;