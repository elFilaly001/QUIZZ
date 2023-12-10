<?php
$user_id = $_SESSION['user_id'];
?>

<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <?php if ($user_id === 1) : ?>
                <li>
                    <a href="index.php" aria-expanded="false">
                        <i class="la la-home"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="all-students.php" aria-expanded="false">
                        <i class="la la-users"></i>
                        <span class="nav-text">Students</span>
                    </a>
                </li>
                <li>
                    <a href="all-courses.php" aria-expanded="false">
                        <i class="la la-graduation-cap"></i>
                        <span class="nav-text">Courses</span>
                    </a>
                </li>
                <li>
                    <a href="Assignement.php" aria-expanded="false">
                        <i class="la la-graduation-cap"></i>
                        <span class="nav-text">Course Assignement</span>
                    </a>
                </li>
                <li>
                    <a href="ad-quizzes.php" aria-expanded="false">
                        <i class="la la-graduation-cap"></i>
                        <span class="nav-text">Quizzes</span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="la la-th-list"></i>
                        <span class="nav-text">Pages</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="page-register.html">Register</a></li>
                        <li><a href="page-login.html">Login</a></li>
                        <li>
                            <a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                            <ul aria-expanded="false">
                                <li><a href="page-error-400.html">Error 400</a></li>
                                <li><a href="page-error-403.html">Error 403</a></li>
                                <li><a href="page-error-404.html">Error 404</a></li>
                                <li><a href="page-error-500.html">Error 500</a></li>
                                <li><a href="page-error-503.html">Error 503</a></li>
                            </ul>
                        </li>
                        <li><a href="page-lock-screen.html">Lock Screen</a></li>
                    </ul>
                </li>
            <?php else : ?>
                <li>
                    <a href="st_courses.php" aria-expanded="false">
                        <i class="la la-graduation-cap"></i>
                        <span class="nav-text">Courses</span>
                    </a>
                </li>
                <li>
                    <a href="st_quizzes.php" aria-expanded="false">
                        <i class="la la-graduation-cap"></i>
                        <span class="nav-text">Quizzess</span>
                    </a>
                </li>
                <li>
                    <a href="quizz_result.php" aria-expanded="false">
                        <i class="la la-graduation-cap"></i>
                        <span class="nav-text">Quizz Result</span>
                    </a>
                </li>
            <?php endif ?>
        </ul>
    </div>
</div>