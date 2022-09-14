<?php
include 'db_config.php';
$email=$_POST['email'];
$password=$_POST['password'];
if (isset($_POST['submit']))
	$sql="select * from hod_signin";
	$result=mysqli_query($connectdb,$sql);
	
	while ($row=mysqli_fetch_assoc($result))
	{
		if($row['email']==$email && $row['password']==$password){

			header("Location: studentstableview.php");	
	    }
		else{
        	echo '<script>alert("Invalid Email ID and Password"); document.location = "index.html";</script>';

		}
	}
	
	
?>