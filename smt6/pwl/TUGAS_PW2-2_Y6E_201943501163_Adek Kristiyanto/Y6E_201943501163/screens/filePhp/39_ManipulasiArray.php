<!-- // Manipulasi Array

1. ada banyak function bawaan array
2. Bisa lihat disini:
    https://www.php.net/manual/en/ref.array.php
    array_keys()    ==> mengambil key dari array
    array_values() ==> mengambil value dari array
    array_merge()  ==> menggabungkan array
    array_slice()  ==> memotong array dari index yang diberikan
    array_splice() ==> mengambil array dari index yang diberikan
    array_map(0)    ==> Mengubah semua data array dengan callback
    array_filter() ==> mengambil array yang memenuhi kondisi yang diberikan
    sort()          ==> mengurutkan array
    rsort()         ==> mengurutkan array terbalik
    shuffle()    ==> mengacak array -->

<?php

    
    echo '<h1>'."Manipulasi Array".'</h1> <br> <p>' . PHP_EOL.PHP_EOL;

    $array = array(
        'a1' => 'a',
        'b2' => 'b',
        'c3' => 'c',
        'd4' => 'd',
        'e5' => 'e',
        'f6' => 'f',
    );

    $array2 = array(
        'g1' => 'g',
        'h2' => 'h',
        'i3' => 'i',
        'j4' => 'j',
        'k5' => 'k',
        'l6' => 'l',
    );

    $data = [1,2,3];

    var_dump(array_keys($array));
    var_dump(array_values($array));
    var_dump(array_merge($array, $array2));
    var_dump(array_slice($array, 1, 3));
    var_dump(array_splice($array, 1, 3));
    var_dump(array_map(fn($data) => $data * 2, $data));
    var_dump(array_filter($array));
    var_dump(sort($array));
    var_dump(rsort($array));
    var_dump(shuffle($array));

    echo PHP_EOL. PHP_EOL.'</p>';