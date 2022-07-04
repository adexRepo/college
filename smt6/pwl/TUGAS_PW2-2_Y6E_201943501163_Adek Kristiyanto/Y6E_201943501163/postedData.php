<?php

$formBiodata = [
    "nama" => "",
    "umur" => "",
    "gender" => "",
    "hobi" => [],
    "pendidikan" => "",
    "alamat" => "",
];

$dataKonversi = "";

$dataRowColumnTable = [
    "row" => "",
    "column" =>""
];

function getDataPost($trxType, $dataMasuk){
    if($trxType == "form.php"){
        $data["nama"] = $dataMasuk["nama"];
        $data["umur"] = $dataMasuk["umur"];
        $data["gender"] = $dataMasuk["gender"];
        if(count($dataMasuk["hobi"]) != 1) {
            array_shift($dataMasuk["hobi"]);
        }
        $data["hobi"] = $dataMasuk["hobi"];
        $data["pendidikan"] = $dataMasuk["pendidikan"];
        $data["alamat"] = $dataMasuk["alamat"];

        $GLOBALS["formBiodata"] = $data;
    }else if($trxType == "konversi.php"){
        $data = $dataMasuk["nilai"];

        if($data >100){
            $res = "Woii Kebesaran!!";
        }else if($data >= 85 && $data <= 100){
            $res = "A";
        }else if($data >= 70 && $data <= 84){
            $res = "B";
        }else if($data >= 60 && $data < 70){
            $res = "C";
        }else if($data >= 50 && $data <= 60){
            $res = "D";
        }else if($data < 50 && $data >= 0){
            $res = "E";
        }else{
            $res = "Woii Kocak!!";
        }

        $GLOBALS["dataKonversi"] = $res;
    }else if($trxType == "generateTable.php"){
        $data["row"] = $dataMasuk["baris"];
        $data["column"] = $dataMasuk["kolom"];
        
        $GLOBALS["dataRowColumnTable"] = $data;
    }
};

