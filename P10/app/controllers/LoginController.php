<?php

require_once __DIR__ . '/../../config/koneksi.php';
require_once __DIR__ . '/../models/LoginModel.php';

class LoginController{
    private $model;
    public function __construct($conn){
        $this->model = new LoginModel($conn);
    }

    public function login(){
        include 'app/views/login/login.php';
    }

    public function register(){
        include 'app/views/user/tambahUser.php';
    }

    public function registerUI(){
        include 'app/views/login/register.php';
    }

    public function prosesRegister(){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $jabatan = $_POST['jabatan'];

        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $this->model->register($nama,$email,$password,$jabatan);
        header('Location:?aksi=login');
    }

    public function prosesLogin(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $this->model->getByEmail($email);

        if($user && password_verify($password, $user['password'])){
            $_SESSION['login'] = true;
            $_SESSION['nama'] = $user['nama_lengkap'];
            $_SESSION['jabatan'] = strtolower($user['jabatan']);
            header('Location:index.php');
        } else {
            echo "email atau password salah";
        }
    }

    public function logout(){
        session_destroy();
        header('Location:?aksi=frontend');
    }
}