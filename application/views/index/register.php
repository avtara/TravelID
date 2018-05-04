<!doctype html>

<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />

    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">

    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">

    <link rel="icon" href="<?php echo base_url('assets/dsb/favicon.ico')?>" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/dsb/favicon.ico')?>" />

    <!-- Generated: 2018-05-01 11:40:32 +0700 -->

    <title>TravelID</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="<?php echo base_url('assets/js/require.min.js')?>"></script>
    <script>
        requirejs.config({
            baseUrl: 'http://127.0.0.1/travelid/'
        });
    </script>

    <!-- Dashboard Core -->
    <link href="<?php echo base_url('assets/css/dashboard.css')?>" rel="stylesheet" />
    <script src="<?php echo base_url('assets/js/dashboard.js')?>"></script>


    <!-- c3.js Charts Plugin -->
    <link href="<?php echo base_url('assets/plugins/charts-c3/plugin.css')?>" rel="stylesheet" />
    <script src="<?php echo base_url('assets/plugins/charts-c3/plugin.js')?>"></script>

    <!-- Google Maps Plugin -->
    <link href="<?php echo base_url('assets/plugins/maps-google/plugin.css')?>" rel="stylesheet" />
    <script src="<?php echo base_url('assets/plugins/maps-google/plugin.js')?>"></script>

    <!-- Input Mask Plugin -->

    <script src="<?php echo base_url('assets/plugins/input-mask/plugin.js')?>"></script>


</head>
<body class="">

    <div class="page">
        <div class="page-single">
            <div class="container">
                <div class="row">
                    <div class="col col-login mx-auto">
                        <div class="text-center mb-6">
                            <img src="<?php echo base_url('assets/dsb/brand/tabler.svg'); ?>" class="h-6" alt="">
                        </div>


                      <?php echo form_open('welcome/register', 'class="card" action=" echo site_url("welcome/add") method="post"'); ?>

                      <!-- <form class="card" action="<?php echo site_url('welcome/add') ?>" method="post"> -->
                        <div class="card-body p-6">

                            <div class="card-title">Create new account</div>

                            <div class="form-group">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" placeholder="Enter name" name="username">
                                <span class="form-required"><?php echo form_error('username'); ?></span>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Nama Panjang</label>
                                <input type="text" class="form-control" placeholder="Enter Fullname" name="fullname">
                                <span class="form-required"><?php echo form_error('fullname'); ?></span>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password">
                                <span class="form-required"><?php echo form_error('password'); ?></span>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Level</label>
                                <div class="selectgroup w-100">

                                    <label class="selectgroup-item">
                                        <input type="radio" name="level" value="1" class="selectgroup-input">
                                        <span class="selectgroup-button">Admin</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="level" value="2" class="selectgroup-input" checked="">
                                        <span class="selectgroup-button">User</span>
                                    </label>
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary btn-block" value="save">Create new account</button>
                                </div>
                            </div>
                        </form>

                        <div class="text-center text-muted">
                            Already have account? <a href="./login">Sign in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>