<?php
    include("../../postedData.php");

    if(isset($_POST["submit"])){
        $formBiodata["nama"] = $_POST["nama"];
        $formBiodata["umur"] = $_POST["umur"];
        $formBiodata["gender"] = $_POST["gender"];
        if(count($_POST["hobi"]) != 0) {
            array_shift($_POST["hobi"]);
        }
        $formBiodata["hobi"] = $_POST["hobi"];
        $formBiodata["pendidikan"] = $_POST["pendidikan"];
        $formBiodata["alamat"] = $_POST["alamat"];
    }

    echo "<a href=\"../../index.php\"></a>";
?>