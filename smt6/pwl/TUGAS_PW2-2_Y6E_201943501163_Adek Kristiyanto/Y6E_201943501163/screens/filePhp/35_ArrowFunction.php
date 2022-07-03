<!-- // ARROW FUNCTION

1. Arrow Function di perkenalkan di PHP 7.4 sebagai alternatif untuk Anonymous Function yang lebih sederhana pembuatannya
2. Secara garis besar, sebenarnya arrow function dan anonymouse function adalah dua hal yang sama,
3. Hal yang membedakan di arrow function adalah secara otomatis, diluar variabel diluar closure / anonymouse function tsb
    bisa digunakan, tidak seperti di anonymouse function yang harus disebutkan secara manual menggunakan kata use
4. Pembuatan arrow function tidak menggunakan kata kunci function, melainkan fn
5. Arrow Function di khsusnya untuk pembuatan function sederhana.
6. Arrow Function otomatis return -->


<?php

    echo '<h1>'."Arrow Function".'</h1> <br> <p>' . PHP_EOL.PHP_EOL;

    $namaDepan = "Adek";
    $namaBelakang = "Kristiyanto";

    $sayWoyAdek = fn () => 'Woy '.$namaDepan.' '.$namaBelakang.'!';

    echo $sayWoyAdek() . PHP_EOL;
    $namaDepan = "Adek";
    $namaBelakang = "Ackerman";
    echo $sayWoyAdek() . PHP_EOL;


    echo PHP_EOL. PHP_EOL.'</p>';