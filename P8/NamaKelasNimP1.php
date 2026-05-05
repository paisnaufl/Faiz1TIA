<?php
$nama = "Faiz Naufal Akbar"; 
$nim = "2555301061";
$kelas = "1 TI A";
$umur = 19;
$kalimat = "Saya ganteng kata mamah frfr";

echo "Nama : ".$nama."<br>";
echo "NIM : ".$nim."<br>";
echo "Kelas : ".$kelas."<br>";
echo "Umur : ".$umur." Tahun"."<br>";
echo " __ Manipulasi String"."<br>";
print strtoupper($kalimat)."<br>";
print strtolower($kalimat)."<br>";
print ucfirst($kalimat)."<br>";
print ucwords($kalimat)."<br>";
$umur +=5;
echo "5 Tahun Lagi umur saya ".$umur." Tahun";
?>