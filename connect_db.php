<?php
$servername = "127.0.0.1";
$username = "opth";
$password = "256911";
$db = "wtfweb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "เชื่อมต่อ DB สําเสร็จ";
?>