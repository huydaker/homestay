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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <section class="position-relative py-4 py-xl-5">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card mb-5">
                        <div class="card-body p-sm-5">
                            <h2 class="text-center mb-4">thong tin</h2>
                            <form method="POST" action="../test.php">
                                <div class="mb-3">
                                    <label for="name">ho va ten</label>
                                    <input class="form-control" type="text" id="name" name="name" placeholder="Ho va ten">
                                </div>
                                <div class="mb-3">
                                    <label for="sdt">so dien thoai</label>
                                    <input class="form-control" type="tel" id="sdt" name="sdt" pattern="[0-9]{10}" placeholder="So dien thoai">
                                </div>
                                <div class="mb-3">
                                    <label for="dchi">dia chi</label>
                                    <textarea class="form-control" id="dchi" name="dchi" rows="6" placeholder="dia chi"></textarea>
                                </div>
                                <div>
                                    <button class="btn btn-primary d-block w-100" type="submit" name="submit" >Send </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>


</body>



</html>