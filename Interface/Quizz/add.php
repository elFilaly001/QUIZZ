<?php include_once '../../Connection/connect.php';

if (isset($_POST['addQuizz'])) {
    $name = $_POST['quiz_name'];
    $id = $_POST['course_id'] ;
    $result = $conn->query("INSERT INTO quizz VALUES (NULL, '$name', '$id')");
    if ($result) header('location:../add-questions.php');
}

$conn->close();
?>