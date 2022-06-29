<?php
// NOTE HEADER
define("HEADER", "ADEK KRISTIYANTO || 201943501163");

// NOTE FOOTER
define("FOOTER", "UNIVERSITAS INDRAPRASTA PGRI");

// NOTE SIDE MENU
define ("NAMEFILE", serialize (array (
    "1_HelloWorld.php"                  ,"2_TipeDataNumber.php"              ,
    "3_TipeDataBoolean.php"             ,"4_TipeDataString.php"              ,
    "5_Variable.php"                    ,"6_Constant.php"                    ,
    "7_DataNull.php"                    ,"8_TipeDataArray.php"               ,
    "9_ArraySebagaiMap.php"             ,"10_OperatorAritmatika.php"         ,
    "11_OperatorPenugasan.php"          ,"12_OperatorPerbandingan.php"       ,
    "13_OperatorLogika.php"             ,"14_IncrementAndDecrement.php"      ,
    "15_OperatorArray.php"              ,"16_ExpressionStatementAndBlock.php",
    "17_ManipulasiString.php"           ,"18_IfStatement.php"                ,
    "19_SwitchStatement.php"            ,"20_TernaryOperator.php"            ,
    "21_NullCoalescingOperator.php"     ,"22_ForLoop.php"                    ,
    "23_WhileLoop.php"                  ,"24_DoWhileLoop.php"                ,
    "25_BreakAndContinue.php"           ,"26_ForEach.php"                    ,
    "23_Whileloop.php"                  ,"24_DoWhileLoop.php"                ,
    "25_BreakAndContinue.php"           ,"26_ForEach.php"                    ,
    "27_GotoOperator.php"               ,"28_Function.php"                   ,
    "29_FuntionParameter.php"           ,"30_TypeDeclarationInFunction.php"  ,
    "31_VariabelLengthParameterList.php","32_FunctionReturnValue.php"        ,
    "33_VariabelFunction.php"           ,"34_AnonymouseFunction.php"         ,
    "35_ArrowFunction.php"              ,"36_CallbackFunction.php"           ,
    "37_RecursiveFuntion.php"           ,"38_ManipulasiString.php"           ,
    "39_ManipulasiArray.php"            ,"40_IsFunction.php"                 ,
    "41_MyFunction.php"                 ,"41_Requireinclude.php"             ,
    "42_VariabelScope.php"              ,"43_Reference.php"
)));

$menu = unserialize (NAMEFILE);

// NOTE ITEM MENU
function getTitle($arr) {
    foreach ($arr as $index => $val) {
        $str = $val;
        if($index < 9){
            $str = substr($str, 2);
        }else{
            $str = substr($str, 3);
        }
        $str = substr($str, 0, -4);
        $str = substr(preg_replace('/(?<!\ )[A-Z]/', ' $0', $str),1); 
        // regex find kapital dan tambah spasi sebelumnya
        $arr[$index] = $str;
    }
    return $arr;
}

$ItemMenu = getTitle($menu);

// NOTE BIODATA
define ("BIODATA", serialize (array (
    "Nama" => "ADEK KRISTIYANTO",
    "Umur" => 24,
    "NPM" => 201943501163,
    "Kelas" => "Y6E",
    "Jurusan" => "Teknik Informatika",
    "Universitas" => "Universitas Indonesia",
    "Alamat" => array(
        "Jalan" => "Jl. Bakung",
        "RT" => "002",
        "RW" => "011",
        "KodePos" => "13760",
        "kelurahan" => "Gedong",
        "Kecamatan" => "Pasar Rebo",
        "Kota" => "Jakarta Timur",
        "Provinsi" => "DKI Jakarta"
    ),
    "Hobi" => array(
        "1" => "NGODING",
        "2" => "NGODING",
        "3" => "Makan Mie"
    ),
    "Motto" => "Cuman kepala yang bisa diandalkan",
    "Pekerjaan" => array(
        "Jabatan" => "Backend Developer",
        "Company" => "PT.NEXT Transformtech Indonesia",
        "Bidang" => "Fin-Tech",
    ),
)));

$bio = unserialize (BIODATA);

// NOTE FOTO
define ("FOTO", serialize (array (
    "path" => "../resources/adek.jpeg",
    "caption" => "Adek Kristiyanto"
)));

$foto = unserialize (FOTO);

echo <<<BATAS
    <svg style="display: none;">
    <symbol id="people-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
    </symbol>
    <symbol id="grid" viewBox="0 0 16 16">
        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
    </symbol>
    </svg>
BATAS;