<?php
namespace App;
class Controller {
    protected function render($view_name, $data = []) {
        extract($data);

        // Sử dụng ký tự forward slash
        include __DIR__ . "/view/$view_name.php";
    }
}