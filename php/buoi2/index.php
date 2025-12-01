<!-- <?php
    // cokie
    # lưu ở phía người dùng
    # dùng cho những thông tin ít quan trọng
    // $cookieName = "username";
    // $cookieValue = "CamTu";

    // setcookie($cookieName, $cookieValue, time() + (86400), "/"); // 86400 =

    // if(isset($_COOKIE[$cookieName])) {
    //     echo "cookie đã tồn tại!<br>";
    // } else {
    //     echo "Cookie chưa tồn tại" . "<br>";
    // }


    // session 
    # thông tin đăng nhập, giỏ hàng
    // session_start(); // bắt buộc phải có
    // $_SESSION['name'] = "CamTu 123";
    // echo $_SESSION['name'];

?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
        }
        nav{
            background-color: cornflowerblue;
            display: flex;
            justify-content: space-between;
            color: white;
        }
        ul{
            display: flex;
            list-style: none;
        }
        li{
            padding: 0 20px;
        }
        a{
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION["username"])){
            header('location: login.php');
        }
    ?>
    <header>
        <nav>
            <ul class="">
                <li class=""><a href="index.php?page_layout=trangchu">Trang chủ</a></li>
                <li class=""><a href="index.php?page_layout=phim">Phim</a></li>
                <li class=""><a href="index.php?page_layout=theloai">Thể loại</a></li>
                <li class=""><a href="index.php?page_layout=quocgia">Quốc gia</a></li>
                <li class=""><a href="index.php?page_layout=nguoidung">Người dùng</a></li>

            </ul>
            <ul class="">
                <li class=""><?php echo"xin chào" . $_SESSION["username"]; ?></li>
                <li class=""><a href="index.php?page_layout=dangxuat">Đăng xuất</a></li>
            </ul>
        </nav>
            <?php
                if(isset($_GET['page_layout'])){
                    switch($_GET['page_layout']){
                    case 'trangchu':
                        include "trangchu.php";
                        break;
                    case 'phim':
                        include "phim.php";
                        break;
                    case 'theloai':
                        include "theloai.php";
                        break;
                    case 'quocgia':
                        include "quocgia.php";
                        break;
                    case 'nguoidung':
                        include "nguoidung.php";
                        break;
                    case 'dangxuat':         
                        break;
                    case 'themnguoidung':
                        include "themnguoidung.php";
                        break;
                    case 'capnhat':
                        include "capnhat.php";
                        break;
                    }
                }
            
            ?>
    </header>
</body>
</html>