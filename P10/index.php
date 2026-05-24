<?php
require_once __DIR__ . '/config/koneksi.php';
require_once 'app/controllers/BeritaController.php';

$controller = new BeritaController($conn);

$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : 'index';

switch($aksi){
    default:
        $controller->index();   
        break;

    case 'tambah':
        $controller->tambah();
        break;
    case 'simpan':
        $controller->simpan();
        break;
}