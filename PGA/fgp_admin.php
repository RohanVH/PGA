<?php
include 'db_config.php';
if(isset($_POST['submit'])){

    $password=$_POST['password'];
    $sql = "SELECT password FROM admin_signin WHERE password='$password'";
    $result = mysqli_query($connectdb, $sql);
    while($row=mysqli_fetch_array($result)){
        $pass=$row['password'];
        if($password==$pass){

            header("Location: index.html");
        }
    }
}
else{
    echo '<script>alert("Invalid Email Id. Go back to previous page and try again.")</script>';
}
