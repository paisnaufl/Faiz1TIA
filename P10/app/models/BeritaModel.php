<?php
require_once 'config/koneksi.php';

class BeritaModel{
    private $conn;
    public function __construct($conn){
        $this->conn = $conn;
    }
    public function getAll(){
        $query = mysqli_query($this->conn, "SELECT * FROM berita ORDER BY id DESC");
        return $query;
    }
    public function insert($judul, $deskripsi, $kategori, $tanggal, $foto){
        $query = mysqli_query($this->conn, "INSERT INTO berita (judul, deskripsi, kategori, tanggal, foto) VALUES ('$judul', '$deskripsi', '$kategori', '$tanggal', '$foto')");
        return $query;
    }

    public function getById($id){
        $query = mysqli_query($this->conn, "SELECT * FROM berita WHERE id = '$id'");
        return mysqli_fetch_assoc($query);
    }

    public function update($id, $judul, $deskripsi, $kategori, $tanggal, $foto){
        $query = "UPDATE berita SET judul = '$judul', deskripsi = '$deskripsi', kategori = '$kategori', tanggal = '$tanggal',   foto = '$foto'
                    WHERE id = '$id'";

        return mysqli_query($this->conn,$query);
    }

    public function delete($id){
        $query = "DELETE FROM berita WHERE id='$id'";
        return mysqli_query($this->conn, $query);
    }
}
