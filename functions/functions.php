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
