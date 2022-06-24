<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <title>index</title>
</head>
<body>
    <?php 
        $array = [
            "1_HelloWorld.php"                   ,"2_TipeDataNumber.php"         ,"3_TipeDataBoolean.php" ,
            "4_TipeDataString.php"              ,"5_Variable.php"               ,"6_Constant.php",
            "7_DataNull.php"                     ,"8_TipeDataArray.php"          ,"9_arraySebagaiMap.php",
            "10_OperatorAritmatika.php"          ,"11_OperatorPenugasan.php"     ,"12_OperatorPerbandingan.php" ,
            "13_OperatorLogika.php"              ,"14_IncrementAndDecrement.php" ,"15_OperatorArray.php" ,
            "16_ExpressionStatementAndBlock.php" ,"17_ManipulasiString.php"      ,"18_IfStatement.php" ,
            "19_SwitchStatement.php"             ,"20_TernaryOperator.php"      ,"21_NullCoalescingOperator.php" ,
            "22_ForLoop.php"                     ,"23_Whileloop.php"            ,"24_DoWhileLoop.php" ,
            "25_BreakAndContinue.php"            ,"26_ForEach.php"
        ];
    ?>
    <table>
        <tr>
            <th colspan="2" class="centered"> ADEK KRISTIYANTO || 201943501163</th>
        </tr>
        <tr style="height:500px">
            <th style="width:10%;">
                <ul>
                    <li>Daftar Isi</li>
                    <?php foreach ($array as $value) : ?>
                        <li>
                        <?php
                            echo "<a href=0_index.php?file=",urlencode($value),">$value</a>";
                        ?>
                        </li>
                    <?php  endforeach; ?>
                </ul>
            </th>
            <th>
                <div>
                    <?php 
                        $defaultFile = "1_HelloWorld.php";
                        $file = $_GET['file'] ?? $defaultFile;
                        if( $file == "" ){
                            $file = $defaultFile;
                        }
                        include "filePhp/$file";
                    ?>
                </div>
            </th>
        </tr>
        <tr>
            <th colspan="2" class="centered">UNIVERSITAS INDRAPRASTA PGRI</th>
        </tr>
    </table>
</body>
</html>