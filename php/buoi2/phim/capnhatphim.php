<?php
    include ('connect.php');
    if(!empty($_POST['username']) &&
       !empty($_POST['dao-dien']) &&
       !empty($_POST['namphathanh']) &&
       !empty($_POST['poster']) &&
       !empty($_POST['quoc-gia']) &&
       !empty($_POST['sotap']) &&
       !empty($_POST['trailer']) &&
       !empty($_POST['mota'])) {
            $id = $_GET['id'];
            $u = $_POST['username'];
            $d = $_POST['dao-dien'];
            $n = $_POST['namphathanh'];
            $p = $_POST['poster'];
            $qg = $_POST['quoc-gia'];
            $s = $_POST['sotap'];
            $t = $_POST['trailer'];
            $m = $_POST['mota'];
            $sql = "UPDATE phim SET 
                    ten_phim = '$u',
                    dao_dien_id = '$d',
                    nam_phat_hanh = '$n',
                    poster = '$p',
                    quoc_gia_id = '$qg',
                    so_tap = '$s',
                    trailer = '$t',
                    mo_ta = '$m'
                    WHERE id= $id";
            //echo $sql;
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            header('location: index.php?page_layout=phim');
    
    } else {
        echo "<p> Nhập lại thông tin </p>";

    }
    ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        div{
            color: black;
        }
    </style>
</head>
<body>
    <?php
    include ('connect.php');
    $id=$_GET['id'];
    $sql = "SELECT * FROM phim WHERE id= $id";
    $result = mysqli_query($conn, $sql);
    $phim = mysqli_fetch_assoc($result);
    ?>
    <form action="index.php?page_layout=capnhatphim&id=<?php echo $id ?>" method="post">
            <h1> Cập nhật phim </h1>
            <div>
                <p> Tên phim </p>
                <input type="text" name="username" placeholder="Tên phim" value="<?php echo $phim['ten_phim'] ?>">
            </div>
            <div>
                <p> Đạo diễn </p>
                <!-- <input type="text" name="daodien" placeholder="ghi id dd" value="<?php echo $phim['dao_dien_id'] ?>"></div> -->
                <select name="dao-dien">
                    <?php
                        include ('connect.php');
                        $sql = "SELECT * FROM nguoi_dung WHERE vai_tro_id = 2";
                        $result = mysqli_query($conn, $sql);
                        while($dd = mysqli_fetch_assoc($result)) {
                    ?>
                        <option value="<?php echo $dd['id'] ?>" <?php echo ($phim['dao_dien_id'] == $dd['id']) ? 'selected' : ""; ?>><?php echo $dd['ho_ten'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            <div>
                <p> Năm phát hành </p>
<input type="number" name="namphathanh" placeholder="Năm phát hành" value="<?php echo $phim['nam_phat_hanh'] ?>">
            </div>
            <div>
                <p> Poster </p>
                <input type="text" name="poster" placeholder="Tên poster" value="<?php echo $phim['poster'] ?>">
            </div>
            <div>
                <p> Quốc gia </p>
                <!-- <input type="text" name="quocgia" placeholder="ghi id quốc gia" value="<?php echo $phim['quoc_gia_id'] ?>"> -->
                 <select name="quoc-gia">
                    <?php
                        include ('connect.php');
                        $sql = "SELECT * FROM quoc_gia";
                        $result = mysqli_query($conn, $sql);
                        while($qg = mysqli_fetch_assoc($result)) {
                    ?>
                        <option value="<?php echo $qg['id'] ?>" <?php echo ($phim['quoc_gia_id'] == $qg['id']) ? 'selected' : ""; ?>><?php echo $qg['ten_quoc_gia'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div>
                <p> Số tập </p>
                <input type="number" name="sotap" placeholder="Số tập"  value="<?php echo $phim['so_tap'] ?>">
            </div>
            <div>
                <p> Trailer </p>
                <input type="text" name="trailer" placeholder="Tên trailer" value="<?php echo $phim['trailer'] ?>">
            </div>
            <div>
                <p>Mô tả </p>
                <textarea name="mota" placeholder="Mô tả phim"><?php echo $phim['mo_ta'] ?></textarea>
            </div>
           
            <div><input type="submit" value="Cập nhật"></div>
    </form>

      
</body>
</html>