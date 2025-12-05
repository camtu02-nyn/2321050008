<?php
include("connect.php");
//if(isset($_GET['id'])){
    

$id_xoa = $_GET['id']; 
$sql = "DELETE FROM phim WHERE id = $id_xoa";
mysqli_query($conn, $sql);
//}
header("Location: index.php?page_layout=phim");
?>