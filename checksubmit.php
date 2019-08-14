<?php
if (
  isset($_POST['date_event']) && isset($_POST['q1_s1']) && isset($_POST['q1_s2']) && isset($_POST['q2_s1']) && isset($_POST['q2_s2']) && isset($_POST['q2_s3']) && isset($_POST['q2_s4']) && isset($_POST['q3_s1']) &&
  isset($_POST['q3_s2']) && isset($_POST['q3_s3']) && isset($_POST['q3_s4']) && isset($_POST['q3_time']) && isset($_POST['q4_s1']) && isset($_POST['q4_s2']) && isset($_POST['q4_s3']) && isset($_POST['q4_s1']) && isset($_POST['q4_s2']) && isset($_POST['q5_s1']) && isset($_POST['q5_s2'])
) {


  include 'dbconfig.php';
  $date_event = $_POST['date_event'];
  $q1_s1 = $_POST['q1_s1'];
  $q1_s2 = $_POST['q1_s2'];
  $q2_s1 = $_POST['q2_s1'];
  $q2_s2 = $_POST['q2_s2'];
  $q2_s3 = $_POST['q2_s3'];
  $q2_s4 = $_POST['q2_s4'];
  $q3_s1 = $_POST['q3_s1'];
  $q3_s2 = $_POST['q3_s2'];
  $q3_s3 = $_POST['q3_s3'];
  $q3_s4 = $_POST['q3_s4'];
  $q3_time = $_POST['q3_time'];
  $q4_s1 = $_POST['q4_s1'];
  $q4_s2 = $_POST['q4_s2'];
  $q4_s3 = $_POST['q4_s3'];
  $q4_s4 = $_POST['q4_s4'];
  $q4_s5 = $_POST['q4_s5'];
  $q5_s1 = $_POST['q5_s1'];
  $q5_s2 = $_POST['q5_s2'];
  $next_seminar_detail = $_POST['next_seminar_detail'];
  $suggestions_detail = $_POST['suggestions_detail'];

  $sql = "INSERT INTO answers (date_event, q1_1, q1_2, q2_1, q2_2, q2_3, q2_4, q3_1, q3_2, q3_3, q3_4 ,q3_time, q4_1, q4_2, q4_3, q4_4, q4_5, q5_1, q5_2, next_seminar_detail, suggestions_detail) 
  VALUES ('$date_event','$q1_s1', '$q1_s2', '$q2_s1', '$q2_s2', '$q2_s3', '$q2_s4', '$q3_s1', '$q3_s2', '$q3_s3', '$q3_s4', '$q3_time', '$q4_s1', '$q4_s2', '$q4_s3', '$q4_s4', '$q4_s5', '$q5_s1', '$q5_s2','$next_seminar_detail', '$suggestions_detail')";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo '1';
  } else {
    echo '0';
  }
  $conn->close();
} else {
  echo ('10');
}
