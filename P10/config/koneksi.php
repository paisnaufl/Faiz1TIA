<?php
$host = "localhost";
$user = "root";
$pass = "";
$bd = "bpw_faiz";

$conn = mysqli_connect($host, $user, $pass, $bd);

if ($conn) {
    echo "Koneksi berhasil";
}else {
    echo "Koneksi gagal";
}

?>
