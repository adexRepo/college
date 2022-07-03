<!-- // IS FUNCTION

1. PHP memiliki banyak sekali function dengan prefix is_
2. Function-function ini rata-rata digunakan untuk mengecek tipe data dari sebuah data
3. lengkapnya :
    https://www.php.net/manual/en/ref.var.php
4. contoh 
    is_string ==> apakah array ?
    is_int ==> apakah integer ?
    is_float ==> apakah float ?
    is_bool ==> apakah boolean ?
    is_null ==> apakah null ?
    is_array ==> apakah array ?
    is_object ==> apakah object ?
    is_resource ==> apakah resource ?
    is_callable ==> apakah callable ? -->


    <?php

echo '<h1>'."Manipulasi Array".'</h1> <br> <p>' . PHP_EOL.PHP_EOL;

$data = 21;

var_dump(is_string($data));
var_dump(is_int($data));
var_dump(is_float($data));
var_dump(is_bool($data));
var_dump(is_null($data));
var_dump(is_array($data));
var_dump(is_object($data));
var_dump(is_resource($data));
var_dump(is_callable($data));


echo PHP_EOL. PHP_EOL.'</p>';