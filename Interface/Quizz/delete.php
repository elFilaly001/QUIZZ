<?php include_once '../../Connection/connect.php';

if (isset($_GET['id'])) {
    $quiz_id = $_GET['id'];
    $result = $conn->query("DELETE FROM quizz WHERE quizz_id = $quiz_id");

    if ($result) header('Location:../ad-quizzes.php');
}

$conn->close();
?>