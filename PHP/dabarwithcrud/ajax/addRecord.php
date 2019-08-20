<?php
	if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['username']) && isset($_POST['password']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "INSERT INTO users (fname, lname, username, password) VALUES('$fname', '$lname', '$username', '$pasword')";
		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	    echo "1 User Added!";
	}
?>