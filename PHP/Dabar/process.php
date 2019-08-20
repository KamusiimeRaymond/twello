<?php
//get values from login.php form
$username= $_POST['username'];
$password= $_POST['password'];

//prevent mysql injection
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);

//connect to the server and database
mysql_connect("localhost", "root", "");
mysql_select_db("dabar_students");

//query database for user
$result = mysql_query("select * from users where username = '$username' and password = '$password'") 
//or die("Failed to query database " .mysql_error());
or die("Sorry, unauthorized user");

$row = mysql_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password){
    //on successful login
    echo "You are logged in to the Dabar Report Portal " .$row['username'];
    include 'index.php';
} 
else{
echo "Failed to login!";
}
 
?>