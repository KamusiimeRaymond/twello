<!doctype html>  
<html>  
<head>  
    <title>Create Report</title>  
    <link rel="stylesheet" type="text/css" href="PHP/css/createreport.css"> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head> 
<body>
    <section id="block">
        <section>
            <div class="container">
                <div class="row">    
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Devotions</a></li>
                        <li><a data-toggle="tab" href="#menu1">Academic Information</a></li>
                        <li><a data-toggle="tab" href="#menu2">Other</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <h3>Today's Devotion</h3>
                            <p>
                            <form action="devotionreport.php" method="POST">
                                Week: <input type="text" id="week" name="week" required><br>
                                Devotion: <input type="text" id="devotion" name="devotion" required><br>
                                Scripture: <input type="text" id="scripture" name="scripture" required><br>
                                Led by: <input type="text" id="ledby"5 name="ledby" required><br>
                                Attendance: <input type="text" id="attendance" name="attendance" required><br> 
                                <input type="submit" id="btn" value="Save" />
                            </form>
                            </p>
                        </div>

                        <!--
                        <form action="process.php" method="POST">
                            <div>
                                <div class="form-group">
                                    <label class="control-label" for="username">Username:</label>
                                    <input type="text" class="form-control" id="user" name="username">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="pwd">Password:</label>
                                    <input type="password" class="form-control" id="pass" name="password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default" id="btn" value="Login">Log In</button>
                        </form>
                        -->

                        <div id="menu1" class="tab-pane fade">
                            <h3>Students' Academic Information</h3>
                            <p>
                            <form action="academicinfo.php" method="POST">
                                Week: <input type="text" id="week" name="week" required><br>
                                PACE Tests: <input type="text" id="paceTest" name="paceTest"><br>
                                Student Name: <input type="text" id="student_name" name="student_name" required><br>
                                Number of Pages: <input type="text" id="numberOfPages" name="numberOfPages"><br> 
                                <input type="submit" id="btn" value="Save" />
                            </form>
                            </p>        
                        </div>

                        <div id="menu2" class="tab-pane fade">
                            <h3>Other Information</h3>
                            <p>
                            <form action="otherinfo.php" method="POST">
                                Week: <input type="text" id="week" name="week" required><br>
                                Student Conduct: <input type="text" id="conduct" name="conduct" required><br>
                                Student Performance: <input type="text" id="student_performance" name="student_performance"><br>
                                Conclusion: <input type="text" id="conclusion" name="conclusion"><br> 
                                <input type="submit" id="btn" value="Save" />
                            </form>
                            </p>
                        </div>
                    </div>
                </div>
                Date: <span id="datetime" name="date"></span></p>
                    <script>
                        var dt = new Date();
                        document.getElementById("datetime").innerHTML = dt.toDateString();
                    </script>        
                <a href='index.php'>Back to main page</a>
            </div>
        </section>
    </section>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>  
</html>   