<!-- // INCREMENT DAN DECREMENT

1. PHP mendukung gaya bahasa pemrograman C untuk menaikkan dan menurunkan data number sejumlah 1 angka
2. Ini bisa mempersingkat kita saat ingin menaikkan data
3. Jenis - jenisnya :
    $a++ (tambah 1) >> Post Increment >> mengembalikan $a lalu menaikkan 1 angka
    ++$a (tambah 1) >> Pre Increment  >> Naikkan $a satu angka, lalu kembalikan $a
    $a-- (kurang 1) >> Post Decrement >> mengembalikan $a lalu menurunkan 1 angka
    --$a (kurang 1) >> Pre Decrement  >> Turunkan $a satu angka, lalu kembalikan $a -->

<?php
echo '<h1>'."Increment dan Decrement".'</h1> <br> <p>' . PHP_EOL.PHP_EOL;

    $a = 10;
    echo "a++ : ";
    var_dump($a++); // hasilnya 10, lalu menaikkan 1 angka
    echo "<br/>";
    echo "a : ";
    var_dump($a); // hasilnya 11
    echo "<br/>";
    // Gampangnya $a++ akan menaikan di line selanjutnya bukan di line yang sama

    echo "++a : ";
    var_dump(++$a); // hasilnya 12, lalu menaikkan 1 angka
    echo "<br/>";
    echo "a : ";
    var_dump($a); // hasilnya 12
    echo "<br/>";
    // Gampangnya ++$a akan menaikan di line yang sama bukan di line setelahnya

    echo "a-- : ";
    var_dump($a--); // hasilnya 12, lalu menurunkan 1 angka
    echo "<br/>";
    echo "a : ";
    var_dump($a); // hasilnya 11
    echo "<br/>";

    echo "--a : ";
    var_dump(--$a); // hasilnya 10, lalu menurunkan 1 angka
    echo "<br/>";
    echo "a : ";
    var_dump($a); // hasilnya 10
    