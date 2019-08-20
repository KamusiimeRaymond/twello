<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: adminrequest.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP and MySQL CRUD Operations Demo</title>

    <!-- Bootstrap CSS File  -->
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.5-dist/css/bootstrap.css"/>
    <style>
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
        .flag {
            color: #20afa7;
        }
    </style>
</head>
<body>
    <?php
    if($_SESSION["admin"]){
    ?>    
    <nav>
        <ul class="menu">
            <li><a href="menu.php">Back</a></li>
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
    <!-- Content Section -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="flag">Users:</h3>
                <div class="records_content"></div>
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Add New User</button>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap Modals -->
    <!-- Modal - Add New Record/User -->
    <div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" placeholder="First Name" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" placeholder="Last Name" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" placeholder="Username" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" id="password" placeholder="Password" class="form-control"/>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="addRecord()">Add Record</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal - Update User details -->
    <div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Update</h4>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <label for="update_fname">First Name</label>
                        <input type="text" id="update_fname" placeholder="First Name" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="update_lname">Last Name</label>
                        <input type="text" id="update_lname" placeholder="Last Name" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="update_username">Username</label>
                        <input type="text" id="update_username" placeholder="Username" class="form-control"/>
                    </div>

                    <div class="form-group">
                        <label for="update_password">Password</label>
                        <input type="text" id="update_password" placeholder="Password" class="form-control"/>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Save Changes</button>
                    <input type="hidden" id="hidden_user_id">
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery JS file -->
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <!-- Bootstrap JS file -->
    <script type="text/javascript" src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <!-- Custom JS file -->
    <script type="text/javascript" src="js/script.js"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-75591362-1', 'auto');
        ga('send', 'pageview');

    </script>
</body>
</html>
