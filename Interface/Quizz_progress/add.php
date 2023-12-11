<?php
require_once '../../Connection/connect.php';

$answers = $conn->query(
    "SELECT a.answer_id, a.answer_is_correct FROM answers a
    LEFT JOIN question q ON a.question_id = q.question_id
    LEFT JOIN quizz qz ON q.quizz_id = qz.quizz_id
    WHERE qz.quizz_id = {$_POST['quiz_id']}"
)->fetch_all();

$correctAnswers = 0;
for ($i = 1; $i <= count($answers) / 4; $i++) {
    if ($answers[($_POST['answer' . $i] + 4 * ($i - 1)) - 1][1]) $correctAnswers++;
}

$conn->query("INSERT INTO quizz_progress VALUES (NULL, $correctAnswers * 10, $correctAnswers, '" . date('Y/m/d') . "', {$_POST['quiz_id']})");

header('location:../st_courses.php');

$conn->close();
