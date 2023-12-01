<?php
require_once "../../Connection/connect.php";

if (isset($_POST["logging_submit"])) {
    $user_email = $_POST['user_email'];
    $password = $_POST['password'];

    // $hashed_password = hash_function($password); 

    $sql = "SELECT * FROM users WHERE user_email =  ? AND user_password = ?";
    $stmt = $conn->prepare($sql);
    
    $stmt->bind_param("ss", $user_email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        if ($row['user_role'] = 1 ){
            header('Location: ../index.html');
        }else{
            header('Location: ../index-2.html');
        }
        exit();
    } else {
        header('Location: ../page-login.html');
        exit(); 
    }
}
?>