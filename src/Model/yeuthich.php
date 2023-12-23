<?php

namespace App\Model;

class YeuThich {
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

    public function getYeuThich($Id)
    {
        $Id = $this->mysqli->real_escape_string($Id);
        $result = $this->mysqli->query("SELECT p.* from lichsu l inner join phim p on l.MaPhim = p.MaPhim where Id= '$Id' ;");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function ThemYeuThich($id, $maphim){

        $id = $this->mysqli->real_escape_string($id);
        $maphim = $this->mysqli->real_escape_string($maphim);

        return $this->mysqli->query("INSERT INTO lichsu(Id,MaPhim) VALUES ('$id','$maphim')");
        
        
    }
    public function getphimdayeuthich($maphim,$Id)
    {
        $maphim = $this->mysqli->real_escape_string($maphim);
        $Id = $this->mysqli->real_escape_string($Id);

        $result = $this->mysqli->query("SELECT * FROM lichsu WHERE Id= '$Id' AND MaPhim= '$maphim' ");

        return $result->fetch_assoc();
    }
}
?>