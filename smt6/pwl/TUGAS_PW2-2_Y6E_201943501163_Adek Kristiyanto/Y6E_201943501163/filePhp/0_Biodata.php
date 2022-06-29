<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <title>Biodata</title>
</head>
<body>
    <div class="flex-container" style="justify-content: flex-start; flex-wrap:nowrap;">
        <div style="width:100px"></div>
        <div  style="border: 5px solid #0A95FF;border-radius: 5px;left:40px;height:296px;">
            <img src="<?php echo $foto["path"];?>" alt="photo">
            <p style="font-size:18px"><?php echo $foto["caption"] . " - " . $bio["Kelas"]?></p>
        </div>
        <div style="width:100px"></div>
        <div style="border: 1px solid #0884b9;background-color:white; width: 664px; height: 700px; padding: 16px;">
            <h2>BIODATA</h2>
                <table>
                    <?php 
                        foreach ($bio as $property => $value){
                                echo "<tr>";
                                echo "<td style='font-size:16px'>$property</td>";
                                if($property == "Alamat" || $property == "Hobi"|| $property == "Pekerjaan"){
                                    echo "<td>";
                                    foreach ($value as $key => $val){
                                        echo $key . " : ".$val . "<br>";
                                    }
                                    echo "</td>";
                                }else{
                                    echo "<td>$value</td>";
                                }
                                echo "</tr>";
                        }
                    ?>
                </table>
        </div>
    </div>
</body>
</html>