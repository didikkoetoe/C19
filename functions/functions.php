<?php

// Connet to database
$conn = mysqli_connect("localhost", "root", "", "hackaton");

function create($post)
{
    global $conn;

    // take value
    $nik = htmlspecialchars($post["nik"]);
    $nama = htmlspecialchars($post["nama"]);
    $birthday = $post["birthday"];
    $nomor = htmlspecialchars($post["nomor"]);
    $alamat = htmlspecialchars($post["alamat"]);
    $ke = htmlspecialchars($post["ke"]);

    $query = "INSERT INTO vaksin VALUES (
        '', '$nik', '$nama' , '$birthday', '$nomor', '$alamat', '$ke')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function read($query)
{
    global $conn;

    $rows = [];
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function delete($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM vaksin WHERE id=$id");

    return mysqli_affected_rows($conn);
}

function update($post)
{
    global $conn;

    $id = $post["id"];
    $nik = htmlspecialchars($post["nik"]);
    $nama = htmlspecialchars($post["nama"]);
    $birthday = $post["birthday"];
    $nomor = htmlspecialchars($post["nomor"]);
    $alamat = htmlspecialchars($post["alamat"]);
    $ke = htmlspecialchars($post["ke"]);

    $query = "UPDATE vaksin SET
            nik = '$nik',
            nama = '$nama',
            birthday = '$birthday',
            nomor = '$nomor',
            alamat = '$alamat',
            ke = '$ke'
        WHERE id=$id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function search($keyword)
{

    $result = "SELECT * FROM vaksin WHERE
                nik LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR
                birthday LIKE '%$keyword%' OR
                alamat LIKE '$keyword' OR
                nomor LIKE '%$keyword%' OR
                vaksin LIKE '%$keyword%'";

    return read($result);
}
