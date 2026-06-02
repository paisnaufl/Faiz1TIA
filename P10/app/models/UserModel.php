<?php
require_once 'config/koneksi.php';

class UserModel{
    private $conn;
    public function __construct($conn){
        $this->conn = $conn;
    }
    public function getAllUser(){
        $query = mysqli_query($this->conn, "SELECT * FROM user ORDER BY id_user DESC");
        return $query;
    }
    public function insertUser($email, $nama_lengkap, $jabatan, $password){
        $query = mysqli_query($this->conn, "INSERT INTO user (email, nama_lengkap, jabatan, password) VALUES ('$email', '$nama_lengkap', '$jabatan', '$password')");
        return $query;
    }
    public function getByIdUser($id_user){
        $query = mysqli_query($this->conn, "SELECT * FROM user WHERE id_user = '$id_user'");
        return mysqli_fetch_assoc($query);
    }
    public function updateUser($id_user, $email, $nama_lengkap, $jabatan ,$password){
        $query = "UPDATE user SET email = '$email', nama_lengkap = '$nama_lengkap', jabatan = '$jabatan', password = '$password'
                    WHERE id_user = '$id_user'";

        return mysqli_query($this->conn,$query);
    }
    public function deleteUser($id_user){
        $query = "DELETE FROM user WHERE id_user='$id_user'";
        return mysqli_query($this->conn, $query);
    }
}
