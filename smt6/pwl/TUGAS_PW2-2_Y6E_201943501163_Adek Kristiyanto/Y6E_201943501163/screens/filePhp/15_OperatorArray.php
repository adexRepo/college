<!-- // OPERATOR ARRAY

1. Di PHP, Array memiliki operator khusus
2. sama seperti yg operator sebelumnya, cuman sedikit berbeda cara kerjanya
3. Operator Array yang digunakan adalah :
    $a + $b (array union) >> menghasilkan array yg berisi semua nilai dari array a dan array b
    $a == $b (array compare) >> menghasilkan true jika array a dan array b key-value sama
    $a === $b (array identity) >> true jika $a dan $b memiliki key-value sama dan posisi sama
    $a != $b (array inequality) >> true jika array a dan array b key-value tidak sama
    $a <> $b (array inequality) >> true jika array a dan array b key-value tidak sama
    $a !== $b (array identity) >> true jika $a dan $b tidak identik
     -->
<?php
echo '<h1>'."Operator Array".'</h1> <br> <p>' . PHP_EOL.PHP_EOL;

    $a = array("a" => "Adek", "b" => "Krist", "c" => "Tiyanto");
    $b = array("a" => "a", "b" => "b", "c" => "c");
    $c = array("a" => "1", "b" => "3", "c" => "4", "d" => "3");

    echo "a + b : ";
    var_dump($b + $a); // hasilnya array("a" => "a", "b" => "b", "c" => "c")
    echo "<br/>";
    var_dump($a + $b); // hasilnya array("a" => "a", "b" => "b", "c" => "c")
    echo "<br/>";
    echo "a + c : ";
    var_dump($a + $c); // hasilnya array("a" => "a", "b" => "b", "c" => "c", "d" => "3")
    echo "<br/>";

    echo "a == b : ";
    var_dump($a == $b); // hasilnya true
    echo "a == c : ";
    var_dump($a == $c); // hasilnya false
    echo "<br/>";

    echo "a === b : ";
    var_dump($a === $b); // hasilnya true
    echo "a === c : ";
    var_dump($a === $c); // hasilnya false
    echo "<br/>";

    echo "a != b : ";
    var_dump($a != $b); // hasilnya false
    echo "a != c : ";
    var_dump($a != $c); // hasilnya true
    echo "<br/>";

    echo "a <> b : ";
    var_dump($a <> $b); // hasilnya false
    echo "a <> c : ";
    var_dump($a <> $c); // hasilnya true
    echo "<br/>";

    echo "a !== b : ";
    var_dump($a !== $b); // hasilnya false
    echo "a !== c : ";
    var_dump($a !== $c); // hasilnya true
    echo "<br/>";