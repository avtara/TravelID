<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/favicon.png')?>">
    <title>Ela - Bootstrap Admin Dashboard Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/css/lib/bootstrap/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/helper.css')?>" rel="stylesheet">
    




    <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">






</head>
<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <!-- <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div> -->
        <!-- Main wrapper  -->
        <div id="main-wrapper">
            <!-- header header  -->
            <div class="header">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <!-- Logo -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo base_url() ?>">
                            <!-- Logo icon -->
                            <b><img src="<?php echo base_url('assets/images/logo.png')?>" alt="homepage" class="dark-logo" /></b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span><img src="<?php echo base_url('assets/images/logo-text.png')?>" alt="homepage" class="dark-logo" /></span>
                        </a>
                    </div>
                    <!-- End Logo -->
                    <div class="navbar-collapse">
                        <!-- toggle and nav items -->
                        <ul class="navbar-nav mr-auto mt-md-0">
                            <!-- This is  -->
                            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                            <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                            <!-- Messages -->
                            <li class="nav-item dropdown mega-dropdown">
                                <div class="dropdown-menu animated zoomIn">
                                    <ul class="mega-dropdown-menu row">


                                        <li class="col-lg-3  m-b-30">
                                            <h4 class="m-b-20">CONTACT US</h4>
                                            <!-- Contact -->
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="Enter email"> </div>
                                                        <div class="form-group">
                                                            <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-info">Submit</button>
                                                    </form>
                                                </li>
                                                <li class="col-lg-3 col-xlg-3 m-b-30">
                                                    <h4 class="m-b-20">List style</h4>
                                                    <!-- List style -->
                                                    <ul class="list-style-none">
                                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-lg-3 col-xlg-3 m-b-30">
                                                    <h4 class="m-b-20">List style</h4>
                                                    <!-- List style -->
                                                    <ul class="list-style-none">
                                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                    </ul>
                                                </li>
                                                <li class="col-lg-3 col-xlg-3 m-b-30">
                                                    <h4 class="m-b-20">List style</h4>
                                                    <!-- List style -->
                                                    <ul class="list-style-none">
                                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> This Is Another Link</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- End Messages -->
                                </ul>
                                <!-- User profile and search -->
                                <ul class="navbar-nav my-lg-0">

                                    <!-- Search -->
                                    <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                                        <form class="app-search">
                                            <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                                        </li>
                                        <!-- Comment -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell"></i>
                                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                                <ul>
                                                    <li>
                                                        <div class="drop-title">Notifications</div>
                                                    </li>
                                                    <li>
                                                        <div class="message-center">
                                                            <!-- Message -->
                                                            <a href="#">
                                                                <div class="btn btn-danger btn-circle m-r-10"><i class="fa fa-link"></i></div>
                                                                <div class="mail-contnet">
                                                                    <h5>This is title</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                                                </div>
                                                            </a>
                                                            <!-- Message -->
                                                            <a href="#">
                                                                <div class="btn btn-success btn-circle m-r-10"><i class="ti-calendar"></i></div>
                                                                <div class="mail-contnet">
                                                                    <h5>This is another title</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span>
                                                                </div>
                                                            </a>
                                                            <!-- Message -->
                                                            <a href="#">
                                                                <div class="btn btn-info btn-circle m-r-10"><i class="ti-settings"></i></div>
                                                                <div class="mail-contnet">
                                                                    <h5>This is title</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span>
                                                                </div>
                                                            </a>
                                                            <!-- Message -->
                                                            <a href="#">
                                                                <div class="btn btn-primary btn-circle m-r-10"><i class="ti-user"></i></div>
                                                                <div class="mail-contnet">
                                                                    <h5>This is another title</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- End Comment -->
                                        <!-- Messages -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-envelope"></i>
                                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
                                                <ul>
                                                    <li>
                                                        <div class="drop-title">You have 4 new messages</div>
                                                    </li>
                                                    <li>
                                                        <div class="message-center">
                                                            <!-- Message -->
                                                            <a href="#">
                                                                <div class="user-img"> <img src="<?php echo base_url('assets/images/users/5.jpg')?>" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                                <div class="mail-contnet">
                                                                    <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                                                                </div>
                                                            </a>
                                                            <!-- Message -->
                                                            <a href="#">
                                                                <div class="user-img"> <img src="<?php echo base_url('assets/images/users/2.jpg')?>" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                                <div class="mail-contnet">
                                                                    <h5>John Doe</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span>
                                                                </div>
                                                            </a>
                                                            <!-- Message -->
                                                            <a href="#">
                                                                <div class="user-img"> <img src="<?php echo base_url('assets/images/users/3.jpg')?>" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                                <div class="mail-contnet">
                                                                    <h5>Mr. John</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span>
                                                                </div>
                                                            </a>
                                                            <!-- Message -->
                                                            <a href="#">
                                                                <div class="user-img"> <img src="<?php echo base_url('assets/images/users/1.jpg')?>" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                                <div class="mail-contnet">
                                                                    <h5>Michael Qin</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- End Messages -->
                                        <!-- Profile -->
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url('assets/images/users/5.jpg')?>" alt="user" class="profile-pic" /></a>
                                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                                <ul class="dropdown-user">
                                                    <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                                                    <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                                    <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                                                    <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!-- End header header -->
                        <!-- Left Sidebar  -->
                        <div class="left-sidebar">
                            <!-- Sidebar scroll-->
                            <div class="scroll-sidebar">
                                <!-- Sidebar navigation-->
                                <nav class="sidebar-nav">
                                    <ul id="sidebarnav">
                                        <li class="nav-devider"></li>
                                        <li class="nav-label">Home</li>
                                        <li> <a class=" " href="<?php echo base_url('') ?>" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard </span></a>

                                        </li>
                                        <li class="nav-label">Form</li>
                                        <li> <a class="" href="<?php echo site_url('form/user/') ?>" aria-expanded="false"><i class="fa fa-wpforms"></i><span class="hide-menu">User</span></a>

                                        </li>

                                    </ul>
                                </nav>
                                <!-- End Sidebar navigation -->
                            </div>
                            <!-- End Sidebar scroll-->
                        </div>
                        <!-- End Left Sidebar  -->
                        <!-- Page wrapper  -->
                        <div class="page-wrapper">
                            <!-- Bread crumb -->
                            <div class="row page-titles">
                                <div class="col-md-5 align-self-center">
                                    <h3 class="text-primary">Form</h3> </div>
                                    <div class="col-md-7 align-self-center">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="<?php echo base_url('') ?>">Home</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                </div>
                                <!-- End Bread crumb -->
                                <!-- Container fluid  -->
                                <div class="container-fluid">
                                    <!-- Start Page Content -->
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card card-outline-primary">
                                                <div class="card-body">
                                                    <div class="card-header">
                                                        <h4 class="m-b-0 text-white">Sample form</h4>
                                                    </div>
                                                    <br>
                                                    <form>
                                                        <div class="col-md-12">
                                                            <label>Fullname</label>
                                                            <input type="input" class="form-control" placeholder="Fullname">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label>Username</label>
                                                            <input type="input" class="form-control" placeholder="Username">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label>Password</label>
                                                            <input type="password" class="form-control" placeholder="Password">
                                                        </div>
                                                        <div class="col-md-12 ">
                                                            <label class="control-label">Level User </label>
                                                            <select class="form-control custom-select">
                                                                <option value="">Admin</option>
                                                                <option value="">User</option>
                                                            </select>
                                                            <small class="form-control-feedback"> Select your level </small> 
                                                        </div>
                                                            <br>
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End PAge Content -->
                                    </div>
                                    <!-- End Container fluid  -->
                                    <!-- footer -->
                                    <footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
                                    <!-- End footer -->
                                </div>
                                <!-- End Page wrapper  -->
                            </div>
                            <script src="<?php echo base_url('assets/js/lib/jquery/jquery.min.js')?>"></script>
                            <!-- Bootstrap tether Core JavaScript -->
                            <script src="<?php echo base_url('assets/js/lib/bootstrap/js/popper.min.js')?>"></script>
                            <script src="<?php echo base_url('assets/js/lib/bootstrap/js/bootstrap.min.js')?>"></script>
                            <!-- slimscrollbar scrollbar JavaScript -->
                            <script src="<?php echo base_url('assets/js/jquery.slimscroll.js')?>"></script>
                            <!--Menu sidebar -->
                            <script src="<?php echo base_url('assets/js/sidebarmenu.js')?>"></script>
                            <!--stickey kit -->
                            <script src="<?php echo base_url('assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js')?>"></script>


                            <!--  flot-chart js -->
                            <script src="<?php echo base_url('assets/js/lib/flot-chart/excanvas.min.js')?>"></script>
                            <script src="<?php echo base_url('assets/js/lib/flot-chart/jquery.flot.js')?>"></script>
                            <script src="<?php echo base_url('assets/js/lib/flot-chart/jquery.flot.pie.js')?>"></script>
                            <script src="<?php echo base_url('assets/js/lib/flot-chart/jquery.flot.time.js')?>"></script>
                            <script src="<?php echo base_url('assets/js/lib/flot-chart/jquery.flot.stack.js')?>"></script>
                            <script src="<?php echo base_url('assets/js/lib/flot-chart/jquery.flot.resize.js')?>"></script>
                            <script src="<?php echo base_url('assets/js/lib/flot-chart/jquery.flot.crosshair.js')?>"></script>
                            <script src="<?php echo base_url('assets/js/lib/flot-chart/curvedLines.js')?>"></script>
                            <script src="<?php echo base_url('assets/js/lib/flot-chart/flot-tooltip/jquery.flot.tooltip.min.js')?>"></script>
                            <script src="<?php echo base_url('assets/js/lib/flot-chart/flot-chart-init.js')?>"></script>

                            <script src="<?php echo base_url('assets/js/lib/owl-carousel/owl.carousel.min.js')?>"></script>
                            <script src="<?php echo base_url('assets/js/lib/owl-carousel/owl.carousel-init.js')?>"></script>
                            <script src="<?php echo base_url('assets/js/scripts.js')?>"></script>
                            <!--Custom JavaScript -->
                            <script src="<?php echo base_url('assets/js/custom.min.js')?>"></script>
                        </body>
                        </html>