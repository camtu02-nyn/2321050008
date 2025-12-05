<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cập nhật người dùng</title>
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
    <?php
        include('connect.php');
        $id = $_GET['id'];
        $sql = "select * from nguoi_dung where id=$id";
        $result = mysqli_query($conn, $sql);
        $nguoiDung = mysqli_fetch_assoc($result);
    ?>
    <form action="index.php?page_layout=capnhat&id=<?php echo $id ?>" method="post">
        <h1> Cập nhập người dùng </h1>
        <div>
            <p> Tên đăng nhập: </p>
            <input type="text" name="username" placeholder="Tên đăng nhập" value="<?php echo $nguoiDung['ten_dang_nhap']; ?>">
        </div>
        <div>
            <p> Mật khẩu: </p>
            <input type="password" name="password" placeholder="Mật khẩu" value="<?php echo $nguoiDung['mat_khau']; ?>">
        </div>
        <div>
            <p> Họ tên: </p>
            <input type="text" name="ho_ten" placeholder="Họ tên" value="<?php echo $nguoiDung['ho_ten']; ?>">
        </div>
        <div>
            <p> Email: </p>
            <input type="email" name="email" placeholder="Email" value="<?php echo $nguoiDung['email']; ?>">
        </div>
        <div>
            <p> Số điện thoại: </p>
            <input type="text" name="sdt" placeholder="Số điện thoại" value="<?php echo $nguoiDung['sdt']; ?>">
        </div>
        <div>
            <p> Ngày sinh </p>
            <input type="date" name="ngay_sinh" value="<?php echo $nguoiDung['ngay_sinh']; ?>">
        </div>
        <div>
            <p> Vai trò: </p>
            <select name="vai_tro">
                <option value="1" <?php echo ($nguoiDung['vai_tro_id']==1) ?"selected" : "" ?> > Admin </option>
                <option value="2" <?php echo ($nguoiDung['vai_tro_id']==2) ?"selected" : "" ?> > Người dùng </option>
                <option value="3" <?php echo ($nguoiDung['vai_tro_id']==3) ?"selected" : "" ?> >Đạo diễn </option>
                <option value="4" <?php echo ($nguoiDung['vai_tro_id']==4) ?"selected" : "" ?> > Diễn viên </option>
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
        $tenDangNhap = $_POST['username'];
        $password = $_POST['password'];
        $hoTen = $_POST['ho_ten'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $ngaySinh = $_POST['ngay_sinh'];
        $vaiTro = $_POST['vai_tro'];

        $sql = "update nguoi_dung set ten_dang_nhap='$tenDangNhap', mat_khau='$password', ho_ten='$hoTen', email='$email', sdt='$sdt', ngay_sinh='$ngaySinh', vai_tro_id='$vaiTro' where id=$id";
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        header('location: index.php?page_layout=nguoidung');
    }else{
        echo "<p class='warning'> Vui lòng nhập đầy đủ thông tin </p>";
    }

?>

</html>