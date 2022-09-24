<?php

use Action\ActionTableCalonMahasiswa;
use Connection\Koneksi;
if (!empty($_POST["submit"]) || !empty($_POST["delete"])) {

    require_once("Action-Table-Calon-Mahasiswa.php");
    $user = new ActionTableCalonMahasiswa();
    header("Location: /");
}else {
    require_once("./Koneksi.php");
    $connect = Koneksi::getConnection();
    $query = $connect->prepare(
        "SELECT * from table_calon_mhs"
    );

    $query->execute();
    $data = $query->fetchAll();
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
    <title>Soal No 3</title>
</head>
<body style="background-color: #fafafa;">
    <section class="vh-100">
        <div class="row">
            <div class="container py-5 h-100 col">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class=" col-xl-10">
                        <div class="card shadow-2-strong" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                                <h2 class="mb-5">Show All Data registered in Table Calon Mahasiswa </h2>
                                <div style="border-radius: 1rem; overflow-y: scroll; max-height: 500px; min-height: 490px;">
                                    <table class="table table-striped table-hover table-bordered align-middle">
                                        <thead>
                                            <tr>
                                                <th class="table-primary" scope="col">No</th>
                                                <th class="table-primary" scope="col">Kode Calon Mahasiswa</th>
                                                <th class="table-primary" scope="col">Nama Calon Mahasiswa</th>
                                                <th class="table-primary" scope="col">Alamat</th>
                                                <th class="table-primary" scope="col">Telp</th>
                                                <th class="table-primary" scope="col">Command</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (!empty($data)) {
                                                foreach ($data as $index => $item) {
                                            ?>
                                                    <tr>
                                                        <th scope="row"><?= $index + 1 ?></th>
                                                        <td><?= $item['kode_calon_mhs'] ?></td>
                                                        <td><?= $item['nama_calon_mhs'] ?></td>
                                                        <td><?= $item['alamat'] ?></td>
                                                        <td><?= $item['telp'] ?></td>
                                                        <td>
                                                            <form method="post">
                                                                <button name="delete" value="<?= $item['kode_calon_mhs']?>" class="w-100 btn btn-md btn-danger" type="submit">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
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
                                <h2 class="mb-5"> Create, Update and Delete, Calon Mahasiswa </h2>
                                <form class="p-4 p-md-5 border rounded-3 bg-light" method="post" action="">
                                    <div class="form-floating mb-3">
                                        <input type="text" name="kode" class="form-control" id="kode" placeholder="Kode Calon Mahasiswa">
                                        <label for="kode">Kode Calon Mahasiswa</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama Calon Mahasiswa">
                                        <label for="name">Nama Calon Mahasiswa</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat Mahasiswa">
                                        <label for="alamat">Alamat Mahasiswa</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="number" name="telp" class="form-control" id="telp" placeholder="No. Tlp Mahasiswa">
                                        <label for="telp">No. Tlp Mahasiswa</label>
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
        </div>
    </section>
</body>
</html>