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
            border-radius: 5px;
            padding: 3px;
        }
        .capnhat{
            background-color: rgba(144, 217, 241, 1);
            border-radius: 5px;
            padding: 5px;
            color: black;
        }
        .btn.them{
            background-color: rgba(196, 211, 240, 1);
            color: black;
            padding: 5px;
            margin-right: 20px;
            border-radius: 5px;
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
        <h1> Thông tin phim</h1>
        <a class="btn them" href="index.php?page_layout=themphim"> Thêm phim </a>
    </div>
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
                <a class="capnhat" href="index.php?page_layout=capnhatphim&id=<?php echo $row['id'] ?>">Cập nhập</a>
                <button class="delete"><a class="" href="xoaphim.php?id=<?php echo $row["id"]; ?>"> Xóa </a></button>  
            </td>       
        </tr>
        <?php } ?>
    </table>
</body>
</html>