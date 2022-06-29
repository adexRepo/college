<!-- // FUNCTION

1. Function adalah block Code Program yang akan berjalan saat kita panggil
2. Sebelumnya kita sudah menggunakan function isset(), count dan lain2
3. Untuk membuat function di PHP, kita bisa menggunakan kata kunci function,
    lalu diikuti dengan nama function, kurung() dan diakhiri dengan block.
4. Kita bisa memanggil function dengan menggunakan nama function lalu diikuti dengan kurung ()
5. Di bahasa pemrograman lain, function disebut dengan method. -->


<?php

    echo '<h1>'."Function".'</h1>' . PHP_EOL;
    echo '<br> <p>';

    function sayHello() {
        echo PHP_EOL.'Hello Function!';
    }

    sayHello();
    sayWoy ();

    function sayWoy (){ 
        echo PHP_EOL.'Woy Function!';
    }


// Lokasi Function
// 1. PHP sangat fleksibel dalam pembuatan function
// 2. Tidak seperti bahasa pemrograman lain yang ada aturan lokasi diamana function harus dibua
// 3. Di PHP kita bebas membuat function dimanapun, bisa dialam if statement, di dalam function, etc.
// 4. Namun Perlu diingat jika kode program function yang belum dieksekusi di PHP, maka funtion tsb
    // tidak akan bisa digunakan


$buatFunction = false;

if($buatFunction){
    function spadaaa(){
        echo PHP_EOL.'Hello Function!';
    }
}

// spadaaa();
// spadaaa();
// spadaaa();

// jika buatFunction == true, maka function akan di eksekusi lalu ditaro di global
// jika buatFunction == false, maka function tidak akan di eksekusi dan error undefined function

echo '</p>';