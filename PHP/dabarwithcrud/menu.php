<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
?>
<!Doctype html>  
<html>  
<head>  
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main Page</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /*Fonts*/
    @font-face {
        font-family: bodyfont;
        src: url(fonts/Quicksand-Regular.otf);
    }
    @font-face {
        font-family: leadfont;
        src: url(fonts/Railways-Regular.otf);
    }
    body, html {
        height: 100%;
        font-family: bodyfont;
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
    .cover {
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
    .d {
        text-align:center;
        /*background-color:blue;
        /*padding: 20px;
        /*display: flex;*/
        /*justify-content: space-between;
        /*width: 100%;*/
    }
    .img {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .container {
        display: flex;
        justify-content: space-between;
    }
    .d1 {
        /*border: 1px solid #999;*/
        height: 160px;
        width: 160px;
        color: rgb(12, 66, 66);
        background-color: white;
        text-align: center;
        border-radius: 5px;
        margin: auto 20px 20px 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);  
    }
    a {
        text-decoration: none;
    }
    </style>
</head> 
<body>
    <?php
    if($_SESSION["username"]){
    ?>
    <nav>
        <ul class="menu">
            <li><p>Welcome <?php echo $_SESSION["username"]; ?></p></li>
            <li style="float:right"><a href="#">Account</a></li>
            <li style="float:right"><a href="logout.php" title="Logout">Logout</a></li>
        </ul>
    </nav>
    <?php
    } else echo "<h1>Please Login First.</h1>";
    ?>

    <div class="cover">
        <div class="cover-text">
            <h1 class="mainheader">Dabar Home School</h1>
            <!--<img src="images/dabarlogo.png" width="150px">-->
            <h3 class="opening">School System Portal</h3>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="d col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <a href="#">
                        <h5>Student Progress</h5>
                        <img src="images/target.png" class="img img-responsive" alt="progress" width="140px">
                    </a>
                </div>
                <div class="d col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <a href="#">
                        <h5>PACEs Completed</h5>
                        <img src="images/completed.png" class="img img-responsive" alt="progress" width="125px"> 
                    </a>
                </div>    
                <div class="d col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <a href="#">
                        <h5>PACE Results</h5>
                        <img src="images/percentages.png" class="img img-responsive" alt="progress" width="140px">
                    </a>
                </div>        
                <div class="d col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <a href="#">
                        <h5>Student Devotions</h5>
                        <img src="images/percentages.png" class="img img-responsive" alt="progress" width="140px">
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="container">
            <div class="row">    
                <div class="d col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <a href="adminrequest.php">
                        <h5>Admin Page</h5>
                        <img src="images/authentication.png" class="img img-responsive" alt="progress" width="140px">
                    </a>
                </div>    
                <div class="d col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <a href="createreport.php">
                        <h5>Create Report</h5>
                        <img src="images/files.png" class="img img-responsive" alt="progress" width="140px">
                    </a>    
                </div>
                <div class="d col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <a href="report.php">
                        <h5>Reports</h5>
                        <img src="images/reports.png" class="img img-responsive" alt="progress" width="140px">
                    </a>
                </div>   
                <div class="d col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <a href="#">
                        <h5>Termly Scripture</h5>
                        <img src="images/authentication.png" class="img img-responsive" alt="progress" width="140px">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>  
</html>   
