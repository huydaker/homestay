<option value=""></option>
   <?php
   require("admin/connect.php");
   // Thực hiện truy vấn
   // Lấy dữ liệu từ kết quả truy vấn
   $abc = $_REQUEST["abc"];
   $query = "SELECT * FROM pxa WHERE id = '$abc'";
   $result = mysqli_query($conn, $query);
   // Lấy dữ liệu từ kết quả truy vấn
   while ($row = mysqli_fetch_assoc($result)) {
       echo '<option value="' . $row['soid'] . '">' . $row['pxa'] . '</option>';
   }
   ?>