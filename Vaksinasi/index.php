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
    <!-- CSS login -->
    <link rel="stylesheet" href="../css/vaksinasi.css">

    <title>Vaksinasi</title>
</head>

<body>
    <div class="container">
        <!-- header -->
        <h2 class="text-center">Pendaftaran Vaksin Ke Puskesmas Terdekat</h2>
        <hr>
        <!-- akhir header -->

        <!-- form -->
        <form action="" class="form" id="form" method="POST">
            <div class="mb-2">
                <div class="input-group">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                    <input type="text" name="nik" id="nik" autocomplete="off" class="form-control" placeholder="Masukan NIK" required>
                </div>
            </div>
            <div class="mb-2">
                <div class="input-group">
                    <div class="input-group-text"><i class="fas fa-user-circle"></i></div>
                    <input type="text" name="name" id="name" autocomplete="off" class="form-control" placeholder="Masukan nama lengkap" required>
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
                    <input type="tel" name="number" id="number" autocomplete="off" class="form-control" placeholder="Masukan nomor handphone / wa" required>
                </div>
            </div>
            <div class="mb-2">
                <div class="input-group">
                    <div class="input-group-text"><i class="fas fa-home"></i></div>
                    <input type="text" name="address" id="address" autocomplete="off" class="form-control" placeholder="Masukan alamat rumah" required>
                </div>
            </div>
            <div class="mb-2">
                <div class="input-group">
                    <div class="input-group-text"><i class="fas fa-home"></i></div>
                    <input type="number" name="ke" id="ke" autocomplete="off" class="form-control" placeholder="Vaksin ke : " required>
                </div>
            </div>

            <!-- footer -->
            <button type="submit" name="daftar" id="daftar" class="btn btn-primary float-end">Daftar</button>
            <button type="reset" id="reset" class="btn btn-secondary float-end mx-3">Reset</button>
            <a href="../index.php" class="btn btn-danger float-start">Kembali</a>
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