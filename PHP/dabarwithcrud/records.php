<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="modifyrecords.js"></script>
</head>
<body>
<div id="wrapper">

<?php
$host="localhost";
$username="root";
$password="";
$databasename="dabar_students";
$connect=mysql_connect($host,$username,$password);
$db=mysql_select_db($databasename);

$select =mysql_query("SELECT * FROM devotions");
?>

<table align="center" cellpadding="10" border="1" id="user_table">
<tr>
<th>Week</th>
<th>Date</th>
<th>Day of Week</th>
<th>Devotion</th>
<th>Scripture</th>
<th>Led By</th>
<th>Attendance</th>
</tr>
<?php
while ($row=mysql_fetch_array($select)) 
{
 ?>
 <tr id="row<?php echo $row['id'];?>">
  <td id="week<?php echo $row['id'];?>"><?php echo $row['week'];?></td>
  <td id="devotiondate<?php echo $row['id'];?>"><?php echo $row['devotiondate'];?></td>
  <td id="dayOfWeek<?php echo $row['id'];?>"><?php echo $row['dayOfWeek'];?></td>
  <td id="devotion<?php echo $row['id'];?>"><?php echo $row['devotion'];?></td>
  <td id="scripture<?php echo $row['id'];?>"><?php echo $row['scripture'];?></td>
  <td id="ledby<?php echo $row['id'];?>"><?php echo $row['ledby'];?></td>
  <td id="attendance<?php echo $row['id'];?>"><?php echo $row['attendance'];?></td>
  <td>
   <input type='button' class="edit_button" id="edit_button<?php echo $row['id'];?>" value="edit" onclick="edit_row('<?php echo $row['id'];?>');">
   <input type='button' class="save_button" id="save_button<?php echo $row['id'];?>" value="save" onclick="save_row('<?php echo $row['id'];?>');">
   <input type='button' class="delete_button" id="delete_button<?php echo $row['id'];?>" value="delete" onclick="delete_row('<?php echo $row['id'];?>');">
  </td>
 </tr>
 <?php
}
?>

<tr id="new_row">
 <td><input type="text" id="week"></td>
 <td><input type="text" id="date"></td>
 <td><input type="text" id="dayOfWeek"></td>
 <td><input type="text" id="devotion"></td>
 <td><input type="text" id="scripture"></td>
 <td><input type="text" id="ledby"></td>
 <td><input type="text" id="attendance"></td>
 <td><input type="button" value="Insert Row" onclick="insert_row();"></td>
</tr>
</table>

</div>
</body>
</html>
