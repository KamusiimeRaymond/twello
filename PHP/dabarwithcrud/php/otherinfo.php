<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="dabar_students"; // Database name 

// The different Table names
$table="otherinfo";

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from devotions form 
$week= $_POST['week'];
$conduct= $_POST['conduct'];
$student_performance= $_POST['student_performance'];
$conclusion= $_POST['conclusion'];

// Insert data into mysql 
$sql="INSERT INTO $table(week,conduct,student_performance,conclusion)VALUES('$week','$conduct','$student_performance','$conclusion')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Other Info has been recorded.";
echo "<BR>";
echo "<a href='index.php'>Back to main page</a>";
}
else {
echo "ERROR";
}
?>