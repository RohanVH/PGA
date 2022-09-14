<?php 

include 'db_config.php';

if (isset($_POST['submit'])) {
	$username = $_POST['name'];
	$email = $_POST['email'];	
	$semester = $_POST['semester'];	
	$contactno = $_POST['contactno'];	
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];

	if ($password == $cpassword) {
		$sql = "SELECT * FROM student_signup WHERE email='$email'";
		$result = mysqli_query($connectdb, $sql);

		if (!$result->num_rows > 0) {
			$checkid="SELECT COUNT(id) FROM student_signup";
			$checkid=mysqli_query($connectdb,$checkid);
			$row = mysqli_fetch_array($checkid);
			$id=$row;
			$id = intval(implode(',', $id));
			$id=$id+1;				
			if($id<=60){
				$sql = "INSERT INTO student_signup VALUES ('$id','$username', '$email','$semester','$contactno', '$password','$cpassword')";
				$result = mysqli_query($connectdb, $sql);
				if ($result) {
						$sql = "INSERT INTO student_signin VALUES ('$id','$email', '$password')";
						$res = mysqli_query($connectdb, $sql);    
					if ($res){
							header("Location: index.html");
						}
					} 
				else {
						echo "<script>alert('Something Wrong Went.')</script>";
				}
			}
			else{
				echo "<script>alert('ERROR: No seats avilable (seats==60)')</script>";
			}
			
		}

		else {
			echo "<script>alert('Account already Exists.')</script>";
		}
	}
		
	else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
} 
	

?>
