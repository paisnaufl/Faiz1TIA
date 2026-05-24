<?php

require_once __DIR__ . '/../../config/koneksi.php';
require_once __DIR__ . '/../models/BeritaModel.php';

class BeritaController{
    private $model;
    public function __construct($conn){
        $this->model = new BeritaModel($conn);
    }
    public function index(){
        $data = $this->model->getAll();
        include 'app/views/berita/index.php';
    }

    public function tambah(){
        include 'app/views/berita/tambah.php';
    }

    public function simpan(){
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        $tanggal = $_POST['tanggal'];
        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];

        move_uploaded_file($tmp, 'public/uploads/' . $foto);

        $this->model->insert($judul, $deskripsi, $tanggal, $foto);
        header("Location:/Faiz1TIA/p10/index.php");
    }
}