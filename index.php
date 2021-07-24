<?php

// Total Penambahan kasus
$json = file_get_contents("https://data.covid19.go.id/public/api/update.json");
$data = json_decode($json, true);
$penambahan = $data["update"]["penambahan"];
$total = $data["update"]["total"];

// Total Kasus tiap daerah
$kDaerah = file_get_contents("https://data.covid19.go.id/public/api/prov.json");
$jDaerah = json_decode($kDaerah, true);

$daerah = $jDaerah["list_data"];

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!-- CSS login -->
    <link rel="stylesheet" href="css/index.css">

    <title>C19</title>
</head>

<body>
    <!-- Navbar -->
    <div class="container-fluid">
        <div class="row mt-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <!-- <div class="container"> -->
                <span class="navbar-brand mb-0 h1">C19</span>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Statistik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="list.php">Rumah Sakit Rujukan</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Vaksin</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="vaksinasi/calon.php">List Pendaftar Vaksin</a></li>
                                <li><a class="dropdown-item" href="vaksinasi/index.php">Daftar Vaksin</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="dropdown me-5">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Vaksin</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <!-- </div> -->
            </nav>
        </div>
    </div>
    <!-- End of navbar -->

    <!-- Statistik -->
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col">
                <!-- Heading -->
                <div class="h2 text-center">Statistik Covid Indonesia</div>
                <hr>
                <!-- End of heading -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class=" card-body">
                                <h5 class="card-title text-center">Penambahan Kasus Harian</h5>
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-danger">Jumlah Positif : <?= $penambahan["jumlah_positif"]; ?></li>
                                    <li class="list-group-item list-group-item-warning">Jumlah Dirawat : <?= $penambahan["jumlah_dirawat"]; ?></li>
                                    <li class="list-group-item list-group-item-dark">Jumlah Meninggal : <?= $penambahan["jumlah_meninggal"]; ?></li>
                                    <li class="list-group-item list-group-item-success">Jumlah Sembuh : <?= $penambahan["jumlah_sembuh"]; ?></li>
                                    <li class="list-group-item"><i class="fas fa-calendar"></i> Data Tanggal : <?= $penambahan["tanggal"]; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class=" card-body">
                                <h5 class="card-title text-center">Total Kasus</h5>
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-danger">Jumlah Positif : <?= $total["jumlah_positif"]; ?></li>
                                    <li class="list-group-item list-group-item-warning">Jumlah Dirawat : <?= $total["jumlah_dirawat"]; ?></li>
                                    <li class="list-group-item list-group-item-dark">Jumlah Meninggal : <?= $total["jumlah_meninggal"]; ?></li>
                                    <li class="list-group-item list-group-item-success">Jumlah Sembuh : <?= $total["jumlah_sembuh"]; ?></li>
                                    <li class="list-group-item"><i class="fas fa-calendar"></i> Data Tanggal : <?= $penambahan["tanggal"]; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <div class=" card-body">
                                <h5 class="card-title text-center">Total Kasus</h5>
                                <ul class="list-group">
                                    <li class="list-group-item list-group-item-danger">Jumlah Positif : <?= $total["jumlah_positif"]; ?></li>
                                    <li class="list-group-item list-group-item-warning">Jumlah Dirawat : <?= $total["jumlah_dirawat"]; ?></li>
                                    <li class="list-group-item list-group-item-dark">Jumlah Meninggal : <?= $total["jumlah_meninggal"]; ?></li>
                                    <li class="list-group-item list-group-item-success">Jumlah Sembuh : <?= $total["jumlah_sembuh"]; ?></li>
                                    <li class="list-group-item"><i class="fas fa-calendar"></i> Data Tanggal : <?= $penambahan["tanggal"]; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="text-center">Data Tiap Daerah</h2>
                <hr>

                <table class="table text-center table-striped border rounded bg-light">
                    <thead>
                        <tr>
                            <th scope="col">Provinsi</th>
                            <th scope="col">Kasus Positif</th>
                            <th scope="col">Kasus Sembuh</th>
                            <th scope="col">Kasus Meninggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($daerah as $data) : ?>
                            <tr>
                                <td><?= $data["key"]; ?></td>
                                <td><?= $data["jumlah_kasus"]; ?></td>
                                <td><?= $data["jumlah_sembuh"]; ?></td>
                                <td class="text-center"><?= $data["jumlah_meninggal"]; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <!-- End of statistik -->

    <!-- Javascript -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Javascript -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- jS login -->
    <script src="js/index.js"></script>
    <!-- End of javascript -->

</body>

</html>