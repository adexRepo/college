<!-- // TIPE DATA STRING

1. Tipe data string adalah tipe data representasi dari teks
2. String bisa mengandung kosong atau banyak karakter
3. ada banyak cara untuk membuat string -->

<?php
// NOTE \n >> escape sequence / kode yang bisa digunakan untuk membuat baris baru

// SINGLE QUOTES
// tipe data string dengan tanda kutip tunggal
echo 'SINGLE QUOTES : Hello World';    
echo "<br/>";
echo "<br/>";


// DOUBLE QUOTES
// tipe data string dengan tanda kutip ganda
// kelebihannya adalah bisa mengandung karakter khusus
// yaitu menggunakan escape sequence (\n) atau (\t) untuk tab atau \" untuk double quote dalam string
echo "\nDOUBLE QUOTES : Hello World";
echo "\n\t    Hello World";
echo "\nAdek \"Kristiyanto\"";
echo "<br/>";
echo "<br/>";


// MULTI LINE STRING
// Kita bisa menambahkan string yang lebih dari satu baris, 
// kita bisa menggunakan \n, tapi bakal ribet
// PHP memiliki fitur yang lebih baik, yaitu bernama Heredoc dan Nowdoc
// Heredoc >> membuat String panjang, tidak perlu manual pakai \n atau \t dll secara manual
// Nowdoc >> mirip heredoc, tapi dia gapunya skill parsing seperti heredoc atau double qoute
// buka materi manipulasi string untuk lebih detailnya mengenai parshing
echo "\n\nMULTI LINE STRING\n";echo "<br/>";
echo "Heredoc : ";
echo <<<BATAS
lopirsum :
    lopirsum :
        lopirsum : dkjo wjopaihdsaiohd
    |ljhdsa|
    "01ds"a
sdasdq

BATAS;
echo "<br/>";

echo "\nnowdoc : ";
echo <<<'BATAS'
lopirsum :
    lopirsum :
        lopirsum : dkjo wjopaihdsaiohd
sdasdq
BATAS;