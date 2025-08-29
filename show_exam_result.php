<?php
require("connect_db.php");

// ตรวจสอบว่ามี course_code จาก URL หรือไม่
$course_code = isset($_GET["course_code"]) ? $_GET["course_code"] : '';
if (empty($course_code)) {
    die("Error: course_code is not provided in the URL.");
}

// ดึงชื่อวิชา
$sql = "SELECT * FROM course WHERE course_code='$course_code'";
$result = mysqli_query($conn, $sql);
$course = mysqli_fetch_assoc($result);

// ดึงผลสอบร่วมกับชื่อนักเรียน (ตาราง students)
$sql = "SELECT E.*, S.student_name
        FROM exam_result AS E
        INNER JOIN students AS S ON E.student_code = S.student_code
        WHERE E.course_code = '$course_code'";
$result = mysqli_query($conn, $sql);

// แสดงผล
echo "<center>";
echo "<h1>Exam Result: " . htmlspecialchars($course["course_name"]) . "</h1>";
echo "<table border=1 width=40%>";
echo "<tr><th>Student Code</th><th>Student Name</th><th>Point</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>" . htmlspecialchars($row["student_code"]) . "</td><td>" . 
         htmlspecialchars($row["student_name"]) . "</td><td>" . 
         htmlspecialchars($row["point"]) . "</td></tr>";
}
echo "</table>";
echo "</center>";

mysqli_close($conn);
?>
