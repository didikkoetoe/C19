<?php
$json = file_get_contents("https://data.covid19.go.id/public/api/update.json");
$data = json_decode($json, true);
$penambahan = $data["update"]["penambahan"];
$total = $data["update"]["total"];



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
                <div class="container-fluid">
                    <span class="navbar-brand mb-0 h1">C19</span>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Statistik</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="vaksinasi/index.php">Vaksinasi</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Edukasi</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Apa itu Covid ?</a></li>
                                    <li><a class="dropdown-item" href="#">Berita Hoax yang beredar</a></li>
                                    <li><a class="dropdown-item" href="#">Cara Mencegah</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <form class="d-flex" id="cari">
                        <input class="form-control me-2 rounded-pill" type="search" placeholder="Cari" aria-label="Search">
                    </form>
                </div>
            </nav>
        </div>
    </div>
    <!-- End of navbar -->

    <!-- Statistik -->
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-md-8">
                <!-- Heading -->
                <div class="h2 text-center">Statistik</div>
                <hr>
                <!-- End of heading -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-3" style="width: 18rem;">
                            <div class="card-body">
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
                        <div class="card mb-3" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Total Kasus</h5>
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
                        <div class="card mb-3" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title text-center">Total Kasus</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 border">
                <!-- <div class="smallStatistic">
                    <ul class="list-group">
                        <li class="list-group-item active" aria-current="true">An active item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                        <li class="list-group-item">A fourth item</li>
                        <li class="list-group-item">And a fifth one</li>
                    </ul>
                </div> -->
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

</html>b