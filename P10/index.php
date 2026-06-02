<?php
require_once __DIR__ . '/config/koneksi.php';
require_once 'app/controllers/BeritaController.php';

$controller = new BeritaController($conn);

$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : 'index';

switch($aksi){
    case 'tambah':
        $controller->tambah();
        break;
    case 'simpan':
        $controller->simpan();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'update':
        $controller->update();
        break;
    case 'hapus':
        $controller->hapus();
        break;
    case 'frontend':
        $controller->frontend();
        break;
    case 'detail':
        $controller->detail();
        break;
    case 'user':
        $controller->user();
        break;
    case 'simpanUser':
        $controller->simpanUser();
        break;
    case 'editUser':
        $controller->editUser();
        break;
    case 'updateUser':
        $controller->updateUser();
        break;
    case 'hapusUser':
        $controller->hapusUser();
        break;
    default:
        $controller->index();   
        break;
}