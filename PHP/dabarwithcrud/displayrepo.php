<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!--<script type="text/javascript">
        function genPDF(){
            var doc = new jsPDF();
            doc.fromHTML($('#page').get(0),20,20,{
                'width':500 });
            doc.save('Weekly Report.pdf');
        }
    </script>-->
    <title>Table with database</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <style>
    body{
    font-family: Calibri, Helveti;        
    }
	table {
	border-collapse: collapse;
	width: 540px;
	color: #588c7e;
	font-size: 15px;
    text-align: left;
    margin: auto;
	} 
	th {
    padding: 3px;    
	background-color: #008080;
	color: white;
	}
	tr:nth-child(even) {    
    background-color: #f2f2f2
    }
    td {
    padding: 3px;    
    }
    td, th {
    border: 1px solid #999;    
    }
    h4 {
    background-color: #deeaf6;
    color: rgb(28, 94, 94);
    padding: 5px;
    font-size: 15px;
    font-weight: bold;
    }
    h2 {
    color: rgb(28, 94, 94);    
    }
    p {
    font-size: 15px;
    font-weight: normal;
    }
    .page {
    width: 595px;
    padding: 10px;
    margin: auto;
    }
    </style>    
</head>
<body>
    <div>
        <div class="page" id="HTMLtoPDF">
            <div class="row">
                <div class="col-lg-5">
                    <img src="images/dabarlogo.png">
                </div>
                <div class="col-lg-7">
                    <h2><u>Dabar Home School Weekly Evaluation</u></h2>
                </div>
            </div>
            </br>    
            <div>
                <h4>DEVOTIONS</h4>
                <p>We make sure atleast every student has a chance to 
                   share once a week. Here is a recap of the devotions this week:</p>
                <table>
                    <tr>
                    <th>Day</th>    
                    <th>Topic Summary</th> 
                    <th>Scripture</th> 
                    <th>Led By</th>
                    </tr>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "dabar_students");
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    } 
                    $sql = "SELECT dayOfWeek, devotion, scripture, ledby FROM devotions WHERE week='Week 1' ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["dayOfWeek"]. "</td>
                            <td>" . $row["devotion"]. "</td>
                            <td>" . $row["scripture"] . "</td>
                            <td>". $row["ledby"]. "</td>
                            </tr>";
                    }
                    echo "</table>";
                    } else { echo "0 results"; }
                    $conn->close();
                    ?>
                </table>
            </div>
            </br>
            <div>
                <h4>GOAL SETTING</h4>
                <p>The students were able to achieve the following daily goals as per their number of pages 
                   and their PACE Tests done:</p>
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "dabar_students");
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }
                ?>
                <h5>Tasha Zikusooka</h5>
                <table>
                    <tr>
                    <th>Day</th>     
                    <th>Number of pages</th>
                    <th>PACE Test</th> 
                    </tr> 
                    <?php
                    $sql = "SELECT dayOfWeek, numberOfPages, paceTest FROM academicinfo WHERE student_name='Tasha Z' ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["dayOfWeek"]. "</td>
                            <td>" . $row["numberOfPages"]. "</td>
                            <td>" . $row["paceTest"] . "</td>
                            </tr>";
                    }
                    echo "</table>";
                    } else { echo "0 results"; }
                    $conn->close();
                    ?>
                </table>
                </br>
                <h5>Manzi Abeine</h5>
                <table>
                    <tr>
                    <th>Day</th>     
                    <th>Number of pages</th>
                    <th>PACE Test</th> 
                    </tr> 
                    <?php
                    
                    $conn = mysqli_connect("localhost", "root", "", "dabar_students");
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT dayOfWeek, numberOfPages, paceTest FROM academicinfo WHERE student_name='Manzi A' ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["dayOfWeek"]. "</td>
                            <td>" . $row["numberOfPages"]. "</td>
                            <td>" . $row["paceTest"] . "</td>
                            </tr>";
                    }
                    echo "</table>";
                    } else { echo "0 results"; }
                    $conn->close();
                    ?>
                </table>
                </br>
                <h5>Sipho Zikusooka</h5>
                <table>
                    <tr>
                    <th>Day</th>     
                    <th>Number of pages</th>
                    <th>PACE Test</th> 
                    </tr> 
                    <?php

                    $conn = mysqli_connect("localhost", "root", "", "dabar_students");
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }
                    
                    $sql = "SELECT dayOfWeek, numberOfPages, paceTest FROM academicinfo WHERE student_name='Sipho Z' ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["dayOfWeek"]. "</td>
                            <td>" . $row["numberOfPages"]. "</td>
                            <td>" . $row["paceTest"] . "</td>
                            </tr>";
                    }
                    echo "</table>";
                    } else { echo "0 results"; }
                    $conn->close();
                    ?>
                </table>
            </div>
            </br>
            <div>
                <h4>STUDENT ASSESSMENT</h4>
                
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "dabar_students");
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    } 
                    $sql = "SELECT student_performance FROM otherinfo WHERE week='Week 1' ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    //echo "  " . $row["student_performance"]. "  ";
                    echo "<p>" . $row["student_performance"]. "</p>";
                        }
                    } else { echo "0 results"; }
                    $conn->close();
                    ?>    
                
            </div>
            </br>
            <div>
                <h4>CONDUCT AND TIME KEEPING</h4>
                <p>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "dabar_students");
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    } 
                    $sql = "SELECT conduct FROM otherinfo WHERE week='Week 1' ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<p>
                        " . $row["conduct"]. "</p>";
                    }
                    } else { echo "0 results"; }
                    $conn->close();
                    ?>    
                </p>
            </div>
            </br>
            <div>
                <h4>CONCLUSION</h4>
                <p>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "dabar_students");
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    } 
                    $sql = "SELECT conclusion FROM otherinfo WHERE week='Week 1' ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<p>
                        " . $row["conclusion"]. "</p>";
                    }
                    } else { echo "0 results"; }
                    $conn->close();
                    ?>    
                </p>
            </div>
        </div>
    </div>
    </br>
    
    <!--<a href="javascript:genPDF()">Download</a>-->
    <!--<a href="#" onlick="HTMLtoPDF()">Download</a>-->

    <a href="phpToPdf()">Download</a>
    
    <?php
    require('phpToPdf.php');
    $pdf_options = array(
        "source_type"=>'url',
        "source"=>'#page',
        "page-size"=>'A4',
        "action"=>'save');
        phptopdf($pdf_options);
    ?>

    <!--<script src="js/jspdf.js"></script>
    <script src="js/jquery-2.1.3.js"></script>
    <script src="js/pdfFromHTML.js"></script>-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>