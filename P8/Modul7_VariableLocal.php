<?php
$x=5; // global scope
function myTest(){
    $x = "";
    echo $x; // local scope
}
myTest(); // keluaran kosong
?>