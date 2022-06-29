<?php

// NOTE REFERENCE

// 1. Reference adalah mengakses variabel yang sama dengan nama variabel yang Berbeda
// 2. reference di PHP tidak sama dengan reference du bahasa C/ C++ yang memiliki fitur pointer
// 3. Analogi Reference itu seperti file, jika variabel adalah file, dan calue nya adlaah isi file nya,
//     maka reference adalah membuat shortcut (diwindows) atau alias (di linux / mac) thd file yang sama
// 4. Saat ini kita mengubah isi value dari reference, maka secara otomatis value variabel aslinya pun berubah
// 5. Untuk membuat reference terhadap variabel, kita bisa menggunkaan karakter &

echo '<h1>'."REFERENCE".'</h1> <br> <p>' . PHP_EOL.PHP_EOL;

    $name = "Adek";

    $reference = &$name;
    $reference = "Rizki Titik";
    
    echo $name . PHP_EOL;
    echo $reference . PHP_EOL;

    $data = 100;

    function data(&$data){
        $data = 200;
        echo $data;
    }

    echo data($data);

    // Returning Reference
    function &returnReference(){
        static $datas = 173;
        return $datas;
    }

    $datas = &returnReference();
    $datas = 165;
    echo PHP_EOL.$datas;


    echo PHP_EOL. PHP_EOL.'</p>';