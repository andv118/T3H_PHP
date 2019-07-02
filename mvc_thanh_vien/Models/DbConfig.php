<?php

class DatabaseConnect
{

    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbName = "t3h_quanlythanhvien";

    private $conn;
    private $result;

    function connect()
    {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbName);
        if (!$this->conn) {
            echo "Kết nối thất bại!";
            exit();
        } else {
            mysqli_set_charset($this->conn, "utf8");
        }
        return $this->conn;
    }

    /**
     * Thực thi câu truy vấn
     */
    public function excute($sql)
    {
        $this->result = $this->conn->query($sql);
    }

    /**
     * Lấy dữ liệu
     */
    public function getData()
    {
        if ($this->result) {
            $data = mysqli_fetch_array($this->result);
        } else {
            $data = 0;
        }
        return $data;
    }
    /**
     * Lấy dữ liệu khi edit
     */
    public function getDataEdit($table, $id)
    {   
        $sql = "SELECT * FROM $table WHERE id = $id";
        $this->excute($sql);
        if ($this->num_row() != 0) {
            $data = mysqli_fetch_array($this->result);
        } else {
            $data = 0;
        }
        return $data;
    }

    /**
     * Lấy toàn bộ dữ liệu
     */
    public function getAllData($table)
    {
        $sql = "SELECT * FROM $table";
        $this->excute($sql);

        if ($this->num_row() == 0) {
            $data = 0;
        } else {
            while ($datas = $this->getData()) {
                $data[] = $datas;
            }
        }
        return $data;
    }

    /**
     * Phương thức đếm số bản ghi
     */
    public function num_row()
    {
        if ($this->result) {
            $num = mysqli_num_rows($this->result);
        } else {
            $num = 0;
        }
        return $num;
    }

    /**
     * Phương thức thêm dữ liệu
     */
    public function insertData($hoTen, $namSinh, $queQuan)
    {
        $sql = "INSERT INTO thanhvien(id, hoten, namsinh, quequan) VALUES (null, '$hoTen', '$namSinh', '$queQuan')";
        return $this->excute($sql);
    }

    /**
     * Phương thức sửa dữ liệu
     *  */
    public function updateData($id, $hoTen, $namSinh, $queQuan)
    {
        $sql = "UPDATE thanhvien SET hoten = '$hoTen', namsinh = '$namSinh', quequan = '$queQuan' WHERE id = '$id'";
        return $this->excute($sql);
        
    }

    /**
     * Phương thức xóa dữ liệu
     *  */
    public function deleteData($id)
    {
        $sql = "DELETE FROM thanhvien WHERE id = '$id'";
        return $this->excute($sql);
    }

    /**
     * Phương thức tìm kiếm
     */
    public function searchData($keySearch) {
        $data = array();
        $sql = "SELECT * FROM thanhvien WHERE hoten REGEXP '$keySearch' ORDER BY id DESC";
        $this->excute($sql);
        if($this->num_row() != 0) {
            while($datas = $this->getData()) {
                $data[] = $datas;
            }
        }
        return $data;
    }
}
