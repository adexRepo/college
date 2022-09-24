<?php

use Connection\Koneksi;
if (!empty($_POST["submit"])) {

    require_once("./Koneksi.php");
    $connect = Koneksi::getConnection();

    // insert
    $query = $connect->prepare(
        "INSERT INTO 
        table_seleksi(
            kode_seleksi,
            kode_calon_mhs,
            nilai_tkda,
            nilai_matematika,
            nilai_wawancara,
            rata_rata
        )
        VALUES(?, ?, ?, ?, ?, ?)"
    );

    $rata2 = ($_POST["nilaiTkd"] + $_POST["nilaiMtk"]+ $_POST["nilaiWawancara"]) / 3;
    $data = $_POST["kodeSeleksi"];
    $query->execute([
        $data,
        $_POST["kode_calon_mhs"],
        $_POST["nilaiTkd"],
        $_POST["nilaiMtk"],
        $_POST["nilaiWawancara"],
        $rata2,
    ]);

    header("Location: /");
    setcookie("KODE-SELEKSI", $data, time() + (86400 * 30), "/"); // 86400 = 1 day
}else {

    $req = $_COOKIE["KODE-SELEKSI"] ?? '';

    require_once("./Koneksi.php");
    $connect = Koneksi::getConnection();

    $query = $connect->prepare(
        "SELECT * from table_calon_mhs"
    );
    $query->execute();
    $dataDropDown = $query->fetchAll();


    if(!empty($req)){
        $query2 = $connect->prepare(
            "SELECT * from table_seleksi where kode_seleksi = ?"
        );
        $query2->execute([$req]);
        $data = $query2->fetch();
    
        if($data!= null){
            $keterangan = $data['rata_rata'] > 60 ? 'LULUS':'GAGAL';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Soal No 5</title>
</head>

<body style="background-color: #fafafa;">
    <section class="vh-100">
        <div class="row">
        <div class="container py-5 h-100 col">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class=" col-xl-10">
                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                                <h2 class="mb-5"> Pilih Calon Mahasiswa </h2>
                                <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="kodeSeleksi" class="form-control" id="kodeSeleksi" placeholder="Kode Calon Mahasiswa">
                                        <label for="kodeSeleksi">Kode Seleksi</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select name="kode_calon_mhs" id="kode_calon_mhs" class="form-select shadow-sm mb-2 rounded bg-light bg-gradient"  placeholder="Kode Calon Mahasiswa"aria-label="Default select example">
                                            <option selected value="0">Pilih Nama Mahasiswa..</option>
                                            <?php
                                                foreach ($dataDropDown as $keys => $item) {
                                                    echo "<option  value=\"$item[kode_calon_mhs]\">$item[nama_calon_mhs]</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="nilaiTkd" class="form-control" id="nilaiTkd" placeholder="Alamat Mahasiswa">
                                        <label for="nilaiTkd">Nilai Test Kemampuan Dasar</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="number" name="nilaiMtk" class="form-control" id="nilaiMtk" placeholder="No. Tlp Mahasiswa">
                                        <label for="nilaiMtk">Nilai Matematika</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="number" name="nilaiWawancara" class="form-control" id="nilaiWawancara" placeholder="No. Tlp Mahasiswa">
                                        <label for="nilaiWawancara">Nilai Wawancara</label>
                                    </div>
                                    <button name="submit" value="Add" class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
                                    <p>
                                        *if input kode calon mahasiswa already registerd will execute update
                                        else will create new
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-5 h-100 col">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class=" col-xl-10">
                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                                <h2 class="mb-5">Data Hasil Seleksi </h2>
                                <div style="border-radius: 1rem; max-height: 600px; min-height: 550px;">
                                    <div class="form-floating mb-3">
                                        <label for="kodeSeleksi">Kode Seleksi</label>
                                        <input type="number" disabled name="kodeSeleksi" class="form-control" value="<?= $data['kode_seleksi'] ?? ''?>" id="kodeSeleksi" placeholder="No. Tlp Mahasiswa">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <label for="kodeMahasiswa">Kode Mahasiswa</label>
                                        <input type="number" disabled name="kodeMahasiswa" class="form-control" value="<?= $data['kode-mahasiswa']  ?? ''?>" id="kodeMahasiswa" placeholder="No. Tlp Mahasiswa">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <label for="nilaiTkd">Nilai TKDA</label>
                                        <input type="number" disabled name="nilaiTkd" class="form-control" id="nilaiTkd" value="<?= $data['nilai_tkda']  ?? ''?>" placeholder="No. Tlp Mahasiswa">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <label for="nilaiMtk">Nilai Matematika</label>
                                        <input type="number" disabled name="nilaiMtk" class="form-control" id="nilaiMtk" value="<?= $data['nilai_matematika']  ?? ''?>" placeholder="No. Tlp Mahasiswa">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <label for="nilaiWawancara">Nilai Wawancara</label>
                                        <input type="number" disabled name="nilaiWawancara" class="form-control" id="nilaiWawancara" value="<?= $data['nilai_wawancara']  ?? ''?>" placeholder="No. Tlp Mahasiswa">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <label for="rata2">Nilai Rata-Rata</label>
                                        <input type="number" disabled name="rata2" class="form-control" id="rata2" value="<?= $data['rata_rata']  ?? ''?>" placeholder="No. Tlp Mahasiswa">
                                    </div>
                                    <div class="form-floating mb-3">
                                        <label for="keterangan">Keterangan</label>
                                        <input type="number" disabled name="keterangan" class="form-control" value="<?= $keterangan ?? ''?>" id="keterangan" placeholder="No. Tlp Mahasiswa">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>