<?php
require("../admin/connect.php");
  // output data of each row
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>Untitled</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/x-dropdown.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<style>
  .select2 {
    width: 100% !important;
    }
  .select2-container .select2-selection--single {
  height: 38px;
  line-height: 38px !important; 
  }
  .select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 38px;
  }
  .select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 36px;
  }
</style>
</head>
<body>
  <div class="container" style="padding-right: 10px;padding-left: 10px;">
    <h1 class="text-center" style="font-weight: bold;padding: 10px;border-bottom: 1px solid var(--bs-orange);font-size: 26px;">NGƯỜI MỚI LƯU TRÚ</h1>
    <form action="insert.php" method="POST">
        <div class="col">
            <h2 style="font-size: 23px;margin-top: 20px;margin-bottom: 15px;"><strong>Thông tin</strong></h2>
            <div class="row">
                <div class="col-6 col-md-6 col-lg-6" style="margin-bottom: 15px;">
                    <label style="font-size: 16px;"><strong>Họ và tên</strong></label>
                    <input name="hvten" class="form-control" type="text" placeholder="Nhập họ và tên" required>
                </div>
                <div class="col-6 col-md-6 col-lg-6" style="margin-bottom: 15px;">
                    <label style="font-size: 16px;"><strong>Số điện thoại</strong></label>
                    <input name="sdt" class="form-control" type="tel" placeholder="Nhập số điện thoại" required>
                </div>
                <div class="col-7 col-sm-6 col-md-6 col-lg-4" style="margin-bottom: 15px;">
                    <label style="font-size: 16px;"><strong>Ngày sinh</strong></label>
                    <input name="nsinh" class="form-control" type="date" name="dd/mm/yyyy" required>
                </div>
                <div class="col-5 col-sm-6 col-md-6 col-lg-4" style="margin-bottom: 15px;">
                    <label style="font-size: 16px;"><strong>Giới tính</strong></label>
                    <select name="gtinh" id="" class="form-control gtinh" placeholder="Chọn giới tính" required>
                        <option value=""></option>
                        <option value="AL">Nam</option>
                        <option value="AK">Nữ</option>
                        <option value="AZ">khác</option>
                    </select>
                    <script>
                    $(document).ready(function() {
                        $('.gtinh').select2({
                          placeholder: "Chọn giới tính"
                        });
                      
                    });
                    </script>
                </div>
                <div class="col-md-12 col-lg-4" style="margin-bottom: 15px;">
                    <label style="font-size: 16px;"><strong>Số&nbsp;<span style="color: rgb(41, 45, 52);">ĐDCN/CCCD/CMND</span></strong></label>
                    <input name="cccd" class="form-control" type="text" placeholder="Nhập ĐDCN/CCCD/CMND" required>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-4" style="margin-bottom: 15px;">
                    <label style="font-size: 16px;"><strong>Quốc tịch</strong></label>
                    <select name="qtich" id="" class="form-control qtich" required>  
                    <option value=""></option>
                        <?php
                        // Thực hiện truy vấn
                        $query = "SELECT * FROM qgia WHERE id != '' ";
                        $result = mysqli_query($conn, $query);
                        // Lấy dữ liệu từ kết quả truy vấn
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['qgia'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <script>
                    $(document).ready(function() {
                        $('.qtich').select2({
                          placeholder: "Chọn quốc tịch"
                        });
                      
                    });
                    </script>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-4" style="margin-bottom: 15px;">
                <label style="font-size: 16px;"><strong>Dân tộc</strong></label>
                    <select name="dtoc" id="" class="form-control dtoc" required>
                        <option value=""></option>
                            <?php
                            // Thực hiện truy vấn
                            $query = "SELECT * FROM dantoc WHERE id != '' ";
                            $result = mysqli_query($conn, $query);
                            // Lấy dữ liệu từ kết quả truy vấn
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <option value="<?php echo $row['id'] ?>"><?php echo $row['dtoc'] ?></option>
                            <?php
                            }
                            ?>
                    </select>
                    <script>
                    $(document).ready(function() {
                        $('.dtoc').select2({
                          placeholder: "Chọn dân tộc"
                        });
                      
                    });
                    </script>
                </div>

            </div>
        </div>
        <div class="col" style="border-bottom: 1px solid var(--bs-orange);">
            <h2 style="font-size: 23px;margin-top: 20px;margin-bottom: 15px;"><strong>Địa chỉ thường trú</strong></h2>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 15px;">
                    <label style="font-size: 16px;"><strong>Quốc gia</strong></label>
                    <select name="qgia" id="stateSelect3" class="form-control qgia" name="state" onchange="quocgia(this.value)" required>
                        <option value=""></option>
                        <?php
                        // Thực hiện truy vấn
                        $query = "SELECT * FROM qgia WHERE id != '' ";
                        $result = mysqli_query($conn, $query);
                        // Lấy dữ liệu từ kết quả truy vấn
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['qgia'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <script>
                    $(document).ready(function() {
                        $('.qgia').select2({
                          placeholder: "Chọn quốc gia"
                        });
                      
                    });
                    </script>
                </div>
                
                <div class="col-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 15px;">
                  <label style="font-size: 16px;"><strong><span style="color: rgb(41, 45, 52);">Tỉnh/ thành phố</span></strong></label>
                  <select name="tthanh" id="select-state1" class="form-control tthanh" onchange="tinhthanh(this.value)" placeholder="Tỉnh/ Thành phố" required>
                      <option value=""></option>
                  </select>
                  <script>
                    $(document).ready(function() {
                        $('.tthanh').select2({
                          placeholder: "Chọn tỉnh/ thành phố"
                        });
                      
                    });
                    </script>
                </div>
                <script>
                function quocgia(str) {
                  if (str == "") {
                    document.getElementById("select-state1").innerHTML = "";
                    return;
                  }
                  const xhttp = new XMLHttpRequest();
                  xhttp.onload = function() {
                    document.getElementById("select-state1").innerHTML = this.responseText;
                  }
                  xhttp.open("GET", "data/tthanh.php?123="+str);
                  xhttp.send();
                }
                </script>
                
                <div class="col-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 15px;">
                    <label style="font-size: 16px;"><strong><span style="color: rgb(41, 45, 52);">Quận/ Huyện</span></strong></label>
                    <select name="qhuyen" id="select-district1" class="form-control qhuyen" onchange="quanhuyen(this.value)" placeholder="Quận/ Huyện" required>
                      <option value=""></option>
                    </select>
                    <script>
                    $(document).ready(function() {
                        $('.qhuyen').select2({
                          placeholder: "Chọn quận/ huyện"
                        });
                      
                    });
                    </script>
                </div>

                <script>
                function tinhthanh(str) {
                  if (str == "") {
                    document.getElementById("select-district1").innerHTML = "";
                    return;
                  }
                  const xhttp = new XMLHttpRequest();
                  xhttp.onload = function() {
                    document.getElementById("select-district1").innerHTML = this.responseText;
                  }
                  xhttp.open("GET", "data/qhuyen.php?q="+str);
                  xhttp.send();
                }
                </script>
        
                <div class="col-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 15px;">
                    <label style="font-size: 16px;"><strong><span style="color: rgb(41, 45, 52);">Phường/ Xã</span></strong></label>
                    <select id="select-ward" class="form-control pxa" required>
                      <option value=""></option>
                    </select>
                    <script>
                    $(document).ready(function() {
                        $('.pxa').select2({
                          placeholder: "Chọn phường/ xã"
                        });
                    });
                    </script>
                </div>

                <script>
                function quanhuyen(str) {
                  if (str == "") {
                    document.getElementById("select-ward").innerHTML = "";
                    return;
                  }
                  const xhttp = new XMLHttpRequest();
                  xhttp.onload = function() {
                    document.getElementById("select-ward").innerHTML = this.responseText;
                  }
                  xhttp.open("GET", "data/pxa.php?abc="+str);
                  xhttp.send();
                }
                </script>

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xxl-12" style="margin-bottom: 15px;">
                    <label style="font-size: 16px;"><strong><span style="color: rgb(41, 45, 52);">Số nhà, đường phố, thôn</span></strong></label>
                    <input class="form-control d-xxl-flex" type="text" style="text-align: left;" placeholder="Nhập địa chỉ (vd: 14/2abc)" required>
                </div>
                <div class="col-7 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 15px;">
                    <label style="font-size: 16px;"><strong><span style="color: rgb(41, 45, 52);">Lý do lưu trú</span></strong></label>
                    <input class="form-control" type="text" placeholder="nhập lý do lưu trú">
                </div>
                <div class="col-5 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 15px;">
                    <label style="font-size: 16px;"><strong><span style="color: rgb(41, 45, 52);">Số phòng</span></strong></label>
                    <select id="select-state" class="form-control" required >
                      <option value="">Số phòng</option>
                      <?php
                      // Thực hiện truy vấn
                      $query = "SELECT * FROM sphong ";
                      $result = mysqli_query($conn, $query);

                      // Lấy dữ liệu từ kết quả truy vấn
                      while ($row = mysqli_fetch_assoc($result)) {
                      ?>
                      <option value="<?php echo $row['id'] ?>"><?php echo $row['sphong'] ?></option>
                      <?php
                      }
                      ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="d-flex d-xxl-flex justify-content-center" style="width: 100%;margin-top: 15px;margin-bottom: 50px;">
            <button class="btn btn-primary d-flex" type="submit" name="button1" style="background: var(--bs-orange);border-bottom-color: var(--bs-orange);font-size: 18px;">
            <strong>Đăng kí lưu trú</strong></button>
        </div>
    </form>
</div>
</body>

<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</html>


<?php
// Đóng kết nối sau khi hoàn thành công việc
$conn->close();
?>