﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Edumin - Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
<<<<<<< HEAD
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
	<!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
=======
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png" />
    <link
      rel="stylesheet"
      href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
>>>>>>> c7172f2f91283019dfda821204ae1f4f7496e308

  <body data-headerbg="color_2" data-theme-version="dark">
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
          <img class="logo-abbr" src="images/logo-white.png" alt="" />
          <img class="logo-compact" src="images/logo-text-white.png" alt="" />
          <img class="brand-title" src="images/logo-text-white.png" alt="" />
        </a>

        <div class="nav-control">
          <div class="hamburger">
            <span class="line"></span><span class="line"></span
            ><span class="line"></span>
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
                  <span
                    class="search_icon p-3 c-pointer"
                    data-toggle="dropdown">
                    <i class="mdi mdi-magnify"></i>
                  </span>
                  <div class="dropdown-menu p-0 m-0">
                    <form>
                      <input
                        class="form-control"
                        type="search"
                        placeholder="Search"
                        aria-label="Search" />
                    </form>
                  </div>
                </div>
              </div>

              <ul class="navbar-nav header-right">
                <li class="nav-item dropdown notification_dropdown">
                  <a
                    class="nav-link bell ai-icon"
                    href="#"
                    role="button"
                    data-toggle="dropdown">
                    <svg
                      id="icon-user"
                      xmlns="http://www.w3.org/2000/svg"
                      width="20"
                      height="20"
                      viewbox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="feather feather-bell">
                      <path
                        d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
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
                        <span class="primary"
                          ><i class="ti-shopping-cart"></i
                        ></span>
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
                              <strong> James.</strong> has added a<strong
                                >customer</strong
                              >
                              Successfully
                            </p>
                          </a>
                        </div>
                        <span class="notify-time">3:20 am</span>
                      </li>
                    </ul>
                    <a class="all-notification" href="#"
                      >See all notifications <i class="ti-arrow-right"></i
                    ></a>
                  </div>
                </li>
                <li class="nav-item dropdown header-profile">
                  <a
                    class="nav-link"
                    href="#"
                    role="button"
                    data-toggle="dropdown">
                    <img
                      src="images/profile/education/pic1.jpg"
                      width="20"
                      alt="" />
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                    <a href="app-profile.html" class="dropdown-item ai-icon">
                      <svg
                        id="icon-user1"
                        xmlns="http://www.w3.org/2000/svg"
                        width="18"
                        height="18"
                        viewbox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-user">
                        <path
                          d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                      </svg>
                      <span class="ml-2">Profile </span>
                    </a>
                    <a href="email-inbox.html" class="dropdown-item ai-icon">
                      <svg
                        id="icon-inbox"
                        xmlns="http://www.w3.org/2000/svg"
                        width="18"
                        height="18"
                        viewbox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-mail">
                        <path
                          d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                      </svg>
                      <span class="ml-2">Inbox </span>
                    </a>
                    <a href="page-login.html" class="dropdown-item ai-icon">
                      <svg
                        id="icon-logout"
                        xmlns="http://www.w3.org/2000/svg"
                        width="18"
                        height="18"
                        viewbox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="feather feather-log-out">
                        <path
                          d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
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
        <div class="dlabnav">
        <div class="dlabnav-scroll">
          <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li>
              <a href="index.html" aria-expanded="false">
                <i class="la la-home"></i>
                <span class="nav-text">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="all-students.html" aria-expanded="false">
                <i class="la la-users"></i>
                <span class="nav-text">Students</span>
              </a>
            </li>
            <li>
              <a
                class="has-arrow"
                href="javascript:void()"
                aria-expanded="false">
                <i class="la la-graduation-cap"></i>
                <span class="nav-text">Courses</span>
              </a>
              <ul aria-expanded="false">
                <li><a href="all-courses.php">All Courses</a></li>
                <li><a href="add-courses.php">Add Courses</a></li>
                <li><a href="edit-courses.php">Edit Courses</a></li>
                <li><a href="about-courses.php">About Courses</a></li>
              </ul>
            </li>
            <li>
              <a
                class="has-arrow"
                href="javascript:void()"
                aria-expanded="false">
                <i class="la la-graduation-cap"></i>
                <span class="nav-text">Quizzes</span>
              </a>
              <ul aria-expanded="false">
                <li><a href="ad-quizzes.php">All Quizzes</a></li>
                <li><a href="add-quizzes.php">Add Quizzes</a></li>
                <li><a href="edit-quizzes.php">Edit Quizzes</a></li>
            
              </ul>
            </li>
            <li>
              <a
                class="has-arrow"
                href="javascript:void()"
                aria-expanded="false">
                <i class="la la-th-list"></i>
                <span class="nav-text">Pages</span>
              </a>
              <ul aria-expanded="false">
                <li><a href="page-register.html">Register</a></li>
                <li><a href="page-login.html">Login</a></li>
                <li>
                  <a
                    class="has-arrow"
                    href="javascript:void()"
                    aria-expanded="false"
                    >Error</a
                  >
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
          </ul>
        </div>
      </div>
      <!--**********************************
            Sidebar end
        ***********************************-->

      <!--**********************************
            Content body start
        ***********************************-->
