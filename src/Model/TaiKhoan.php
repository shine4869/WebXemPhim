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


    public function GetTaiKhoan($tendn, $matkhau)
    {
        $tendn = $this->mysqli->real_escape_string($tendn);
        $matkhau = $this->mysqli->real_escape_string($matkhau);
        $result = $this->mysqli->query("SELECT * FROM taikhoan WHERE TaiKhoan = $tendn and MatKhau = $matkhau");

        return $result->fetch_assoc();
    }

    public function Dangky($tendn, $matkhau, $sodt){
        $tendn = $this->mysqli->real_escape_string($tendn);
        $matkhau = $this->mysqli->real_escape_string($matkhau);
        $sodt = $this->mysqli->real_escape_string($sodt);
    
        $hashedPassword = password_hash($matkhau, PASSWORD_DEFAULT);
    
        return $this->mysqli->query("INSERT INTO taikhoan (TaiKhoan, MatKhau, SoDienThoai) VALUES ('$tendn', '$hashedPassword', '$sodt')");
    
    
    }
    public function DangNhap($tendn, $matkhau){
        $tendn = $this->mysqli->real_escape_string($tendn);
        $matkhau = $this->mysqli->real_escape_string($matkhau);
        // Kiểm tra xem tên đăng nhập có tồn tại trong cơ sở dữ liệu hay không
    $result = $this->mysqli->query("SELECT * FROM taikhoan WHERE TaiKhoan = '$tendn'");
    if ($result->num_rows == 1) {
        // Tên đăng nhập tồn tại, kiểm tra mật khẩu
        $row = $result->fetch_assoc();
        $hashedPassword = $row['MatKhau'];

        if (password_verify($matkhau, $hashedPassword)) {
            // Mật khẩu hợp lệ, có thể thực hiện các hành động sau khi đăng nhập thành công
            // Ví dụ: Lưu thông tin đăng nhập vào phiên làm việc
            // $_SESSION['user_id'] = $row['ID'];

            return true; // Đăng nhập thành công
        } else {
            return false; // Sai mật khẩu
        }
    } else {
        return false; // Tên đăng nhập không tồn tại
    }        
    }
}



?>