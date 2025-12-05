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
    <form action="index.php?page_layout=themquocgia" method="post">
            <h1> Thêm quốc gia </h1>
            <div>
                <p style="margin:-10px 0 10px 0;"> Tên quốc gia </p>
                <input type="text" name="username" placeholder="Tên quốc gia">
            </div>           
           
            <div><input type="submit" value="Thêm mới"></div>
    </form>

    <?php
    include ('connect.php');
    if(!empty($_POST['username'])) {

            $u = $_POST['username'];
           
            $sql = "INSERT INTO quoc_gia (ten_quoc_gia) 
                        VALUES ('$u')";
            //echo $sql;
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            header('location: index.php?page_layout=quocgia');
    
    } else {
        echo "<p class='warning'> Vui lòng nhập đầy đủ thông tin </p>";

    }
    ?>
</body>
</html>