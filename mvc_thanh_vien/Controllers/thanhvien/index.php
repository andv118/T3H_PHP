<?php
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "";
}

$thanhCong = array();

switch ($action) {
    case 'add':
        if (isset($_POST['add'])) { // neu nguoi dung co bam vao nut them moi
            $hoTen = $_POST['hoTen'];
            $namSinh = $_POST['namSinh'];
            $queQuan = $_POST['queQuan'];

            if (empty($hoTen) || empty($namSinh) || empty($queQuan)) {
                $thanhCong[] = 'add_empty';
            } else {
                $db->insertData($hoTen, $namSinh, $queQuan);
                $thanhCong[] = 'add_success';
            }
        }
        require_once 'Views/thanhvien/add_user.php';
        break;
    case 'edit':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $dataId = $db->getDataEdit("thanhvien", $id);

            if (isset($_POST['update'])) {
                $hoTen = $_POST['hoTen'];
                $namSinh = $_POST['namSinh'];
                $queQuan = $_POST['queQuan'];
                $db->updateData($id, $hoTen, $namSinh, $queQuan);
                header('location: index.php?controller=thanh_vien&action=list');
            }
        }
        require_once 'Views/thanhvien/edit_user.php';
        break;
    case 'delete':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $db->deleteData($id);
        }
        header('location: index.php?controller=thanh_vien&action=list');
        // require_once 'Views/thanhvien/delete_user.php';
        break;
    case 'list':
        $data = $db->getAllData('thanhvien');
        require_once 'Views/thanhvien/list_user.php';
        break;

    case 'search':
        if (isset($_GET['key_search'])) {
            $key = $_GET['key_search'];
            $data =  $db->searchData($key);
        }
        require_once 'Views/thanhvien/search_user.php';

        break;

    default:
        require_once 'Views/thanhvien/list_user.php';
        break;
}
