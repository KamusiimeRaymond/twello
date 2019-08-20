<?php
session_start();
$message="";
if(count($_POST)>0){
    $con = mysqli_connect('localhost','root','','dabar_students') or die('Unable To Cnnect');
    $result = mysqli_query($con,"select * from databaseadmin where admin ='".$_POST["admin"]."' and password = '".$_POST["password"]."'");
    $row = mysqli_fetch_array($result);
    if(is_array($row)){
        $_SESSION["admin"]=$row[admin];
        $_SESSION["password"]=$row[password];
    } else{
        $message="Invalid Password or Username";
    }
}
if(isset($_SESSION["admin"])){
    header("Location: adminindex.php");
}
?>
<!doctype html>  
<html>  
<head>  
    <title>Login</title>  
    <!--<link rel="stylesheet" type="text/css" href="css/login.css">--> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <style>
        /*Fonts*/
        @font-face {
            font-family: coverfont;
            src: url(fonts/Abite.otf);
        }
        @font-face {
            font-family: bodyfont;
            src: url(fonts/Quicksand-Regular.otf);
        }
        @font-face {
            font-family: leadfont;
            src: url(fonts/Railways-Regular.otf);
        }
        /*------------------------------*/
        body{
        /*background: linear-gradient( rgb(5, 69, 71), rgb(50, 100, 71) );*/
        /*background-color: #20afa7;*/
        font-family: bodyfont;
        margin: 0 auto 0 auto;
        width: 100%;
        text-align: center;
        margin: 20px 0px 20px 0px;
        /*background-color: rgb(255, 248, 175);*/
        }
        .menu {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #20afa7;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        width: 100%;
        }
        .menu li {
        float: left;
        }
        .menu p {
        color: white;
        text-align: center;
        padding: 12px 20px;
        }
        .menu li a {
        display: block;
        color: white;
        text-align: center;
        padding: 10px 10px;
        text-decoration: none;
        }
        h3 {
        color: white;
        }
        .menu li a:hover{
        background-color: white;
        text-decoration: none;
        color: #20afa7;
        }
        .covermenu {
        background-color: #20afa7;
        background-position: fixed;
        background-attachment: fixed;
        background-size: cover;
        display: table;
        width: 100%;
        height: 200px;
        padding: 0 20%;
        /*box-shadow: inset 0 0 100px #000;*/
        /*clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);*/
        }
        .cover-text {
        top: 50px;
        text-align: center;
        display: table-cell;
        vertical-align: middle;
        }
        .mainheader {
        color: white;
        font-size: 40px;
        font-family: bodyfont;
        }
        .main {
        background-color: #20afa7;
        width: 220px;
        height: 320px;
        border-radius: 10px;
        margin: 0 auto 50% auto;
        padding: 0px 0px 70px 0px;
        /*border: rgb(245, 245, 245) 1px solid;*/
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .field {
        width: 180px;
        background: rgb(236, 242, 245);
        margin: 0 auto 0 auto;
        }
        h5 {
        font-size: 13px;        
        text-align-last: left;
        font-weight: bold;    
        }
        #btn {
        background-color: rgb(12, 66, 66);
        color:rgb(255, 255, 255);
        width: 100px;
        border-radius: 50px;
        }
        #btn:hover {
        background-color: rgb(194, 213, 214);
        color: rgb(7, 46, 46);
        font-weight: bold;
        }
    </style>
</head> 
<body>
    <!--Login form-->
    <div class="main">
        <div class="cover">
            <div>
                <center>
                <h5>You are requesting for admin sevices</h5>
                <img src="images/dabarlogo.png" width="120px">
                </center>
            </div>
            <form action="" method="POST">
                <div class="cover-text">
                    <div class="form-group">
                        <label class="control-label" for="admin"><h5>Username:</h5></label>
                        <input type="text" class="field form-control" id="admin" name="admin">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="pwd"><h5>Password:</h5></label>
                        <input type="password" class="field form-control" id="pass" name="password">
                    </div>
                </div>
                <center><button type="submit" class="btn btn-default" id="btn" value="Login">Log In</button></center>
                <div class="message"><p font-size="15px" color="red"><?php if($message!=""){ echo $message; } ?></p></div>
            </form>
        </div>
    </div>
</body>  
</html>   