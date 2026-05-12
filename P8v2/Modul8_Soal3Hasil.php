<?php
if(isset($_POST['kirim'])) {
    $nilai = $_POST['input'];
    if($nilai > 50){
        echo "Sukses";
    } else {
        echo "Gagal";
    }
}
?>