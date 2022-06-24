<!-- // WHILE LOOP

1. While Loop adalah versi perulangan yang lebih sederhana dibandingkan for loops
2. Di while loop hanya terdapat parameter kondisi perulangan, tanpa ada init statement dan post statement -->


<?php

    echo "While Loop\n";echo "<br/>";echo "<br/>";

    $i = 0;
    while ($i < 10) {
        echo "Hello Adek! $i" . PHP_EOL;echo "<br/>";
        $i++;
    }
    echo "<br/>";

    echo PHP_EOL;
// NOTE Syntax Alternatif

    echo "Syntax Alternatif \n";echo "<br/>";echo "<br/>";
    $i = 0;
    while ($i < 10) :
        echo "Hello Jojo! $i" . PHP_EOL;echo "<br/>";
        $i++;
    endwhile;