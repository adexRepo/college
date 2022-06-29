<!-- // FUNTION PARAMETER

1. Kita bisa mengirim informasi ke funciton yang kita panggil
2. Untuk melakukan hal tersebut, kita perlu menambahkan argument atau parameter function
3. Cara membuat argument sama seperti membuat variabel
4. Argument ditempatkan di dalam kurung() di deklarasi function
5. Argument bisa lebih dari satu, jika lebih dari satu, harus dipisahkan dengan tanda koma -->


<?php

    echo '<h1>'."Function Parameter".'</h1>' . PHP_EOL;
    echo '<br> <p>';
    
    function sayHello($firstName, $lastName){
        echo PHP_EOL.'Hello '.$firstName. $lastName.'!';
    }
    
    sayHello('John', 'Doe');
    sayHello('Jane', 'Doe');
    sayHello('Bob', 'Shelby');

    // Default Value Argument
    function sayWoy($firstName = 'John', $lastName = 'Doe'){
        echo PHP_EOL.'Woy '.$firstName. $lastName.'!'.PHP_EOL;
    }

    sayWoy();
    sayWoy('Samsoel');
    sayWoy('Bob', 'Patrick');

    // default argument akan berguna jika kita menggunakan 
    // default argument di awal padahal kita mengirim argument kedua atau lebih

    echo PHP_EOL.'</p>';