<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./bootstrap/css/style.css">
    <link rel="stylesheet" href="./bootstrap/css/headers.css">
    <title>index</title>
</head>

<body>
    <?php
        if(isset($_POST["submit"])){
            include("./postedData.php");
            getDataPost($_GET['file'], $_POST);
        }
        include_once './constants/constant.php';
    ?>
    <main class="d-flex">
        <table width="100%" height="100%">
            <tr>
                <th rowspan="3" width="12%" class="bg-light">
                    <a href="/" class="d-flex pb-3 mb-3 link-dark text-decoration-none border-bottom">
                        <svg class="bi pe-none me-2" width="30" height="24">
                            <use xlink:href="#bootstrap" />
                        </svg>
                        <span class="fs-5 fw-semibold">List Menu</span>
                    </a>
                    <ul>
                        <?php foreach ($menu as $nameMap => $itemMap) :?>
                            <li class="mb-0">
                                <a <?php echo "href=index.php?file=$itemMap&menu=Y"?>
                                class="d-flex pb-3 mb-3 link-dark text-decoration-none border-bottom">
                                    <svg class="bi pe-none me-2" width="16" height="16">
                                        <use xlink:href="#people-circle" />
                                    </svg>
                                    <?php echo "<span class=\"fs-6 fw-semibold\"> $nameMap</span>"?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        <li>
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#grid" />
                            </svg>
                            <button class="btn btn-toggle d-inline-flex rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                                Page
                            </button>
                            <div class="collapse" id="home-collapse">
                                <ul id="nav" class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <?php foreach ($page as $index => $value) : ?>
                                        <li class="mb-0"
                                        <?php
                                            $defaultFile = "1_HelloWorld.php";
                                            $file = $_GET['file'] ?? $defaultFile;
                                        ?>
                                        >
                                            <a class="link-dark d-inline-flex text-decoration-none rounded border-bottom" <?php
                                                                                                            echo "href=index.php?file=", urlencode($value);
                                                                                                            ?>>
                                                <strong class="mb-1">
                                                    <?php
                                                        $title = "Hello World";
                                                        if($title != $ItemMenu[$index]){
                                                            $title = $ItemMenu[$index];
                                                        }
                                                        echo $index+1 . ". " . $ItemMenu[$index];
                                                    ?>
                                                </strong>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </th>
                <th class="centered colorHeaderFooter">
                    <div class="container">
                        <span class="fs-4">
                            <?php
                                echo HEADER
                            ?>
                        </span>
                    </div>
                </th>
            </tr>
            <tr style="height:500px">
                <th>
                    <div>
                        <?php
                        $defaultFile = "biodata.php";
                        $file = $_GET['file'] ?? $defaultFile;
                            if($file == $defaultFile){
                                include "screens/$file";
                            }else{
                                if(isset($_GET['menu'])){
                                    include "screens/$file";
                                }else{
                                    include "screens/filePhp/$file";
                                }
                            }
                        ?>
                    </div>
                </th>
            </tr>
            <tr>
                <th class="centered colorHeaderFooter">
                    <div class="container">
                        <span class="fs-4">
                            <?php
                            echo FOOTER
                            ?>
                        </span>
                    </div>
                </th>
            </tr>
        </table>
    </main>
</body>

</html>