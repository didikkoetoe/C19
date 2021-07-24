<?php
// Connect to API
$hospital = file_get_contents("https://dekontaminasi.com/api/id/covid19/hospitals");
$listHospital = json_decode($hospital, true);

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
    <link rel="stylesheet" href="css/list.css">

    <title>List Rumah Sakit Rujukan</title>
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
                            <a class="nav-link" href="index.php">Statistik</a>
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
                < <!-- </div> -->
            </nav>
        </div>
    </div>
    <!-- End of navbar -->
    <div class="container bg-light border rounded mt-3 mb-3">
        <div class="row mt-2">
            <h1 class="text-center">List Rumah Sakit Rujukan</h1>
        </div>

        <!-- Table -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Rumah Sakit</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Region</th>
                    <th scope="col">Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($listHospital as $hospital) : ?>
                    <?php if ($i > 10) ?>
                    <tr>
                        <th><?= $i; ?></th>
                        <td><?= $hospital["name"]; ?></td>
                        <td><?= $hospital["address"]; ?></td>
                        <td><?= $hospital["region"]; ?></td>
                        <td><?= $hospital["phone"]; ?></td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- End of table -->
    </div>


    <!-- Javascript -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Javascript -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- jS login -->
    <script src=""></script>
    <!-- End of javascript -->

</body>

</html>