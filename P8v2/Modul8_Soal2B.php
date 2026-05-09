<?php
$x = readline("Masukkan nilai x: ");
$y = readline("Masukkan nilai y: ");
function perkalian(){
    global $x, $y;
    return $x * $y;
}
function pembagian(){
    global $x, $y;
    return $x / $y;
}
function pengurangan(){
    global $x, $y;
    return $x - $y;
}
echo "Hasil Perkalian: " . perkalian() . "<br>";
echo "Hasil Pembagian: " . pembagian() . "<br>";
echo "Hasil Pengurangan: " . pengurangan() . "<br>";
?>