<?php include_once '../../Connection/connect.php';

if (isset($_POST['addQuizz'])) {
    $quiz_name = $_POST['quiz_name'];
    $course_id = $_POST['course_id'];
    $count = $_POST['inp_question_count'];
    $checked_answers = [];
    $questions = [];
    $answers = [];
    $insert = [];
    //print_r($_POST['answer_value']);

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
    // 
    // 
    // print_r($checked_answers);

    $sql = "INSERT INTO quizz VALUES (NULL, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $quiz_name, $course_id);
    $stmt->execute();

    $iscorrect = 0;
    $result_lastid = $conn->query("select max(quizz_id) from quizz")->fetch_assoc();
    print_r($result_lastid);
    if ($result_lastid) {

        for ($i = 1; $i <= count($questions); $i++) {
            $sql = "insert INTO question VALUES (null , ? , ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("si", $questions[$i - 1], $result_lastid['max(quizz_id)']);
            $stmt->execute();

            $result_lastid_quest = $conn->query("select max(question_id) from question")->fetch_assoc();
            for ($j = ($i * 4) - 3; $j <= $i * 4; $j++) {
                $sql = "insert into answers values (null , ? , ? , ? )";
                $stmt = $conn->prepare($sql);
                if ($j - (4 * ($i - 1))  == $checked_answers[$i - 1]) {
                    $iscorrect = 1;
                } else {
                    $iscorrect = 0;
                }
                print_r($checked_answers);
                $stmt->bind_param("sii", $answers[$j - 1], $iscorrect, $result_lastid_quest['max(question_id)']);
                $stmt->execute();
            }
        }
    }
}
header("Location: ../ad-quizzes.php");
$conn->close();
