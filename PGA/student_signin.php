<?php
include 'db_config.php';
if (isset($_POST['submit'])){
	$emails=$_POST['email'];
	$password=$_POST['password'];
	$sql="select * from student_signin";
	$result=mysqli_query($connectdb,$sql);
	
	while ($row=mysqli_fetch_assoc($result))
	{
		if($emails==$row['email'] && $password==$row['password']){
			session_start();
			$_SESSION['emails']=$emails;

			header("Location: student_signin_var.php");
			
			
	    }
		
		else{
			echo '<script>alert("Invalid Email ID and Password"); document.location = "index.html";</script>';
		}
	}
}
?>
<!-- $lecuture1='Guide Name: Dr P Ganesh'; -->
<!-- $lecuture2='Guide Name: Dr Aparna K';
$lecuture3='Guide Name: Prof. Reshma';
$lecuture4='Guide Name: Prof. Dwarkanath';
$lecuture5='Guide Name: Prof. Shivakumar T'; -->
<!-- $lecuture6='Guide Name: Prof. Sridevi M'; -->
