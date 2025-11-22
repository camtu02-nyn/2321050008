<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buổi 1 php</title>
</head>
<body>
    <?php
        // 1.in ra màn hình
        echo "Xin chào đến với buổi học PHP <br> "; 

        echo "Hi <br>";

        // 2. khai báo biến
        // cú pháp: $+ tene biến = giá trị của biến;
        $ten = "Lê Thị Cẩm Tú";
        $tuoi = 20;
        echo $ten . "<br>";

        // 3. nối chuỗi
        echo  $ten . " ". $tuoi ." tuổi" . "<br>";

        // 4. hằng số 
        define("soPi", "3.14");
        echo soPi . "<br>";

        // 5. Phân biệt '' và ""
        echo '$ten <br>'; // in đúng tên biến
        echo "$ten <br>"; // in giá trị của biến

        // 6. Chuỗi 
        // 6.1 kiểm tra độ dài chuỗi
        echo strlen($ten) . "<br>";
        // 6.2 đếm số từ trong chuỗi
        echo str_word_count($ten) . "<br>";
        // 6.3 tìm kiếm ký tự trong chuỗi
        echo strpos($ten, "Cẩm") . "<br>";
        // 6.4 thay thế ký tự trong chuỗi
        echo str_replace("Cẩm Tú", "Thu Hà", $ten) . "<br>";
        
        //7.Toán tử
        $soThuNhat = 10;
        $soThuHai = 5;
        # phép tính
        // echo $soThuNhat + $soThuHai . "<br>";
        # gán += -= *= /= %=
        // echo $soThuNhat += $soThuHai . "<br>";
        # so sánh: > < >= <= == != ===
        // echo $soThuNhat < $soThuHai . "<br>";

        // 8. Câu điều kiện
        // if("điều kiện"){
            // logic
        // } else {
            // logic
        // }
        // kiểm tra tổng số thứ nhất và số thứ hai 
        // nếu < 15 in ra "Tổng nhỏ hơn 15"
        // nếu = 15 in ra "Tổng bằng 15"
        // nếu > 15 in ra "Tổng lớn hơn 15"
        $tong = $soThuNhat + $soThuHai;
        if($tong < 15){
            echo "Tổng nhỏ hơn 15" . "<br>";
        } elseif($tong == 15){
            echo "Tổng bằng 15" . "<br>";
        } else {
            echo "Tổng lớn hơn 15" . "<br>";
        }

        // 9. switch case
        $color = "red";
        switch($color){
            case "red":
                echo "Màu đỏ" . "<br>";
                break;
            case "blue":
                echo "Màu xanh dương" . "<br>";
                break;
            case "green":
                echo "Màu xanh lá" . "<br>";
                break;
            default:
                echo "Không có màu này" . "<br>";
                break;
        }

        // 10. Vòng lặp for
        for($i = 1; $i <= 5; $i++){
            echo $i . "<br>";
        }

        // 11. Mảng
        $mang = ["Ngọc Anh", "Cẩm Tú", "Công Hùng","Quang Huy"];
        // đếm phần tử
        echo count($mang) . "<br>";
        echo $mang[1] . "<br>";
        print_r($mang);
        // $mang[] thêm phần tử vào mảng
        // $mang[1] sửa phần tử trong mảng
        // xóa phần tử: unset($mang[2]);
            
    ?>
</body>
</html>