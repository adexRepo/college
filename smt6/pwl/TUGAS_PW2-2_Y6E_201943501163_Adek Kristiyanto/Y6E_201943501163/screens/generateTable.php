<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/style.css">
    <title>Generate Table</title>
</head>
    <style>
        table, tr, td{
            border: 0px;
        }

        .bordered{
            border: 1px solid #080808;
        }
    </style>
<body>
    <?php
        include_once("./postedData.php");
    ?>
    <h1 style="text-align:center;">Generate Table</h1>
        <div class="flex-container">
            <div style="width:300px; height:180px; border: 1px solid #080808">
                <?php echo "<form action=\"$indexPathGenerate\"  method=\"POST\">";
                    $row = $dataRowColumnTable["row"];
                    $column = $dataRowColumnTable["column"];
                ?>
                    <table>
                            <p>Ukuran Untuk Membuat Tabel</p>
                        <tr>
                            <td>Baris</td>
                            <td>:</td>
                            <td><input type="number" name="baris" <?php echo "value=\"$row\"" ?> placeholder="Masukkan Banyak Baris"></td>
                        </tr>
                        <tr>
                            <td>Kolom</td>
                            <td>:</td>
                            <td><input type="number" name="kolom" <?php echo "value=\"$column\"" ?> placeholder="Masukkan Banyak Kolom"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" name="submit" value="Buat"></td>
                        </tr>
                        <tr>
                    </table>
            </div>
            <div style="width:50px"></div>
            <div style="border: 1px solid #080808;padding: 16px;">
                <h1>Hasil</h1>
                <div>
                    <table class="bordered">
                        <?php for($i = 0; $i < $row; $i++):?>
                            <tr class="bordered">
                                <?php for($j = 0; $j < $column; $j++){
                                    echo "<td class=\"bordered\"> baris ".$i+1 ." kolom ".$j+1 ."</td>";
                                } ?>
                            </tr>
                        <?php endfor; ?>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>