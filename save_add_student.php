<?php
require("connect_db.php");

// รับค่าจาก POST และป้องกัน SQL Injection เบื้องต้น
$student_code = mysqli_real_escape_string($conn, $_POST["student_code"]);
$student_name = mysqli_real_escape_string($conn, $_POST["student_name"]);
$gender = mysqli_real_escape_string($conn, $_POST["gender"]);

// แก้ SQL syntax ให้ถูกต้อง
$sql = "INSERT INTO students(student_code, student_name, gender) 
        VALUES('$student_code', '$student_name', '$gender')";

// ทำการ execute คำสั่ง SQL
mysqli_query($conn, $sql);

// เปลี่ยนหน้าไปยัง student_list.php
header("Location: student_list.php");
exit(0);
?>
