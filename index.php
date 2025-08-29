<?php
require("connect_db.php");

$sql = "SELECT student_code, student_name, gender FROM students";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // แสดงข้อมูลนักเรียนทั้งหมด
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Code: " . $row["student_code"] . 
             " Name: " . $row["student_name"] . 
             " Gender: " . $row["gender"] . "<br>";
    }

    // ปุ่มเดียวด้านล่างสุด
    echo "<br><center><a href='exam_result.php'><button>เริ่ม</button></a></center>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
