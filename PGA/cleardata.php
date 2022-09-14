<?php
include 'db_config.php';
if (isset($_POST['submit'])) {
    // clear data from the tables
    $table1Clearquery = "DELETE from lecture1";
    if ($connectdb->query($table1Clearquery) === TRUE) {
    } 
    else {
        echo "Error deleting record: " . $connectdb->error;
    }
    $table2Clearquery = "DELETE from lecture2";
    if ($connectdb->query($table2Clearquery) === TRUE) {
    } 
    else {
        echo "Error deleting record: " . $connectdb->error;
    }
    $table3Clearquery = "DELETE from lecture3";
    if ($connectdb->query($table3Clearquery) === TRUE) {
    } 
    else {
        echo "Error deleting record: " . $connectdb->error;
    }
    $table4Clearquery = "DELETE from lecture4";
    if ($connectdb->query($table4Clearquery) === TRUE) {
    } 
    else {
        echo "Error deleting record: " . $connectdb->error;
    }
    $table5Clearquery = "DELETE from lecture5";
    $queryclear = mysqli_query($connectdb, $table5Clearquery);
    if ($queryclear == TRUE) {
    } 
    else {
        echo "Error deleting record: " . $connectdb->error;
    }
    $table6Clearquery = "DELETE from lecture6";
    if ($connectdb->query($table6Clearquery) === TRUE) {
        echo '<script>alert("Data Deleted Successfully .");window.location.href = "admin.php";</script>';

    } 
    else {
        echo "Error deleting record: " . $connectdb->error;
    }
}
?>