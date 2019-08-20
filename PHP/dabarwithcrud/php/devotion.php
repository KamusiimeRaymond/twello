<?php
$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="dabar_students"; // Database name 
$tbl_name="devotions"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form 
$week= $_POST['week'];
$devotiondate= $_POST['devotiondate'];
$dayOfWeek= $_POST['dayOfWeek'];
$devotion= $_POST['devotion'];
$scripture= $_POST['scripture'];
$ledby= $_POST['ledby'];
$attendance= $_POST['attendance'];

// Insert data into mysql 
$sql="INSERT INTO $tbl_name(week,devotiondate,dayOfWeek,devotion,scripture,ledby,attendance)VALUES('$week','$devotiondate','$dayOfWeek','$devotion','$scripture','$ledby','$attendance')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='/views/index.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();
 
?>