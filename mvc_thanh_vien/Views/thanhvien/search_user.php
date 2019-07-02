<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <div class="timkiem">

        <form action="" method="GET">
            <table>
                <td>
                <input type="hidden" name="controller" value="thanh_vien">    
                <input type="hidden" name="action" value="search">    
                <td><input type="text" name="key_search" placeholder="Nhập từ khóa"></td>
                <td><input type="submit" value="Tìm kiếm"></td>
                </td>
            </table>
        </form>
    </div>

    <div class="danhsach">

        <a id="themmoiuser" href="index.php?controller=thanh_vien&action=list">Quay lại danh sách</a>

        <h3>Danh sách thành viên</h3>

        <table>
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên thành viên</th>
                    <th>Năm sinh</th>
                    <th>Quê quán</th>
                    <th>Hành động</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $stt = 1;
                if (isset($data)) {
                    foreach ($data as $key => $value) {

                        ?>
                        <tr>
                            <td>
                                <p><?php echo $stt ?></p>
                            </td>
                            <td>
                                <p><?php echo $value['hoten'] ?></p>
                            </td>
                            <td>
                                <p><?php echo $value['namsinh'] ?></p>
                            </td>
                            <td>
                                <p><?php echo $value['quequan'] ?></p>
                            </td>

                            <td>
                                <div class="center">
                                    <a class="trigger" href="index.php?controller=thanh_vien&action=edit&id=<?php echo $value['id'] ?>">
                                        <span>
                                            <em>Sửa</em><i aria-hidden="true"></i>
                                        </span>
                                    </a>

                                    <a class="trigger xoa" onclick="return confirm('Bạn chắc chắn muốn xóa ko?')" href="index.php?controller=thanh_vien&action=delete&id=<?php echo $value['id'] ?>">
                                        <span>
                                            <em>Xóa</em><i aria-hidden="true"></i>
                                        </span>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <?php
                        $stt++;
                    }
                }
                ?>

            </tbody>
        </table>
    </div>

</body>

</html>