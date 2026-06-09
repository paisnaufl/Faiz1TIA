<?php
session_start();
require_once __DIR__ . '/config/koneksi.php';
require_once 'app/controllers/BeritaController.php';
require_once 'app/controllers/UserController.php';
require_once 'app/controllers/LoginController.php';

$controller = new BeritaController($conn);
$controllerUser = new UserController($conn);
$controllerLogin = new LoginController($conn);

$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : 'frontend';

$halaman_wajib_login = ['index', 'tambah', 'simpan', 'edit', 'update', 'hapus', 'user', 'tambah', 'editUser', 'updateUser', 'hapusUser', 'edit_user', 'update_user', 'hapus_user', 'register', 'prosesRegister'];
if(in_array($aksi, $halaman_wajib_login) && !isset($_SESSION['login'])){
    header('Location: ?aksi=login');
    exit;
}


if(isset($_SESSION['login'])){
    $role = $_SESSION['jabatan'];
    $halaman_khusus_admin = [
        'register', 'prosesRegister', 'user', 'editUser', 'updateUser', 'hapusUser'
    ];

    if(in_array($aksi, $halaman_khusus_admin) && $role !== 'admin'){
        echo "<script>
            alert('Akses ditolak! Jabatan Anda ($role) Tidak diizinkan mengakses halaman ini.');
            window.location='?aksi=dashboard';
            </script>";
        exit;
    }
}

$halaman_auth = ['$login', '$prosesLogin'];
if(in_array($aksi, $halaman_auth) && isset($_SESSION['login']) && $aksi != 'logout'){
    header('Location: index.php');
    exit;
}

switch($aksi){
    case 'dashboard':
        $controller->index();
        break;
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
    case 'login':
        $controllerLogin->login();
        break;
    case 'register':
        $controllerLogin->register();
        break;
    case 'registerUI':
        $controllerLogin->registerUI();
        break;
    case 'prosesLogin':
        $controllerLogin->prosesLogin();
        break;
    case 'prosesRegister':
        $controllerLogin->prosesRegister();
        break;
    case 'logout':
        $controllerLogin->logout();
        break;
    default:
        $controller->frontend();   
        break;
}