<?php
include 'db_config.php';
if (isset($_POST['submit'])){
	$emails=$_POST['email'];
	$password=$_POST['password'];
	$sql="SELECT * from faculty_signin";
	$result=mysqli_query($connectdb,$sql);
	
	while ($row=mysqli_fetch_assoc($result))
	{   $id=$row['id'];
        
        if($emails==$row['email'] && $password==$row['password']){
            session_start();
            $_SESSION['id']=$id;

			header("Location: lecture_homepage.php");
	    }
		
		else{
            // echo '<script>alert("Invalid Email ID and Password"); document.location = "index.html";</script>';
		}
	}
}
?>