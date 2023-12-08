<?php require_once '../../Connection/connect.php';

session_start();
$user_id = $_SESSION['user_id'];
$course_id = $_POST['course_id'];
$progress = $_POST['progress_index'];

$conn->query("UPDATE course_progress SET progress_index = $progress WHERE course_id = $course_id AND user_id = $user_id");

echo 'Success';

$conn->close();