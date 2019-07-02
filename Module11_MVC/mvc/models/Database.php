<?php

namespace MVC\Models;

class Database {
    public $conn;
    public $serverName = "localhost";
    public $userName = "root";
    public $password = "";
    public $dbName = "t3h_mcv1";


    public function __construct()
    {
        $connect = mysqli_connect($this->serverName, $this->userName, 
                                    $this->password, $this->dbName);
        if($connect->connect_error) {
            die("Không thể kết nối đến CSDL!");
        }                            
        $this->conn = $connect;
    }


}




?>