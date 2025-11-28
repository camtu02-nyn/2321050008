<?php
$servername = "localhost";
$username = "root";
$password = ""; // có mật khẩu thì điền vào
$database = "fptplay";

// $port = 3306; // nếu cần thiết, không điền mặc định là cổng 3306

// Create connection
$conn = new mysqli($servername, $username, $password,$database);// trên khai báo port thì thêm , $port vào đây

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
// ?>