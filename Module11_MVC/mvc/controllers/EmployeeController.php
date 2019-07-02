<?php

namespace MVC\Controllers;

use MVC\Models\EmployeeModel;

class EmployeeControler
{

    /**
     * điều hướng cho phần hiển thị tất cả nhân viên
     */
    public function index()
    {

        $model = new EmployeeModel();
        $result = $model->getAll();

        include_once 'mvc/view/employee/index.php';
    }

    /**
     * tạo 1 nhân viên
     */
    public function create()
    {
        if (isset($_POST) && !empty($_POST)) {
            $model = new EmployeeModel();

            $resultInsert = $model->insert($_POST);
            if ($resultInsert) {
                header("Location: index.php?controller=employee&action=index");
                exit;
            }
            echo "<br> Lưu dữ liệu ko thành công!";

        }

        $name = $address = $salary = "";
        // trả về view cho phần hiển thị
        include_once 'mvc/view/employee/create.php';
    }

    /**
     * sửa 1 nhân viên
     */
    public function edit()
    {

        if (isset($_POST) && !empty($_POST)) {
            $model = new EmployeeModel();

            $resultUpdate = $model->update($_POST);
            if ($resultUpdate) {
                header("Location: index.php?controller=employee&action=index");
                exit;
            }
            echo "<br> Cập nhật dữ liệu ko thành công!";
        }
        

        // Lấy dữ liệu để hiển thị khi sửa
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $model = new EmployeeModel();
            $row = $model->getRow($id);

            var_dump ($row);

            // trả về view cho phần hiển thị
            include_once 'mvc/view/employee/edit.php';
        }
    }

    /**
     * xóa 1 nhân viên
     */
    public function delete()
    {

        if (isset($_POST) && !empty($_POST['id'])) {
            $model = new EmployeeModel();

            $resultDelete = $model->update($_POST);
            if ($resultDelete) {
                header("Location: index.php?controller=employee&action=index");
                exit;
            }
            echo "<br> Cập nhật dữ liệu ko thành công!";

        }

        // trả về view cho phần hiển thị
        include_once 'mvc/view/employee/delete.php';
    }
}
