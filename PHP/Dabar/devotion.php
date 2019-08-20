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
$date= $_POST['date'];
$devotion= $_POST['devotion'];
$scripture= $_POST['scripture'];
$ledby= $_POST['ledby'];
$attendance= $_POST['attendance'];

// Insert data into mysql 
$sql="INSERT INTO $tbl_name(date,devotion,scripture,ledby,attendance)VALUES('$date','$devotion','$scripture','$ledby','$attendance')";
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful". 
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='index.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 

<?php 
// close connection 
mysql_close();



//get values from Report form
/*$date= $_POST['date'];
$devotion= $_POST['devotion'];
$scripture= $_POST['scripture'];
$ledby= $_POST['ledby'];
$attendance= $_POST['attendance'];

if(isset($_POST['add'])) {
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
 
    if(! $conn ) {
       die('Could not connect: ' . mysql_error());
    }

    if(! get_magic_quotes_gpc() ) {
        $date= addslashes ($_POST['date']);
        $devotion= addslashes ($_POST['devotion']);
        $scripture= addslashes ($_POST['scripture']);
        $ledby= addslashes ($_POST['ledby']);
        $attendance= addslashes ($_POST['attendance']);
    } else {
        $date= $_POST['date'];
        $devotion= $_POST['devotion'];
        $scripture= $_POST['scripture'];
        $ledby= $_POST['ledby'];
        $attendance= $_POST['attendance']; 
    }

    $sql = "INSERT INTO devotions ".
       "(date,devotion,scripture,ledby,attendance)"."VALUES ".
       "('$date','$devotion','$scripture','$ledby','$attendance')";
       mysql_select_db('dabar_students');
    
    $retval = mysql_query( $sql, $conn );
 
    if(! $retval ) {
       die('Could not enter data: ' . mysql_error());
    }
    else {
    echo "Entered data successfully\n";
    include 'index.php';
    mysql_close($conn);
 }





/*

$date= addslashes ($_POST['date']);
$devotion= addslashes ($_POST['devotion']);
$scripture= addslashes ($_POST['scripture']);
$ledby= addslashes ($_POST['ledby']);
$attendance= addslashes ($_POST['attendance']);


//prevent mysql injection
$date=stripcslashes($date);
$devotion=stripcslashes($devotion);
$scripture=stripcslashes($scripture);
$ledby=stripcslashes($ledby);
$attendance=stripcslashes($attendance);

//-----------------------------------------------
$date=mysql_real_escape_string($date);
$devotion=mysql_real_escape_string($devotion);
$scripture=mysql_real_escape_string($scripture);
$ledby=mysql_real_escape_string($ledby);
$attendance=mysql_real_escape_string($attendance);

//connect to the server and database
mysql_connect("localhost", "root", "");
mysql_select_db("users");

//query database for user
$result = mysql_query("INSERT Into devotions (date,devotion,scripture,ledby,attendance) values(?,?,?,?,?)") 

$row = mysql_fetch_array($result);
echo "You are logged in to the Dabar Report Portal " .$row['date'];


//variables should not be empty
if (!empty ($devotion) || !empty ($scripture) || !empty ($ledby) || 
!empty ($attendance)){
    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="dabar_students";

    //connection
    $conn = new msqli($host,$dbUsername,$dbPassword,$dbname);
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
    }
    else{
        $INSERT = "INSERT Into devotions (date,devotion,scripture,ledby,attendance) values(?,?,?,?,?)";
        echo "Today's devotion is stored";

    }
    $conn->close();
}
else{
    echo "All fields are required";
    die();
}*/ 
?>