<<<<<<< HEAD
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				    
				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>All Student</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Students</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">All Student</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-12">
						<ul class="nav nav-pills mb-3">
							<li class="nav-item"><a href="#list-view" data-toggle="tab" class="nav-link btn-primary mr-1 show active">List View</a></li>
							<li class="nav-item"><a href="#grid-view" data-toggle="tab" class="nav-link btn-primary">Grid View</a></li>
						</ul>
					</div>
					<div class="col-lg-12">
						<div class="row tab-content">
							<div id="list-view" class="tab-pane fade active show col-lg-12">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">All Courses list </h4>
										<a href="add-courses.php" class="btn btn-primary">+ Add new</a>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="example3" class="display" style="min-width: 845px">
												<thead>
													<tr>
														
														<th>id</th>
														<th>course_title</th>
														<th>course_duration</th>
														<th>course_creation_date</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><strong>01</strong></td>
														<td>Tiger Nixon</td>
														<td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														
														<td>
															<a href="edit-courses.php" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>												
													</tr>
													<tr>
														<td><strong>02</strong></td>
														<td>Garrett Winters</td>
														
														<td><a href="edit-courses.php"><strong>987 654 3210</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														
														<td>
															<a href="edit-courses.php" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														
														<td><strong>03</strong></td>
														<td>Ashton Cox</td>
														
														<td><a href="edit-courses.php"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
													
														<td>
															<a href="edit-courses.php" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														
														<td><strong>04</strong></td>
														<td>Cedric Kelly</td>
														
														<td><a href="edit-courses.php"><strong>123 456 7890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
													
														<td>
															<a href="edit-courses.php" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														
														<td><strong>05</strong></td>
														<td>Airi Satou</td>
														
														<td><a href="edit-courses.php"><strong>987 654 3210</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
													
														<td>
															<a href="edit-courses.php" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														
														<td><strong>06</strong></td>
														<td>Brielle Williamson</td>
														
														<td><a href="edit-courses.php"><strong>123 456 7890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
													
														<td>
															<a href="edit-courses.php" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														
														<td><strong>07</strong></td>
														<td>Herrod Chandler</td>
														
														<td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
													
														<td>
															<a href="edit-courses.php" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														
														<td><strong>08</strong></td>
														<td>Rhona Davidson</td>
														
														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														
														<td>
															<a href="edit-courses.php" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
													<tr>
														
														<td><strong>09</strong></td>
														<td>Colleen Hurst</td>

														<td><a href="javascript:void(0);"><strong>(123) 4567 890</strong></a></td>
														<td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
														
														<td>
															<a href="edit-courses.php" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
															<a href="d" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
                                </div>
                            </div>
							<div id="grid-view" class="tab-pane fade col-lg-12">
								<div class="row">
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic2.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Alexander</h3>
													<p class="text-muted">M.COM., P.H.D.</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span>Roll No.</span><strong>02</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Admission Date. :</span><strong>01 July 2020</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="about-student.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic3.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Elizabeth</h3>
													<p class="text-muted">B.COM., M.COM.</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span>Roll No.</span><strong>03</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Admission Date. :</span><strong>01 July 2020</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="about-student.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic4.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Amelia</h3>
													<p class="text-muted">M.COM., P.H.D.</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span>Roll No.</span><strong>04</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Admission Date. :</span><strong>01 July 2020</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="about-student.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic5.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Charlotte</h3>
													<p class="text-muted">B.COM., M.COM.</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span>Roll No.</span><strong>05</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Admission Date. :</span><strong>01 July 2020</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="about-student.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic6.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Isabella</h3>
													<p class="text-muted">B.A, B.C.A</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span>Roll No.</span><strong>06</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Admission Date. :</span><strong>01 July 2020</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="about-student.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic7.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Sebastian</h3>
													<p class="text-muted">M.COM., P.H.D.</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span>Roll No.</span><strong>07</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Admission Date. :</span><strong>01 July 2020</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="about-student.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic8.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Olivia</h3>
													<p class="text-muted">B.COM., M.COM.</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span>Roll No.</span><strong>08</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Admission Date. :</span><strong>01 July 2020</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="about-student.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic9.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Emma</h3>
													<p class="text-muted">B.A, B.C.A</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span>Roll No.</span><strong>09</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Admission Date. :</span><strong>01 July 2020</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="about-student.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-6 col-12">
										<div class="card card-profile">
											<div class="card-header justify-content-end pb-0">
												<div class="dropdown">
													<button class="btn btn-link" type="button" data-toggle="dropdown">
														<span class="dropdown-dots fs--1"></span>
													</button>
													<div class="dropdown-menu dropdown-menu-right border py-0">
														<div class="py-2">
															<a class="dropdown-item" href="javascript:void(0);">Edit</a>
															<a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-2">
												<div class="text-center">
													<div class="profile-photo">
														<img src="images/profile/small/pic10.jpg" width="100" class="img-fluid rounded-circle" alt="">
													</div>
													<h3 class="mt-4 mb-1">Jackson</h3>
													<p class="text-muted">M.COM., P.H.D.</p>
													<ul class="list-group mb-3 list-group-flush">
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span>Roll No.</span><strong>10</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Phone No. :</span><strong>+01 123 456 7890</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Admission Date. :</span><strong>01 July 2020</strong></li>
														<li class="list-group-item px-0 d-flex justify-content-between">
															<span class="mb-0">Email:</span><strong>info@example.com</strong></li>
													</ul>
													<a class="btn btn-outline-primary btn-rounded mt-3 px-4" href="about-student.html">Read More</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			   
