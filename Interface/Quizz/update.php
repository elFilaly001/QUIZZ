<?php include_once '../../Connection/connect.php';

if (isset($_POST['editQuiz'])) {
    $quiz_id = $_GET['id'];
    $name = $_POST['quiz_name'];
    $id = $_POST['course_id'];
    $result = $conn->query("UPDATE quizz SET quizz_title = '$name' , course_id = '$id'  WHERE quizz_id = $quiz_id");

    if ($result) header('location:../ad-quizzes.php');
}

$conn->close();
