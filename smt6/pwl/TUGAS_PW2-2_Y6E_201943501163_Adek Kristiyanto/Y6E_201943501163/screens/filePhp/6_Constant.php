<?php

// CONSTANTA

// 1. Variabel di PHP sifatnya mutablem artinya bisa dirubah
// 2. Jika kita ingin membuat variabel yang immutable (tidak bisa dirubah2)
// 3. maka kita tidak bisa lakukan di PHP
// 4. Sebagai gantinya, terdapat fitur yang namannya constant,
// 5. Constant adalah tempat untuk menyimpan data yang tidak bisa dirubah setelah di deklarasikan
// 6. Untuk membuat constant kita bisa menggunakan function defined("NAMA_CONSTANT",VALUE)
// 7. Best practice pembuatan nama constant adalah menggunakan UPPER_CASE

echo '<h1>'."CONSTANT".'</h1> <br> <p>' . PHP_EOL.PHP_EOL;

    define("NAMA", "ADEK");
    define("UMUR", 24);
    define("NPM", 201943501163);

    echo "Nama : " . NAMA . "\n";echo "<br>";
    echo "Umur : " . UMUR . "\n";echo "<br>";
    echo "NPM : " . NPM . "\n";echo "<br>";

    // define("NAMA", "ADEK");  // will error because NAMA is already defined

