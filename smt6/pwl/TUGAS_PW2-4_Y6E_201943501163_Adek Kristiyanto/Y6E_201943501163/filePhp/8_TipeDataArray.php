
<?php
//  TIPE DATA ARRAY

// 1. Array adalah tipe data yang berisikan kosong atau banyak data dalam satu tempat
// 2. Array di PHP bisa berisikan data dengan jenis berbeda-beda
// 3. Array di PHP memiliki panjang dinamis, artinya kita bisa menambah data ke Array
//     sebanyak - banyaknya, tidak dibatasi kapasitasnya. -->

echo '<h1>'."TIPE DATA ARRAY".'</h1> <br> <p>' . PHP_EOL.PHP_EOL;

    echo "ARRAY\n";echo "<br>";echo "<br>";
    $arr = array (1,2,4.2,"Hello World");
    var_dump($arr); // check detail of array
    echo "<br>";echo "<br>";

    $identity = ["adek", "kristiyanto", "201943501163"];
    // var_dump($identity);

// OPERASI DI ARRAY
    echo "\nOPERASI DI ARRAY\n";echo "<br>";
    // MENGAKSES ARRAY BY INDEX
    echo "Nama Depan :".$identity[0]."\n";echo "<br>";
    echo "Nama Belakang :".$identity[1]."\n";echo "<br>";
    echo "NPM :".$identity[2]."\n";echo "<br>";

    echo "<br>";echo "<br>";
    // MENGUBAH DATA ARRAY BY INDEX
    $identity[0] = "Kristiyanto";
    $identity[1] = "Adek";
    $identity[2] = "adexRepo";

    echo "\nNama Depan :".$identity[0]."\n";echo "<br>";
    echo "Nama Belakang :".$identity[1]."\n";echo "<br>";
    echo "NPM :".$identity[2]."\n";echo "<br>";

    echo "<br>";echo "<br>";
    // MENAMBAH DATA ARRAY BY INDEX
    $identity[] = "201943501163";
    echo "\nNPM :".$identity[3]."\n\n";echo "<br>";echo "<br>";


    // MENGHAPUS DATA ARRAY BY INDEX
    unset($identity[2]); // kalo semisal ada 3 data , kita ngehapus ke 2 maka urutan data akan 0 1 dan 3
    echo "<br>";
    var_dump(isset($identity[2])); // check if variable is set
    echo "<br>";
    var_dump($identity); // check detail of array
    echo "<br>";
    
    // MENGAMBIL TOTAL/LENGTH DATA DI ARRAY
    echo "\nTotal Data : ".count($identity)."\n";echo "<br>";
    var_dump(is_array($identity));echo "<br>";
    var_dump(count($identity));echo "<br>";