=======
      <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
          <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
              <div class="welcome-text">
                <h4>All Courses</h4>
              </div>
>>>>>>> c7172f2f91283019dfda821204ae1f4f7496e308
            </div>
            <div
              class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">
                  <a href="javascript:void(0);">Courses</a>
                </li>
                <li class="breadcrumb-item active">
                  <a href="javascript:void(0);">All Courses</a>
                </li>
              </ol>
            </div>
          </div>

          <div class="row">
            <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="card">
                <img class="img-fluid" src="images/courses/pic1.jpg" alt="" />
                <div class="card-body">
                  <h4>Why is Early Education Essential?</h4>
                  <ul class="list-group mb-3 list-group-flush">
                    <li
                      class="list-group-item px-0 border-top-0 d-flex justify-content-between">
                      <span class="mb-0 text-muted">April 23</span>
                      <a href="javascript:void(0);"
                        ><i class="la la-heart-o mr-1"></i
                        ><strong>230</strong></a
                      >
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span class="mb-0">Duration :</span
                      ><strong>12 Months</strong>
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span class="mb-0">Professor :</span
                      ><strong>Jack Ronan</strong>
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span
                        ><i class="fa fa-graduation-cap text-primary mr-2"></i
                        >Student</span
                      ><strong>+120</strong>
                    </li>
                  </ul>
                  <a href="about-courses.html" class="btn btn-primary"
                    >Read More</a
                  >
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="card">
                <img class="img-fluid" src="images/courses/pic2.jpg" alt="" />
                <div class="card-body">
                  <h4>The Shocking Revelation of Education.</h4>
                  <ul class="list-group mb-3 list-group-flush">
                    <li
                      class="list-group-item px-0 border-top-0 d-flex justify-content-between">
                      <span class="mb-0 text-muted">April 23</span>
                      <a href="javascript:void(0);"
                        ><i class="la la-heart-o mr-1"></i
                        ><strong>230</strong></a
                      >
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span class="mb-0">Duration :</span
                      ><strong>12 Months</strong>
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span class="mb-0">Professor :</span
                      ><strong>Jimmy Morris</strong>
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span
                        ><i class="fa fa-graduation-cap text-primary mr-2"></i
                        >Student</span
                      ><strong>+120</strong>
                    </li>
                  </ul>
                  <a href="about-courses.html" class="btn btn-primary"
                    >Read More</a
                  >
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="card">
                <img class="img-fluid" src="images/courses/pic3.jpg" alt="" />
                <div class="card-body">
                  <h4>Five Things Nobody Told You About</h4>
                  <ul class="list-group mb-3 list-group-flush">
                    <li
                      class="list-group-item px-0 border-top-0 d-flex justify-content-between">
                      <span class="mb-0 text-muted">April 23</span>
                      <a href="javascript:void(0);"
                        ><i class="la la-heart-o mr-1"></i
                        ><strong>230</strong></a
                      >
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span class="mb-0">Duration :</span
                      ><strong>12 Months</strong>
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span class="mb-0">Professor :</span
                      ><strong>Konne Backfield</strong>
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span
                        ><i class="fa fa-graduation-cap text-primary mr-2"></i
                        >Student</span
                      ><strong>+120</strong>
                    </li>
                  </ul>
                  <a href="about-courses.html" class="btn btn-primary"
                    >Read More</a
                  >
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="card">
                <img class="img-fluid" src="images/courses/pic4.jpg" alt="" />
                <div class="card-body">
                  <h4>Learn Python – Interactive Python Tutorial</h4>
                  <ul class="list-group mb-3 list-group-flush">
                    <li
                      class="list-group-item px-0 border-top-0 d-flex justify-content-between">
                      <span class="mb-0 text-muted">April 23</span>
                      <a href="javascript:void(0);"
                        ><i class="la la-heart-o mr-1"></i
                        ><strong>230</strong></a
                      >
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span class="mb-0">Duration :</span
                      ><strong>12 Months</strong>
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span class="mb-0">Professor :</span
                      ><strong>Nashid Martines</strong>
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span
                        ><i class="fa fa-graduation-cap text-primary mr-2"></i
                        >Student</span
                      ><strong>+120</strong>
                    </li>
                  </ul>
                  <a href="about-courses.html" class="btn btn-primary"
                    >Read More</a
                  >
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="card">
                <img class="img-fluid" src="images/courses/pic5.jpg" alt="" />
                <div class="card-body">
                  <h4>Why is Early Education Essential?</h4>
                  <ul class="list-group mb-3 list-group-flush">
                    <li
                      class="list-group-item px-0 border-top-0 d-flex justify-content-between">
                      <span class="mb-0 text-muted">April 23</span>
                      <a href="javascript:void(0);"
                        ><i class="la la-heart-o mr-1"></i
                        ><strong>230</strong></a
                      >
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span class="mb-0">Duration :</span
                      ><strong>12 Months</strong>
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span class="mb-0">Professor :</span
                      ><strong>Jack Ronan</strong>
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span
                        ><i class="fa fa-graduation-cap text-primary mr-2"></i
                        >Student</span
                      ><strong>+120</strong>
                    </li>
                  </ul>
                  <a href="about-courses.html" class="btn btn-primary"
                    >Read More</a
                  >
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="card">
                <img class="img-fluid" src="images/courses/pic6.jpg" alt="" />
                <div class="card-body">
                  <h4>The Shocking Revelation of Education.</h4>
                  <ul class="list-group mb-3 list-group-flush">
                    <li
                      class="list-group-item px-0 border-top-0 d-flex justify-content-between">
                      <span class="mb-0 text-muted">April 23</span>
                      <a href="javascript:void(0);"
                        ><i class="la la-heart-o mr-1"></i
                        ><strong>230</strong></a
                      >
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span class="mb-0">Duration :</span
                      ><strong>12 Months</strong>
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span class="mb-0">Professor :</span
                      ><strong>Jimmy Morris</strong>
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span
                        ><i class="fa fa-graduation-cap text-primary mr-2"></i
                        >Student</span
                      ><strong>+120</strong>
                    </li>
                  </ul>
                  <a href="about-courses.html" class="btn btn-primary"
                    >Read More</a
                  >
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="card">
                <img class="img-fluid" src="images/courses/pic7.jpg" alt="" />
                <div class="card-body">
                  <h4>Five Things Nobody Told You About</h4>
                  <ul class="list-group mb-3 list-group-flush">
                    <li
                      class="list-group-item px-0 border-top-0 d-flex justify-content-between">
                      <span class="mb-0 text-muted">April 23</span>
                      <a href="javascript:void(0);"
                        ><i class="la la-heart-o mr-1"></i
                        ><strong>230</strong></a
                      >
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span class="mb-0">Duration :</span
                      ><strong>12 Months</strong>
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span class="mb-0">Professor :</span
                      ><strong>Konne Backfield</strong>
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span
                        ><i class="fa fa-graduation-cap text-primary mr-2"></i
                        >Student</span
                      ><strong>+120</strong>
                    </li>
                  </ul>
                  <a href="about-courses.html" class="btn btn-primary"
                    >Read More</a
                  >
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-xxl-4 col-lg-4 col-md-6 col-sm-6">
              <div class="card">
                <img class="img-fluid" src="images/courses/pic8.jpg" alt="" />
                <div class="card-body">
                  <h4>Learn Python – Interactive Python Tutorial</h4>
                  <ul class="list-group mb-3 list-group-flush">
                    <li
                      class="list-group-item px-0 border-top-0 d-flex justify-content-between">
                      <span class="mb-0 text-muted">April 23</span>
                      <a href="javascript:void(0);"
                        ><i class="la la-heart-o mr-1"></i
                        ><strong>230</strong></a
                      >
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span class="mb-0">Duration :</span
                      ><strong>12 Months</strong>
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span class="mb-0">Professor :</span
                      ><strong>Nashid Martines</strong>
                    </li>
                    <li
                      class="list-group-item px-0 d-flex justify-content-between">
                      <span
                        ><i class="fa fa-graduation-cap text-primary mr-2"></i
                        >Student</span
                      ><strong>+120</strong>
                    </li>
                  </ul>
                  <a href="about-courses.html" class="btn btn-primary"
                    >Read More</a
                  >
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
<<<<<<< HEAD
    <script src="js/dlabnav-init.js"></script>	
	
	<!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>
	
=======
    <script src="js/dlabnav-init.js"></script>

>>>>>>> c7172f2f91283019dfda821204ae1f4f7496e308
    <!-- Svganimation scripts -->
    <script src="vendor/svganimation/vivus.min.js"></script>
    <script src="vendor/svganimation/svg.animation.js"></script>
    <script src="js/styleSwitcher.js"></script>
  </body>
</html>
