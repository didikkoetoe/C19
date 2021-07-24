<?php
// Connect to Database
require "../functions/functions.php";

$lists = read("SELECT * FROM vaksin");


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <!-- CSS login -->
    <link rel="stylesheet" href="../css/list.css">

    <title>List Vaksin</title>
</head>

<body>
    <!-- Navbar -->
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
                                <a class="nav-link" aria-current="page" href="../index.php">Statistik</a>
                            <li class="nav-item  active">
                                <a class="nav-link" href="../list.php">List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Vaksinasi</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Vaksin</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="../vaksinasi/index.php">Daftar Vaksin</a></li>
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
    <!-- End of navbar -->
    <div class="container bg-light border rounded mt-3">
        <div class="row mt-2">
            <h1 class="text-center">Daftar Orang Yang Sudah Vaksin</h1>
        </div>

        <!-- Table -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Aksi</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Nomor Hp</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Vaksin</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($lists as $data) : ?>
                    <?php if ($i > 10) break ?>
                    <tr>
                        <th><?= $i; ?></th>
                        <td>
                            <a class="btn btn-success" href="edit.php?id=<?= $data["id"]; ?>"> Edit</a>
                            <a class="btn btn-danger" href="delete.php?id=<?= $data["id"]; ?>">Hapus</a>
                        </td>
                        <td><?= $data["nik"]; ?></td>
                        <td><?= $data["name"]; ?></td>
                        <td><?= $data["birthday"]; ?></td>
                        <td><?= $data["number"]; ?></td>
                        <td><?= $data["address"]; ?></td>
                        <td><?= $data["ke"]; ?></td>
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