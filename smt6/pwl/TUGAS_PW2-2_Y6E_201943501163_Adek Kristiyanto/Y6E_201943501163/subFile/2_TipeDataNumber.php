<!-- TIPE DATA NUMBER
 1. Di PHP terdapat 2 tipe data number
     (int) Bilangan bulat decimal (base 10), HexsaDesimal (base 16) dan Binary (base 2)
     (float) Bilangan desimal (base 10)
 2. Di PHP kita bisa menambahkan _(garisbawah) di angka, ini hanya agar mudah dibaca,
     saat dijalankan, _(garis bawah) tersebut akan di ignore / diabaikan
 3. Untuk angka negatif, kita bisa menggunakan tanda -(minus) di depan angka -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // NOTE var_dumb() >> adalah fungsi yang bisa menampilkan tipe data dan isi dari variabel
    // NOTE \n >> escape sequence / kode yang bisa digunakan untuk membuat baris baru

    // Integer
    echo "INTEGER\n";
    echo "<br/>";
    
    echo "Decimal : ";
    var_dump(1234); // diconvert ke integer
    echo "<br/>";

    echo "Octal : ";
    var_dump(0755); // diconvert ke integer
    echo "<br/>";


    echo "Hexadecimal : ";
    var_dump(0xABCD); // diconvert ke integer
    echo "<br/>";


    echo "Binary : ";
    var_dump(0b101010); // diconvert ke integer
    echo "<br/>";


    echo "Underscore in number : ";
    var_dump(1_234_435); // ingat underscore ini tujuannya agar mudah dibaca saja
    echo "<br/>";    echo "<br/>";


    // Floating Point
    echo "\nFLOATING POINT\n";
    echo "float : ";
    var_dump(1.234); // original float
    echo "<br/>";


    echo "Floating Point dgn E notation Plus (1.2 x 1000) : ";
    var_dump(1.2e3); // floating point dgn E notation Plus
    echo "<br/>";


    echo "Floating Point dgn E notation Minus (1.2 x 1000) : ";
    var_dump(1.2e-3); // floating point dgn E notation Minus
    echo "<br/>";


    echo "Underscore di floating point : ";
    var_dump(1_2.e3); // ingat underscore ini tujuannya agar mudah dibaca saja
    echo "<br/>";    echo "<br/>";


    // Integer Overflow
    // 1. Secara default, kapasitas integer di PHP ada batasnya, 2147483647 untuk sistem 32 bit,
    //    9223372036854775807 untuk sistem 64 bit
    // 2. Jika kita membuat number integer yang melebihi nilai tersebut, maka secara otomatis tipe Numbernya
    //    akan menjadi float pint
    echo "\nINTEGER OVERFLOW\n";
    echo "Integer Overflow 32 bit: ";
    var_dump(2147483648); // integer overflow 32 bit 
    echo "<br/>";


    echo "Integer Overflow 64 bit: ";
    var_dump(9223372036854775807); // integer overflow 64 bit >> berubah float
    ?>
</body>

</html>