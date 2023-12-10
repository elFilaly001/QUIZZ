﻿<?php require_once '../Connection/connect.php';
require_once 'Login_logout/Check.php';
checkUser('add-quizzes');
$courseTable = $conn->query("SELECT course_id, course_title FROM courses")->fetch_all();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Edumin - Bootstrap Admin Dashboard</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png" />
  <link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" />
  <link rel="stylesheet" href="css/style.css" />

  <!-- Pick date -->
  <link rel="stylesheet" href="vendor/pickadate/themes/default.css" />
  <link rel="stylesheet" href="vendor/pickadate/themes/default.date.css" />
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
        <img class="logo-abbr" src="images/logo-white.png" alt="" />
        <img class="logo-compact" src="images/logo-text-white.png" alt="" />
        <img class="brand-title" src="images/logo-text-white.png" alt="" />
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
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
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
                          <p>
                            <strong>Martin</strong> has added a
                            <strong>customer</strong> Successfully
                          </p>
                        </a>
                      </div>
                      <span class="notify-time">3:20 am</span>
                    </li>
                    <li class="media dropdown-item">
                      <span class="primary"><i class="ti-shopping-cart"></i></span>
                      <div class="media-body">
                        <a href="#">
                          <p>
                            <strong>Jennifer</strong> purchased Light
                            Dashboard 2.0.
                          </p>
                        </a>
                      </div>
                      <span class="notify-time">3:20 am</span>
                    </li>
                    <li class="media dropdown-item">
                      <span class="danger"><i class="ti-bookmark"></i></span>
                      <div class="media-body">
                        <a href="#">
                          <p>
                            <strong>Robin</strong> marked a
                            <strong>ticket</strong> as unsolved.
                          </p>
                        </a>
                      </div>
                      <span class="notify-time">3:20 am</span>
                    </li>
                    <li class="media dropdown-item">
                      <span class="primary"><i class="ti-heart"></i></span>
                      <div class="media-body">
                        <a href="#">
                          <p>
                            <strong>David</strong> purchased Light Dashboard
                            1.0.
                          </p>
                        </a>
                      </div>
                      <span class="notify-time">3:20 am</span>
                    </li>
                    <li class="media dropdown-item">
                      <span class="success"><i class="ti-image"></i></span>
                      <div class="media-body">
                        <a href="#">
                          <p>
                            <strong> James.</strong> has added a<strong>customer</strong>
                            Successfully
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
                  <img src="images/profile/education/pic1.jpg" width="20" alt="" />
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
              <h4>Add Quiz</h4>
            </div>
          </div>
          <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active"><a href="javascript:void(0);">Quizzes</a></li>
              <li class="breadcrumb-item active"><a href="javascript:void(0);">Edit Quiz</a></li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Quiz Details</h4>
              </div>
              <div class="card-body">
                <form action="./Quizz/add.php" method="post">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label class="form-label">Quiz Name</label>
                        <input type="text" name="quiz_name" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="form-group">
                        <label class="form-label">Course Name</label>
                        <select name="course_id" id="course_id" class="form-control">
                          <option value=""></option>
                          <?php for ($i = 0; $i < count($courseTable); $i++) : ?>
                            <option value="<?php echo $courseTable[$i][0] ?>"><?php echo $courseTable[$i][1] ?></option>
                          <?php endfor ?>
                        </select>
                      </div>
                    </div>
                    <div id="wrapperQuestion" class="col-lg-12 col-md-6 col-sm-12">

                      <div class="questions-container col-lg-12 col-md-6 col-sm-12">
                        <div class="question">
                          <div class="col-lg-12 col-md-6 col-sm-12 p-0">
                            <div class="form-group">
                              <label class="form-label">Question : 1</label>
                              <input type="text" name="question_name1" class="form-control" placeholder="Question">
                            </div>
                          </div>
                        </div>

                        <label class="form-label">Answers : </label>

                        <div class="answers col-lg-12 col-md-6 col-sm-12 p-0">

                          <div class="form-check  ">
                            <input class="form-check-input " type="radio" id="flexRadioDefault" name="checked_answer1" value="1" style="width: 17px;height: 28px;">
                            <input type="text" name="answer_value1" class="form-control mb-2 ml-2" placeholder="Answer 1">
                          </div>
                          <div class="form-check">
                            <input class="form-check-input " type="radio" id="flexRadioDefault" name="checked_answer1" value="2" style="width: 17px;height: 28px;">
                            <input type="text" name="answer_value2" class="form-control mb-2 ml-2" placeholder="Answer 2">
                          </div>


                          <div class="form-check">
                            <input class="form-check-input " type="radio" id="flexRadioDefault" name="checked_answer1" value="3" style="width: 17px;height: 28px;">
                            <input type="text" name="answer_value3" class="form-control mb-2 ml-2" placeholder="Answer 3">
                          </div>
                          <div class="form-check">
                            <input class="form-check-input " type="radio" id="flexRadioDefault" name="checked_answer1" value="4" style="width: 17px;height: 28px;">
                            <input type="text" name="answer_value4" class="form-control mb-2 ml-2" placeholder="Answer 4">
                          </div>


                        </div>
                      </div>
                    </div>


                    <div class="col-lg-12 col-md-6 col-sm-12">
                      <button type="button" name="addQuestion" class="btn btn-primary mb-2" onclick="addQuest()">+</button>
                    </div>
                    <div class="col-lg-12 col-md-6 col-sm-12">
                      <button type="submit" name="addQuizz" class="btn btn-primary">Submit</button>
                      <a href="./all-quizzes.php" class="btn btn-light">Cencel</a>
                    </div>

                  </div>
                  <input type="hidden" name="inp_question_count" id="inp_question_count" value="1">
                </form>
              </div>
            </div>
          </div>
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
        <p>
          Copyright © Designed &amp; Developed by
          <a href="../index.htm" target="_blank">DexignLab</a> 2020
        </p>
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

  <!-- pickdate -->
  <script src="vendor/pickadate/picker.js"></script>
  <script src="vendor/pickadate/picker.time.js"></script>
  <script src="vendor/pickadate/picker.date.js"></script>

  <!-- Pickdate -->
  <script src="js/plugins-init/pickadate-init.js"></script>


  <script>
    let question_count = 1;
    let answer_count = 5;

    function genhtml() {
      question_count++;
      let questwrap = `<div class="questions-container col-lg-12 col-md-6 col-sm-12">
                      <div class="question">
                        <div class="col-lg-12 col-md-6 col-sm-12 p-0">
                          <div class="form-group">
                            <label class="form-label">Question : ${question_count}</label>
                            <input type="text" name="question_name${question_count}" class="form-control" placeholder="Question">
                          </div>
                        </div>
                      </div>

                      <label class="form-label">Answers : </label>

                      <div class="answers col-lg-12 col-md-6 col-sm-12 p-0">

                        <div class="form-check  ">
                          <input class="form-check-input " type="radio" value="1" id="flexRadioDefault" name="checked_answer${question_count}" style="width: 17px;height: 28px;">
                          <input type="text" name="answer_value${answer_count}" class="form-control mb-2 ml-2" placeholder="Answer 1">
                        </div>
                        <div class="form-check">
                          <input class="form-check-input " type="radio" value="2" id="flexRadioDefault" name="checked_answer${question_count}" style="width: 17px;height: 28px;">
                          <input type="text" name="answer_value${answer_count+1}" class="form-control mb-2 ml-2" placeholder="Answer 2">
                        </div>


                        <div class="form-check">
                          <input class="form-check-input " type="radio" value="3" id="flexRadioDefault" name="checked_answer${question_count}" style="width: 17px;height: 28px;">
                          <input type="text" name="answer_value${answer_count+2}" class="form-control mb-2 ml-2" placeholder="Answer 3">
                        </div>
                        <div class="form-check">
                          <input class="form-check-input " type="radio" value="4" id="flexRadioDefault" name="checked_answer${question_count}" style="width: 17px;height: 28px;">
                          <input type="text" name="answer_value${answer_count+3}" class="form-control mb-2 ml-2" placeholder="Answer 4">
                        </div>


                      </div>
                    </div>
`
      answer_count += 4;
      return questwrap;
    }

    function addQuest() {
      document.getElementById('wrapperQuestion').insertAdjacentHTML("beforeend", genhtml());
      document.getElementById('inp_question_count').value = question_count;
    }
  </script>
</body>

</html>

<?php $conn->close() ?>