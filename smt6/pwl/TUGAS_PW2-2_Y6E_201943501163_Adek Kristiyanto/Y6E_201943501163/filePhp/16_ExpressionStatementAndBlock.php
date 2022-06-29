<!-- // Expression, statement and block

// EXPRESSION
1. Expression adalah bagian terpenting PHP
2. Di PHP, hampir semua kode yang kita tulis adalah Expression
3. Secara sederhana, Expresion adalah apapun yang memiliki nilai atau value
4. Contohnya :
    Contoh Sederhana :
    $a = "Adek"; >> Adek ini adalah expression
    $a = "Adek" + "Krist"; >> AdekKrist ini adalah expression
    $a = $a >> $a adalah expression karena bernilai Adek Krist
    Contoh dalam Function : 
    function coba() {
        $a = "Adek";
        $b = "Krist";
        $c = $a + $b;
        return $c;
    }
    $a = coba(); >> $coba ini adalah expression, karena bernilai Adek Krist

// STATEMENT
1. Statement adalah kalimat lengkap dalam bahasa;
2. Sebuah statement berisikan execution komplit, biasanya diakhiri dengan titik koma
3. Contohnya :
    Contoh Sederhana :
    echo "Adek"; >> echo "Adek"; ini adalah statement
    $name = "Adek"; >> $name = "Adek"; ini adalah statement
    Contoh dalam Function :
    $date = new DateTime(); >> $date = new DateTime(); ini adalah statement
    $date->format("Y-m-d"); >> $date->format("Y-m-d"); ini adalah statement

// BLOCK
1. Block adalah kumpulan statement yang terdiri dari nol atau lebih statement.
2. Block diawali dan diakhiri dengan kurung kurawal
3. Contohnya :
    Contoh dalah Function
    function coba() {
        echo "Adek";
        echo "Kristiyanto";
        echo "201943501163"
    } -->


<?php
echo '<h1>'."Cuman penjelasan aja, buka file aja guys".'</h1> <br> <p>' . PHP_EOL.PHP_EOL;
