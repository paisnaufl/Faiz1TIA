<?php
$x=6; // global scope
$y=10; // global scope
function Testing() {
    global $x,$y;
    $y=$x+$y;
}
Testing();
echo $y; // keluaran 16
?>