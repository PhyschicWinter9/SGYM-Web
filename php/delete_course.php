<?php

include 'connectDB.php';


$id = $_GET['course_id'];

$sql = "DELETE FROM course WHERE course_id = '$id'";

$data = mysqli_query($con, $sql);

if ($data) {

    header("location:../home-login.php");

} else {
    
    header("location:../admincp/course.php");
}
