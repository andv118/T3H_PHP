<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="style.css">


    <title>Thêm thành viên</title>
</head>

<body>

    <div class="dangkythanhvien">

        <a class="list" href="index.php?controller=thanh_vien&action=list">Danh sách</a>

        <h3>Thêm mới thành viên</h3>

        <form action="" method="POST">
            <table>
                <tr>
                    <td>Tên thành viên:</td>
                    <td><input type="text" placeholder="Tên thành viên" name="hoTen"></td>
                </tr>

                <tr>
                    <td>Năm sinh:</td>
                    <td><input type="text" placeholder="Năm sinh" name="namSinh"></td>
                </tr>

                <tr>
                    <td>Quê quán:</td>
                    <td><input type="text" placeholder="Quê quán" name="queQuan"></td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" value="Thêm mới" name="add"></td>
                </tr>

            </table>

        </form>

        <?php

            // if (isset($thanhCong)) {
            //     var_dump($thanhCong);
            // }

            if (isset($thanhCong) && in_array('add_success', $thanhCong)) {
                echo "<p style='color:green'>Thêm mới thành công!</p>";
            } else if(isset($thanhCong) && in_array('add_fail', $thanhCong)) {
                echo "<p style='color:red>Thêm mới thất bại!</p>";
            } else if(isset($thanhCong) && in_array('add_empty', $thanhCong)) {
                echo "<p style='color:red'>Kiểm tra lại thêm mới!</p>";
            }
            

        ?>

    </div>

</body>

</html>