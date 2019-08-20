<?php

// Connection variables 
$host = "localhost"; // MySQL host name eg. localhost
$user = "root"; // MySQL user. eg. root ( if your on localserver)
$password = ""; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "dabar_students"; // MySQL Database name

// Connect to MySQL Database 
$con = new mysqli($host, $user, $password, $database);

//check for conncetion.or die("Could not connect to database");
if ($con -> connect_error){
    die("Connection failed: " .$con-> connect_error);
}

?>