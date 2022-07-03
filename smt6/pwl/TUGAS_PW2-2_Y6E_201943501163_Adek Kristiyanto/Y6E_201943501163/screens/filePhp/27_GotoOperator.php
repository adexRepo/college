<!-- // GOTO OPERATOR

1. Salah satu fitur yang sebenarnya jarang sekali digunakan di PHP adalah goto operator
2. Kenapa jarang, digunakan karena jika terlalu banyak menggunakan goto, kode program
    aplikasinya akan membingungkan yang baca code nya.
3. Goto adalah fitur dimana kita bisa meloncat kode program sesuai dengan keinginan kita.
4. Agar goto bisa loncat ke kode program, kita harus membuat label di php dengan menggunakan
    nama label lalu diakhiri : (colon) -->


<?php

echo '<h1>'."GOTO OPERATOR".'</h1> <br> <p>' . PHP_EOL.PHP_EOL;

    // label
    goto a;
    echo "Hello X" . PHP_EOL;

    echo '<br>';

    a:
    echo "Hello B" . PHP_EOL;

    $counter = 1;

    while (true){

        echo "Hello World" . PHP_EOL;
        $counter++;

        if ($counter == 10){
            goto b;
        }
    }

    b:
    echo "Looping Selesai" . PHP_EOL;