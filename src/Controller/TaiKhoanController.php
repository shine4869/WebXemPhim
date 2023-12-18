<?php

namespace App\Controller;

use App\Controller;
use TaiKhoan;

class UserController extends Controller
{
    private $Taikhoan;

    public function __construct()
    {
        $this->Taikhoan = new TaiKhoan();
    }

    public function DangNhap(){
        // Thay đổi dựa trên logic của ứng dụng của bạn
        $tendn = 'ten_dang_nhap'; // Thay bằng tên đăng nhập thực tế
        $matkhau = 'mat_khau'; // Thay bằng mật khẩu thực tế

        // Gọi phương thức DangNhap từ đối tượng TaiKhoan
        $ketquaDangNhap = $this->Taikhoan->DangNhap($tendn, $matkhau);

        // Xử lý kết quả đăng nhập
        if ($ketquaDangNhap) {
            // Đăng nhập thành công, thực hiện các hành động cần thiết
            // Ví dụ: chuyển hướng trang, hiển thị thông báo, lưu session, ...
            echo "Đăng nhập thành công!";
        } else {
            // Đăng nhập thất bại, xử lý theo ý của bạn
            echo "Đăng nhập thất bại!";
        }
    }
}

