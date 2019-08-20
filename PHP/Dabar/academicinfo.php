<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="dabar_students"; // Database name 
$table="academicinfo";

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from devotions form 
$week= $_POST['week'];
$paceTest= $_POST['paceTest'];
$student_name= $_POST['student_name'];
$numberOfPages= $_POST['numberOfPages'];

// Insert data into mysql 
$sql="INSERT INTO $table(week,paceTest,student_name,numberOfPages)VALUES('$week','$paceTest','$student_name','$numberOfPages')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Academic Info has been recorded.";
echo "<BR>";
echo "<a href='index.php'>Back to main page</a>";
}
else {
echo "ERROR";
}
?>