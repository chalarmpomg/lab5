<?php
require("connect_db.php");
echo "<center>";
echo "<form action=save_add_student.php method=post>";
echo "<table border=1 width=40%>";
echo "<tr><td>student code:</td><td><input type=text name=student_code /></td></tr>";
echo "<tr><td>student name:</td><td><input type=text name=student_name /></td></tr>";
echo "<tr><td>gender:</td><td><input type=text name=gender /></td></tr>";
echo "<tr><td colspan=2><center><input type=submit value=Submit /></center></td></tr>";
echo "</table>";
echo "</form>";
echo "</center>";
?>