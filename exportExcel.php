<?php
set_time_limit(0);
header('Content-Type: text/html; charset=utf-8');

header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename="Result_Loga_Survey2.xls"');
echo '<html xmlns:o="urn:schemas-microsoft-com:office:office"xmlns:x="urn:schemas-microsoft-com:office:excel"xmlns="http://www.w3.org/TR/REC-html40">';

//ทำการดึงข้อมูลจาก Database
//Connect DB
include('dbconfig.php');
if ($conn->connect_errno) {
  die("Failed to connect to MySQL : (" . $conn->connect_errno . ") " . $conn->connect_error);
}
$conn->set_charset("utf8");
$query = " SELECT * from answers";
$res = $conn->query($query);
echo '<table style="width:100%" x:str>';
echo '  <tr>
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
        </tr>';
while ($row = $res->fetch_array()) {
  echo '<tr>
  <td>' . $row['id'] . '</td>
  <td>' . $row['date_event'] . '</td>
  <td>' . $row['date_time'] . '</td>
  <td>' . $row['q1_1'] . '</td>
  <td>' . $row['q1_2'] . '</td>
  <td>' . $row['q2_1'] . '</td>
  <td>' . $row['q2_2'] . '</td>
  <td>' . $row['q2_3'] . '</td>
  <td>' . $row['q2_4'] . '</td>
  <td>' . $row['q3_1'] . '</td>
  <td>' . $row['q3_2'] . '</td>
  <td>' . $row['q3_3'] . '</td>
  <td>' . $row['q3_4'] . '</td>
  <td>' . $row['q4_1'] . '</td>
  <td>' . $row['q4_2'] . '</td>
  <td>' . $row['q4_3'] . '</td>
  <td>' . $row['q4_4'] . '</td>
  <td>' . $row['q4_5'] . '</td>
  <td>' . $row['q5'] . '</td>
  <td>' . $row['q6'] . '</td>
  <td>' . $row['q7'] . '</td>
  <td>' . $row['another_Q7'] . '</td>
  <td>' . $row['seminar_detail'] . '</td>
  <td>' . $row['suggestions_detail'] . '</td>

            </tr>';
}
echo '</table>';
