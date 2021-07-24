<?php

// Connet to database
$conn = mysqli_connect("localhost", "root", "", "hackaton");

function create($post)
{
    global $conn;

    // take value
    $nik = htmlspecialchars($post["nik"]);
    $name = htmlspecialchars($post["name"]);
    $birthday = $post["birthday"];
    $number = htmlspecialchars($post["number"]);
    $address = htmlspecialchars($post["address"]);
    $ke = htmlspecialchars($post["ke"]);

    $query = "INSERT INTO vaksin VALUES (
        '', '$nik', '$name' , '$birthday', '$number', '$address', '$ke')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function read($query)
{
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
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
