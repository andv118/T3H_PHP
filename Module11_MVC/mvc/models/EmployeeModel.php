<?php

namespace MVC\Models;

class EmployeeModel extends Database
{

    // khai báo tên bảng
    public $table = "employees";

    /**
     * Lấy ra tất cả nhân viên
     */
    public function getAll()
    {
        $sqlSelect = "SELECT * FROM $this->table";
        $result = $this->conn->query($sqlSelect);
        return $result;
    }

    /**
     * Lấy ra 1 nhân viên
     * @param $id
     */
    public function getRow($id)
    {
        $sqlSelect = "SELECT * FROM " . $this->table . " WHERE id = " . (int)$id;
        $result = $this->conn->query($sqlSelect);
        return $result;
    }

    /**
     * Insert 1 nhân viên
     * @param $data: dữ liệu truyền vào kiểu mảng
     */
    public function insert($data)
    {

        if (isset($data['name']) && isset($data['address']) && isset($data['salary'])) {

            $name = $data['name'];
            $address = $data['address'];
            $salary = $data['salary'];

            $sqlInsert = "INSERT INTO $this->table (name, address, salary) VALUES 
                ('$name', '$address', '$salary')";

            $result = $this->conn->query($sqlInsert);
            return $result;
        } else {
            return false;
        }

        return false;
    }

    /**
     * Cập nhật 1 nhân viên
     * @param $data
     */
    public function update($data)
    { 
        if(isset($data['employee_id']) && isset($data['name']) && 
        isset($data['address']) && isset($data['salary'])) {
            $id = (int) $data["employee_id"];
            $name = $data['name'];
            $address = $data['address'];
            $salary = $data['salary'];

            $qldUpdate = "UPDATE $this->table SET name='$name',address='$address',salary=$salary WHERE id=$id";
            
            $result = $this->conn->query($qldUpdate);
            return $result;
        }

        return false;
    }

    /**
     * Xóa 1 nhân viên theo id
     * @param $id
     */
    public function delete($id)
    { 
        $sqlDelete = "DELETE  FROM $this->table WHERE id=".(int)$id;
        $result = $this->connection->query($sqlDelete);
        return $result;
    }
}
