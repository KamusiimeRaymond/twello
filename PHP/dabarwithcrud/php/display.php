<?php 
$username = "root"; 
$password = ""; 
$database = "dabar_students"; 
$mysqli = new mysqli($username, $password, $database); 
$query = "SELECT devotion scripture ledby FROM devotions";

$records=mysql_query($query);

while($devotions=mysql_fetch_assoc($records)){
    echo "<tr>";
    echo "<td>".$devotions['devotion']."</td>";
    echo "<td>".$devotions['scripture']."</td>";
    echo "<td>".$devotions['ledby']."</td>";
    echo "</tr>";
}
?>
