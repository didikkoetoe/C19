<?php
require "../functions/functions.php";

if (isset($_POST["daftar"])) {
    if (create($_POST) > 0) {
        echo "<script>
        alert('Data berhasil di tambahkan');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal di di tambahkan');
        </script>";
    }
}

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
    <!-- CSS Vaksinasi -->
    <link rel="stylesheet" href="../css/index.css">

    <title>Vaksinasi</title>
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
                            <a class="nav-link" href="../index.php">Statistik</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../list.php">Rumah Sakit Rujukan</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Vaksin</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="calon.php">List Pendaftar Vaksin</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- </div> -->
            </nav>
        </div>
    </div>
    <!-- End of navbar -->


    <div class="container border rounded bg-light mt-3">
        <!-- header -->
        <div class="row">
            <h2 class="text-center mt-3 mb-4">Daftar Vaksi Ke Rumah Sakit Terdekat</h2>
        </div>
        <!-- akhir header -->

        <!-- form -->
        <form action="" class="form mb-3" id="form" method="POST">
            <div class="mb-2">
                <div class="input-group">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                    <input type="text" name="nik" id="nik" autocomplete="off" class="form-control" placeholder="Masukan NIK" required>
                </div>
            </div>
            <div class="mb-2">
                <div class="input-group">
                    <div class="input-group-text"><i class="fas fa-user-circle"></i></div>
                    <input type="text" name="nama" id="nama" autocomplete="off" class="form-control" placeholder="Masukan nama lengkap" required>
                </div>
            </div>
            <div class="mb-2">
                <div class="input-group">
                    <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                    <input type="date" name="birthday" id="birthday" autocomplete="off" class="form-control" required>
                </div>
            </div>
            <div class="mb-2">
                <div class="input-group">
                    <div class="input-group-text"><i class="fas fa-phone"></i></div>
                    <input type="tel" name="nomor" id="nomor" autocomplete="off" class="form-control" placeholder="Masukan nomor handphone / wa" required>
                </div>
            </div>
            <div class="mb-2">
                <div class="input-group">
                    <div class="input-group-text"><i class="fas fa-home"></i></div>
                    <input type="text" name="alamat" id="alamat" autocomplete="off" class="form-control" placeholder="Masukan alamat rumah" required>
                </div>
            </div>
            <div class="mb-2">
                <div class="input-group">
                    <div class="input-group-text"><i class="fas fa-home"></i></div>
                    <input type="number" name="ke" id="ke" autocomplete="off" class="form-control" placeholder="Vaksin ke : " required>
                </div>
            </div>

            <!-- footer -->
            <button type="submit" name="daftar" id="daftar" class="btn btn-primary">Daftar</button>
            <button type="reset" id="reset" class="btn btn-secondary mx-3">Reset</button>
            <a href="../index.php" class="btn btn-danger">Kembali</a>
            <!-- akhir footer -->
        </form>
        <!-- akhir form -->
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