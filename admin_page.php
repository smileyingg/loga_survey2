<?php
require "check_login.php";
include 'head.php';
?>
<!DOCTYPE html>
<html>

<style>
  .h-form .form-body .h-form-label {
    height: auto !important;
  }
</style>

<body>
  <?php
  if ($_SESSION['user_id'] == "") {
    header("Location: admin_login.php");
    exit();
  }
  include('head.php');
  include('header.php');
  include('dbconfig.php');

  $query = "SELECT * FROM answers order by id desc";
  $result = mysqli_query($conn, $query);
  ?>

  <div style="padding:10px;" align="right">
    <button id="exportExcel_Button" type="button" class="btn btn-success" onclick="exportExcel()">Export Excel</button>
    <a href="admin_login.php" id="logout_Button" value="submit" class="btn btn-outline-success">Logout</a>
  </div>

  <div style="overflow-x:auto;padding:10Px;">
    <table class="table table-hover table-striped table-bordered table-sm table-responsive" id="dtHorizontalVerticalExample">
      <!-- หัวข้อตาราง -->
      <tr align='center' bgcolor='#CCCCCC'>
        <td>id</td>
        <td>วันที่เข้าร่วมงาน</td>
        <td>วันที่กรอกข้อมูล</td>
        <td>ข้อ 1.1</td>
        <td>ข้อ 1.2</td>
        <td>ข้อ 2.1</td>
        <td>ข้อ 2.2</td>
        <td>ข้อ 2.3</td>
        <td>ข้อ 2.4</td>
        <td>ข้อ 3.1</td>
        <td>ข้อ 3.2</td>
        <td>ข้อ 3.3</td>
        <td>ข้อ 3.4</td>
        <td>ข้อ 4.1</td>
        <td>ข้อ 4.2</td>
        <td>ข้อ 4.3</td>
        <td>ข้อ 4.4</td>
        <td>ข้อ 4.5</td>
        <td>ยินดีเข้าร่วมหรือไม่</td>
        <td>สะดวกเข้าร่วมช่วงเวลาใด</td>
        <td>กิจกรรมที่ต้องการให้จัดในครั้งถัดไป</td>
        <td>อื่นๆ</td>
        <td>ทำไมถึงตัดสินใจเข้าร่วมงานสัมมนา</td>
        <td>ข้อเสนอแนะเพิ่มเติม</td>
        <!-- <td>ลบข้อมูล</td> -->
      </tr>

      <?php
      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] .  "</td> ";
        echo "<td>" . $row["date_time"] .  "</td> ";
        echo "<td>" . $row["date_event"] .  "</td> ";
        echo "<td>" . $row["q1_1"] .  "</td> ";
        echo "<td>" . $row["q1_2"] .  "</td> ";
        echo "<td>" . $row["q2_1"] .  "</td> ";
        echo "<td>" . $row["q2_2"] .  "</td> ";
        echo "<td>" . $row["q2_3"] .  "</td> ";
        echo "<td>" . $row["q2_4"] .  "</td> ";
        echo "<td>" . $row["q3_1"] .  "</td> ";
        echo "<td>" . $row["q3_2"] .  "</td> ";
        echo "<td>" . $row["q3_3"] .  "</td> ";
        echo "<td>" . $row["q3_4"] .  "</td> ";
        echo "<td>" . $row["q4_1"] .  "</td> ";
        echo "<td>" . $row["q4_2"] .  "</td> ";
        echo "<td>" . $row["q4_3"] .  "</td> ";
        echo "<td>" . $row["q4_4"] .  "</td> ";
        echo "<td>" . $row["q4_5"] .  "</td> ";
        echo "<td>" . $row["q5"] .  "</td> ";
        echo "<td>" . $row["q6"] .  "</td> ";
        echo "<td>" . $row["q7"] .  "</td> ";
        echo "<td>" . $row["another_Q7"] .  "</td> ";
        echo "<td>" . $row["seminar_detail"] .  "</td> ";
        echo "<td>" . $row["suggestions_detail"] .  "</td> ";

        //ลบข้อมูล
        // echo "<td style='text-align: center;'><a href='admin_del.php?id=$row[0]' onclick=\"return confirm('คุณต้องการลบข้อมูลแถวนี้ใช่หรือไม่? !!!')\"><img src='assets/images/bin.png' style='width:25px;heigth:25px;' /></a></td> ";
        echo "</tr>";
      }
      echo "</table>";
      mysqli_close($conn);
      ?>
  </div>

  <!-- <script>
    $(document).ready(function() {
      $('#dtHorizontalExample').DataTable({
        "scrollX": true
      });
      $('.dataTables_length').addClass('bs-select');
    });
  </script>

  <style>
    .dtHorizontalExampleWrapper {
      max-width: 600px;
      margin: 0 auto;
    }

    #dtHorizontalExample th,
    td {
      white-space: nowrap;
    }

    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_desc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:before {
      bottom: .5em;
    }
  </style> -->
</body>

</html>






<script type="text/javascript">
  function exportExcel() {
    window.location = './exportExcel.php';
  }
</script>