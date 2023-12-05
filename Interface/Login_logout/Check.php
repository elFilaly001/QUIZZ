<?php
session_start();

function checkUser (string $page_name) : void {
     $student_pages = ['st_courses', 'st_course'];
     $admin_pages = ['index', 'all-students', 'all-courses', 'all-quizzes'];
     
     if(isset($_SESSION['user_role'])){
         $user_role = $_SESSION['user_role'];
         if (!$user_role && !in_array($page_name, $student_pages)) header ('Location:st_courses.php');
         else if ($user_role && !in_array($page_name, $admin_pages)) header ('Location:index.php');
     } else header ('Location:page-login.html');
}
?>