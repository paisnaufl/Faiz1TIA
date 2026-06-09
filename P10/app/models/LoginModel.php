<?php
require_once 'config/koneksi.php';

class LoginModel{
    private $conn;
    public function __construct($conn){
        $this->conn = $conn;
    }

    public function getByEmail($email){
        $query = mysqli_query($this->conn, "SELECT * FROM user WHERE email='$email'");
        return mysqli_fetch_assoc($query);
    }

    public function register($email, $nama_lengkap, $jabatan, $password){
        $query = "INSERT INTO user(nama, email, jabatan, password) VALUES('$email', '$nama_lengkap', '$jabatan', '$password')";
        return mysqli_query($this->conn, $query);
    }
}
