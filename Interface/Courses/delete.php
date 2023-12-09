<?php

require "../../Connection/connect.php";
$course_id = $_GET['course_id'];
$sql = "DELETE FROM `courses`WHERE course_id=$course_id";
$result = mysqli_query($conn ,$sql);

if($result){
    header("Location: ../all-courses.php?mgs='Record deleted successfully'");
}
else {
    echo "failed:" .mysqli_error($conn);
}
?>

