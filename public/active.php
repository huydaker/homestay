<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>dang nhap thong tin</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic-icons.css">
   
</head>

<body>
    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Đăng nhập</h2>
                    <p class="w-lg-50"></p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4" style="background: var(--bs-orange);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                </svg></div>
                            <form class="text-center" method="POST" action="">
                                <div class="mb-3">
                                    <label class="form-label" style="font-size: 13px;text-align: left;">Nhập số&nbsp;
                                    <span style="color: rgb(41, 45, 52);" id="showAlertButton">ĐDCN/CCCD/CMND</span><br></label>
                                    <input class="form-control" type="text" pattern="[0-9]{10}|[0-9]{12}" name="idcd" id="idcd" placeholder="ĐDCN/CCCD/CMND" style="font-size: 10px;">
                                </div>
                                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: var(--bs-orange);" name="submit">Đăng nhập</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="mb-3"><label class="form-label" style="font-size: 17px;text-align: left;">Thêm người mới lưu trú<br></label>
                            <a href="form.php">
                                <button class="btn btn-primary d-block w-100"  style="background: var(--bs-orange);">Đăng kí</button></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <a href="./test.php">test</a>
</body>


<?php
require("./admin/connect.php");

if(isset($_POST["submit"])) {
    $idcd = $_POST["idcd"];
    $sql = "SELECT sdt FROM test where sdt = '$idcd' ";
    $result = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($result);
    echo"neww";

    // Kiểm tra nếu người dùng đã nhấn nút submit

    // Lấy giá trị cột sdt từ kết quả truy vấn
    echo $idcd;

     // Lấy giá trị người dùng nhập từ form
    

    if ($num_rows==0) {
			echo "tên đăng nhập hoặc mật khẩu không đúng !";
            echo '<script>alert("ĐDCN/CCCD/CMND không tồn tại");</script>';
            
		}
    else{
			//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
			$_SESSION['username'] = $username;
            echo "tên đăng nhập hoặc mật khẩu đúng !";
            $expiry_time = time() + 2 * 3 ; // 2 giờ (2 * 3600 giây)
            setcookie("user_session", $username, $expiry_time);
            header("Location: user/index.php"); // Chuyển hướngtrangdashboard
            echo "thanhcong";
        }
}
?>

</html>