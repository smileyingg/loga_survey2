<?php
session_start();
	header('Content-type: text/html; charset=utf-8');
	include 'head.php';
	include 'dbconfig.php';
	$username =	$_POST['txtUsername'];
	$password = $_POST['txtPassword'];
	$strSQL = "SELECT * FROM members WHERE username = '$username'AND pass = '$password'";
 	$result = mysqli_query($conn, $strSQL);
	$row = mysqli_fetch_assoc($result);
	if (!$row) {
		 echo "<script>alert('ชื่อผู้ใช้และรหัสผ่านผิด กรุณากรอกข้อมูลให้ถูกต้อง!');window.location = './admin_login.php';</script>";
	} else {
		//สร้าง SESSION เพื่อใช้ในหน้าอื่น ที่ต้องการตรวจสอบข้อมูลผู้ใช้ในขณะนั้น
		$_SESSION["user_id"]   = $row["user_id"];
	}
