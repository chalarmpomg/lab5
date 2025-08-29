<?php
require("connect_db.php");

// รับค่าจาก POST
$course_code = mysqli_real_escape_string($conn, $_POST["course_code"]);
$course_name = mysqli_real_escape_string($conn, $_POST["course_name"]);
$credit = mysqli_real_escape_string($conn, $_POST["credit"]);

// สร้าง SQL query ที่ถูกต้อง
$sql = "INSERT INTO course(course_code, course_name, credit) 
        VALUES('$course_code', '$course_name', $credit)";

// Execute query
mysqli_query($conn, $sql);

// กลับไปหน้ารายวิชา
header("Location: course_list.php");
exit(0);
?>
