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
                    <h2><u>Dabar Home School Weekly Reports</u></h2>
                </div>
            </div>
            </br>    
            <div>
                <h4>Weekly Reports Records</h4>
                <table>
                    <tr>    
                    <th>Week</th> 
                    <th>Report</th> 
                    </tr>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "dabar_students");
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    } 
                    $sql = "SELECT week, pdf FROM weeklyreportsuploads WHERE term='Term 1' ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["week"]. "</td>
                            <td>" . $row["pdf"]. "</td>
                            </tr>";
                    }
                    echo "</table>";
                    } else { echo "0 results"; }
                    $conn->close();
                    ?>
                </table>
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