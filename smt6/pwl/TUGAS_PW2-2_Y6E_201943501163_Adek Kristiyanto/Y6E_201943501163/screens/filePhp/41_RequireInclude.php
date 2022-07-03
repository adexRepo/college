<!-- // Require and Include

1. Saat membuat aplikasi, ada baiknya tidak dibuat dalam satu file
2. Lebih baik dipisah ke beberapa file agar kode program tidak terlalu bertumpuk di satu file
3. PHP memiliki function require dan include yang bisa kita gunakan untuk mengambil file php lain
4. require > artinya wajib ada file tersebut jika tidak maka program akan dihentikan
5. include > akan error di bagian dimana dia di panggil, program tidak dihentikan 
 -->

<?php

echo '<h1>'."Manipulasi Array".'</h1> <br> <p>' . PHP_EOL.PHP_EOL;

// NOTE INCLUDE
//include "./41_MyFunctiosn.php"; //path salah
// include "./41_MyFunction.php"; // path benar

// echo PHP_EOL."MALES BANGET";
// echo saySay("Rizki", "Saputra");

// jika path nya salah ngasih warning atau ngasih tau kalo function saySay tidak ada


// NOTE Require
require "./41_MyFssunction.php";
// include "./41_MyFunction.php";

echo PHP_EOL."MALES BANGET";
echo saySay("Rizki", "Saputra");

// jika path nya salah, maka program langsung dipaksa dihentikan



// require_once dan include_once
// gaboleh masukin dua file yang sama di satu file bakal error
// require_once / include_once > untuk me load 1 file saja meskipun file yg dipanggil 2x
