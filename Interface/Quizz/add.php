<?php include_once '../../Connection/connect.php';

if (isset($_POST['addQuizz'])) {
    $name = $_POST['quiz_name'];
    // $id = $_POST['course_id'] or NULL;
    $conn->query("INSERT INTO quizz VALUES (NULL, '$name', NULL)");

    if ($conn) header('location:../all-quizzes.php');
}

$conn->close();
?>