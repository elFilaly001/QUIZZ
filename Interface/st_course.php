﻿<?php require_once 'Login_logout/Check.php';
checkUser('st_courses')
?>
<?php require_once '../Connection/connect.php';

$user_id = $_SESSION['user_id'];
$coursesTable = $conn->query('
SELECT c.* FROM course_progress cp
LEFT JOIN courses c ON c.course_id = cp.course_id
LEFT JOIN users u ON u.user_id = cp.user_id
WHERE cp.user_id = ' . $user_id)->fetch_all();

$targetCourse = $conn->query("SELECT * FROM courses WHERE course_id = {$_GET['id']}")->fetch_assoc();
$progress = $conn->query("SELECT progress_index FROM course_progress WHERE user_id = $user_id AND course_id = {$_GET['id']}")->fetch_assoc()['progress_index'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Edumin - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="images/logo-white.png" alt="">
                <img class="logo-compact" src="images/logo-text-white.png" alt="">
                <img class="brand-title" src="images/logo-text-white.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell ai-icon" href="#" role="button" data-toggle="dropdown">
                                    <svg id="icon-user" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                    </svg>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="images/profile/education/pic1.jpg" width="20" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="page-login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php require_once 'sidebar/sidebar.php' ?>
        <!--**********************************
            Sidebar end
        ***********************************-->



        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">

                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Course Details</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Courses</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Course Details</a></li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-xxl-4 col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <img class="img-fluid" src="images/courses/pic1.jpg" alt="">
                                    <div class="card-body">
                                        <h4 class="mb-0"><?php echo $targetCourse['course_title'] ?></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2 class="card-title">About Course</h2>
                                    </div>
                                    <div class="card-body pb-0">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex px-0 justify-content-between">
                                                <strong>Duration</strong>
                                                <span class="mb-0"><?php echo $targetCourse['course_duration'] ?></span>
                                            </li>
                                            <li class="list-group-item d-flex px-0 justify-content-between">
                                                <strong>Date</strong>
                                                <span class="mb-0"><?php echo $targetCourse['course_creation_date'] ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-xxl-8 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div id="course_content"><?php echo $targetCourse['course_description'] ?></div>
                                <br>
                                <h4 class="text-primary">Our Courses</h4>
                                <div class="profile-skills pt-2 border-bottom-1 pb-2">
                                    <?php for ($i = 0; $i < count($coursesTable); $i++) : ?>
                                        <?php if ($coursesTable[$i][0] == $_GET['id']) continue ?>
                                        <a href="st_course.php?id=<?php echo $coursesTable[$i][0] ?>" class="btn btn-outline-dark btn-rounded px-4 my-3 my-sm-0 mr-3 m-b-10"><?php echo $coursesTable[$i][1] ?></a>
                                    <?php endfor ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button id="progress_btn" class="btn btn-primary position-fixed" onclick="saveProgress()">Save</button>
                </div>

            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>

    <!-- Svganimation scripts -->
    <script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <script>
        setTimeout(() => window.scrollTo({
            top: <?php echo $progress ?>,
            behavio: 'smooth'
        }), 2000);

        function saveProgress() {
            const data = {
                'course_id': <?php echo $targetCourse['course_id'] ?>,
                'progress_index': window['scrollY']
            }
            const req = new XMLHttpRequest();
            req.open(method = 'post', url = 'student/progress.php', true);
            req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            req.send(`course_id=<?php echo $targetCourse['course_id'] ?>&progress_index=${window['scrollY']}`);
        }
    </script>

</body>

</html>

<?php $conn->close() ?>