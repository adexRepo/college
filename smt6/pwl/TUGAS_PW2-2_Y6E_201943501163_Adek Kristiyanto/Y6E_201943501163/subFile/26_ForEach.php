<!-- // FOR EACH

1. Kadang kita biasa mengakses data array menggunakan perulangan,
2. Mengakses data array menggunakan perulangan sangat bertele-tele,
3. kita harus membuat counter, lalu mengakses array menggunakan counter yang kita buat,
4. Namun untungnnya, di PHP terdapat perulangan for each, yang bisa digunakann untuk mengakses
    seluruh data di Array secara otomatis. -->

<?php

    echo "For Each\n";echo "<br/>";echo "<br/>";

    // array biasa
    $data = [1.4,53,2,5];

    foreach ($data as $key => $value) {
        echo "Key : $key, Value : $value" . PHP_EOL;echo "<br/>";
    }

    echo PHP_EOL;echo "<br/>";

    // Map
    $array = array(
        "Nama" => "Adek",
        "NPM" => "201943501163",
        "Umur" => "20",
        "Alamat" => "Jakarta"
    );

    foreach ($array as $key => $value) {
        echo "$key : $value" . PHP_EOL;echo "<br/>";
    }


