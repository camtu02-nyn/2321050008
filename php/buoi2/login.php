<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 2 - php</title>
    <style>
        .warning {
            color: red;
        }
    </style>
</head>
<body>
    <form action ="login.php" method ="post"> <!--không truyền gì thì sẽ là get sẽ bị lộ thông tin lên url-->
        <h1> Đăng nhập </h1>
        <div>
            Tên đăng nhập: <input type="text" name="username" placeholder="Nhập tên đăng nhập">
        </div>
        <div>
            Mật khẩu: <input type="password" name="password" placeholder="Nhập mật khẩu">
        </div>
        <div>
            <input type="submit" value="Đăng nhập">
        </div>
    </form>
    <?php 
        //cách nối các file với nhau trong php: include, require 
        // lấy dữ liệu từ form
        // $tenDangNhap = $_POST['username']; // ở trên dùng method gì thì ở dưới dùng cái đó + name ở input
        // $matKhau = $_POST['password'];
        // echo $tenDangNhap . "<br>";
        // echo $matKhau . "<br>";
        include( 'connect.php');
        // nếu tên đăng nhập = admin và mật khẩu = 123 thì cho phép người dùng vào trang trang chủ
        if(isset($_POST['username']) && isset($_POST['password'])) {
            $tenDangNhap = $_POST['username']; 
            $matKhau = $_POST['password'];
            $sql = "select * from nguoi_dung where ten_dang_nhap ='$tenDangNhap' and mat_khau='$matKhau'";
            // echo $sql;
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0) {
                session_start();
                $_SESSION['username'] = $tenDangNhap; // lưu thông tin đăng nhập vào session 
                $_SESSION['pssword'] = $matKhau;
                $_SESSION['hoten'] = $hoTen;
                header('Location: index.php'); //chuyển hướng trang
                exit();
            } else {
                echo "<p class='warning'> Đăng nhập thất bại! </p>";
            }
            // if($tenDangNhap == "admin" && $matKhau == "123") {
            //     session_start();
            //     $_SESSION['username'] = $tenDangNhap; // lưu thông tin đăng nhập vào session 
            //     header('Location: trangchu.php'); //chuyển hướng trang
            // } else {
            //     echo "<p class='warning'> Đăng nhập thất bại! </p>";
            // }
        }
    ?>
     
    
</body>
</html>