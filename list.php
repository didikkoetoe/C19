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
    <div class="container border rounded mt-3">
        <div class="row mt-2">
            <h1 class="text-center">List Rumah Sakit Rujukan</h1>
        </div>

        <!-- Table -->
        <table class="table">
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
                    <?php if ($i > 10) break ?>
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