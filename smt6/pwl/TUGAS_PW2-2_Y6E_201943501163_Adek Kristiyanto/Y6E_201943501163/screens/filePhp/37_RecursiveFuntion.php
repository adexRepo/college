<!-- // Recursive Function

1. Recursive function adalah kemampuan function memanggil dirinya sendiri
2. kadang ada banyak problem yang lebih mudah diselesaikan menggunakan recursive function
    seperti kasus Factorial
 -->

<?php

    echo '<h1>'."Recursive Function".'</h1> <br> <p>' . PHP_EOL.PHP_EOL;
    
    function factorial($n) {
        if ($n == 1) {
            echo $n . ' = ';
            return 1;
        } else {
            echo $n . ' x ';
            return $n * factorial($n - 1);
        }
    }
    
    echo factorial(5) . PHP_EOL;

    // JIKA RECURSIVE TERLALU DALAM MAKA MEMORY AKAN TERJADI ERROR
    // ERROR STACK KARENA TERLALU NUMPUK DAN MEMBUTUHKAN MEMORY
    // STACK OVER FLOW

    echo PHP_EOL. PHP_EOL.'</p>';
    
    