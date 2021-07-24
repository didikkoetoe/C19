<?php
// Connect to db
require "../functions/functions.php";

$id = $_GET["id"];

if (delete($id) > 0) {
    echo "<script>
    alert ('Data berhasil di hapus');
    document.location.href = 'calon.php';
    </script>";
} else {
    echo "<script>
    alert ('Data berhasil di hapus');
    document.location.href = 'calon.php';
    </script>";
}
