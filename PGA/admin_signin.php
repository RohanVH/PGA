<?php
include 'db_config.php';
$email=$_POST['email'];
$password=$_POST['password'];

if (isset($_POST['submit']))
	$sql="SELECT * from admin_signin";
	$result=mysqli_query($connectdb,$sql);
	
	while($row=mysqli_fetch_assoc($result))
	{
		if($row['email']!=$email && $row['password']!=$password)
		{
			echo '<script>alert("Invalid Email ID and Password"); document.location = "index.html";</script>';
		}
		else
		{
			header("Location: admin.php");
		}
	}
?>