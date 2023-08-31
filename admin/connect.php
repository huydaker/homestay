<?php


$username = "epiz_33365890"; // Khai báo username
$password = "GR6aPja6YmaFFY";      // Khai báo password
$servername   = "sql212.infinityfree.com";   // Khai báo server
$dbname   = "epiz_33365890_quanli";      // Khai báo database
// tạo connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// kiểm tra connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo"connect";
}

?>