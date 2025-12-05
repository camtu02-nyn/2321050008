<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            margin:10px;

        }
        th td{
            margin: 0;
            display: flex;
            justify-content: center;
        }
        table{width: 100%;}
        a{
            text-decoration: none;
            color: white;
        }
        .delete{
            background-color: red;
        }
        .chuc_nang{
            display: flex;
            gap: 10px;
            justify-content: center;
        }
        .btn {
            padding: 0px 5px;
            border-radius: 5px;
            background-color: white;
            color: black;
            border: 1px solid black;
        } 
        .btn.them{
            background-color: rgba(196, 211, 240, 1);
            color: black;
            padding: 5px;
            margin-right: 20px;
        }
        .header{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

    </style>
</head>
<body>
    <div class="header">
        <h1> Thông tin người dùng</h1>
        <a class="btn them" href="index.php?page_layout=themnguoidung"> Thêm người dùng </a>
    </div>
    <center>
    <table header="1" border="1">
        <tr>
            <th> Tên đăng nhập </th>
            <th> Họ tên </th>
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
            <td> <?php echo $row['sdt']; ?> </td>
            <td> <?php echo $row['ten_vai_tro']; ?> </td>
            <td> <?php echo $row['ngay_sinh']; ?> </td>
            <td class="chuc_nang"> 
                <a class="btn sua" href="index.php?page_layout=capnhatnguoidung&id=<?php echo $row["id"]; ?>"> Cập nhật </a></button>
                <a class="btn xoa" href="xoanguoidung.php?id=<?php echo $row["id"]; ?>"> Xóa </a></button>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
    </center>
</body>
</html>