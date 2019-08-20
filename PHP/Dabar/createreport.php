<!doctype html>  
<html>  
<head>  
    <title>Create Report</title>  
    <link rel="stylesheet" type="text/css" href="css/createreport.css"> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="js/jspdf.min.js"></script>
    <script type="text/javascript" src="js/print.js"></script>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/styles/createreport.css" rel="stylesheet">
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
                        <li><a data-toggle="tab" href="#menu3">Print Report</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <h3>Today's Devotion</h3>
                            <p>
                                <form action="devotionreport.php" method="POST">
                                    <div>
                                        <div class="form-group">
                                            <label class="control-label" for="week">Week:</label>
                                            <input type="text" class="form-control" id="week" name="week" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="devotion">Devotion:</label>
                                            <input type="text" class="form-control" id="devotion" name="devotion" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="scripture">Scripture:</label>
                                            <input type="text" class="form-control" id="scripture" name="scripture" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="devotion">Led By:</label>
                                            <input type="text" class="form-control" id="ledby" name="ledby" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="devotion">Attendance:</label>
                                            <input type="text" class="form-control" id="attendance" name="attendance" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-default" id="btn" value="Save">Save</button>
                                </form>
                            </p>
                        </div>

                        <div id="menu1" class="tab-pane fade">
                            <h3>Students' Academic Information</h3>
                            <p>                            
                                <form action="academicinfo.php" method="POST">
                                    <div>
                                        <div class="form-group">
                                            <label class="control-label" for="week">Week:</label>
                                            <input type="text" class="form-control" id="week" name="week" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="paceTest">PACE Test:</label>
                                            <input type="text" class="form-control" id="paceTest" name="paceTest" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="student_name">Student Name:</label>
                                            <input type="text" class="form-control" id="student_name" name="student_name" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="numberOfPages">Number of Pages:</label>
                                            <input type="text" class="form-control" id="numberOfPages" name="numberOfPages" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-default" id="btn" value="Save">Save</button>
                                </form>
                            </p>        
                        </div>

                        <div id="menu2" class="tab-pane fade">
                            <h3>Other Information</h3>
                            <p>
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
                            </p>
                        </div>

                        <div id="menu3" class="tab-pane fade">
                            <h3>Report to Print</h3> 
                            <div id="reporto" class="repo">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img src="images/dabarlogo.png">
                                    </div>
                                    <div class="col-lg-9">
                                        <h3 class="heading">Dabar Home School Evaluation</h3>
                                    </div>
                                </div>
                                    
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>Recap of the weekly devotions:</p>
                                        <div class="col-lg-6 col-sm-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>                                                            <th>Email</th>
                                                        <th>Phone Number</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>ID</td>
                                                            <td>Name</td>
                                                            <td>Email</td>
                                                            <td>Phone Number</td>
                                                        </tr>
                                                    </tbody>    
                                                </table>
                                            </div>        
                                        </div>
                                    </div>
                                    <p>GOAL SETTING</p>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p>The students were able to meet the following goals:</p>
                                            <div class="col-lg-6 col-sm-12">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone Number</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>ID</td>
                                                            <td>Name</td>
                                                            <td>Email</td>
                                                            <td>Phone Number</td>
                                                        </tr>
                                                    </tbody>    
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <p>PACE TESTS</p>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p>The students completed the following PACEs in the subjects below:</p>
                                            <div class="col-lg-6 col-sm-12">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone Number</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>ID</td>
                                                            <td>Name</td>
                                                            <td>Email</td>
                                                            <td>Phone Number</td>
                                                        </tr>
                                                    </tbody>    
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <p>STUDENT ASSESSMENT</p>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p></p>
                                        </div>
                                    </div>
                                    <p>CONCUCT AND TIME KEEPING</p>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p></p>
                                        </div>
                                    </div>
                                    <p>OUTSTANDING PERFORMANCES</p>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p></p>
                                        </div>
                                    </div>
                                    <p>CONCLUSION</p>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:genPDF()">Download Report</a>
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