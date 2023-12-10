﻿<?php
require_once 'Login_logout/Check.php';
include_once '../Connection/connect.php';;

checkUser('index');
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
  <link rel="stylesheet" href="css/skin.css" />
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
        <img class="logo-abbr" src="images/logo-white-2.png" alt="" />
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

                  <a href="Login_logout/Logout.php" class="dropdown-item ai-icon">

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
        <div class="row">
          <!-- <div class="col-xl-6 col-xxl-6 col-sm-12">
            <div class="row">
              <div class="col-xl-6 col-xxl-6 col-sm-6">
                <div class="widget-stat card">
                  <div class="card-body">
                    <h4 class="card-title">Total Students</h4>
                    <h3>3280</h3>
                    <div class="progress mb-2">
                      <div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
                    </div>
                    <small>80% Increase in 20 Days</small>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-xxl-6 col-sm-6">
                <div class="widget-stat card">
                  <div class="card-body">
                    <h4 class="card-title">New Students</h4>
                    <h3>245</h3>
                    <div class="progress mb-2">
                      <div class="progress-bar progress-animated bg-warning" style="width: 50%"></div>
                    </div>
                    <small>50% Increase in 25 Days</small>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-xxl-6 col-sm-6">
                <div class="widget-stat card">
                  <div class="card-body">
                    <h4 class="card-title">Total Course</h4>
                    <h3>28</h3>
                    <div class="progress mb-2">
                      <div class="progress-bar progress-animated bg-red" style="width: 76%"></div>
                    </div>
                    <small>76% Increase in 20 Days</small>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-xxl-6 col-sm-6">
                <div class="widget-stat card">
                  <div class="card-body">
                    <h4 class="card-title">Fees Collection</h4>
                    <h3>25160$</h3>
                    <div class="progress mb-2">
                      <div class="progress-bar progress-animated bg-success" style="width: 30%"></div>
                    </div>
                    <small>30% Increase in 30 Days</small>
                  </div>
                </div>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-xl-8 col-lg-8 col-xxl-8 col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Student List</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive recentOrderTable">
                  <table class="table verticle-middle table-responsive-md">
                    <thead>
                      <tr>
                        <th scope="col">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkAll" />
                            <label class="custom-control-label" for="checkAll"></label>
                          </div>
                        </th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Assigned Coach</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox2" />
                            <label class="custom-control-label" for="checkbox2"></label>
                          </div>
                        </td>
                        <td>Angelica Ramos</td>
                        <td>Ashton Cox</td>
                        <td>12 August 2020</td>
                        <td>10:15</td>
                        <td>
                          <div class="dropdown custom-dropdown mb-0">
                            <div data-toggle="dropdown">
                              <i class="fa fa-ellipsis-v"></i>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="javascript:void(0);">Accept</a>
                              <a class="dropdown-item" href="javascript:void(0);">Details</a>
                              <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox3" />
                            <label class="custom-control-label" for="checkbox3"></label>
                          </div>
                        </td>
                        <td>Bradley Greer</td>
                        <td>Brenden Wagner</td>
                        <td>11 July 2020</td>
                        <td>10:00</td>
                        <td>
                          <div class="dropdown custom-dropdown mb-0">
                            <div data-toggle="dropdown">
                              <i class="fa fa-ellipsis-v"></i>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="javascript:void(0);">Accept</a>
                              <a class="dropdown-item" href="javascript:void(0);">Details</a>
                              <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox4" />
                            <label class="custom-control-label" for="checkbox4"></label>
                          </div>
                        </td>
                        <td>Cedric Kelly</td>
                        <td>Brielle Williamson</td>
                        <td>10 May 2020</td>
                        <td>09:45</td>
                        <td>
                          <div class="dropdown custom-dropdown mb-0">
                            <div data-toggle="dropdown">
                              <i class="fa fa-ellipsis-v"></i>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="javascript:void(0);">Accept</a>
                              <a class="dropdown-item" href="javascript:void(0);">Details</a>
                              <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox5" />
                            <label class="custom-control-label" for="checkbox5"></label>
                          </div>
                        </td>
                        <td>Caesar Vance</td>
                        <td>Herrod Chandler</td>
                        <td>09 April 2020</td>
                        <td>09:30</td>
                        <td>
                          <div class="dropdown custom-dropdown mb-0">
                            <div data-toggle="dropdown">
                              <i class="fa fa-ellipsis-v"></i>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="javascript:void(0);">Accept</a>
                              <a class="dropdown-item" href="javascript:void(0);">Details</a>
                              <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox6" />
                            <label class="custom-control-label" for="checkbox6"></label>
                          </div>
                        </td>
                        <td>Rhona Davidson</td>
                        <td>Sonya Frost</td>
                        <td>08 March 2020</td>
                        <td>09:15</td>
                        <td>
                          <div class="dropdown custom-dropdown mb-0">
                            <div data-toggle="dropdown">
                              <i class="fa fa-ellipsis-v"></i>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="javascript:void(0);">Accept</a>
                              <a class="dropdown-item" href="javascript:void(0);">Details</a>
                              <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="checkbox7" />
                            <label class="custom-control-label" for="checkbox7"></label>
                          </div>
                        </td>
                        <td>Bradley Greer</td>
                        <td>Brenden Wagner</td>
                        <td>11 July 2020</td>
                        <td>10:00</td>
                        <td>
                          <div class="dropdown custom-dropdown mb-0">
                            <div data-toggle="dropdown">
                              <i class="fa fa-ellipsis-v"></i>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="javascript:void(0);">Accept</a>
                              <a class="dropdown-item" href="javascript:void(0);">Details</a>
                              <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-xl-4 col-lg-4 col-xxl-4 col-md-12"> -->
          <!-- <div class="card">
              <div class="card-header">
                <h4 class="card-title">Gold medal</h4>
                <small class="text-success"><i class="fa fa-caret-up"></i> 20% High then last
                  mont</small>
              </div>
              <div class="card-body pb-0">
                <div class="row mt-2">
                  <div class="col">
                    <h6 class="font-weight-normal">Overall Growth</h6>
                    <strong>82.24%</strong>
                  </div>
                  <div class="col">
                    <h6 class="font-weight-normal">Montly</h6>
                    <strong>12.24 %</strong>
                  </div>
                  <div class="col">
                    <h6 class="font-weight-normal">Day</h6>
                    <strong>42.24%</strong>
                  </div>
                </div>
              </div>
              <div class="chart-wrapper">
                <span class="peity-line" data-width="100%">6,5,8,4,3,8,4,3,6,5,9,5,8,3,4,8,9,8,5,7</span>
              </div>
            </div> -->
          <!-- </div> -->
          <!-- <div class="col-xl-4 col-lg-4 col-xxl-4 col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Silver medal</h4>
                <small class="text-success"><i class="fa fa-caret-up"></i> 20% High then last
                  mont</small>
              </div>
              <div class="card-body pb-0">
                <div class="row mt-2">
                  <div class="col">
                    <h6 class="font-weight-normal">Overall Growth</h6>
                    <strong>82.24%</strong>
                  </div>
                  <div class="col">
                    <h6 class="font-weight-normal">Montly</h6>
                    <strong>12.24 %</strong>
                  </div>
                  <div class="col">
                    <h6 class="font-weight-normal">Day</h6>
                    <strong>42.24%</strong>
                  </div>
                </div>
              </div>
              <div class="chart-wrapper">
                <span class="peity-line-2" data-width="100%">9,3,7,8,6,7,3,3,7,4,6,8,3,4,7,3,4,7,8,5</span>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-xl-4 col-lg-4 col-xxl-4 col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Bronze medal</h4>
                <small class="text-success"><i class="fa fa-caret-up"></i> 20% High then last
                  mont</small>
              </div>
              <div class="card-body pb-0">
                <div class="row mt-2">
                  <div class="col">
                    <h6 class="font-weight-normal">Overall Growth</h6>
                    <strong>82.24%</strong>
                  </div>
                  <div class="col">
                    <h6 class="font-weight-normal">Montly</h6>
                    <strong>12.24 %</strong>
                  </div>
                  <div class="col">
                    <h6 class="font-weight-normal">Day</h6>
                    <strong>42.24%</strong>
                  </div>
                </div>
              </div>
              <div class="chart-wrapper">
                <span class="peity-line-3" data-width="100%">3,8,3,7,8,6,3,4,7,3,7,9,6,3,7,6,7,3,4,2</span>
              </div>
            </div>
          </div> -->
          <div class="col-xl-12 col-lg-12 col-xxl-12 col-md-12">
            <div class="card profile-tab">
              <div class="card-body custom-tab-1">
                <ul class="nav nav-tabs mb-3">
                  <li class="nav-item">
                    <a href="#my-posts" data-toggle="tab" class="nav-link pb-2 active show">Students</a>
                  </li>
                  <li class="nav-item">
                    <a href="#about-me" data-toggle="tab" class="nav-link pb-2">Course progress</a>
                  </li>
                  <li class="nav-item">
                    <a href="#profile-settings" data-toggle="tab" class="nav-link pb-2">Quiz progress</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div id="my-posts" class="tab-pane fade active show">
                    <div class="table-responsive">
                      <table class="table table-responsive-md">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>

                          </tr>
                        </thead>
                        <tbody>

                          <?php
                          $sql = "SELECT * FROM users WHERE user_role = 0";
                          $result = $conn->query($sql);
                          if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                              echo "<tr>
                <td>
                    <img src='images/profile/education/pic5.jpg' class='rounded-circle' width='35' alt='' />
                </td>
                <td>{$row['user_name']}</td>
                <td>
                    <span>{$row['user_email']}</span>
                </td>
              </tr>";
                            }
                          } else {
                            echo "0 results";
                          }

                          ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div id="about-me" class="tab-pane fade">
                    <div class="table-responsive">
                      <table class="table table-responsive-md">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">progress index</th>
                            <th scope="col">course</th>

                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sql = "SELECT u.*, c.course_title, cp.progress_index 
        FROM users u 
        NATURAL JOIN courses c 
        NATURAL JOIN course_progress cp 
        WHERE u.user_role = 0";

                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                              echo "<tr>
                <td>
                    <img src='images/profile/education/pic9.jpg' class='rounded-circle' width='35' alt='' />
                </td>
                <td>{$row['user_name']}</td>
                <td>{$row['course_title']}</td>
                <td>{$row['progress_index']}</td>
              </tr>";
                            }
                          } else {
                            echo "0 results";
                          }
                          ?>



                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div id="profile-settings" class="tab-pane fade">
                    <div class="table-responsive">
                      <table class="table table-responsive-md">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Name Quizz</th>
                            <th scope="col">Score</th>
                            <th scope="col">Correct answers</th>
                            <th scope="col">Date</th>
                          </tr>
                        </thead>
                        <tbody>

                          <?php
                          $sql = "SELECT u.user_name, q.quizz_title, q.quizz_score, q.quizz_correct_answers, q.quizz_date
        FROM users u
        NATURAL JOIN course_progress cp
        NATURAL JOIN courses c
        NATURAL JOIN quizz q
        NATURAL JOIN quizz_progress qp
        WHERE u.user_role = 0";

                          $result = $conn->query($sql);

                          if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                              echo "<tr>
                <td>
                    <img src='images/profile/education/pic7.jpg' class='rounded-circle' width='35' alt='' />
                </td>
                <td>{$row['user_name']}</td>
                <td>{$row['quizz_title']}</td>
                <td>{$row['quizz_score']}</td>
                <td>{$row['quizz_correct_answers']}</td>
                <td>{$row['quizz_date']}</td>
              </tr>";
                            }
                          } else {
                            echo "0 results";
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
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
  <!-- Chart Morris plugin files -->
  <script src="vendor/raphael/raphael.min.js"></script>
  <script src="vendor/morris/morris.min.js"></script>
  <!-- Chart piety plugin files -->
  <script src="vendor/peity/jquery.peity.min.js"></script>
  <!-- Demo scripts -->
  <script src="js/dashboard/dashboard-2.js"></script>
  <!-- Svganimation scripts -->
  <script src="vendor/svganimation/vivus.min.js"></script>
  <script src="vendor/svganimation/svg.animation.js"></script>
  <script src="js/styleSwitcher.js"></script>
</body>

</html>