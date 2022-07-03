<?php

$formBiodata = [
    "nama" => "",
    "umur" => "",
    "gender" => "",
    "hobi" => [],
    "pendidikan" => "",
    "alamat" => "",
];

function getDataPost($trxType, $dataMasuk){
    if($trxType == "form.php"){
        $formBiodata["nama"] = $dataMasuk["nama"];
        $formBiodata["umur"] = $dataMasuk["umur"];
        $formBiodata["gender"] = $dataMasuk["gender"];
        if(count($dataMasuk["hobi"]) != 1) {
            array_shift($dataMasuk["hobi"]);
        }
        $formBiodata["hobi"] = $dataMasuk["hobi"];
        $formBiodata["pendidikan"] = $dataMasuk["pendidikan"];
        $formBiodata["alamat"] = $dataMasuk["alamat"];

        return $formBiodata;
    }else if($trxType == "generateTable.php"){

    }else if($trxType == "konversi.php"){

    }
};

