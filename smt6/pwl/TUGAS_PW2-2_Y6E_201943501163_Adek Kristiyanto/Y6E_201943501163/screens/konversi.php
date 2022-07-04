<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/style.css">
    <title>Konversi Nilai</title>
</head>
<style>
    .bordered {
        border: 5px solid #0A95FF;
        border-radius: 5px;
        left: 40px;
        height: 296px;
        margin-left: 16px;
        padding: 16px;
    }
</style>

<body>
    <h1 style="text-align:center;">Konversi Nilai</h1>
    <div class="flex-container" style="justify-content: flex-center; flex-wrap:nowrap;">
        <div class="bordered">
            <h3>ATURAN</h3>
            <p> Nilai >= 85 and nilai <=100=A</p>
                    <p>Nilai >= 70 and nilai <=84=B</p>
                            <p>Nilai >= 60 and nilai < 70=C</p>
                                    <p>Nilai >= 50 and nilai < 60=D</p>
                                            <p>Nilai < 50=E</p>
        </div>
        <div class="bordered" style="margin-left:16px">
            <div>
                <h3>KONVERSI</h3>
                <?php echo "<form action=\"$indexPathKonversi\"  method=\"POST\">" ?>
                <label for="nilai">Nilai</label>
                <input type="number" name="nilai" placeholder="Masukkan Nilai">
                <input type="submit" name="submit" value="Konversi">
                </form>
            </div>
            <div style="margin-top:16px">
                <h2>Result</h2>
                <p style="font-size:80px">
                    <?php
                    include_once("./postedData.php");

                    echo $dataKonversi
                    ?>
                </p>
            </div>
        </div>
    </div>

</body>

</html>