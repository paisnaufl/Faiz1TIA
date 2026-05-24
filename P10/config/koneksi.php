<?php
$host = "localhost";
$user = "root";
$pass = "";
$bd = "bpw";

$conn = mysqli_connect($host, $user, $pass, $bd, 3307);

if ($conn) {
    echo "Koneksi berhasil";
}else {
    echo "Koneksi gagal";
}

?>
