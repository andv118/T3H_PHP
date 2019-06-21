<?php
/**
 * Yêu cầu : Xây dựng class tên là Database
 * có 1 thuộc tính là connection để lưu trữ kết nội đến CSDL
 * và có 4 thuộc tính : ip database ( localhost ) , user db , pass db , tên CSDL
 * Class này có 1 method khởi tạo là __construct() làm nhiệm vụ kết nội đến CSDL
 * constructor này sẽ có 4 tham số dùng để kết nối đến CSDL truyền vào
 * và trong method này sẽ khởi tạo kết nối CSDL và gán kết nối cho thuộc tính connection
 *
 */

class Database
{

    public $connect;
    public $ipDb;
    public $userDb;
    public $passDb;
    public $dbName;

    public function __construct($ipDb, $userDb, $passDb, $dbName)
    {
        $this->ipDb = $ipDb;
        $this->userDb = $userDb;
        $this->passDb = $passDb;
        $this->dbName = $dbName;
        $this->connect = new mysqli($ipDb, $userDb, $passDb,  $dbName);
    }

    public function disconnect() {
        mysqli_close($this->connect);
    }
}
