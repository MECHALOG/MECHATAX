<?php
require 'koneksi.php';
$id = $_POST["id"];
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

$query_sql = "INSERT INTO user (id, username, password, email)
    VALUES ('$id', '$username', '$password', '$email')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: index.html");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($conn);
}