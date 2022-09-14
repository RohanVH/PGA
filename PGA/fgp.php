<?php
include 'db_config.php';
if(isset($_POST['submit'])){

    $email=$_POST['email'];
    $name=$_POST['name'];
    $sql = "SELECT email FROM admin_signin WHERE email='$email'";
    $result = mysqli_query($connectdb, $sql);
    while($row=mysqli_fetch_array($result)){
        if($email=$row['email']){
            header("Location: forgotpassword_admin.html");
        }
    }
}
else{
    echo '<script>alert("Invalid Email Id. Go back to previous page and try again.")</script>';
}
?>