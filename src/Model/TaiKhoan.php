<?php
namespace App\Model;

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
        
        // Sử dụng Prepared Statement
    $query = $this->mysqli->prepare("SELECT * FROM taikhoan WHERE TaiKhoan = ?");
    $query->bind_param("s", $tendn);

    if ($query->execute()) {
        $result = $query->get_result();

        // Kiểm tra xem có dữ liệu hay không
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            // Xử lý trường hợp không tìm thấy tài khoản
            return null;
        }
    } else {
        // Xử lý trường hợp câu truy vấn không thành công
        return null;
    }
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