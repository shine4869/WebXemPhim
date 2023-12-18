<?php
namespace App;
class Controller {
    protected function render($view_name, $data = []) {
        extract($data);

        include __DIR__ . "\view\\$view_name.php";
    }
}