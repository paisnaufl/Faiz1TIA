<?php
include __DIR__ .'/config/koneksi.php';

$query = mysqli_query($conn, "SELECT * FROM berita");

while ($row = mysqli_fetch_assoc($query)) {
    echo $row['judul'];
    echo "<br>";
}

$jumlah = mysqli_num_rows($query);
echo "Jumlah Berita: " . $jumlah;
