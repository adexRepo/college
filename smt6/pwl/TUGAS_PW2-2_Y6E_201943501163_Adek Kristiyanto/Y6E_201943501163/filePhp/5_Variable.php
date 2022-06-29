<?php
// VARIABLE

// 1. Variabel adalah tempat untuk menyimpan data sehingga
//     bisa digunakan di lain tempat / kode program selanjutnya
// 2. Di PHP variabel biasa menampung berbagai jenis tipe data dan bisa berubah-ubah tipe data
// 3. Untuk membuat variabel kita bisa menggunakan tanda $(dolar) diikuti dengan nama variabelnya
// 4. Penamaan variabel tidak boleh mengandung spasi

// NOTE var_dumb() >> adalah fungsi yang bisa menampilkan tipe data dan isi dari variabel
echo '<h1>'."VARIABLE".'</h1> <br> <p>' . PHP_EOL.PHP_EOL;

$nama = "Kristiyanto";
$umur = 24;
$status = "nanggung";

echo "Nama : $nama\n";echo "<br>";
echo "Umur : $umur\n";echo "<br>";
echo "Status : $status\n";echo "<br>";

echo "<br>";
echo "<br>";
// VARIABLE VARIABLES
// PHP memiliki kemampuan variable variables, yaitu membuat variable dari string value variabel lain
// Walaupun fitur ini ada, tapi fitur ini sangat membingungkan jika digunakan secara luas,
// jadi disarankan untuk tidak menggunakan fitur ini kecuali memang diperlukan,
// Untuk membuat variabel dari value variabel kita bisa menggunakan $$ diikuti dengan nama variabelnya
// contoh :
echo "\nVARIABLES\n";echo "<br>";

$benda = "Pisau";
$$benda = "kursi";
$$$benda = "meja";

echo "Benda : $benda\n";echo "<br>";
echo "Pisau : " . $Pisau . "\n";echo "<br>";
echo "kursi : " . $kursi . "\n";echo "<br>";

// wkwkwkwkwkwkwk maksain banget