<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="dabar_students"; // Database name 

// The different Table names
$table="devotions";

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from devotions form 
$week= $_POST['week'];
$devotiondate= $_POST['devotiondate'];
$dayOfWeek= $_POST['dayOfWeek'];
$devotion= $_POST['devotion'];
$scripture= $_POST['scripture'];
$ledby= $_POST['ledby'];
$attendance= $_POST['attendance'];

// Insert data into mysql 
$sql="INSERT INTO $table(week,devotiondate,dayOfWeek,devotion,scripture,ledby,attendance)VALUES('$week','$devotiondate','$dayOfWeek','$devotion','$scripture','$ledby','$attendance')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Devotion has been recorded.";
echo "<BR>";
echo "<a href='index.html'>Back to main page</a>";
}
else {
echo "ERROR";
}

?>