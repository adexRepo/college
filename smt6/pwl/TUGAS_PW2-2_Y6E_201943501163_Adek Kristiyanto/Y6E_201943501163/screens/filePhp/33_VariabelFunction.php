<!-- // Variabel Function

1. PHP mendukung konsep yang bernama Variabel Function
2. Variabel Function adalah kemampuan memanggil sebuah function dari value yang terdapat di sebuah variabel
3. Untuk menggunakan variabel function, kita bisa secara langsung memanggil $namaVariabel(),
    jika ingin menggunakan argument, kita bisa menggunakan $namaVariabel(argument) -->

    <?php

        echo '<h1>'."Variabel Function".'</h1> <br> <p>' . PHP_EOL.PHP_EOL;
            
        function sayHello1($firstName, $lastName){
            return 'Hello '.$firstName . " ". $lastName.'!';
        }

        function sum(){
            return 'Laaahh !';
        }


        $namaLengkap = "sayHello1";
        echo $namaLengkap('Adek', 'Kristiyanto') . '<br>' . PHP_EOL;

        $jumlah = "sum";
        echo $jumlah();

        echo PHP_EOL;
        echo PHP_EOL.'</p>';