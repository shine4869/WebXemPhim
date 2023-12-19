<?php

class TaiKhoan {
    private $mysqli;
    public function __construct()
    {
        // Replace these values with your actual database configuration
        $host = DB_HOST;
        $username = DB_USER;
        $password = DB_PASSWORD;
        $database = DB_NAME;

        $this->mysqli = new \mysqli($host, $username, $password, $database);

        // Check connection
        if ($this->mysqli->connect_error) {
            die("Connection failed: " . $this->mysqli->connect_error);
        }
        
    }


    public function GetTaiKhoan($tendn)
    {
        $tendn = $this->mysqli->real_escape_string($tendn);
        
        $result = $this->mysqli->query("SELECT * FROM taikhoan WHERE TaiKhoan = $tendn ");

        return $result->fetch_assoc();
    }

    public function Dangky($tendn, $matkhau, $sodt){
        $tendn = $this->mysqli->real_escape_string($tendn);
        $matkhau = $this->mysqli->real_escape_string($matkhau);
        $sodt = $this->mysqli->real_escape_string($sodt);
    
        $hashedPassword = password_hash($matkhau, PASSWORD_DEFAULT);
    
        return $this->mysqli->query("INSERT INTO taikhoan (TaiKhoan, MatKhau, SoDienThoai) VALUES ('$tendn', '$hashedPassword', '$sodt')");
    
    
    }
}



?>