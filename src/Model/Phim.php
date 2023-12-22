<?php
namespace App\Model;

class Phim{
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
    public function getPhim()
    {
        $result = $this->mysqli->query("SELECT * FROM phim");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getPhimtheoma($Id)
    {
        $Id = $this->mysqli->real_escape_string($Id);
        $result = $this->mysqli->query("SELECT * FROM phim WHERE MaPhim = '$Id' ");

        return $result->fetch_assoc();
    }

    public function timkiemphimtheoten($key){
        $key = $this->mysqli->real_escape_string($key);
        $result = $this->mysqli->query("SELECT * FROM phim WHERE TenPhim LIKE '%$key%'");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function getLoai()
    {
        $result = $this->mysqli->query("SELECT TenLoai FROM loaiphim");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function getPhimtheoloai($Ml)
    {
        $Ml = $this->mysqli->real_escape_string($Ml);
        $result = $this->mysqli->query("SELECT * FROM phim WHERE MaLoai like $Ml");

        return $result->fetch_all(MYSQLI_ASSOC);
    }


}

?>