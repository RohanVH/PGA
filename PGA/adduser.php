<?php
include 'db_config.php';
$email=$_POST['email'];
$password=$_POST['password'];
$designation=$_POST['d'];


if(isset($_POST['submit'])){
    $checkid="SELECT COUNT(id) FROM $designation";
    $checkid=mysqli_query($connectdb,$checkid);
    $row = mysqli_fetch_array($checkid);
    $id=$row;
    $id = intval(implode(',', $id));
    $id=$id+1;				
    $sql = "INSERT INTO $designation VALUES ('$id','$email','$password')";
    $result = mysqli_query($connectdb, $sql);
    if ($result) {
            echo '<script>alert("New User='.$email.' has been created successfully.");window.location.href = "admin.php";</script>';
        } 
    else {
            echo '<script>alert("Sorry try again later.");window.location.href = "admin.php";</script>';
    }
    
}

?>