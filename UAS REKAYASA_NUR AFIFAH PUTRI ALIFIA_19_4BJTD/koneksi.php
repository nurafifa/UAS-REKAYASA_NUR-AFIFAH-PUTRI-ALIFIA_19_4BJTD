<?php

$conn = mysqli_connect("localhost", "root", "", "coba_suku");

if (!$conn) {
    echo "Koneksi gagal" . mysqli_connect_error();
}
?>