<!-- // Variabel Length Parameter List

1. Variabel Length param list merupakan kemampuan dimana kita bisa membuat sebuah parameter
    yang menerima banyak value , kalo di javascipt res parameter
2. Variabel Length parameter list secara otomatis akan membuat argument tersebut menjadi array,
    namun kita tidak perlu manual mengirim array ke function nya
3. Variabel Length argument list hanya bisa dilakuakn di argument posisi terakhir
4. untuk membuat variabel Length argument list, kita bisa menggunakan tanda ... (titik 3x)
    sebelum nama argument. -->

    <?php


    echo '<h1>'."Type Declaration In Function".'</h1>' . PHP_EOL;
    echo '<br> <p>';
    
    function sum(...$numbers){
        $total = 0;
        foreach($numbers as $number){
            $total += $number;
        }
        return $total;
    }

    echo PHP_EOL ."SUM : ".  sum(1, 5,3,4,5,6,7,8,9,10);

    $arr = [1,2,3,4,5,6,7,8,9,100];

    echo PHP_EOL ."SUM : ".  sum(...$arr);

    echo PHP_EOL.'</p>';