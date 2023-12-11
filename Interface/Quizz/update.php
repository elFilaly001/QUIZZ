<?php include_once '../../Connection/connect.php';


if (isset($_POST['editQuiz'])) {
    $quiz_id = $_GET['id'];
    $quiz_name = $_POST['quiz_name'];
    $course_id = $_POST['course_id'];
    $count = $_POST['inp_question_count'];
    $checked_answers = [];
    $questions = [];
    $answers = [];
    $insert = [];

    for ($i = 1; $i <= $count; $i++) {
        $question = $_POST['question_name' . $i];
        array_push($questions, $question);
        $checked = $_POST['checked_answer' . $i];
        array_push($checked_answers, $checked);
    }
    for ($i = 1; $i <= $count * 4; $i++) {
        $answer = $_POST['answer_value' . $i];
        array_push($answers, $answer);
    }

    print_r($questions);
    print_r($answers);
    print_r($checked_answers);

    $sql_question = "select  * from question where quizz_id = $quiz_id";
    $result = $conn->query($sql_question)->fetch_all();


    $sql = "update quizz set quizz_title = ? , course_id = ? where quizz_id = ? ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sii", $quiz_name, $course_id, $quiz_id);
    $stmt->execute();

    $iscorrect = 0;
    for ($i = 0; $i < count($questions); $i++) {
        $sql = "update question set question_content = ?  where question_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $questions[$i], $result[$i][0]);
        $stmt->execute();
        $sql_answer = "select * from answers where question_id = {$result[$i][0]}";
        $result1 = $conn->query($sql_answer)->fetch_all();
        for ($j = 0; $j < count($result1); $j++) {
            $sql = "update answers set answer_content = ? , answer_is_correct = ? where answer_id = ?";
            $stmt = $conn->prepare($sql);
            if ($j + 1 == $checked_answers[$i]) {
                $iscorrect = 1;
            } else {
                $iscorrect = 0;
            }
            $stmt->bind_param("sii", $answers[$j], $iscorrect, $result1[$j][0]);
            $stmt->execute();
        }
    }
}
header("Location: ../ad-quizzes.php");
$conn->close();
