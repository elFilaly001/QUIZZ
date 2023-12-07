<?php

include "connect_db.php";
$course_id = $_GET['course_id'];
$sql = "DELETE FROM `courses`WHERE course_id=$course_id";
$result = mysqli_query($conn ,$sql);

if($result){
    header("Location: index.php? mgs=Record deleted successfully");
}
else {
    echo "failed:" .mysqli_error($conn);
}
?>

