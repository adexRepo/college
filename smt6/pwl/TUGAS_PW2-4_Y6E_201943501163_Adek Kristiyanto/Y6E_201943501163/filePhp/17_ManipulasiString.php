<!-- // MANIPULASI STRING

A. Dot Operator
1. Dot (.) operator adalah operator yang digunakan untuk menambah string dengan data lain. 
2. Sebenarnya kita bisa menggunakan + (plus) untuk menambahkan string, namun jika kita coba
    tambahkan string dengan tipe data number, maka akan terjadi error. Oleh karena itu,
    direkomendasikan menggunakan dot (.) untuk menambahkan string dan data lain

B. Konversi String ke number atau sebaliknya
1. Kadang kita sering melakukan konversi tipe data dari String ke number (int, float) atau sebaliknya
2. Di PHP untuk melakukan konversi cukup mudah, kita hanay perlu menggunakan tanda kurung (tipe data tujuan)
3. Tipe data untuk string adalah string, untuk number bisa menggunakan int untuk integer dan float untuk floating point

C. Mengakses Karakter
1. String di PHP seperti array karakter, dimana kita bisa mengakses data tiap karakternya menggunakan kurung siku
2. Sama seperti di array, index pertama dimulai dari 0
3. Jika kita mengakses index melebihi karakter di string, maka akan terjadi error

D. Variabel Parshing
1. Khusus string menggunakan double quote atau heredoc, kita bisa menggunakan karakter $ untuk mengakses variabel
2. Ini memudahkan ketika kita ingin menggabungkan String dengan Variabel
3. Cara penggunaannya adalah dengan menggunakan karakter $ lalu diikuti dengan nama variabel nya.

C. Curly Brace
1. Kadang kita butuh menggabungkan variable dengan string tanpa ada spasi.
2. Hal ini akan menyulitkan jika menggunakan variabel parshing
2. Curly brace ({}) digunakan untuk mengambil data dari array -->

<?php

echo '<h1>'."MANIPULASI STRING".'</h1> <br> <p>' . PHP_EOL.PHP_EOL;

    // NOTE Dot Operator
    echo "DOT OPERATOR \n";echo "<br/>";echo "<br/>";
    $nama = "Adek";
    $nama .= " Ackerman"; // $nama = $nama . " Fauzi";
    echo $nama . PHP_EOL;echo "<br/>";
    echo "Value : " . 100 . PHP_EOL;echo "<br/>";echo "<br/>";
    
    // NOTE Konversi String ke number
    echo "\nKONVERSI STRING KE NUMBER \n";echo "<br/>";echo "<br/>";
    $angkaString = "100";
    var_dump($angkaString); // string(3) "100"
    echo "<br/>";
    $angkaInt = (int)$angkaString;
    var_dump($angkaInt); // int(100)
    echo "<br/>";
    $angkaFloat = (float)$angkaString;
    var_dump($angkaFloat); // float(100)
    echo "<br/>";

    $salahKonversi = (int)$nama;
    var_dump($salahKonversi); // int(0) // otomatis bakal 0 kalo salah
    echo "<br/>";echo "<br/>";

    // NOTE Mengakses tiap Karakter
    echo "\nMENGAKSES KARAKTER \n";echo "<br/>";echo "<br/>";

    $nama = "Adek";

    echo $nama[0] . PHP_EOL; // A
    echo $nama[1] . PHP_EOL; // d
    echo $nama[2] . PHP_EOL; // e
    echo $nama[3] . PHP_EOL; // k
    echo "<br/>";echo "<br/>";
    // echo $nama[4] . PHP_EOL; // r // error karena index melebihi karakter di string nya 

    // NOTE Variabel Parshing
    echo "\nVARIABLE PARSING \n";echo "<br/>";echo "<br/>";
    $nama = "Adek";
    $nama2 = "Fauzi";
    $nama3 = "Ackerman";
    $nama4 = "Saputra";

    echo "Nama : $nama" . PHP_EOL;echo "<br/>";
    echo "Nama : $nama $nama2" . PHP_EOL;echo "<br/>";echo "<br/>";
    
    // kalo di javascript ada namanya string template, ${}  
    
    // NOTE Curly Brace
    echo "\nCURLY BRACE \n";echo "<br/>";echo "<br/>";
    echo "Nama : {$nama}s" . PHP_EOL;echo "<br/>";
    echo "Nama : {$nama2}s" . PHP_EOL;echo "<br/>";
    echo "Nama : {$nama}s {$nama2}x" . PHP_EOL;echo "<br/>";
    echo "Nama : {$nama}s {$nama2}x {$nama3}z" . PHP_EOL;echo "<br/>";
    echo "Nama : {$nama}s {$nama2}x {$nama3}z {$nama4}z" . PHP_EOL;