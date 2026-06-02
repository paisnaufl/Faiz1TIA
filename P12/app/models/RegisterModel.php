<?php
require_once 'config/koneksi.php';

class BeritaModel{
    private $conn;
    public function __construct($conn){
        $this->conn = $conn;
    }
    public function getAll(){
        $query = mysqli_query($this->conn, "SELECT * FROM user ORDER BY id_user DESC");
        return $query;
    }
    public function insert($email, $nama_lengkap, $jabatan, $password){
        $query = mysqli_query($this->conn, "INSERT INTO berita (email, nama_lengkap, jabatan, password, foto) VALUES ('$email', '$nama_lengkap', '$jabatan', '$password')");
        return $query;
    }

    // public function getById($id){
    //     $query = mysqli_query($this->conn, "SELECT * FROM berita WHERE id = '$id'");
    //     return mysqli_fetch_assoc($query);
    // }

    // public function update($id, $judul, $deskripsi, $kategori, $tanggal, $foto){
    //     $query = "UPDATE berita SET judul = '$judul', deskripsi = '$deskripsi', kategori = '$kategori', tanggal = '$tanggal',   foto = '$foto'
    //                 WHERE id = '$id'";

    //     return mysqli_query($this->conn,$query);
    // }

    // public function delete($id){
    //     $query = "DELETE FROM berita WHERE id='$id'";
    //     return mysqli_query($this->conn, $query);
    // }
}
