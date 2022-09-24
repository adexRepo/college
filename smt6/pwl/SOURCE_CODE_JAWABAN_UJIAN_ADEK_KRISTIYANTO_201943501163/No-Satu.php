<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Soal No 1</title>
</head>

<body>
    <?php
        $name = "Adek Kristiyanto";
        $npm = "201943501163";
        $column = substr($npm, -1);
        $row = substr($npm, 10, 1);
    ?>
    <section class="vh-100" style="background-color: #fafafa;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class=" col-xl-10">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <h2 class="mb-5"> <?= $name ?> </h2>
                            <h3 class="mb-5"> <?= $npm ?> </h3>
                            <table class="table table-hover table-striped table-bordered">
                                <thead>
                                    <th colspan=3 class="bg-light">
                                        <?= 'ROW : ' . $row . ' COLUMN : ' . $column ?>
                                    </th>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < $row; $i++) : ?>
                                        <tr>
                                            <?php for ($j = 0; $j < $column; $j++) {
                                                if ($j % 2 == 0) {
                                                    echo "<td class=\"bg-info\" > NPM = $npm - NAMA = $name</td>";
                                                } else {
                                                    echo "<td class=\"bg-warning\" > NPM = $npm - NAMA = $name</td>";
                                                }
                                            } ?>
                                        </tr>
                                    <?php endfor; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>