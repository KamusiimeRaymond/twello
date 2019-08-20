<?php
session_start();
$message="";
if(count($_POST)>0){
    $con = mysqli_connect('localhost','root','','dabar_students') or die('Unable To Cnnect');
    $result = mysqli_query($con,"select * from users where username ='".$_POST["username"]."' and password = '".$_POST["password"]."'");
    $row = mysqli_fetch_array($result);
    if(is_array($row)){
        $_SESSION["username"]=$row[username];
        $_SESSION["password"]=$row[password];
    } else{
        $message="Invalid Password or Username";
    }
}
if(isset($_SESSION["username"])){
    header("Location: menu.php");
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
        .main {
        background-color: #ffff;
        width: 220px;
        height: 300px;
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
        border-style: none;
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
                <center><img src="images/dabarlogo.png" width="120px"><center>
            </div>
            <form action="" method="POST">
                <div class="cover-text">
                    <div class="form-group">
                        <label class="control-label" for="username"><h5>Username:</h5></label>
                        <input type="text" class="field form-control" id="user" name="username">
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