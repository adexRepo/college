<!-- // BREAK AND CONTINUE

1. Pada swotch statement, kita usdah mengenal kata kunci break, yaitu untuk menghentikan case dalam switch
2. Sama dengan perulangan, break juga digunakan untuk menghentikan seluruh perulangan.
3. Namun berbeda dengan continue, continue digunakan untuk menghentikan dan melanjukan ke perulangan selanjutnya
    bahasa lainnya adalah ada perulangan yang di skip (continue) -->

<?php

    echo "Break and Continue\n";echo "<br/>";echo "<br/>";

    for ($i = 0; $i < 5; $i++) {
        if ($i == 2) {
            // saat i ke 2 di hentikan semua perulagan
            break;
        }
        echo "Hello Joni! $i\n"; // 0 1
        echo "<br/>";
    }

    echo PHP_EOL;echo "<br/>";

    for ($i = 0; $i < 5; $i++) {
        if ($i == 3) {
            // saat i ke 3 di skip
            continue;
        }
        echo "Hello Adek! $i\n"; // 0 1 2 4
        echo "<br/>";
    }

    echo PHP_EOL;echo "<br/>";

    $counter = 0;
    while (true){
        echo "ini adalah perulangan while ke - $counter" . PHP_EOL;echo "<br/>";
        $counter++;
        
        if ($counter == 5) {
            break;
        }
    }