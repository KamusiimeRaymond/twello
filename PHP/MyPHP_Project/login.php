<?php
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $myusername=mysql_real_escape_string($db,$_POST['username']);
    $mypassword=mysql_real_escape_string($db,$_POST['password']);
    $sql="SELECT id FROM admin WHERE username = '$myusername" and passcode = '$mypassword'";
    $result = mysql_query($db,$sql);
    $row
}