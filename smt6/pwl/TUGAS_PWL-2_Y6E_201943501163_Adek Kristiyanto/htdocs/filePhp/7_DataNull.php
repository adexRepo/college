<!-- // DATA NULL

1. Nilai NULL merepresentasikan sebuah variabel tanpa nilai.
2. Saat kita membuat variabel, lalu ingin menghapus data yang terdapat di variabel tersebut,
    kita bisa menggunakan NULL untuk mengosongkan variabel tersebut.
3. Untuk membuat data NULL, kita bisa menggunakan kata kunci NULL (case insensitive) -->

<?php

    echo "DATA NULL\n";
    echo "<br/>";echo "<br/>";

    $nama = "Adek";
    $NPM = "201943501163";
    echo "Nama : " . $nama . "\n";echo "<br/>";
    echo "NPM : " . $NPM . "\n";echo "<br/>";

    $nama = null;
    echo "Nama : " . $nama . "\n";echo "<br/>";
    echo "NPM : " . $NPM . "\n";echo "<br/>";echo "<br/>";

// Mengecheck data apakah null menggunakan function is_null()

    echo "\nMengecheck data apakah null menggunakan function is_null()\n";
    echo "<br/>";
    echo "<br/>";

    $nama = "Adek";
    $NPM = "201943501163";

    echo "is name Null? : ";echo "<br/>";
    var_dump(is_null($NPM)); // false1
    echo "<br/>";

    echo ">>execute maked data Null\n";echo "<br/>";
    $nama = null;
    $NPM = null;


    echo "is name Null? : ";echo "<br/>";
    echo is_null($nama);echo "<br/>";
    var_dump(is_null($NPM));echo "<br/>";echo "<br/>";

// Menghapus Variabel
// Selain mengubah menjadi NULL, di PHP juga kita bisa menghapus sebuah variabel, caranya denga menggunakan kata kunci unset()
// Namun hati-hati, saat menghapus variabel, kita tidak bisa lagi mengakses variabel tersebut.
// bahkan function is_null() tidak akan menghasilkan nilai true // bakal error, karena variabel tersebut telah dihapus.
// agar lebih aman, kita bisa menggunakan function isset($variable),
//  untuk mengecek apakah variabel tersebut telah didefinisikan atau tidak dan nilainya tidak null

    echo "\nMenghapus Variabel\n";echo "<br/>";echo "<br/>";

    $contoh1 = "Adek";
    $contoh2 = "201943501163";
    $contoh3 = "201943501163";
    $contoh4 = "201943501163";

    // unset
    // unset($contoh1);
    // echo $nama; // error, karena variabel tersebut telah dihapus.

    // isset
    var_dump(isset($contoh1));echo "<br/>";

    $contoh1 = null;
    var_dump(isset($contoh1));

// NOTE
// kalo YAKIN variabel ADA bisa pakai is_null()
// kalo TIDAK YAKIN variabel ADA bisa pakai isset()
// kalo variabel YAKIN tidak digunakan lagi bisa pakai unsset()


