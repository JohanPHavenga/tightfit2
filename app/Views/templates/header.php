<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
        ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/css/swiper.css" type="text/css" />

    <!-- Construction Demo Specific Stylesheet -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/construction.css" type="text/css" />
    <!-- / -->

    <link rel="stylesheet" href="<?= base_url(); ?>/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="<?= base_url(); ?>/css/fonts.css" type="text/css" />

    <link rel="stylesheet" href="<?= base_url(); ?>/css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="<?= base_url(); ?>/css/colors.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url(); ?>/css/custom.css" type="text/css" />

    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="<?= base_url(); ?>/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Document Title
        ============================================= -->
    <title>TightFit Garage Doors & Automation</title>

</head>

<body class="stretched">

    <!-- Document Wrapper
        ============================================= -->
    <div id="wrapper" class="clearfix">


        <!-- Header
            ============================================= -->
        <header id="header" class="sticky-style-2">

            <div class="container clearfix">

                <!-- Logo
                    ============================================= -->
                <div id="logo">
                    <a href="<?=base_url();?>" class="standard-logo"><img src="<?= base_url(); ?>/images/logo.png" alt="Canvas Logo"></a>
                    <a href="<?=base_url();?>" class="retina-logo"><img src="<?= base_url(); ?>/images/logo@2x.png" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <ul class="header-extras">
                    <li>
                        <i class="i-plain icon-call nomargin"></i>
                        <div class="he-text">
                            Call Us
                            <span><a href="tel:+27828753354">+27 (82) 875 3354</a></span>
                        </div>
                    </li>
                    <li>
                        <i class="i-plain icon-line2-envelope nomargin"></i>
                        <div class="he-text">
                            Email Us
                            <span>
                                <?php
                                $attributes = ['title' => 'Website Contact'];
                                echo safe_mailto(' tightfit@hermanus.co.za', ' tightfit@hermanus.co.za', $attributes);
                                ?>
                            </span>
                        </div>
                    </li>
                </ul>

            </div>
            <div id="header-wrap">

                <!-- Primary Navigation
                    ============================================= -->
                <nav id="primary-menu" class="with-arrows style-2 center">
                    <div class="container clearfix">
                        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                        <ul>
                            <li class="current"><a href="<?= base_url(); ?>">
                                    <div>Home</div>
                                </a></li>
                            <!-- <li><a href=""><div>Get a Quote</div></a></li> -->
                            <li><a href="<?= base_url('gallery/garagedoors'); ?>">
                                    <div>Garage Doors</div>
                                </a>
                                <ul>
                                    <li><a href="<?= base_url('gallery/garagedoors/aluzinc'); ?>">
                                            <div>Aluzinc</div>
                                        </a></li>
                                    <li><a href="<?= base_url('gallery/garagedoors/aluminium'); ?>">
                                            <div>Aluminium</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li><a href="<?= base_url('gallery/doorautomation'); ?>">
                                    <div>Door Automation</div>
                                </a>
                                <ul>
                                    <li><a href="<?= base_url('gallery/doorautomation/nice'); ?>">
                                            <div>Nice</div>
                                        </a></li>
                                    <li><a href="<?= base_url('gallery/doorautomation/centurion'); ?>">
                                            <div>Centurion</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li><a href="<?= base_url('gallery/gateautomation'); ?>">
                                    <div>Gate Automation</div>
                                </a>
                                <ul>
                                    <li><a href="<?= base_url('gallery/gateautomation/nice'); ?>">
                                            <div>Nice</div>
                                        </a></li>
                                    <li><a href="<?= base_url('gallery/gateautomation/centurion'); ?>">
                                            <div>Centurion</div>
                                        </a></li>
                                </ul>
                            </li>
                            <li><a href="<?= base_url('manuals'); ?>">
                                    <div>Manuals</div>
                                </a></li>
                            <li><a href="<?= base_url('about'); ?>">
                                    <div>About</div>
                                </a></li>

                            <li><a href="<?= base_url('contact'); ?>">
                                    <div>Contact</div>
                                </a></li>
                        </ul>
                    </div>
                </nav><!-- #primary-menu end -->
            </div>
        </header><!-- #header end -->