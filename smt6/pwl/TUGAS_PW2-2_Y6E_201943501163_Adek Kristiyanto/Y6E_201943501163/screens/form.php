<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/style.css">
    <title>Form</title>
</head>
    <style>
        table, tr, td{
            border: 0px;
        }
        .form-div {
            display: flex;
            flex-wrap: nowrap;
            justify-content: start;
            padding: 16px;
            margin:16px;
            width:400px;
            border: 1px solid #080808;
            background-color:whitesmoke;
        }
    </style>
<body>
    <h1 style="text-align:center;">FORM BIODATA</h1>
    <div class="flex-container">
        <div class="form-div" style="background-color:whitesmoke">
        <?php echo "<form action=\"$indexPathForm\"  method=\"POST\">"?>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" placeholder="Nama"></td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>:</td>
                        <td><input type="number" name="umur" placeholder="Umur"></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>:</td>
                        <td>
                            <input type="radio" style="display:none" checked name="gender" value="">
                            <input type="radio" name="gender" value="Pria"> Pria<br>
                            <input type="radio" name="gender" value="Wanita"> Wanita<br>
                            <input type="radio" name="gender" value="Robot"> Robot<br>
                        </td>
                    </tr>
                    <tr>
                        <td>Hobi</td>
                        <td>:</td>
                        <td>
                                <input type="checkbox" style="display:none" checked value="" name="hobi[]">
                                <input type="checkbox" name="hobi[]" value="Travelling"> Travelling<br>
                                <input type="checkbox" name="hobi[]" value="Shopping"> Shopping<br>
                                <input type="checkbox" name="hobi[]" value="Ngoding"> Ngoding
                        </td>
                    </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>:</td>
                        <td>
                            <select name="pendidikan">
                                <option value="">Choose..</option>
                                <option value="Sekolah Dasar">SD</option>
                                <option value="Sekolah Menegah Pertama">SMP</option>
                                <option value="Sekolah Menegah Atas">SMA</option>
                                <option value="Universitas">Universitas</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>
                            <textarea name="alamat" placeholder="Address" style="height:200px"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="submit" value="submit">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="form-div" style="background-color:whitesmoke">
            <?php
                include_once("./postedData.php");
            ?>
            <form>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo $formBiodata["nama"]?></td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>:</td>
                        <td><?php echo $formBiodata["umur"]?></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>:</td>
                        <td><?php echo $formBiodata["gender"]?></td>
                    </tr>
                    <tr>
                        <td>Hobi</td>
                        <td>:</td>
                        <td><?php echo implode(", ",$formBiodata["hobi"])?></td>
                    </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>:</td>
                        <td><?php echo $formBiodata["pendidikan"]?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?php echo $formBiodata["alamat"]?></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>