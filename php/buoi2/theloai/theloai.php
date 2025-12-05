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
    </style>
</head>
<body>
    <div class="header">
        <h1>Thể Loại</h1>
        <a class="them" href="index.php?page_layout=themtheloai">Thêm thể loại</a>
    </div>
    <table>
        <tr>
            <th>Tên thể loại</th>           
            <th>Chức năng</th>
        </tr>
        <?php 
        include ('connect.php');
        $sql = "SELECT t.* FROM the_loai t ";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $row["ten_the_loai"] ?></td>           
            <td>
                <a href="index.php?page_layout=capnhattheloai&id=<?php echo $row['id'] ?>">Cập nhập</a>
                <button class="delete"><a class="" href="xoatheloai.php?id=<?php echo $row["id"]; ?>"> Xóa </a></button>  
            </td>        
        </tr>
        <?php } ?>
    </table>
</body>
</html>