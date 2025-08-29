<?php
require("connect_db.php");

// รับค่าจาก POST และทำความสะอาดข้อมูลเบื้องต้น
$student_code_edit = mysqli_real_escape_string($conn, $_POST["student_code_edit"]);
$student_code  = mysqli_real_escape_string($conn, $_POST["student_code"]);
$student_name = mysqli_real_escape_string($conn, $_POST["student_name"]);
$gender = mysqli_real_escape_string($conn, $_POST["gender"]);

// เขียน SQL ให้ถูกต้อง
$sql = "UPDATE students 
        SET student_code = '$student_code', 
            student_name = '$student_name',
            gender = '$gender' 
        WHERE student_code = '$student_code_edit'";

// รันคำสั่ง SQL
mysqli_query($conn, $sql);

// กลับไปหน้า student_list.php
header("Location: student_list.php");
exit(0);
?>
