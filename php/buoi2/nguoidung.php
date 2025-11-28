<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
            text-decoration: none;
            color: white;
        }
        .delete{
            background-color: red;
        }
    </style>
</head>
<body>
    <center>
    <h1> Thông tin người dùng</h1>
    <table header="1" border="1">
        <tr>
            <th> Tên đăng nhập </th>
            <th> Họ tên </th>
            <th> Mật khẩu </th>
            <th> Email </th>
            <th> Số điện thoại </th>
            <th> Vai trò </th>
            <th> Ngày sinh </th>
            <th> Chức năng </th>
        </tr>
        <?php
            include('connect.php');
            $sql = "select nd.*, vt.ten_vai_tro from nguoi_dung nd join vai_tro vt on nd.vai_tro_id = vt.id";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td> <?php echo $row['ten_dang_nhap']; ?> </td>
            <td> <?php echo $row['ho_ten']; ?> </td>
            <td> <?php echo $row['email']; ?> </td>
            <td> <?php echo $row['so_dien_thoai']; ?> </td>
            <td> <?php echo $row['ten_vai_tro']; ?> </td>
            <td> <?php echo $row['ngay_sinh']; ?> </td>
            <td> 
                <button> Sửa </button>
                <button class="delete"><a class="" href="xoanguoidung.php?id=<?php echo $row["id"]; ?>"> Xóa </a></button>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
    </center>
</body>
</html>