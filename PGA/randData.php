<?php
include 'db_config.php';
if (isset($_POST['submit'])){
    // clear data from the tables
    $table1Clearquery="DELETE from lecture1";
    if ($connectdb->query($table1Clearquery) === TRUE) {
        
    } 
    else {
        echo "Error deleting record: " . $connectdb->error;
    }
    $table2Clearquery="DELETE from lecture2" ;
    if ($connectdb->query($table2Clearquery) === TRUE) {
        
    } 
    else {
        echo "Error deleting record: " . $connectdb->error;
    }
    $table3Clearquery="DELETE from lecture3" ;
    if ($connectdb->query($table3Clearquery) === TRUE) {
        
    } 
    else {
        echo "Error deleting record: " . $connectdb->error;
    }
    $table4Clearquery="DELETE from lecture4";
    if ($connectdb->query($table4Clearquery) === TRUE) {
            
        } 
        else {
                echo "Error deleting record: " . $connectdb->error;
            }
    $table5Clearquery="DELETE from lecture5";
    $queryclear=mysqli_query($connectdb,$table5Clearquery);
    if($queryclear==TRUE){
        
    } 
    else {
        echo "Error deleting record: " . $connectdb->error;
    }
    $table6Clearquery="DELETE from lecture6";
    if ($connectdb->query($table6Clearquery) === TRUE) {
        
    } 
    else {
        echo "Error deleting record: " . $connectdb->error;
    }


    //fetching distinct random values
    $query="SELECT DISTINCT id from student_signup ORDER BY RAND() LIMIT 60";
    $check=mysqli_query($connectdb,$query);
    $count=1;
    while($row=mysqli_fetch_array($check)){
        if($count==11){
            // echo "<br>end 10<br>";
            $count=11;
            while($row=mysqli_fetch_array($check)){
                if($count==21){
                   $id= 21;
                    // echo "<br>end 20<br>";
                    while ($row = mysqli_fetch_array($check)) {
                        if ($count == 31) {
                            $count=31;
                            // echo "<br>end 30<br>";
                            while ($row = mysqli_fetch_array($check)) {
                                if ($count == 41){
                                    $count=41;
                                    // echo "<br>end 40<br>";
                                    while ($row = mysqli_fetch_array($check)) {
                                        if ($count == 51) {
                                           $id= 51;
                                            // echo "<br>end 50<br>";
                                            while ($row = mysqli_fetch_array($check)) {
                                                if ($count == 61) {
                                                    // echo "<br>end 60<br>";
                                                } else {
                                                    $id = $row['id'];
                                                    $loop = 0;
                                                    $query2 = "SELECT name,email,semester FROM student_signup where id=$id";
                                                    $fetchid = mysqli_query($connectdb, $query2);
                                                    while ($row = mysqli_fetch_array($fetchid)) {
                                                        if ($count == 61) {
                                                            break;

                                                        } 
                                                        else {
                                                            $name = $row['name'];
                                                            $email = $row['email'];
                                                            $semester = $row['semester'];
                                                            $insertdata="INSERT into lecture5 values($id,'$name','$email','$semester')";
                                                            $query = mysqli_query($connectdb, $insertdata);

                                                            if ($query) {
                                                                // echo "Succussfully Alloted 10 students to Lecture5";
                                                            } else {
                                                                echo "Error deleting record: " . $connectdb->error;
                                                            }
                                                            // echo "<br>" .$id. "<br>";
                                                            $loop++;
                                                            $count++;
                                                        }
                                                    }
                                                }
                                            }
                                        } 
                                        else {
                                            $id = $row['id'];
                                            $loop = 0;
                                            $query2 = "SELECT name,email,semester FROM student_signup where id=$id";
                                            $check1 = mysqli_query($connectdb, $query2);
                                            while ($row = mysqli_fetch_array($check1)) {
                                                if ($count == 51) {
                                                    break;
                                                } 
                                                else {
                                                    $name = $row['name'];
                                                    $email = $row['email'];
                                                    $semester = $row['semester'];
                                                    $insertdata="INSERT into lecture4 values($id,'$name','$email','$semester')";
                                                    $query = mysqli_query($connectdb, $insertdata);

                                                    if ($query) {
                                                        // echo "Succussfully Alloted 10 students to Lecture4";
                                                    } else {
                                                        echo "Error deleting record: " . $connectdb->error;
                                                    }
                                                    // echo "<br>" .$id. "<br>";
                                                    $loop++;
                                                    $count++;
                                                }
                                            }
                                        }
                                    }
                                } 
                                else{
                                    $id = $row['id'];
                                    $loop = 0;
                                    $query2 = "SELECT name,email,semester FROM student_signup where id=$id";
                                    $check1 = mysqli_query($connectdb, $query2);
                                    while ($row = mysqli_fetch_array($check1)) {
                                        if ($count == 41) {
                                            break;
                                        } 
                                        else {
                                            $name = $row['name'];
                                            $email = $row['email'];
                                            $semester = $row['semester'];
                                            $insertdata="INSERT into lecture3 values($id,'$name','$email','$semester')";
                                            $query = mysqli_query($connectdb, $insertdata);

                                            if ($query) {
                                                // echo "Succussfully Alloted 10 students to Lecture3";
                                            } else {
                                                echo "Error deleting record: " . $connectdb->error;
                                            }
                                            // echo "<br>" .$id. "<br>";
                                            $loop++;
                                            $count++;
                                        }
                                    }
                                }
                            }
                        } 
                        else {
                            $id = $row['id'];
                            $loop = 0;
                            $query2 = "SELECT name,email,semester FROM student_signup where id=$id";
                            $check1 = mysqli_query($connectdb, $query2);
                            while ($row = mysqli_fetch_array($check1)) {
                                if ($count == 31) {
                                    break;
                                } 
                                else {
                                    $name = $row['name'];
                                    $email = $row['email'];
                                    $semester = $row['semester'];
                                    $insertdata="INSERT into lecture2 values($id,'$name','$email','$semester')";
                                    $query = mysqli_query($connectdb, $insertdata);

                                    if ($query) {
                                        // echo "Succussfully Alloted 10 students to Lecture2";
                                    } else {
                                        echo "Error deleting record: " . $connectdb->error;
                                    }
                                    // echo "<br>" .$id. "<br>";
                                    $loop++;
                                    $count++;
                                }
                            }
                        }
                    }
                }
                
                else{
                    $id = $row['id'];
                    $loop=0;
                    $query2="SELECT name,email,semester FROM student_signup where id=$id";
                    $check1=mysqli_query($connectdb,$query2);
                    while($row=mysqli_fetch_array($check1)){
                        if($count==21){
                            break;
                        }
                        else{
                            $name=$row['name'];
                            $email=$row['email'];
                            $semester=$row['semester'];
                            $insertdata="INSERT into lecture6 values($id,'$name','$email','$semester')";
                            $query = mysqli_query($connectdb, $insertdata);

                            if ($query) {
                                // echo "Succussfully Alloted 10 students to Lectur6";
                            } else {
                                echo "Error deleting record: " . $connectdb->error;
                            }
                            // echo "<br>".$id."<br>";   
                            $loop++;
                            $count++;
                        }
                    }
                }
                
            }
            
        }
        
        else{
            $id= $row['id'];
            $loop=0;
            $query2="SELECT name,email,semester FROM student_signup where id=$id";
            $check1=mysqli_query($connectdb,$query2);
            while($row=mysqli_fetch_array($check1)){
                if($count==11){
                    break;
                }
                else{
                    $name=$row['name'];
                    $email=$row['email'];
                    $semester=$row['semester'];
                    $insertdata="INSERT into lecture1 values($id,'$name','$email','$semester')";
                    $query = mysqli_query($connectdb, $insertdata);

                    if ($query) {
                        // echo "Succussfully Alloted 10 students to Lecture1";
                    } else {
                        echo "Error deleting record: " . $connectdb->error;
                    }
                    // echo "<br>".$id."<br>";   
                    $loop++;
                    $count++;
                }
            }
        }
        
    }
//fetching distinct random values
$query = "SELECT DISTINCT id from student_signup ORDER BY RAND() LIMIT 5";
$check = mysqli_query($connectdb, $query);
$count = 1;
while ($row = mysqli_fetch_array($check)) {
    if ($count == 6) {
        break;
    } 
    else {
        $id = $row['id'];
        $loop = 0;
        $query2 = "SELECT id,name,email,semester FROM student_signup where id=$id";
        $check1 = mysqli_query($connectdb, $query2);
        while ($row = mysqli_fetch_array($check1)) {
            if ($count == 6) {
                break;
            } else {
                $name = $row['name'];
                $email = $row['email'];
                $semester = $row['semester'];
                $insertdata = "INSERT INTO lecture5 values($id,'$name','$email','$semester')";
                $query = mysqli_query($connectdb, $insertdata);

                if ($query) {
                } else {
                    echo "Error deleting record: " . $connectdb->error;
                }

                $loop++;
                $count++;
            }
        }
    }
}
echo '<script>alert("Successfully Alloted 10 Students to each Lectures. Click on display to View the Result.");window.location.href = "admin.php";</script>';

}
?>