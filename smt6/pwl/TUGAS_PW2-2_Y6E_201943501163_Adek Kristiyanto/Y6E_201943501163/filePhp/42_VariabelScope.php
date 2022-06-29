<!-- // Variabel Scope

1. Variabel static, variabel global, variabel lokal
2. Variabel static > variabel yang dibuat di dalam function dan tidak bisa diakses di luar function
3. Variabel global > variabel yang dibuat di dalam function dan bisa diakses di luar function  
4. Variabel lokal > variabel yang dibuat di dalam function dan bisa diakses di dalam function -->

<?php

echo '<h1>'." Variabel Scope".'</h1> <br> <p>' . PHP_EOL.PHP_EOL;

$data1 = 21; // global scope

function saySaid(){
    $data2 = 22; // lokal scope
    echo $data2 . PHP_EOL;
}

function saySay(){
    // cara akses variabel global pakai kata kunci global
    global $data1; // global scope
    echo $data1 . PHP_EOL. PHP_EOL;

    var_dump($GLOBALS['data1']); // super GLOBAL
}

saySaid();
saySay();


// NOTE $GLOBAL variabel
// 1. Selain menggunakan global keyword, setiap var yang dibuat di global secara otomatis akan disimpan di dalam Array oleh PHP nya
// Jadi kita bisa menggunakan $GLOBAL var dengan key nama var nya dari dalam function jika ingin mengakses global variabel
// $GLOBAL adalah variabel yang bersifat superglobal, artinya bisa diakses dari scope manapun
// 


// STATIC VARIABLE
    function sayStatic(){
        static $data3 = 23; // static variabel
        echo PHP_EOL.$data3 . PHP_EOL;

        $data3++;
    }

    sayStatic(); // 23
    sayStatic(); // 24
    sayStatic(); // 25

echo PHP_EOL. PHP_EOL.'</p>';