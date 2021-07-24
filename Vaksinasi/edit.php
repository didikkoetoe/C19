<?php
require "../functions/functions.php";
$id = $_GET["id"];
$results = mysqli_query($conn, "SELECT * FROM vaksin WHERE id=$id");
$result = mysqli_fetch_assoc($results);

if (isset($_POST["edit"])) {
    if (update($_POST) > 0) {
        echo "<script>
            alert ('Data berhasil di edit');
            document.location.href = 'calon.php';
            </script>";
    } else {
        echo "<script>
            alert ('Data gagal di edit');
            document.location.href = 'calon.php';
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/index.css">
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
            <h2 class="text-center mt-3 mb-4">Edit Data</h2>
        </div>
        <!-- akhir header -->

        <!-- form -->
        <form action="" class="form mb-3" id="form" method="POST">
            <input type="hidden" name="id" value="<?= $result["id"]; ?>">
            <div class="mb-2">
                <div class="input-group">
                    <div class="input-group-text"><i class="fas fa-user"></i></div>
                    <input type="text" name="nik" id="nik" autocomplete="off" class="form-control" placeholder="Masukan NIK" required value="<?= $result["nik"]; ?>">
                </div>
            </div>
            <div class="mb-2">
                <div class="input-group">
                    <div class="input-group-text"><i class="fas fa-user-circle"></i></div>
                    <input type="text" name="nama" id="nama" autocomplete="off" class="form-control" placeholder="Masukan nama lengkap" required value="<?= $result["nama"]; ?>">
                </div>
            </div>
            <div class=" mb-2">
                <div class="input-group">
                    <div class="input-group-text"><i class="fas fa-calendar"></i></div>
                    <input type="date" name="birthday" id="birthday" autocomplete="off" class="form-control" required value="<?= $result["birthday"]; ?>">
                </div>
            </div>
            <div class=" mb-2">
                <div class="input-group">
                    <div class="input-group-text"><i class="fas fa-phone"></i></div>
                    <input type="tel" name="nomor" id="nomor" autocomplete="off" class="form-control" placeholder="Masukan nomor handphone / wa" required value="<?= $result["nomor"]; ?>">
                </div>
            </div>
            <div class="mb-2">
                <div class="input-group">
                    <div class="input-group-text"><i class="fas fa-home"></i></div>
                    <input type="text" name="alamat" id="alamat" autocomplete="off" class="form-control" placeholder="Masukan alamat rumah" required value="<?= $result["alamat"]; ?>">
                </div>
            </div>
            <div class=" mb-2">
                <div class="input-group">
                    <div class="input-group-text"><i class="fas fa-home"></i></div>
                    <input type="number" name="ke" id="ke" autocomplete="off" class="form-control" placeholder="Vaksin ke : " required value="<?= $result["ke"]; ?>">
                </div>
            </div>

            <!-- footer -->
            <button type="submit" name="edit" id="edit" class="btn btn-primary">Edit</button>
            <button type="reset" id="reset" class="btn btn-secondary mx-3">Reset</button>
            <a href="calon.php" class="btn btn-danger">Kembali</a>
            <!-- akhir footer -->
        </form>
        <!-- akhir form -->
    </div>
</body>

</html>