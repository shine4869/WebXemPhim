<?php
namespace App;
class Controller {
    protected function render($view_name, $data = []) {
        extract($data);

        include __DIR__ . "\View\\$view_name.php";
    }
}