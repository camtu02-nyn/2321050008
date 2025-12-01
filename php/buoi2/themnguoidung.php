<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm người dùng</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            margin: 10px 40px;
            width: 20%;
        }
        div{
            margin-bottom: 10px;
        }
        input{
            width: 100%;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid black;
        }
        .warning{
            color: red;
        }
    </style>
</head>
<body>
    <form action="index.php?page_layout=themnguoidung" method="post">
        <h1> Thêm người dùng </h1>
        <div>
            <p> Tên đăng nhập: </p>
            <input type="text" name="username" placeholder="Nhập tên đăng nhập">
        </div>
        <div>
            <p> Mật khẩu: </p>
            <input type="password" name="password" placeholder="Nhập mật khẩu">
        </div>
        <div>
            <p> Họ tên: </p>
            <input type="text" name="ho_ten" placeholder="Nhập họ tên">
        </div>
        <div>
            <p> Email: </p>
            <input type="email" name="email" placeholder="Nhập email">
        </div>
        <div>
            <p> Số điện thoại: </p>
            <input type="text" name="sdt" placeholder="Nhập số điện thoại">
        </div>
        <div>
            <p> Ngày sinh </p>
            <input type="date" name="ngay_sinh" >
        </div>
        <div>
            <p> Vai trò: </p>
            <select name="vai_tro">
                <option value="1"> Admin </option>
                <option value="2"> Người dùng </option>
                <option value="3"> Đạo diễn </option>
                <option value="4"> Diễn viên </option>
            </select>
        <div>
            <input type="submit" value="thêm mới">
        </div>
    </form>
</body>
<?php
    if(!empty($_POST['username'])&&
    !empty($_POST['password'])&&
    !empty($_POST['ho_ten'])&&
    !empty($_POST['email'])&&
    !empty($_POST['sdt'])&&
    !empty($_POST['ngay_sinh'])&&
    !empty($_POST['vai_tro'])){
        include('connect.php');
        $tenDangNhap = $_POST['username'];
        $password = $_POST['password'];
        $hoTen = $_POST['ho_ten'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $ngaySinh = $_POST['ngay_sinh'];
        $vaiTro = $_POST['vai_tro'];

        $sql = "insert into nguoi_dung (ten_dang_nhap, mat_khau, ho_ten, email, sdt, ngay_sinh, vai_tro_id)
        values ('$tenDangNhap', '$password', '$hoTen', '$email', '$sdt', '$ngaySinh', '$vaiTro')";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        header('location: index.php?page_layout=nguoidung');
    }else{
        echo "<p class='warning'> Vui lòng nhập đầy đủ thông tin </p>";
    }

?>

</html>