<option value=""></option>

   <?php
   require("../../admin/connect.php");
   // Thực hiện truy vấn
   // Lấy dữ liệu từ kết quả truy vấn
   $q = $_REQUEST["q"];
   $query = "SELECT * FROM qhuyen WHERE id = '$q'";
   $result = mysqli_query($conn, $query);
   // Lấy dữ liệu từ kết quả truy vấn
   while ($row = mysqli_fetch_assoc($result)) {
       echo '<option value="' . $row['soid'] . '">' . $row['qhuyen'] . '</option>';
   }
   ?>