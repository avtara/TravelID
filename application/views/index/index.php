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


        <div class="page-main">

            <div class="header py-4">
                <div class="container">
                    <div class="d-flex">
                        <a class="header-brand" href="<?php echo base_url() ?>">
                            <img src="<?php echo base_url('assets/dsb/logo.svg')?>" class="header-brand-img" alt="tabler logo">
                        </a>

                        <div class="d-flex order-lg-2 ml-auto">
                            <div class="nav-item d-none d-md-flex">
                                <a href="<?php echo site_url('welcome/login') ?>" class="btn btn-sm btn-outline-primary" >Log In</a>
                            </div>
                            <div class="nav-item d-none d-md-flex">
                                <a href="<?php echo site_url('welcome/register') ?>" class="btn btn-sm btn-primary" >Sign Up</a>
                            </div>


                        </div>

                        <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                            <span class="header-toggler-icon"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg order-lg-first">
                            <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                                <li class="nav-item">
                                    <a href="<?php echo base_url()?>" class="nav-link"><i class="fe fe-home"></i> Home</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="my-3 my-md-5">
                <!-- ISI BODY -->
                <div class="container">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Daftar Tiket</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table card-table table-vcenter text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="w-1">No.</th>
                                            <th><i class="fa fa-train mr-2"></i>Kereta</th>
                                            <th><i class="fe fe-arrow-down mr-2"></i>Dari</th>
                                            <th><i class="fe fe-arrow-up mr-2"></i>Ke</th>
                                            <th><i class="fa fa-calendar-check-o mr-2"></i>Tanggal</th>
                                            <th>Harga</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td>1</td>
                                            <td>Kencana</td>
                                            <td>Kayangan</td>
                                            <td class="text-nowrap">Jakarta</td>
                                            <td><?php echo date('M d, Y') ?></td>
                                            <td>Rp90.000.000</td>
                                            <td class="w-1"><a href="<?php echo site_url('welcome/login') ?>" class="btn btn-success"><i class="fa fa-opencart mr-2"></i>Beli</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Kencana</td>
                                            <td>Kayangan</td>
                                            <td class="text-nowrap">Jakarta</td>
                                            <td><?php echo date('M d, Y') ?></td>
                                            <td>Rp90.000.000</td>
                                            <td class="w-1"><a href="<?php echo site_url('welcome/login') ?>" class="btn btn-success"><i class="fa fa-opencart mr-2"></i>Beli</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Kencana</td>
                                            <td>Kayangan</td>
                                            <td class="text-nowrap">Jakarta</td>
                                            <td><?php echo date('M d, Y') ?></td>
                                            <td>Rp90.000.000</td>
                                            <td class="w-1"><a href="<?php echo site_url('welcome/login') ?>" class="btn btn-success"><i class="fa fa-opencart mr-2"></i>Beli</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Kuda</td>
                                            <td>Purwokerto</td>
                                            <td class="text-nowrap">Jakarta</td>
                                            <td><?php echo date('M d, Y') ?></td>
                                            <td>Rp90.000.000</td>
                                            <td class="w-1"><a href="<?php echo site_url('welcome/login') ?>" class="btn btn-success"><i class="fa fa-opencart mr-2"></i>Beli</a></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Kuda</td>
                                            <td>Purwokerto</td>
                                            <td class="text-nowrap">Jakarta</td>
                                            <td><?php echo date('M d, Y') ?></td>
                                            <td>Rp90.000.000</td>
                                            <td class="w-1"><a href="<?php echo site_url('welcome/login') ?>" class="btn btn-success"><i class="fa fa-opencart mr-2"></i>Beli</a></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Kuda</td>
                                            <td>Purwokerto</td>
                                            <td class="text-nowrap">Jakarta</td>
                                            <td><?php echo date('M d, Y') ?></td>
                                            <td>Rp90.000.000</td>
                                            <td class="w-1"><a href="<?php echo site_url('welcome/login') ?>" class="btn btn-success"><i class="fa fa-opencart mr-2"></i>Beli</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END BODY -->
                </div>
            </div>
        </div>


                <footer class="footer">
                    <div class="container">
                        <div class="row align-items-center flex-row-reverse">
                            <div class="col-auto ml-lg-auto">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <ul class="list-inline list-inline-dots mb-0">
                                            <li class="list-inline-item"><a href="<?php echo site_url("welcome/faq") ?>">FAQ</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-auto">
                                        <i class="payment payment-paypal"></i>
                                        <i class="payment payment-maestro"></i>
                                        <i class="payment payment-mastercard"></i>
                                        <i class="payment payment-visa"></i>
                                        <i class="payment payment-unionpay"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                                Copyright © <?php echo date("Y"); ?> <a href=".">Avtr Inc</a>. All rights reserved.
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        </body>
        </html>