<!-- // TYPE DECLARATION IN FUNCTION

1. Sama seperti variabel, argument di PHP bisa kita masukkan data yang dinamis
2. Kadang terlalu dinamis juga menyulitkan jika ternyata kita hanya ingin membuat function
    yang menggunakan argument dengan tipe data tertentu.
3. Untungnya di PHP. kita bisa menambahkan type data di argument, sehingga PHP akan melakukan
    pengecekan ketika kita mengirim value ke function tersebut.
4. Jika tipe data value tidak sesuai, maka akan terjadi Error.
5. Secara Default PHP akan melakukan percobaan konversi tipe data secara otomatis,
    misalnya, jika kita menggunakan tipe int, tapi kita mengirim string, maka PHP akan Otomatis
    mengkonversi string menjadi int.
6. Valid Types (1)
    Class / Interface == harus bertipe class
    self == harus sama dengan Class dimana function ini dibuat
    array == parameter harus array
    bool == parameter harus boolean
    float == parameter harus float
    callabel == parameter harus callable
    int == parameter harus integer
    strin == > string
    object == parameter harus object
    resource == parameter harus resource
    null == parameter harus null
    mixed == parameter bisa berupa apapun
    iterable == parameter bisa berupa iterable -->

<?php

    echo '<h1>'."Type Declaration In Function".'</h1>' . PHP_EOL;
    echo '<br> <p>';
    
    function sum (int $a, int $b){
        return $a + $b;
    }

    echo PHP_EOL ."SUM : ".  sum(1, 5);  
    echo PHP_EOL ."SUM : ".  sum(1.3, 2.5);
    echo PHP_EOL ."SUM : ".  sum(true, false);
    echo PHP_EOL ."SUM : ".  sum("1", "8");
    // echo PHP_EOL ."SUM : ".  sum([], []); will error


    echo PHP_EOL.'</p>';