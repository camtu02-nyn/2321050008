<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            text-align: center;
            
        }
        th, td  {
            border: 1px solid black;
            padding: 10px;
        }
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
    <h1>Phim</h1>
    <table>
        <tr>
            <th>Tên phim</th>
            <th>Đạo diễn</th>
            <th>Năm phát hành</th>
            <th>Poster</th>
            <th>Quốc gia</th>
            <th>Số tập</th>
            <th>Trailer</th>
            <th>Mô tả</th>
            <th>Chức năng</th>

        </tr>
        <?php 
        include ('connect.php');
        $sql = "SELECT p.*, q.ten_quoc_gia, nd.ho_ten FROM phim p JOIN quoc_gia q ON p.quoc_gia_id = q.id JOIN nguoi_dung nd ON p.dao_dien_id = nd.id";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row["ten_phim"] ?></td>
            <td><?php echo $row["ho_ten"] ?></td>
            <td><?php echo $row["nam_phat_hanh"] ?></td>
            <td><?php echo $row["poster"] ?></td>
            <td><?php echo $row["ten_quoc_gia"] ?></td>
            <td><?php echo $row["so_tap"] ?></td>
            <td><?php echo $row["trailer"] ?></td>
            <td><?php echo $row["mo_ta"] ?></td>
            <td>
                <button>Sửa</button>
                <button class="delete"><a class="" href="xoanguoidung.php?id=<?php echo $row["id"]; ?>"> Xóa </a></button>
            </td>        
        </tr>
        <?php } ?>
    </table>
</body>
</html>