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
        $userId = $this->mysqli->real_escape_string($Id);
        $result = $this->mysqli->query("SELECT * FROM phim WHERE MaPhim = $Id");

        return $result->fetch_assoc();
    }


}

?>