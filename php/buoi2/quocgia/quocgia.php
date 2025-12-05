<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 50%;
            text-align: center;
            margin: 20px auto;
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
        }
        .them{
            background-color: rgba(121, 197, 222, 1);
            justify-content: center;
            padding: 7px;
            border-radius: 5px;
            width: 10%;
            text-align: center;

        }
        .header{
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 90%;
            margin: 10px auto;
        }
        .capnhat{
            background-color: rgba(144, 217, 241, 1);
            border-radius: 5px;
            padding: 5px;
            color: black;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Quốc gia</h1>
        <a class="them" href="index.php?page_layout=themquocgia">Thêm quốc gia</a>
    </div>
    <table>
        <tr>
            <th>Tên quốc gia</th>           
            <th>Chức năng</th>
        </tr>
        <?php 
        include ('connect.php');
        $sql = "SELECT q.* FROM quoc_gia q ";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row["ten_quoc_gia"] ?></td>           
            <td>
                <a class="capnhat" href="index.php?page_layout=capnhatquocgia&id=<?php echo $row['id'] ?>&tenQuocGia=<?php echo $row["ten_quoc_gia"]?>">Cập nhập</a>
                <button class="delete"><a class="" href="xoaquocgia.php?id=<?php echo $row["id"]; ?>"> Xóa </a></button>  
            </td>      
        </tr>
        <?php } ?>
    </table>
</body>
</html>