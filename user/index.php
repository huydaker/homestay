<?php
// require("../connect.php");
// // Kiểm tra xem có cookie phiên đăng nhập không
// if (isset($_COOKIE["user_session"])) {
//     // Kiểm tra xem cookie còn hiệu lực không
//     if (time() > $_COOKIE["user_session"]) {
//         // Phiên đăng nhập đã hết hạn, chuyển hướng đến trang đăng nhập
//         header("Location: ../login.php");
//         exit();
//     }
// } else {
//     // Không có cookie phiên đăng nhập, chuyển hướng đến trang đăng nhập
//     header("Location: ../login.php");
//     exit();
// }
?>


<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_COOKIE["user_session"])) {
    // Người dùng chưa đăng nhập, chuyển hướng đến trang đăng nhập
    header("Location: ../login.php");
    exit();
}

// Người dùng đã đăng nhập, cho phép truy cập nội dung của trang
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>HELLO WORLD</h1>
    <a href="../test/index.php">test</a>
</body>
</html>