<?php
require_once __DIR__ . '/config/koneksi.php';
require_once 'app/controllers/BeritaController.php';
require_once 'app/controllers/UserController.php';

$controller = new BeritaController($conn);
$controllerUser = new UserController($conn);

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
        $controllerUser->user();
        break;
    case 'simpanUser':
        $controllerUser->simpanUser();
        break;
    case 'editUser':
        $controllerUser->editUser();
        break;
    case 'updateUser':
        $controllerUser->updateUser();
        break;
    case 'hapusUser':
        $controllerUser->hapusUser();
        break;
    default:
        $controller->index();   
        break;
}