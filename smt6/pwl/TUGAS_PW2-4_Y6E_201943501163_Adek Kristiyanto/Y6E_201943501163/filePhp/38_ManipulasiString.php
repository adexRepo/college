<!-- // Manipulasi String

1. Sebelumnya pernah digunakan untuk memanipulasi data string
2. Ada banyak sekali function untuk manipulasi string
3. lengkapnya di :
    https://www.php.net/manual/en/ref.strings.php
4. beberapa yang sering dipakai
    join() / implode() ==> menggabungkan array menjadi satu string
    explode() / strtok() ==> memecah string menjadi array
    strlen() / strpos() / strrpos() ==> menghitung panjang string
    strtolower() / strtoupper() / ucfirst() / lcfirst() ==> mengubah string menjadi huruf kecil atau besar
    str_replace() / str_ireplace() ==> mengganti string dengan string lain
    str_repeat() ==> mengulang string yang diberikan sebanyak yang diberikan
    str_pad() ==> mengisi string dengan string yang diberikan sebanyak yang diberikan
    str_shuffle() ==> mengacak string yang diberikan
    substr() / substr_replace() ==> mengambil string yang diberikan sebanyak yang diberikan
    strstr() / strchr() ==> mencari string yang diberikan di dalam string yang lain
    trim() ==> menghapus whitespace di dpean dan belakang string -->


<?php

    echo '<h1>'."Manipulasi String".'</h1> <br> <p>' . PHP_EOL.PHP_EOL;

    var_dump(str_repeat('*', 10));
    var_dump(str_pad('*', 10, '-'));
    var_dump(str_shuffle('abcdefghijklmnopqrstuvwxyz'));
    var_dump(substr('abcdefghijklmnopqrstuvwxyz', 1, 3));
    var_dump(substr_replace('abcdefghijklmnopqrstuvwxyz', '-', 1, 3));
    var_dump(strstr('abcdefghijklmnopqrstuvwxyz', 'bcd'));
    var_dump(strchr('abcdefghijklmnopqrstuvwxyz', 'bcd'));
    var_dump(trim(' abcdefghijklmnopqrstuvwxyz '));
    var_dump(join('-', array('a', 'b', 'c')));

    echo PHP_EOL. PHP_EOL.'</p>';