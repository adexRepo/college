<!-- // OPERATOR PERBANDINGAN

1. Operator Perbandingan, seperti namanya, digunakan untuk membandingkan dua buah value
2. Hasil dari operator perbandingan adalah boolean, true jika perbandingannya benar,
    false jika perbandingannya salah
3. Operator Perbandingan yang digunakan adalah :

    $a == $b (sama dengan)        >> true jika sama dan setelah dilakukan konversi tipe data
    $a === $b (identik) >> true jika sama dan punya tipe data yg sama
    $a != $b (tidak sama dengan)  >> true jika tidak sama dan setelah dilakukan konversi tipe data
    $a <> $b (tidak sama dengan)  >> true jika tidak sama dan setelah dilakukan konversi tipe data
    $a !== $b (tidak identik)    >> true jika tidak identik
    $a < $b (kurang dari)         >> true jika $a kurang dari $b
    $a > $b (lebih dari)          >> true jika $a lebih dari $b
    $a <= $b (kurang dari atau sama dengan) >> true jika $a kurang dari atau sama dengan $b
    $a >= $b (lebih dari atau sama dengan) >> true jika $a lebih dari atau sama dengan $b

4. Di PHP ada yg namanya Type Juggling, yaitu jika ada dua data yg satu int dan yg lainnya string
    tapi merepresentasikan angka (misalkan), maka PHP akan melakukan konversi otomatis
    setelah dikonversi maka data yg lainnya akan menjadi int juga, akhirnya akan menghasilkan true
    pada operator == (sama dengan) -->

<?php

    echo "Operator Perbandingan\n";echo "<br/>";echo "<br/>";
    $a = 10;
    $b = "10";

    echo "a == b : ";
    var_dump($a == $b); // kena type juggling, hasilnya true
    echo "<br/>";

    echo "a != b : ";
    var_dump($a != $b); // hasilnya false
    echo "<br/>";

    echo "a === b : ";
    var_dump($a === $b); // hasilnya false
    echo "<br/>";

    echo "a !== b : ";
    var_dump($a !== $b); // hasilnya true