<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="style.css">


    <title>Cập nhật thành viên</title>
</head>

<body>

    <div class="dangkythanhvien">

        <a class="list" href="index.php?controller=thanh_vien&action=list">Danh sách</a>

        <h3>Cập nhật thành viên</h3>

        <form action="" method="POST">
            <table>
                <tr>
                    <td>Tên thành viên:</td>
                    <td><input type="text" value="<?php echo $dataId['hoten']?>" name="hoTen"></td>
                </tr>

                <tr>
                    <td>Năm sinh:</td>
                    <td><input type="text" value="<?php echo $dataId['namsinh']?>" name="namSinh"></td>
                </tr>

                <tr>
                    <td>Quê quán:</td>
                    <td><input type="text" value="<?php echo $dataId['quequan']?>" name="queQuan"></td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" value="Cập nhật" name="update"></td>
                </tr>

            </table>

        </form>

        <?php

        ?>

    </div>

</body>

</html>