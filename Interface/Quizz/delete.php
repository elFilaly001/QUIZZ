<?php include_once '../../Connection/connect.php';

if (isset($_POST['deleteQuiz'])) {
    $quiz_id = $_GET['id'];
    $conn->query("DELETE FROM quizz WHERE quizz_id = $quiz_id");

    if ($conn) header('location:../all-quizzes.php');
}

$conn->close();
?>