<?php include_once '../../Connection/connect.php';

if (isset($_POST['editQuiz'])) {
    $quiz_id = $_GET['id'];
    $name = $_POST['quiz_name'];
    // $id = $_POST['course_id'] or NULL;
    $conn->query("UPDATE quizz SET quizz_title = '$name' WHERE quizz_id = $quiz_id");

    if ($conn) header('location:../all-quizzes.php');
}

$conn->close();
?>