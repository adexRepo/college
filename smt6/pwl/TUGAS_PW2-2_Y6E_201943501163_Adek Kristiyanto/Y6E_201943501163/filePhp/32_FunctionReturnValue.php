<!-- // FUNCTION RETURN VALUE

1. Secara default, function itu tidak menghasilkan value apapun, namun jika kita ingin, kita bisa membuat sebuah function
    yang bisa mengembalikan nilai
2. Di dalam block function, untuk menghasilkan nilai tersebut, kita harus menggunakan kata kunci return
    lalu diikuti dengan data yang ingin dihasilkan.
3. kita hanya bisa menghasilkan 1 data di sebuah function, tidak bisa lebih dari satu. -->

<?php

    echo '<h1>'."Function Return Value".'</h1> <br> <p>' . PHP_EOL.PHP_EOL;
    
    function sayHello2($firstName, $lastName){
        return 'Hello '.$firstName. $lastName.'!';
    }
    
    
    $namaLengkap = sayHello2("Adek", "Kristiyanto");

    echo $namaLengkap; 


    // Return Dengan Tipe data

    function sum1($a, $b):int
    {
        return $a + $b;
    }

    function sum2($a, $b):string
    {
        return $a + $b;
    }

    echo PHP_EOL;PHP_EOL;
    var_dump(sum1(1, 2));
    var_dump(sum2(1, 2));

    echo PHP_EOL;
    echo PHP_EOL.'</p>';