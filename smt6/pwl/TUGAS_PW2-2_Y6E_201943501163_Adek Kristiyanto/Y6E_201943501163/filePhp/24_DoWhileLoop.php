<!-- // DO WHILE LOOP

1. Do While loop adalah perulangan yang mirip dengan While
2. Perbedaannya hanya pada pengecekan kondisi,
3. Pengecekan kondisi di while loop dilakukan di awal sebelum perulangan eksekusi,
4. Sedangkan di do while loop dilakukan di akhir perulangan eksekusi.
5. Oleh karena itu dalam do while loop, minimal pasti sekali perulangan dilakukan 
   Walaupun kondisi tidak bernilai true -->

<?php

echo '<h1>'."Do While Loop".'</h1> <br> <p>' . PHP_EOL.PHP_EOL;

    $i = 0;
    do {
        echo "Hello Adek! $i" . PHP_EOL;echo "<br/>";
        $i++;
    } while ($i < 10);

    echo PHP_EOL;
    echo "<br/>";

    $i = 11;
    do {
        echo "Hello Adek! $i" . PHP_EOL;echo "<br/>";
        // cuman sekali di eksekusi karena diawalnya kondisi bernilai false
        $i++;
    } while ($i < 10);