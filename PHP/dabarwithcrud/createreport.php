<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
?>
<!doctype html>  
<html>  

<head>  
    <title>Create Report</title>  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="js/jspdf.min.js"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            font-family: bodyfont;
        }
        * {
            padding: 0;
            margin: 0;    
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
        .cover {
            background-color: #20afa7;
            background-position: fixed;
            background-attachment: fixed;
            background-size: cover;
            display: table;
            width: 100%;
            height: 150px;
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
        .opening {
            color: white;
        }
        #menu {
            padding: 20px;
            color: #20afa7;
        }
        .sect {
            font-size: 12px;
        }
    </style>
</head> 

<body>
    <nav>
        <ul class="menu">
            <li><a href="menu.php">Back</a></li>
            <li><p>Date: <span id="datetime" name="date"></span></p></li>
            <li style="float:right"><a href="#">Account</a></li>
            <li style="float:right"><a href="logout.php" title="Logout">Logout</a></li>
        </ul>
    </nav>

    <div class="container cover">
        <div class="cover-text">
            <h3 class="mainheader">Report Creator</h3>
            <p class="opening">Create a summary of the weekly devotion here.</p>        
        </div>
    </div>

    <section>
        <div class="container sect" id="bd">
            <div id="menu" class="row devotion">
                <div class="col-lg-3 col-md-2 col-sm-2 col-xs-12"></div>
                <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12 content">
                    <h3>Today's Devotion</h3>
                        <form action="devotionreport.php" method="POST">
                            <div>
                                <div class="form-group">
                                    <label class="control-label" for="week">Week:</label>   
                                    <input type="text" class="form-control d" id="week" name="week" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="dayOfWeek">Week Day</label>
                                    <input type="text" class="form-control d" id="dayOfWeek" name="dayOfWeek" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="devotion">Devotion:</label>
                                    <input type="text" class="form-control d" id="devotion" name="devotion" required>
                            </div>
                                <div class="form-group">
                                    <label class="control-label" for="scripture">Scripture:</label>
                                    <input type="text" class="form-control d" id="scripture" name="scripture" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="devotion">Led By:</label>
                                    <input type="text" class="form-control d" id="ledby" name="ledby" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="devotion">Attendance:</label>
                                    <input type="text" class="form-control d" id="attendance" name="attendance" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default" id="btn" value="Save">Save</button>
                        </form>
                </div>
                <div class="col-lg-3 col-md-2 col-sm-2 col-xs-12"></div>
            </div>

            <div id="menu" class="row academicinfo">
                <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12"></div>    
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 content">                                
                    <h3>Students' Academic Information</h3>
                    <form action="academicinfo.php" method="POST">
                        <div>
                            <div class="form-group">
                                <label class="control-label" for="week">Week:</label>
                                <input type="text" class="form-control d" id="week" name="week" required>
                            </div>
                            <div class="form-group">
                               <label class="control-label" for="dayOfWeek">Week Day</label>
                                <input type="text" class="form-control d" id="dayOfWeek" name="dayOfWeek" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="paceTest">PACE Test:</label>
                                <input type="text" class="form-control d" id="paceTest" name="paceTest" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="student_name">Student Name:</label>
                                <input type="text" class="form-control d" id="student_name" name="student_name" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="numberOfPages">Number of Pages:</label>
                                <input type="text" class="form-control d" id="numberOfPages" name="numberOfPages" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default" id="btn" value="Save">Save</button>
                    </form>        
                </div>
                <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12"></div>
            </div>
   
            <div id="menu" class="row otherinfo">
                <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12"></div>    
                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 content">    
                    <h3>Other Information</h3>                    
                    <form action="otherinfo.php" method="POST">
                        <div>
                            <div class="form-group">
                                <label class="control-label" for="week">Week:</label>
                                <input type="text" class="form-control" id="week" name="week" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="paceTest">Student Conduct:</label>
                                <input type="text" class="form-control" id="conduct" name="conduct" required>
                            </div>                                
                            <div class="form-group">
                                <label class="control-label" for="student_name">Student Performance:</label>
                                <input type="text" class="form-control" id="student_performance" name="student_performance" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="numberOfPages">Conclusion:</label>
                                <input type="text" class="form-control" id="conclusion" name="conclusion" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default" id="btn" value="Save">Save</button>
                    </form>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12"></div>    
            </div>
        </div>
    </section>
    <section>
        <div>
            <p>Display Report for previous week<a href="displayrepo.php">View</a></p>
        </div>
    </section>
            <script>
            var dt = new Date();
                document.getElementById("datetime").innerHTML = dt.toDateString();
            </script>        
            <a href='menu.php'>Back to main page</a>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>  
</html>