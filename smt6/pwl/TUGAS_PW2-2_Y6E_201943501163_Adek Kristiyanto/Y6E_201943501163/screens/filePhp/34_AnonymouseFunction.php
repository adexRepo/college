<!-- // Anonymous Function

1. Anonymous Function adalah function tanpa nama, di PHP disebut juga dengan Closure,
2. Anonymous Function biasanya digunakna sebagai argument atau sebagai value di variabel,
3. Anonymous Function membuat kita bisa mengirim function sebagai argument di function lainnya. -->


<?php

    echo '<h1>'."Anonymous Function".'</h1> <br> <p>' . PHP_EOL.PHP_EOL;
    

    $hitungin = function($a, $b){
        return $a + $b;
    };

    echo $hitungin(1, 2) . PHP_EOL;


    // NOTE anonymouse function sebagai argument

    function sayGoodBuay(string $name,$filter){
        return 'Good Buay '.$filter($name);
    }

    echo sayGoodBuay('Adek', function($name){
        return strtoupper($name).'!';
    }) . PHP_EOL;

    // NOTE Mengakses Variabel diluar Closure

    //  Secara default, Anonymouse Function tidak bisa mengakses variabel yang terdapat diluar function
    // Jika kita ingin menggunakan variabel yang terdapat diluar anonymouse function, kita perlu secara explisit
        // menyebutkan kata kunci use lalu diikuti variabel-variabel yang ingin kita gunakan.

    $namaDepan = "Adek";
    $namaBelakang = "Kristiyanto";

    $sayWoyAdek = function () use ($namaDepan, $namaBelakang){
        // namaDepan dan namaBelakang Mengambil data value variabel pertama kali variabel itu
        // di deklarasikan
        return 'Woy '.$namaDepan.' '.$namaBelakang.'!';
    };    

    echo $sayWoyAdek() . PHP_EOL;
    $namaDepan = "Supriyanto";
    $namaBelakang = "jajang";
    echo $sayWoyAdek() . PHP_EOL;


    echo PHP_EOL. PHP_EOL.'</p>';