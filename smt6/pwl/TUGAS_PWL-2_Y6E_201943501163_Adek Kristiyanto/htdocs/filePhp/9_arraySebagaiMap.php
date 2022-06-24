
<?php
// ARRAY SEBAGAI MAP

// 1. Biasanya di kebanyakan bahasa pemrograman, terdapat tipe data bernama Map,
//     yaitu asosiasi antara key dan value,
// 2. Namun di PHP, Map bisa dibuat menggunakan Array,
// 3. Secara default Array akan menggunakan index (number) sebagai key,
//     dan valuenya kita bisa bebas memasukan data kedalam Array tersebut
// 4. Namun jika kita ingin, kita juga bisa mengubah index nya tidak harus menggunakan number,
//     bisa gunakan tipe data lain, seperti string misalnya,
// 5. Hal tersebut terlihat seperti Map di bahasa pemrograman lain.


    echo "ARRAY SEBAGAI MAP\n";
    echo "<br/>";
    echo "<br/>";
    // Deklarasi
    $map = array(
        "nama" => "Adek",
        "npm" => "201943501163",
        "umur" => 24
    );
    // Show map
    echo "Nama : " . $map["nama"] . "\n";echo "<br/>";
    echo "NPM : " . $map["npm"] . "\n";echo "<br/>";
    echo "Umur : " . $map["umur"] . "\n";echo "<br/>";

    echo "\n";echo "<br/>";
    // Modify map
    $map["nama"] = "Ade"; 
    $map["npm"] = "201943501163";
    $map["umur"] = 25;
    // Show map
    echo "Nama : " . $map["nama"] . "\n";echo "<br/>";
    echo "NPM : " . $map["npm"] . "\n";echo "<br/>";
    echo "Umur : " . $map["umur"] . "\n";echo "<br/>";

    echo "ARRAY di dalam Array\n";echo "<br/>";echo "<br/>";
    // Seperti dijelaskan diawal, Array di PHP bisa diisi apapun
    // disini berarti Array bisa diisi Array

    // Deklarasi
    $map = array(
        "nama" => "Joni",
        "npm" => "201943501163",
        "umur" => 25,
        "alamat" => array(
            "jalan" => "Jl. Raya",
            "kota" => "Bandung",
            "provinsi" => "Jawa Barat"
        )
    );
    // Show map
    echo "\nNama : " . $map["nama"] . "\n";echo "<br/>";
    echo "NPM : " . $map["npm"] . "\n";echo "<br/>";
    echo "Umur : " . $map["umur"] . "\n";echo "<br/>";
    echo "Alamat : " . $map["alamat"]["jalan"] . "\n";echo "<br/>";
    echo "Kota : " . $map["alamat"]["kota"] . "\n";echo "<br/>";
    echo "Provinsi : " . $map["alamat"]["provinsi"] . "\n";echo "<br/>";
?>