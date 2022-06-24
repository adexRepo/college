<!-- // FOR LOOP

1. For adalah salah satu kata kunci yang bisa digunakan untuk melakukan perulangan
2. Blok Kode yang terdapat di dalam for akan selalu diulangi selama kondisi for terpenuhi
3. For loop memiliki 3 parameter yaitu,
    1. init statement >> Nilai start dari perulangan
    2. Kondisi >> Bernilai true atau false
    3. post statement >> Nilai increment/decrement
4. for(init statement; kondisi ; post statement) -->

<?php

    echo "For Loop\n";echo "<br/>";echo "<br/>";

    for ($i = 0; $i < 10; $i++) {
        echo "Hello World! $i\n";echo "<br/>";
    }
    