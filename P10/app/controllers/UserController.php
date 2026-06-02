<?php

require_once __DIR__ . '/../../config/koneksi.php';
require_once __DIR__ . '/../models/UserModel.php';

class UserController{
    private $model;
    public function __construct($conn){
        $this->model = new UserModel($conn);
    }
    public function user(){
        $user = $this->model->getAllUser();
        include 'app/views/user/user.php';
    }

    public function simpanUser(){
        $email = $_POST['email'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $jabatan = $_POST['jabatan'];
        $password = $_POST['password'];

        $this->model->insertUser($email, $nama_lengkap, $jabatan, $password);
        header("Location:/Faiz1TIA/p10/index.php?aksi=user");
    }

    public function editUser(){
        $id =  $_GET['id_user'];
        $user = $this->model->getByIdUser($id);
        include 'app/views/user/editUser.php';
    }

    public function updateUser(){
        $id = $_POST['id_user'];
        $email = $_POST['email'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $jabatan = $_POST['jabatan'];
        $password = $_POST['password'];

        $this->model->updateUser($id, $email, $nama_lengkap, $jabatan, $password);
        header('Location:index.php?aksi=user');
    }

    public function hapusUser(){
        $id = $_GET['id_user'];
        $this->model->deleteUser($id);
        header('Location:index.php?aksi=user');
    }
}