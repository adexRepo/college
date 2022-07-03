<!-- // Callback Function

1. Callback adalah sebuah mekanisme function memanggil function lainnya sesuai dengan yang diberikan di argument
2. Hal ini sebenarnya sudah kita lakukan di materi Variabel Function dan Anonymous Function
3. Namun di PHP ada cara lain untuk mengimplementasikan callback, yaitu menggunakan tipe data callable
4. dan untuk memanggil callback function tersebut, kita bisa menggunakan function call_user_func(callable, arguments) -->

<?php

    echo '<h1>'."Callback Function".'</h1> <br> <p>' . PHP_EOL.PHP_EOL;
    
    $namaDepan = "Adek";
    $namaBelakang = "Kristiyanto";
    
    $sayWoyAdek = function ($namaDepan, $namaBelakang) {
        return 'Woy '.$namaDepan.' '.$namaBelakang.'!';
    };
    
    echo call_user_func($sayWoyAdek, $namaDepan, $namaBelakang) . PHP_EOL;
    $namaDepan = "Adek";
    $namaBelakang = "Ackerman";
    echo call_user_func($sayWoyAdek, $namaDepan, $namaBelakang) . PHP_EOL;
    
    
    echo PHP_EOL. PHP_EOL.'</p>';