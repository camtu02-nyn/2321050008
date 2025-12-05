<?php
    include ('connect.php');
    if(!empty($_POST['ten-quoc-gia'])) {
            $id = $_GET['id'];
            $tenQuocGia = $_POST['ten-quoc-gia'];
           
            $sql = "UPDATE quoc_gia SET ten_quoc_gia='$tenQuocGia' WHERE id=$id";
            //echo $sql;
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            header('location: index.php?page_layout=quocgia');
    
    } else {
        echo "<p class='warning'> Vui lòng nhập đầy đủ thông tin </p>";

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            width: 20%;
            margin: 40px auto;
            gap: 10px;
            padding: 20px;
            border: 1px solid black;
            border-radius: 5px;
            background-color: rgb(240, 240, 240);
            
        }
        div{
            display: flex;
            flex-direction: column;
            color: black;
        }
        input[type="text"]{
            padding: 5px;
            border-radius: 5px;
            border: 1px solid black;
        }
        input[type="submit"]{
            width: 100px;
            padding: 5px;
            border-radius: 5px;
            border: none;
            background-color: cornflowerblue;
            color: white;
            font-weight: bold;
        }
        .warning{
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        $id = $_GET['id'];
        $tenQuocGia = $_GET['tenQuocGia'];
    ?>
    <form action="index.php?page_layout=capnhatquocgia&id=<?php echo $id ?>" method="post">
            <h1> Cập nhật quốc gia </h1>
            <div>
                <p style="margin:-10px 0 10px 0;"> Tên quốc gia </p>
                <input type="text" name="ten-quoc-gia" placeholder="Tên quốc gia" value="<?php echo $tenQuocGia ?>">
            </div>           
           
            <div><input type="submit" value="Cập nhật"></div>
    </form>


</body>
</html>