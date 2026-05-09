<?php
$hari = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
$hari[0] = "Senin";
$hari[1] = "Selasa";
$hari[2] = "Rabu";
$hari[3] = "Kamis";
$hari[4] = "Jumat";
$hari[5] = "Sabtu";
$hari[6] = "Minggu";
for($i = 0; $i < count($hari); $i++){
    echo $hari[$i] . "<br>";
};
?>