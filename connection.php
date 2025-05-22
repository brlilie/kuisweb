<?php

$host = "localhost";
$user = "root";
$password = ""; // <-- Corrected: No space, just empty string
$database = "kuis";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
