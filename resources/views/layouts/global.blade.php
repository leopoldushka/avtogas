<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Smarty - Multipurpose + Admin</title>
    <meta name="description" content="" />
    <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- WEB FONTS : use %7C instead of | (pipe) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

    <!-- CORE CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- REVOLUTION SLIDER -->
    <link href="{{ asset('css/extralayers.css') }}" rel="stylesheet">
    <link href="{{ asset('css/settings.css') }}" rel="stylesheet">


    <!-- THEME CSS -->
    <link href="{{ asset('css/essentials.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">


    <!-- PAGE LEVEL SCRIPTS -->
    <link href="{{ asset('css/header-1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/green.css') }}" rel="stylesheet">

</head>

<!--
    AVAILABLE BODY CLASSES:

    smoothscroll 			= create a browser smooth scroll
    enable-animation		= enable WOW animations

    bg-grey					= grey background
    grain-grey				= grey grain background
    grain-blue				= blue grain background
    grain-green				= green grain background
    grain-blue				= blue grain background
    grain-orange			= orange grain background
    grain-yellow			= yellow grain background

    boxed 					= boxed layout
    pattern1 ... patern11	= pattern background
    menu-vertical-hide		= hidden, open on click

    BACKGROUND IMAGE [together with .boxed class]
    data-background="assets/images/_smarty/boxed_background/1.jpg"
-->
<body class="smoothscroll enable-animation">

<!-- SLIDE TOP -->

<!-- /SLIDE TOP -->


<!-- wrapper -->
<div id="wrapper">

    <!-- Top Bar -->
    
    <!-- /Top Bar -->


    <!--
        AVAILABLE HEADER CLASSES

        Default nav height: 96px
        .header-md 		= 70px nav height
        .header-sm 		= 60px nav height

        .b-0 		= remove bottom border (only with transparent use)
        .transparent	= transparent header
        .translucent	= translucent header
        .sticky			= sticky header
        .static			= static header
        .dark			= dark header
        .bottom			= header on bottom

        shadow-before-1 = shadow 1 header top
        shadow-after-1 	= shadow 1 header bottom
        shadow-before-2 = shadow 2 header top
        shadow-after-2 	= shadow 2 header bottom
        shadow-before-3 = shadow 3 header top
        shadow-after-3 	= shadow 3 header bottom

        .clearfix		= required for mobile menu, do not remove!

        Example Usage:  class="clearfix sticky header-sm transparent b-0"
    -->
    <div id="header" class="navbar-toggleable-md sticky shadow-after-3 clearfix">

        <!-- TOP NAV -->
        <header id="topNav">
            <div class="container">

                <!-- Mobile Menu Button -->
                <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- BUTTONS -->
                <ul class="float-right nav nav-pills nav-second-main">

                    <!-- SEARCH -->
                    <li class="search">
                        <a href="javascript:;">
                            <i class="fa fa-search"></i>
                        </a>
                        <div class="search-box">
                            <form action="page-search-result-1.html" method="get">
                                <div class="input-group">
                                    <input type="text" name="src" placeholder="Search" class="form-control" />
                                    <span class="input-group-btn">
												<button class="btn btn-primary" type="submit">Search</button>
											</span>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- /SEARCH -->

                </ul>
                <!-- /BUTTONS -->


                <!-- Logo -->
                <a class="logo float-left" href="index.html">
                    <img src="assets/images/_smarty/logo_dark.png" alt="" />
                </a>

                <!--
                    Top Nav

                    AVAILABLE CLASSES:
                    submenu-dark = dark sub menu
                -->
                <div class="navbar-collapse collapse float-right nav-main-collapse submenu-dark">
                    <nav class="nav-main">

                        <!--
                            NOTE

                            For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
                            Direct Link Example:

                            <li>
                                <a href="#">HOME</a>
                            </li>
                        -->
                        <ul id="topMain" class="nav nav-pills nav-main">
                            <li class="dropdown active"><!-- HOME -->
                                <a class="dropdown-toggle" href="#">
                                    HOME
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown active">
                                        <a class="dropdown-toggle" href="#">
                                            HOME CORPORATE
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index-corporate-1.html">CORPORATE LAYOUT 1</a></li>
                                            <li><a href="index-corporate-2.html">CORPORATE LAYOUT 2</a></li>
                                            <li><a href="index-corporate-3.html">CORPORATE LAYOUT 3</a></li>
                                            <li><a href="index-corporate-4.html">CORPORATE LAYOUT 4</a></li>
                                            <li><a href="index-corporate-5.html">CORPORATE LAYOUT 5</a></li>
                                            <li><a href="index-corporate-6.html">CORPORATE LAYOUT 6</a></li>
                                            <li><a href="index-corporate-7.html">CORPORATE LAYOUT 7</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            HOME PORTFOLIO
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index-portfolio-1.html">PORTFOLIO LAYOUT 1</a></li>
                                            <li><a href="index-portfolio-2.html">PORTFOLIO LAYOUT 2</a></li>
                                            <li><a href="index-portfolio-masonry.html">PORTFOLIO MASONRY</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            HOME BLOG
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index-blog-1.html">BLOG LAYOUT 1</a></li>
                                            <li><a href="index-blog-2.html">BLOG LAYOUT 2</a></li>
                                            <li><a href="index-blog-3.html">BLOG LAYOUT 3</a></li>
                                            <li><a href="index-blog-4.html">BLOG LAYOUT 4</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            HOME SHOP
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index-shop-1.html">SHOP LAYOUT 1</a></li>
                                            <li><a href="index-shop-2.html">SHOP LAYOUT 2</a></li>
                                            <li><a href="index-shop-3.html">SHOP LAYOUT 3</a></li>
                                            <li><a href="index-shop-4.html">SHOP LAYOUT 4</a></li>
                                            <li><a href="index-shop-5.html">SHOP LAYOUT 5</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            HOME MAGAZINE
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index-magazine-1.html">MAGAZINE LAYOUT 1</a></li>
                                            <li><a href="index-magazine-2.html">MAGAZINE LAYOUT 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            HOME LANDING PAGE
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index-landing-1.html">LANDING PAGE LAYOUT 1</a></li>
                                            <li><a href="index-landing-2.html">LANDING PAGE LAYOUT 2</a></li>
                                            <li><a href="index-landing-3.html">LANDING PAGE LAYOUT 3</a></li>
                                            <li><a href="index-landing-4.html">LANDING PAGE LAYOUT 4</a></li>
                                            <li><a href="index-landing-5.html">LANDING PAGE LAYOUT 5</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            HOME FULLSCREEN
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index-fullscreen-revolution.html">FULLSCREEN - REVOLUTION</a></li>
                                            <li><a href="index-fullscreen-youtube.html">FULLSCREEN - YOUTUBE</a></li>
                                            <li><a href="index-fullscreen-local-video.html">FULLSCREEN - LOCAL VIDEO</a></li>
                                            <li><a href="index-fullscreen-image.html">FULLSCREEN - IMAGE</a></li>
                                            <li><a href="index-fullscreen-txt-rotator.html">FULLSCREEN - TEXT ROTATOR</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            HOME ONE PAGE
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index-onepage-default.html">ONE PAGE - DEFAULT</a></li>
                                            <li><a href="index-onepage-revolution.html">ONE PAGE - REVOLUTION</a></li>
                                            <li><a href="index-onepage-image.html">ONE PAGE - IMAGE</a></li>
                                            <li><a href="index-onepage-parallax.html">ONE PAGE - PARALLAX</a></li>
                                            <li><a href="index-onepage-youtube.html">ONE PAGE - YOUTUBE</a></li>
                                            <li><a href="index-onepage-text-rotator.html">ONE PAGE - TEXT ROTATOR</a></li>
                                            <li><a href="start-onepage.html"><span class="badge badge-success float-right">new</span> 10+ MORE LAYOUTS</a></li>
                                        </ul>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            HOME - THEMATICS <i class="fa fa-heart ml-10"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="index-thematics-restaurant.html">HOME - RESTAURANT</a></li>
                                            <li><a href="index-thematics-education.html">HOME - EDUCATION</a></li>
                                            <li><a href="index-thematics-construction.html">HOME - CONSTRUCTION</a></li>
                                            <li><a href="index-thematics-medical.html">HOME - MEDICAL</a></li>
                                            <li><a href="index-thematics-church.html">HOME - CHURCH</a></li>
                                            <li><a href="index-thematics-fashion.html">HOME - FASHION</a></li>
                                            <li><a href="index-thematics-wedding.html">HOME - WEDDING</a></li>
                                            <li><a href="index-thematics-events.html">HOME - EVENTS</a></li>
                                            <li><a href="index-thematics-hosting.html">HOME - HOSTING</a></li>
                                            <li><a href="index-thematics-lawyer.html">HOME - LAWYER</a></li>
                                            <li><a href="http://www.stepofweb.com/propose-design.html" data-toggle="tooltip" data-placement="top" title="Do you need a specific home design? We can include it in the next update!" target="_blank"><span class="badge badge-danger float-right">hot</span> PROPOSE THEMATIC</a></li>
                                        </ul>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="start-revslider.html" data-toggle="tooltip" data-placement="top" title="57 More Revolution Slider V5"><span class="badge badge-danger float-right">new</span> 52 MORE RS LAYOUTS</a></li>
                                    <li><a href="start-layerslider.html" data-toggle="tooltip" data-placement="top" title="7 More Layer Slider V6"><span class="badge badge-danger float-right">new</span> 7 MORE LS LAYOUTS</a></li>
                                    <li class="divider"></li>
                                    <li><a href="index-simple-revolution.html">HOME SIMPLE - REVOLUTION</a></li>
                                    <li><a href="index-simple-layerslider.html">HOME SIMPLE - LAYERSLIDER</a></li>
                                    <li><a href="index-simple-parallax.html">HOME SIMPLE - PARALLAX</a></li>
                                    <li><a href="index-simple-youtube.html">HOME SIMPLE - YOUTUBE</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><!-- PAGES -->
                                <a class="dropdown-toggle" href="#">
                                    PAGES
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            MISCELLANEOUS
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="portfolio-single-project.html">PROJECT PAGE</a></li>
                                            <li><a href="page-category.html">CATEGORY PAGE</a></li>
                                            <li><a href="page-cookie-alert.html">COOKIE ALERT</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            ABOUT
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-about-us-1.html">ABOUT US - LAYOUT 1</a></li>
                                            <li><a href="page-about-us-2.html">ABOUT US - LAYOUT 2</a></li>
                                            <li><a href="page-about-us-3.html">ABOUT US - LAYOUT 3</a></li>
                                            <li><a href="page-about-us-4.html">ABOUT US - LAYOUT 4</a></li>
                                            <li><a href="page-about-us-5.html">ABOUT US - LAYOUT 5</a></li>
                                            <li><a href="page-about-me-1.html">ABOUT ME - LAYOUT 1</a></li>
                                            <li><a href="page-about-me-2.html">ABOUT ME - LAYOUT 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            TEAM
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-team-1.html">TEAM - LAYOUT 1</a></li>
                                            <li><a href="page-team-2.html">TEAM - LAYOUT 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            SERVICES
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-services-1.html">SERVICES - LAYOUT 1</a></li>
                                            <li><a href="page-services-2.html">SERVICES - LAYOUT 2</a></li>
                                            <li><a href="page-services-3.html">SERVICES - LAYOUT 3</a></li>
                                            <li><a href="page-services-4.html">SERVICES - LAYOUT 4</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            FAQ
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-faq-1.html">FAQ - LAYOUT 1</a></li>
                                            <li><a href="page-faq-2.html">FAQ - LAYOUT 2</a></li>
                                            <li><a href="page-faq-3.html">FAQ - LAYOUT 3</a></li>
                                            <li><a href="page-faq-4.html">FAQ - LAYOUT 4</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            CONTACT
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-contact-1.html">CONTACT - LAYOUT 1</a></li>
                                            <li><a href="page-contact-2.html">CONTACT - LAYOUT 2</a></li>
                                            <li><a href="page-contact-3.html">CONTACT - LAYOUT 3</a></li>
                                            <li><a href="page-contact-4.html">CONTACT - LAYOUT 4</a></li>
                                            <li><a href="page-contact-5.html">CONTACT - LAYOUT 5</a></li>
                                            <li><a href="page-contact-recaptcha.html">CONTACT - RECAPTCHA</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            ERROR
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-404-1.html">ERROR 404 - LAYOUT 1</a></li>
                                            <li><a href="page-404-2.html">ERROR 404 - LAYOUT 2</a></li>
                                            <li><a href="page-404-3.html">ERROR 404 - LAYOUT 3</a></li>
                                            <li><a href="page-404-4.html">ERROR 404 - LAYOUT 4</a></li>
                                            <li><a href="page-404-5.html">ERROR 404 - LAYOUT 5</a></li>
                                            <li><a href="page-404-6.html">ERROR 404 - LAYOUT 6</a></li>
                                            <li><a href="page-404-7.html">ERROR 404 - LAYOUT 7</a></li>
                                            <li><a href="page-404-8.html">ERROR 404 - LAYOUT 8</a></li>
                                            <li class="divider"></li>
                                            <li><a href="page-500-1.html">ERROR 500 - LAYOUT 1</a></li>
                                            <li><a href="page-500-2.html">ERROR 500 - LAYOUT 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            SIDEBAR
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-sidebar-left.html">SIDEBAR LEFT</a></li>
                                            <li><a href="page-sidebar-right.html">SIDEBAR RIGHT</a></li>
                                            <li><a href="page-sidebar-both.html">SIDEBAR BOTH</a></li>
                                            <li><a href="page-sidebar-no.html">NO SIDEBAR</a></li>
                                            <li class="divider"></li>
                                            <li><a href="page-sidebar-dark-left.html">SIDEBAR LEFT - DARK</a></li>
                                            <li><a href="page-sidebar-dark-right.html">SIDEBAR RIGHT - DARK</a></li>
                                            <li><a href="page-sidebar-dark-both.html">SIDEBAR BOTH - DARK</a></li>
                                            <li><a href="page-sidebar-dark-no.html">NO SIDEBAR - DARK</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            LOGIN/REGISTER
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-login-1.html">LOGIN - LAYOUT 1</a></li>
                                            <li><a href="page-login-2.html">LOGIN - LAYOUT 2</a></li>
                                            <li><a href="page-login-3.html">LOGIN - LAYOUT 3</a></li>
                                            <li><a href="page-login-4.html">LOGIN - LAYOUT 4</a></li>
                                            <li><a href="page-login-5.html">LOGIN - LAYOUT 5</a></li>
                                            <li><a href="page-login-register-1.html">LOGIN + REGISTER 1</a></li>
                                            <li><a href="page-login-register-2.html">LOGIN + REGISTER 2</a></li>
                                            <li><a href="page-login-register-3.html">LOGIN + REGISTER 3</a></li>
                                            <li><a href="page-register-1.html">REGISTER - LAYOUT 1</a></li>
                                            <li><a href="page-register-2.html">REGISTER - LAYOUT 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            CLIENTS
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-clients-1.html">CLIENTS 1 - SIDEBAR RIGHT</a></li>
                                            <li><a href="page-clients-2.html">CLIENTS 1 - SIDEBAR LEFT</a></li>
                                            <li><a href="page-clients-3.html">CLIENTS 1 - FULLWIDTH</a></li>
                                            <li class="divider"></li>
                                            <li><a href="page-clients-4.html">CLIENTS 2 - SIDEBAR RIGHT</a></li>
                                            <li><a href="page-clients-5.html">CLIENTS 2 - SIDEBAR LEFT</a></li>
                                            <li><a href="page-clients-6.html">CLIENTS 2 - FULLWIDTH</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            SEARCH RESULT
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-search-result-1.html">LAYOUT 1 - LEFT SIDEBAR</a></li>
                                            <li><a href="page-search-result-2.html">LAYOUT 1 - RIGHT SIDEBAR</a></li>
                                            <li><a href="page-search-result-3.html">LAYOUT 1 - FULLWIDTH</a></li>
                                            <li class="divider"></li>
                                            <li><a href="page-search-result-4.html">LAYOUT 2 - LEFT SIDEBAR</a></li>
                                            <li><a href="page-search-result-5.html">LAYOUT 2 - RIGHT SIDEBAR</a></li>
                                            <li class="divider"></li>
                                            <li><a href="page-search-result-6.html">LAYOUT 3 - TABLE SEARCH</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            PROFILE
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-profile.html">USER PROFILE</a></li>
                                            <li><a href="page-profile-projects.html">USER PROJECTS</a></li>
                                            <li><a href="page-profile-comments.html">USER COMMENTS</a></li>
                                            <li><a href="page-profile-history.html">USER HISTORY</a></li>
                                            <li><a href="page-profile-settings.html">USER SETTINGS</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            MAINTENANCE
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-maintenance-1.html">MAINTENANCE - LAYOUT 1</a></li>
                                            <li><a href="page-maintenance-2.html">MAINTENANCE - LAYOUT 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            COMING SOON
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-coming-soon-1.html">COMING SOON - LAYOUT 1</a></li>
                                            <li><a href="page-coming-soon-2.html">COMING SOON - LAYOUT 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            FORUM
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-forum-home.html">FORUM - HOME</a></li>
                                            <li><a href="page-forum-topic.html">FORUM - TOPIC</a></li>
                                            <li><a href="page-forum-post.html">FORUM - POST</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="page-careers.html">CAREERS</a></li>
                                    <li><a href="page-sitemap.html">SITEMAP</a></li>
                                    <li><a href="page-blank.html">BLANK PAGE</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><!-- FEATURES -->
                                <a class="dropdown-toggle" href="#">
                                    FEATURES
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            <i class="et-browser"></i> SLIDERS
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-toggle" href="#">REVOLUTION SLIDER 4.x</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="feature-slider-revolution-fullscreen.html">FULLSCREEN</a></li>
                                                    <li><a href="feature-slider-revolution-fullwidth.html">FULL WIDTH</a></li>
                                                    <li><a href="feature-slider-revolution-fixedwidth.html">FIXED WIDTH</a></li>
                                                    <li><a href="feature-slider-revolution-kenburns.html">KENBURNS EFFECT</a></li>
                                                    <li><a href="feature-slider-revolution-videobg.html">HTML5 VIDEO</a></li>
                                                    <li><a href="feature-slider-revolution-captions.html">CAPTIONS</a></li>
                                                    <li><a href="feature-slider-revolution-smthumb.html">THUMB SMALL</a></li>
                                                    <li><a href="feature-slider-revolution-lgthumb.html">THUMB LARGE</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="feature-slider-revolution-prev1.html">NAV PREVIEW 1</a></li>
                                                    <li><a href="feature-slider-revolution-prev2.html">NAV PREVIEW 2</a></li>
                                                    <li><a href="feature-slider-revolution-prev3.html">NAV PREVIEW 3</a></li>
                                                    <li><a href="feature-slider-revolution-prev4.html">NAV PREVIEW 4</a></li>
                                                    <li><a href="feature-slider-revolution-prev0.html">NAV THEME DEFAULT</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-toggle" href="#">LAYER SLIDER</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="feature-slider-layer-fullwidth.html">FULLWIDTH</a></li>
                                                    <li><a href="feature-slider-layer-fixed.html">FIXED WIDTH</a></li>
                                                    <li><a href="feature-slider-layer-captions.html">CAPTIONS</a></li>
                                                    <li><a href="feature-slider-layer-carousel.html">CAROUSEL</a></li>
                                                    <li><a href="feature-slider-layer-2d3d.html">2D &amp; 3D TRANSITIONS</a></li>
                                                    <li><a href="feature-slider-layer-thumb.html">THUMB NAV</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="start-layerslider.html"><span class="badge badge-success float-right">new</span> LAYER SLIDER 6</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-toggle" href="#">FLEX SLIDER</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="feature-slider-flexslider-fullwidth.html">FULL WIDTH</a></li>
                                                    <li><a href="feature-slider-flexslider-content.html">CONTENT</a></li>
                                                    <li><a href="feature-slider-flexslider-thumbs.html">WITH THUMBS</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-toggle" href="#">OWL SLIDER</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="feature-slider-owl-fullwidth.html">FULL WIDTH</a></li>
                                                    <li><a href="feature-slider-owl-fixed.html">FIXED WIDTH</a></li>
                                                    <li><a href="feature-slider-owl-fixed+progress.html">FIXED + PROGRESS</a></li>
                                                    <li><a href="feature-slider-owl-carousel.html">BASIC CAROUSEL</a></li>
                                                    <li><a href="feature-slider-owl-fade.html">EFFECT - FADE</a></li>
                                                    <li><a href="feature-slider-owl-backslide.html">EFFECT - BACKSLIDE</a></li>
                                                    <li><a href="feature-slider-owl-godown.html">EFFECT - GODOWN</a></li>
                                                    <li><a href="feature-slider-owl-fadeup.html">EFFECT - FADE UP</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-toggle" href="#">SWIPE SLIDER</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="feature-slider-swipe-full.html">FULLSCREEN</a></li>
                                                    <li><a href="feature-slider-swipe-fixed-height.html">FIXED HEIGHT</a></li>
                                                    <li><a href="feature-slider-swipe-autoplay.html">AUTOPLAY</a></li>
                                                    <li><a href="feature-slider-swipe-fade.html">FADE TRANSITION</a></li>
                                                    <li><a href="feature-slider-swipe-slide.html">SLIDE TRANSITION</a></li>
                                                    <li><a href="feature-slider-swipe-coverflow.html">COVERFLOW TRANSITION</a></li>
                                                    <li><a href="feature-slider-swipe-html5-video.html">HTML5 VIDEO</a></li>
                                                    <li><a href="feature-slider-swipe-3columns.html">3 COLUMNS</a></li>
                                                    <li><a href="feature-slider-swipe-4columns.html">4 COLUMNS</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="feature-slider-nivo.html">NIVO SLIDER</a></li>
                                            <li><a href="feature-slider-camera.html">CAMERA SLIDER</a></li>
                                            <li><a href="feature-slider-elastic.html">ELASTIC SLIDER</a></li>
                                            <li><a href="feature-slider-backstretch.html">BACKSTRETCH SLIDER</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            <i class="et-hotairballoon"></i> HEADERS
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="feature-header-light.html">HEADER - LIGHT</a></li>
                                            <li><a href="feature-header-dark.html">HEADER - DARK</a></li>
                                            <li>
                                                <a class="dropdown-toggle" href="#">HEADER - HEIGHT</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="feature-header-large.html">LARGE (96px)</a></li>
                                                    <li><a href="feature-header-medium.html">MEDIUM (70px)</a></li>
                                                    <li><a href="feature-header-small.html">SMALL (60px)</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-toggle" href="#">HEADER - SHADOW</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="feature-header-shadow-after-1.html">SHADOW 1 - AFTER</a></li>
                                                    <li><a href="feature-header-shadow-before-1.html">SHADOW 1 - BEFORE</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="feature-header-shadow-after-2.html">SHADOW 2 - AFTER</a></li>
                                                    <li><a href="feature-header-shadow-before-2.html">SHADOW 2 - BEFORE</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="feature-header-shadow-after-3.html">SHADOW 3 - AFTER</a></li>
                                                    <li><a href="feature-header-shadow-before-3.html">SHADOW 3 - BEFORE</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="feature-header-shadow-dark-1.html">SHADOW - DARK PAGE EXAMPLE</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="feature-header-transparent.html">HEADER - TRANSPARENT</a></li>
                                            <li><a href="feature-header-transparent-line.html">HEADER - TRANSP+LINE</a></li>
                                            <li><a href="feature-header-translucent.html">HEADER - TRANSLUCENT</a></li>
                                            <li>
                                                <a class="dropdown-toggle" href="#">HEADER - BOTTOM</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="feature-header-bottom-light.html">BOTTOM LIGHT</a></li>
                                                    <li><a href="feature-header-bottom-dark.html">BOTTOM DARK</a></li>
                                                    <li><a href="feature-header-bottom-transp.html">BOTTOM TRANSPARENT</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-toggle" href="#">HEADER - LEFT SIDE</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="feature-header-side-left-1.html">FIXED</a></li>
                                                    <li><a href="feature-header-side-left-2.html">OPEN ON CLICK</a></li>
                                                    <li><a href="feature-header-side-left-3.html">DARK</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-toggle" href="#">HEADER - RIGHT SIDE</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="feature-header-side-right-1.html">FIXED</a></li>
                                                    <li><a href="feature-header-side-right-2.html">OPEN ON CLICK</a></li>
                                                    <li><a href="feature-header-side-right-3.html">DARK</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="dropdown-toggle" href="#">HEADER - STATIC</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="feature-header-static-top-light.html">STATIC TOP - LIGHT</a></li>
                                                    <li><a href="feature-header-static-top-dark.html">STATIC TOP - DARK</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="feature-header-static-bottom-light.html">STATIC BOTTOM - LIGHT</a></li>
                                                    <li><a href="feature-header-static-bottom-dark.html">STATIC BOTTOM - DARK</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="feature-header-centered.html">HEADER - NAV CENTERED</a></li>
                                            <li><a href="feature-header-nosticky.html">HEADER - NO STICKY</a></li>
                                            <li><a href="feature-header-scroll.html">HEADER - SCROLL APPEAR</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            <i class="et-anchor"></i> FOOTERS
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="feature-footer-1.html#footer">FOOTER - LAYOUT 1</a></li>
                                            <li><a href="feature-footer-2.html#footer">FOOTER - LAYOUT 2</a></li>
                                            <li><a href="feature-footer-3.html#footer">FOOTER - LAYOUT 3</a></li>
                                            <li><a href="feature-footer-4.html#footer">FOOTER - LAYOUT 4</a></li>
                                            <li><a href="feature-footer-5.html#footer">FOOTER - LAYOUT 5</a></li>
                                            <li><a href="feature-footer-6.html#footer">FOOTER - LAYOUT 6</a></li>
                                            <li><a href="feature-footer-7.html#footer">FOOTER - LAYOUT 7</a></li>
                                            <li><a href="feature-footer-8.html#footer">FOOTER - LAYOUT 8 (light)</a></li>
                                            <li><a href="feature-footer-0.html#footer">FOOTER - STICKY</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            <i class="et-circle-compass"></i> MENU STYLES
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="feature-menu-0.html">MENU - OVERLAY</a></li>
                                            <li><a href="feature-menu-1.html">MENU - STYLE 1</a></li>
                                            <li><a href="feature-menu-2.html">MENU - STYLE 2</a></li>
                                            <li><a href="feature-menu-3.html">MENU - STYLE 3</a></li>
                                            <li><a href="feature-menu-4.html">MENU - STYLE 4</a></li>
                                            <li><a href="feature-menu-5.html">MENU - STYLE 5</a></li>
                                            <li><a href="feature-menu-6.html">MENU - STYLE 6</a></li>
                                            <li><a href="feature-menu-7.html">MENU - STYLE 7</a></li>
                                            <li><a href="feature-menu-8.html">MENU - STYLE 8</a></li>
                                            <li><a href="feature-menu-9.html">MENU - STYLE 9</a></li>
                                            <li><a href="feature-menu-10.html">MENU - STYLE 10</a></li>
                                            <li><a href="feature-menu-11.html">MENU - STYLE 11 (BULLET NAV)</a></li>
                                            <li><a href="feature-menu-12.html">MENU - STYLE 12</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            <i class="et-genius"></i> MENU DROPDOWN
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="feature-menu-dd-light.html">DROPDOWN - LIGHT</a></li>
                                            <li><a href="feature-menu-dd-dark.html">DROPDOWN - DARK</a></li>
                                            <li><a href="feature-menu-dd-color.html">DROPDOWN - COLOR</a></li>
                                            <li><a href="feature-menu-dd-effects.html">DROPDOWN - EFFECTS</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            <i class="et-beaker"></i> PAGE TITLES
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="feature-title-left.html">ALIGN LEFT</a></li>
                                            <li><a href="feature-title-right.html">ALIGN RIGHT</a></li>
                                            <li><a href="feature-title-center.html">ALIGN CENTER</a></li>
                                            <li><a href="feature-title-light.html">LIGHT</a></li>
                                            <li><a href="feature-title-dark.html">DARK</a></li>
                                            <li><a href="feature-title-tabs.html">WITH TABS</a></li>
                                            <li><a href="feature-title-breadcrumbs.html">BREADCRUMBS ONLY</a></li>
                                            <li>
                                                <a class="dropdown-toggle" href="#">PARALLAX</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="feature-title-parallax-small.html">PARALLAX SMALL</a></li>
                                                    <li><a href="feature-title-parallax-medium.html">PARALLAX MEDIUM</a></li>
                                                    <li><a href="feature-title-parallax-large.html">PARALLAX LARGE</a></li>
                                                    <li><a href="feature-title-parallax-2xlarge.html">PARALLAX 2x LARGE</a></li>
                                                    <li><a href="feature-title-parallax-transp.html">TRANSPARENT HEADER</a></li>
                                                    <li><a href="feature-title-parallax-transp-large.html">TRANSPARENT HEADER - LARGE</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="feature-title-short-height.html">SHORT HEIGHT</a></li>
                                            <li><a href="feature-title-rotative-text.html">ROTATIVE TEXT</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            <i class="et-layers"></i> PAGE SUBMENU
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="feature-page-submenu-light.html">PAGE SUBMENU - LIGHT</a></li>
                                            <li><a href="feature-page-submenu-dark.html">PAGE SUBMENU - DARK</a></li>
                                            <li><a href="feature-page-submenu-color.html">PAGE SUBMENU - COLOR</a></li>
                                            <li><a href="feature-page-submenu-transparent.html">PAGE SUBMENU - TRANSPARENT</a></li>
                                            <li><a href="feature-page-submenu-below-title.html">PAGE SUBMENU - BELOW PAGE TITLE</a></li>
                                            <li><a href="feature-page-submenu-scrollto.html">PAGE SUBMENU - SCROLLTO</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            <i class="et-trophy"></i> ICONS
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="feature-icons-fontawesome.html">FONTAWESOME</a></li>
                                            <li><a href="feature-icons-glyphicons.html">GLYPHICONS</a></li>
                                            <li><a href="feature-icons-etline.html">ET LINE</a></li>
                                            <li><a href="shortcode-material-design-icons.html">MATERIAL ICONS</a></li>
                                            <li><a href="feature-icons-flags.html">FLAGS</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            <i class="et-flag"></i> BACKGROUNDS
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="feature-content-bg-grey.html">CONTENT - SIMPLE GREY</a></li>
                                            <li><a href="feature-content-bg-ggrey.html">CONTENT - GRAIN GREY</a></li>
                                            <li><a href="feature-content-bg-gblue.html">CONTENT - GRAIN BLUE</a></li>
                                            <li><a href="feature-content-bg-ggreen.html">CONTENT - GRAIN GREEN</a></li>
                                            <li><a href="feature-content-bg-gorange.html">CONTENT - GRAIN ORANGE</a></li>
                                            <li><a href="feature-content-bg-gyellow.html">CONTENT - GRAIN YELLOW</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            <i class="et-magnifying-glass"></i> SEARCH LAYOUTS
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="feature-search-default.html">SEARCH - DEFAULT</a></li>
                                            <li><a href="feature-search-fullscreen-light.html">SEARCH - FULLSCREEN LIGHT</a></li>
                                            <li><a href="feature-search-fullscreen-dark.html">SEARCH - FULLSCREEN DARK</a></li>
                                            <li><a href="feature-search-header-light.html">SEARCH - HEADER LIGHT</a></li>
                                            <li><a href="feature-search-header-dark.html">SEARCH - HEADER DARK</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shortcode-animations.html"><i class="et-expand"></i> ANIMATIONS</a></li>
                                    <li><a href="feature-grid.html"><i class="et-grid"></i> GRID</a></li>
                                    <li><a href="feature-essentials.html"><i class="et-heart"></i> ESSENTIALS</a></li>
                                    <li><a href="page-changelog.html"><i class="et-alarmclock"></i> CHANGELOG</a></li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            <i class="et-newspaper"></i> SIDE PANEL
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="feature-sidepanel-dark-right.html">SIDE card - DARK - RIGHT</a></li>
                                            <li><a href="feature-sidepanel-dark-left.html">SIDE card - DARK - LEFT</a></li>
                                            <li class="divider"></li>
                                            <li><a href="feature-sidepanel-light-right.html">SIDE card - LIGHT - RIGHT</a></li>
                                            <li><a href="feature-sidepanel-light-left.html">SIDE card - LIGHT - LEFT</a></li>
                                            <li class="divider"></li>
                                            <li><a href="feature-sidepanel-color-right.html">SIDE card - COLOR - RIGHT</a></li>
                                            <li><a href="feature-sidepanel-color-left.html">SIDE card - COLOR - LEFT</a></li>
                                        </ul>
                                    </li>
                                    <li><a target="_blank" href="../Admin/Admin_BS3/"><span class="badge badge-success float-right">BONUS</span><i class="et-gears"></i> ADMIN PANEL</a></li>
                                </ul>
                            </li>
                            <li class="dropdown mega-menu"><!-- PORTFOLIO -->
                                <a class="dropdown-toggle" href="#">
                                    PORTFOLIO
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="row">

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><span>GRID</span></li>
                                                    <li><a href="portfolio-grid-1-columns.html">1 COLUMN</a></li>
                                                    <li><a href="portfolio-grid-2-columns.html">2 COLUMNS</a></li>
                                                    <li><a href="portfolio-grid-3-columns.html">3 COLUMNS</a></li>
                                                    <li><a href="portfolio-grid-4-columns.html">4 COLUMNS</a></li>
                                                    <li><a href="portfolio-grid-5-columns.html">5 COLUMNS</a></li>
                                                    <li><a href="portfolio-grid-6-columns.html">6 COLUMNS</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><span>MASONRY</span></li>
                                                    <li><a href="portfolio-masonry-2-columns.html">2 COLUMNS</a></li>
                                                    <li><a href="portfolio-masonry-3-columns.html">3 COLUMNS</a></li>
                                                    <li><a href="portfolio-masonry-4-columns.html">4 COLUMNS</a></li>
                                                    <li><a href="portfolio-masonry-5-columns.html">5 COLUMNS</a></li>
                                                    <li><a href="portfolio-masonry-6-columns.html">6 COLUMNS</a></li>

                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><span>SINGLE</span></li>
                                                    <li><a href="portfolio-single-extended.html">EXTENDED ITEM</a></li>
                                                    <li><a href="portfolio-single-parallax.html">PARALLAX IMAGE</a></li>
                                                    <li><a href="portfolio-single-slider.html">SLIDER GALLERY</a></li>
                                                    <li><a href="portfolio-single-html5-video.html">HTML5 VIDEO</a></li>
                                                    <li><a href="portfolio-single-masonry-thumbs.html">MASONRY THUMBS</a></li>
                                                    <li><a href="portfolio-single-embed-video.html">EMBED VIDEO</a></li>
                                                    <li><a href="portfolio-single-project.html">SINGLE PROJECT</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><span>LAYOUT</span></li>
                                                    <li><a href="portfolio-layout-default.html">DEFAULT</a></li>
                                                    <li><a href="portfolio-layout-aside-left.html">LEFT SIDEBAR</a></li>
                                                    <li><a href="portfolio-layout-aside-right.html">RIGHT SIDEBAR</a></li>
                                                    <li><a href="portfolio-layout-aside-both.html">BOTH SIDEBAR</a></li>
                                                    <li><a href="portfolio-layout-fullwidth.html">FULL WIDTH (100%)</a></li>
                                                    <li><a href="portfolio-layout-tabfilter.html">TAB FILTER &amp; PAGINATION</a></li>

                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><span>LOADING</span></li>
                                                    <li><a href="portfolio-loading-pagination.html">PAGINATION</a></li>
                                                    <li><a href="portfolio-loading-jpagination.html">JQUERY PAGINATION</a></li>
                                                    <li><a href="portfolio-loading-infinite-scroll.html">INFINITE SCROLL</a></li>
                                                    <li><a href="portfolio-loading-ajax-page.html">AJAX IN PAGE</a></li>
                                                    <li><a href="portfolio-loading-ajax-modal.html">AJAX IN MODAL</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><!-- BLOG and SHOP -->
                                <a class="dropdown-toggle" href="#">
                                    BLOG &amp; SHOP
                                </a>
                                <ul class="dropdown-menu">

                                    <!-- BLOG -->
                                    <li>
                                        <h4><i class="fa fa-cubes"></i> BLOG</h4>
                                    </li>

                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            DEFAULT
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-default-aside-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="blog-default-aside-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="blog-default-aside-both.html">BOTH SIDEBAR</a></li>
                                            <li><a href="blog-default-fullwidth.html">FULL WIDTH</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            GRID
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-column-2colums.html">2 COLUMNS</a></li>
                                            <li><a href="blog-column-3colums.html">3 COLUMNS</a></li>
                                            <li><a href="blog-column-4colums.html">4 COLUMNS</a></li>
                                            <li class="divider"></li>
                                            <li><a href="blog-column-aside-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="blog-column-aside-right.html">RIGHT SIDEBAR</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            MASONRY
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-masonry-2colums.html">2 COLUMNS</a></li>
                                            <li><a href="blog-masonry-3colums.html">3 COLUMNS</a></li>
                                            <li><a href="blog-masonry-4colums.html">4 COLUMNS</a></li>
                                            <li><a href="blog-masonry-fullwidth.html">FULLWIDTH</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            TIMELINE
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-timeline-aside-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="blog-timeline-aside-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="blog-timeline-right-aside-right.html">RIGHT + TIMELINE RIGHT</a></li>
                                            <li><a href="blog-timeline-right-aside-left.html">LEFT + TIMELINE RIGHT</a></li>
                                            <li><a href="blog-timeline-fullwidth-left.html">FULL WIDTH - LEFT</a></li>
                                            <li><a href="blog-timeline-fullwidth-right.html">FULL WIDTH - RIGHT</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            SMALL IMAGE
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-smallimg-aside-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="blog-smallimg-aside-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="blog-smallimg-aside-both.html">BOTH SIDEBAR</a></li>
                                            <li><a href="blog-smallimg-fullwidth.html">FULL WIDTH</a></li>
                                            <li class="divider"></li>
                                            <li><a href="blog-smallimg-alternate-1.html">ALTERNATE 1</a></li>
                                            <li><a href="blog-smallimg-alternate-2.html">ALTERNATE 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            SINGLE
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-single-default.html">DEFAULT</a></li>
                                            <li><a href="blog-single-aside-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="blog-single-aside-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="blog-single-fullwidth.html">FULL WIDTH</a></li>
                                            <li><a href="blog-single-small-image-left.html">SMALL IMAGE - LEFT</a></li>
                                            <li><a href="blog-single-small-image-right.html">SMALL IMAGE - RIGHT</a></li>
                                            <li><a href="blog-single-big-image.html">BIG IMAGE</a></li>
                                            <li><a href="blog-single-fullwidth-image.html">FULLWIDTH IMAGE</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            COMMENTS
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="blog-comments-bordered.html#comments">BORDERED COMMENTS</a></li>
                                            <li><a href="blog-comments-default.html#comments">DEFAULT COMMENTS</a></li>
                                            <li><a href="blog-comments-facebook.html#comments">FACEBOOK COMMENTS</a></li>
                                            <li><a href="blog-comments-disqus.html#comments">DISQUS COMMENTS</a></li>
                                        </ul>
                                    </li>


                                    <!-- SHOP -->
                                    <li>
                                        <h4><i class="fa fa-opencart"></i> SHOP</h4>
                                    </li>

                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            1 COLUMN
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="shop-1col-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="shop-1col-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="shop-1col-both.html">BOTH SIDEBAR</a></li>
                                            <li><a href="shop-1col-full.html">FULL WIDTH</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            2 COLUMNS
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="shop-2col-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="shop-2col-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="shop-2col-both.html">BOTH SIDEBAR</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            3 COLUMNS
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="shop-3col-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="shop-3col-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="shop-3col-full.html">FULL WIDTH</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            4 COLUMNS
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="shop-4col-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="shop-4col-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="shop-4col-full.html">FULL WIDTH</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" href="#">
                                            SINGLE PRODUCT
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="shop-single-left.html">LEFT SIDEBAR</a></li>
                                            <li><a href="shop-single-right.html">RIGHT SIDEBAR</a></li>
                                            <li><a href="shop-single-both.html">BOTH SIDEBAR</a></li>
                                            <li><a href="shop-single-full.html">FULL WIDTH</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-compare.html">COMPARE</a></li>
                                    <li><a href="shop-cart.html">CART</a></li>
                                    <li><a href="shop-checkout.html">CHECKOUT</a></li>
                                    <li><a href="shop-checkout-final.html">ORDER PLACED</a></li>

                                </ul>
                            </li>
                            <li class="dropdown mega-menu"><!-- SHORTCODES -->
                                <a class="dropdown-toggle" href="#">
                                    SHORTCODES
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="row">

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><a href="shortcode-animations.html">ANIMATIONS</a></li>
                                                    <li><a href="shortcode-buttons.html">BUTTONS</a></li>
                                                    <li><a href="shortcode-carousel.html">CAROUSEL</a></li>
                                                    <li><a href="shortcode-charts.html">GRAPHS</a></li>
                                                    <li><a href="shortcode-clients.html">CLIENTS</a></li>
                                                    <li><a href="shortcode-columns.html">GRID &amp; COLUMNS</a></li>
                                                    <li><a href="shortcode-counters.html">COUNTERS</a></li>
                                                    <li><a href="shortcode-forms.html">FORM ELEMENTS</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><a href="shortcode-dividers.html">DIVIDERS</a></li>
                                                    <li><a href="shortcode-icon-boxes.html">BOXES &amp; ICONS</a></li>
                                                    <li><a href="shortcode-galleries.html">GALLERIES</a></li>
                                                    <li><a href="shortcode-headings.html">HEADING STYLES</a></li>
                                                    <li><a href="shortcode-icon-lists.html">ICON LISTS</a></li>
                                                    <li><a href="shortcode-labels.html">LABELS &amp; BADGES</a></li>
                                                    <li><a href="shortcode-lightbox.html">LIGHTBOX</a></li>
                                                    <li><a href="shortcode-forms-editors.html">HTML EDITORS</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><a href="shortcode-cards.html">Cards</a></li>
                                                    <li><a href="shortcode-maps.html"><span class="badge badge-success float-right">new</span> MAPS</a></li>
                                                    <li><a href="shortcode-media-embeds.html">MEDIA EMBEDS</a></li>
                                                    <li><a href="shortcode-modals.html">MODAL / POPOVER / NOTIF</a></li>
                                                    <li><a href="shortcode-navigations.html">NAVIGATIONS</a></li>
                                                    <li><a href="shortcode-paginations.html">PAGINATIONS</a></li>
                                                    <li><a href="shortcode-progress-bar.html">PROGRESS BARS</a></li>
                                                    <li><a href="shortcode-widgets.html">WIDGETS</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><a href="shortcode-pricing.html">PRICING BOXES</a></li>
                                                    <li><a href="shortcode-process-steps.html">PROCESS STEPS</a></li>
                                                    <li><a href="shortcode-callouts.html">CALLOUTS</a></li>
                                                    <li><a href="shortcode-info-bars.html">INFO BARS</a></li>
                                                    <li><a href="shortcode-blockquotes.html">BLOCKQUOTES</a></li>
                                                    <li><a href="shortcode-responsive.html">RESPONSIVE</a></li>
                                                    <li><a href="shortcode-sections.html">SECTIONS</a></li>
                                                    <li><a href="shortcode-social-icons.html">SOCIAL ICONS</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><a href="shortcode-alerts.html">ALERTS</a></li>
                                                    <li><a href="shortcode-styled-icons.html">STYLED ICONS</a></li>
                                                    <li><a href="shortcode-tables.html">TABLES</a></li>
                                                    <li><a href="shortcode-tabs.html">TABS</a></li>
                                                    <li><a href="shortcode-testimonials.html">TESTIMONIALS</a></li>
                                                    <li><a href="shortcode-thumbnails.html">THUMBNAILS</a></li>
                                                    <li><a href="shortcode-toggles.html">TOGGLES</a></li>
                                                    <li><a href="shortcode-material-design-badges.html"><span class="badge badge-danger float-right">new</span> <b>MATERIAL DESIGN</b></a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                            </li>



                            <!--
                                MENU ANIMATIONS
                                    .nav-animate-fadeIn
                                    .nav-animate-fadeInUp
                                    .nav-animate-bounceIn
                                    .nav-animate-bounceInUp
                                    .nav-animate-flipInX
                                    .nav-animate-flipInY
                                    .nav-animate-zoomIn
                                    .nav-animate-slideInUp

                                    .nav-hover-animate 		= animate text on hover

                                    .hover-animate-bounceIn = bounceIn effect on mouse over of main menu
                            -->
                            <li class="dropdown mega-menu nav-animate-fadeIn nav-hover-animate hover-animate-bounceIn"><!-- THEMATIC -->
                                <a class="dropdown-toggle noicon" href="#">
                                    <span class="badge badge-danger float-right fs-11">v2</span>
                                    <b>NEW</b>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-clean">
                                    <li>
                                        <div class="row">

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><span>PACKS : READY TO USE</span></li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <span class="fs-11 mt-0 pb-15 pt-15 text-info">NEW AND HOT: COMPLETE PACKAGES READY TO USE</span>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li><a target="_blank" href="pack-realestate-home-1.html">REAL ESTATE</a></li>
                                                    <li><a target="_blank" href="pack-megashop-home-1.html">MEGA SHOP</a></li>
                                                    <li><a target="_blank" href="pack-hotel-home-1.html">HOTEL v1</a></li>
                                                    <li><a target="_blank" href="pack-hotel-v2-home-1.html">HOTEL v2</a></li>
                                                    <li><a target="_blank" href="pack-photography-home-1.html">PHOTOGRAPHY / PORTFOLIO</a></li>
                                                    <li><a target="_blank" href="pack-caffe-home-1.html">CAFFE</a></li>
                                                    <li><a target="_blank" href="pack-caffe-onepage.html">CAFFE - ONEPAGE</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><span>NEW PAGES</span></li>
                                                    <li><a target="_blank" href="portfolio-single-project.html">PORTFOLIO SINGLE</a></li>
                                                    <li><a target="_blank" href="page-cookie-alert.html">COOKIE ALERT</a></li>
                                                    <li><a target="_blank" href="page-category.html">CATEGORY PAGE</a></li>

                                                    <li><span>IMPROVED</span></li>
                                                    <li><a target="_blank" href="index-thematics-hosting.html">HOMEPAGE : <b>HOSTING</b></a></li>
                                                    <li><a target="_blank" href="index-thematics-restaurant.html">HOMEPAGE : <b>RESTAURANT</b></a></li>
                                                    <li><a target="_blank" href="index-thematics-lawyer.html">HOMEPAGE : <b>LAWYER</b></a></li>
                                                    <li><a target="_blank" href="index-thematics-fashion.html">HOMEPAGE : <b>FASHION</b></a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-5th">
                                                <ul class="list-unstyled">
                                                    <li><span>NEW COMPONENTS</span></li>
                                                    <li><a target="_blank" href="shortcode-material-design-badges.html">MATERIAL DESIGN LITE</a></li>

                                                    <li><span>NEW FEATURES</span></li>
                                                    <li><a target="_blank" href="feature-menu-12.html">NEW HEADER/MENU</a></li>
                                                    <li><a target="_blank" href="feature-menu-dd-effects.html">MENU DROPDOWN EFFECTS</a></li>
                                                    <li><a target="_blank" href="shortcode-carousel-2.html">OWL CAROUSEL 2</a></li>
                                                    <li><a target="_blank" href="shortcode-thumbnails.html">IMAGE HOVER/STYLES</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-md-6 hidden-sm text-center">
                                                <div class="p-15 block">
                                                    <img class="img-fluid" src="demo_files/images/new_menu.png" alt="" />
                                                </div>
                                                <p class="menu-caption hidden-xs-down text-muted text-center">
                                                    THE MOST COMPLETE HTML TEMPLATE
                                                </p>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a id="sidepanel_btn" href="#" class="fa fa-bars"></a>
                            </li>
                        </ul>

                    </nav>
                </div>

            </div>
        </header>
        <!-- /Top Nav -->

    </div>



    <!-- REVOLUTION SLIDER -->
    <div class="slider fullwidthbanner-container roundedcorners">
        <!--
            Navigation Styles:

                data-navigationStyle="" theme default navigation

                data-navigationStyle="preview1"
                data-navigationStyle="preview2"
                data-navigationStyle="preview3"
                data-navigationStyle="preview4"

            Bottom Shadows
                data-shadow="1"
                data-shadow="2"
                data-shadow="3"

            Slider Height (do not use on fullscreen mode)
                data-height="300"
                data-height="350"
                data-height="400"
                data-height="450"
                data-height="500"
                data-height="550"
                data-height="600"
                data-height="650"
                data-height="700"
                data-height="750"
                data-height="800"
        -->
        <div class="fullwidthbanner" data-height="600" data-shadow="0" data-navigationStyle="preview2">
            <ul class="hide">

                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-delay="10000" data-saveperformance="off" data-title="Slide 1" style="background-color: #F6F6F6;">

                    <img src="assets/images/_smarty/backgrounds/grey-noise-min.jpg" alt="video" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption customin ltl tp-resizeme revo-slider-caps-text uppercase"
                         data-x="left" data-hoffset="0"
                         data-y="70"
                         data-customin="x:-200;y:0;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-speed="400"
                         data-start="1000"
                         data-easing="easeOutQuad"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         data-endeasing="Power4.easeIn">
                        <img src="demo_files/images/desktop_slider_2.png" alt="">
                    </div>

                    <div class="tp-caption large_bold_grey skewfromrightshort customout font-open-sans"
                         data-x="645"
                         data-y="70"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="800"
                         data-easing="Back.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="off"
                         style="z-index: 4; font-weight:bold;">Smarty
                    </div>

                    <div class="tp-caption large_bold_grey skewfromleftshort customout font-open-sans"
                         data-x="645"
                         data-y="133"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="300"
                         data-start="1100"
                         data-easing="Back.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="off"
                         style="z-index: 7; font-weight:bold !important;">Multipurpose
                    </div>

                    <div class="tp-caption ltl customin customout small_light_white font-lato"
                         data-x="650"
                         data-y="235"
                         data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1.3;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-speed="500"
                         data-start="1300"
                         data-easing="easeOutQuad"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn" style=" color: #333; font-size:20px; max-width: 550px; white-space: normal; text-shadow:none;">
                        Smarty Multipurpose Template, now offering you
                        over 600 html pages fully customizable + Admin + RTL!<br />
                        <strong>Lifetime free update!</strong>
                    </div>


                    <div class="tp-caption large_bold_darkblue skewfromleftshort customout"
                         data-x="650" data-hoffset="-90"
                         data-y="370"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="1600"
                         data-easing="Back.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="off"
                         style="z-index: 10; text-shadow:none;">600+
                    </div>

                    <div class="tp-caption medium_bg_darkblue skewfromleftshort customout"
                         data-x="650" data-hoffset="-90"
                         data-y="430"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="1650"
                         data-easing="Back.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="off"
                         style="z-index: 11; text-shadow:none;">Html Pages
                    </div>

                    <div class="tp-caption medium_bold_red skewfromleftshort customout start font300"
                         data-x="800" data-hoffset="-90"
                         data-y="390"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="1850"
                         data-easing="Back.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="off"
                         style="z-index: 13; text-shadow:none; font-weight:300;">+ RTL <strong>Support</strong>
                    </div>

                    <div class="tp-caption medium_bg_red skewfromleftshort customout"
                         data-x="800" data-hoffset="-90"
                         data-y="430"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="500"
                         data-start="2300"
                         data-easing="Back.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         data-captionhidden="off"
                         style="z-index: 21; text-shadow:none;">Admin Included
                    </div>

                </li>

                <!-- SLIDE  -->
                <li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide 2">

                    <img src="assets/images/_smarty/1x1.png" data-lazyload="demo_files/images/index-min.jpg" alt="" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" />

                    <div class="overlay dark-1"><!-- dark overlay [1 to 9 opacity] --></div>

                    <div class="tp-caption customin ltl tp-resizeme text_white"
                         data-x="center"
                         data-y="155"
                         data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-speed="800"
                         data-start="1000"
                         data-easing="easeOutQuad"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         data-endeasing="Power4.easeIn" style="z-index: 10;">
                        <span class="fw-300">DEVELOPMENT / MARKETING / DESIGN / PHOTO</span>
                    </div>

                    <div class="tp-caption customin ltl tp-resizeme large_bold_white"
                         data-x="center"
                         data-y="205"
                         data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-speed="800"
                         data-start="1200"
                         data-easing="easeOutQuad"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         data-endeasing="Power4.easeIn" style="z-index: 10;">
                        WELCOME TO SMARTY
                    </div>

                    <div class="tp-caption customin ltl tp-resizeme small_light_white font-lato"
                         data-x="center"
                         data-y="295"
                         data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-speed="800"
                         data-start="1400"
                         data-easing="easeOutQuad"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         data-endeasing="Power4.easeIn" style="z-index: 10; width: 100%; max-width: 750px; white-space: normal; text-align:center; font-size:20px;">
                        Fabulas definitiones ei pri per recteque hendrerit scriptorem in errem scribentur mel fastidii propriae philosophia cu mea.
                    </div>

                    <div class="tp-caption customin ltl tp-resizeme"
                         data-x="center"
                         data-y="383"
                         data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-speed="800"
                         data-start="1550"
                         data-easing="easeOutQuad"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         data-endeasing="Power4.easeIn" style="z-index: 10;">
                        <a href="#purchase" class="btn btn-default btn-lg">
                            <span>Purchase Smarty Now</span>
                        </a>
                    </div>

                </li>

                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" data-title="Slide 3">
                    <img src="assets/images/_smarty/1x1.png" data-lazyload="demo_files/images/wall2.jpg" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />

                    <div class="tp-caption lfr"
                         data-x="left" data-hoffset="60"
                         data-y="85"
                         data-speed="1500"
                         data-start="500"
                         data-easing="easeOutExpo"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 2;">
                        <img src="assets/images/_smarty/1x1.png" data-lazyload="demo_files/images/ipad.png" alt="" />
                    </div>

                    <div class="tp-caption block_black sft"
                         data-x="right" data-hoffset="-70"
                         data-y="137"
                         data-speed="750"
                         data-start="1100"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Smarty Template
                    </div>

                    <div class="tp-caption block_black sfb"
                         data-x="right" data-hoffset="-70"
                         data-y="176"
                         data-speed="750"
                         data-start="1400"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">100% Fully Responisve
                    </div>

                    <div class="tp-caption block_theme_color sft"
                         data-x="right"  data-hoffset="-70"
                         data-y="239"
                         data-speed="750"
                         data-start="1700"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">With Incredible
                    </div>

                    <div class="tp-caption block_theme_color sfb"
                         data-x="right"  data-hoffset="-70"
                         data-y="278"
                         data-speed="750"
                         data-start="2000"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">Additions &amp; Optimizations
                    </div>

                    <div class="tp-caption block_black sft"
                         data-x="right"  data-hoffset="-70"
                         data-y="340"
                         data-speed="750"
                         data-start="2300"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">For Your Next Projects
                    </div>
                </li>

                <!-- SLIDE  -->
                <li data-transition="fade" data-slotamount="7" data-masterspeed="300" data-link="http://www.stepofweb.com/" data-title="Slide 4" data-target="_blank" data-saveperformance="off">

                    <img src="assets/images/_smarty/1x1.png" data-lazyload="demo_files/images/wall.jpg" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />

                    <div class="tp-caption lfb"
                         data-x="right" data-hoffset="-70"
                         data-y="120"
                         data-speed="2000"
                         data-start="500"
                         data-easing="easeOutExpo"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 2;">
                        <img src="assets/images/_smarty/1x1.png" alt="" data-lazyload="demo_files/images/desktop_slider.png">
                    </div>

                    <div class="tp-caption mediumlarge_light_white lfb tp-resizeme"
                         data-x="left" data-hoffset="150"
                         data-y="183"
                         data-speed="1000"
                         data-start="1400"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">+ Amazing Layouts
                    </div>

                    <div class="tp-caption mediumlarge_light_white lft tp-resizeme"
                         data-x="left" data-hoffset="70"
                         data-y="135"
                         data-speed="1000"
                         data-start="1200"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">+ Awesome  Sliders
                    </div>

                    <div class="tp-caption block_white sfl tp-resizeme"
                         data-x="70"
                         data-y="266"
                         data-speed="750"
                         data-start="1900"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">100% Fully Responsive
                    </div>

                    <div class="tp-caption block_theme_color sfr tp-resizeme"
                         data-x="120"
                         data-y="310"
                         data-speed="750"
                         data-start="2200"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;">And Simply A Joy To Use
                    </div>

                    <div class="tp-caption block_white sfb tp-resizeme"
                         data-x="170"
                         data-y="356"
                         data-speed="750"
                         data-start="2500"
                         data-easing="easeOutExpo"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300"
                         style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;">Why Not Buy Epona?
                    </div>
                </li>

                <!-- SLIDE  -->
                <li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide 5">

                    <img src="assets/images/_smarty/1x1.png" data-lazyload="demo_files/images/1200x800/24-min.jpg" alt="" data-bgposition="center center" data-kenburns="on" data-duration="10000" data-ease="Linear.easeNone" data-bgfit="100" data-bgfitend="110" />

                    <div class="tp-caption very_large_text lfb ltt tp-resizeme"
                         data-x="right" data-hoffset="-100"
                         data-y="center" data-voffset="-50"
                         data-speed="600"
                         data-start="800"
                         data-easing="Power4.easeOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn">
                        RUN WILD
                    </div>

                    <div class="tp-caption medium_light_white lfb ltt tp-resizeme"
                         data-x="right" data-hoffset="-110"
                         data-y="center" data-voffset="60"
                         data-speed="600"
                         data-start="900"
                         data-easing="Power4.easeOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn">
                        Happiness is an accident of nature,<br/>
                        a beautiful and flawless aberration.<br/>
                        <span style="font-size:24px;font-weight:400;">&ndash; Pat Conroy</span>
                    </div>

                </li>

                <!-- SLIDE -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide 6">

                    <img src="assets/images/_smarty/1x1.png" data-lazyload="demo_files/images/video/back.jpg" alt="video" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption tp-fade fadeout fullscreenvideo"
                         data-x="0"
                         data-y="50"
                         data-speed="1000"
                         data-start="1100"
                         data-easing="Power4.easeOut"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="1500"
                         data-endeasing="Power4.easeIn"
                         data-autoplay="true"
                         data-autoplayonlyfirsttime="false"
                         data-nextslideatend="true"
                         data-volume="mute"
                         data-forceCover="1"
                         data-aspectratio="16:9"
                         data-forcerewind="on" style="z-index: 2;">

                        <div class="tp-dottedoverlay twoxtwo"><!-- dotted overlay --></div>

                        <video class="" preload="none" style="widt:100%;height:100%" poster="demo_files/images/video/back.jpg">
                            <source src="demo_files/images/video/back.webm" type="video/webm" />
                            <source src="demo_files/images/video/back.mp4" type="video/mp4" />
                        </video>

                    </div>

                    <div class="tp-caption customin ltl tp-resizeme text_white"
                         data-x="center"
                         data-y="155"
                         data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-speed="800"
                         data-start="1000"
                         data-easing="easeOutQuad"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         data-endeasing="Power4.easeIn" style="z-index: 3;">
                        <span class="fw-300">DEVELOPMENT / MARKETING / DESIGN / PHOTO</span>
                    </div>

                    <div class="tp-caption customin ltl tp-resizeme large_bold_white"
                         data-x="center"
                         data-y="205"
                         data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-speed="800"
                         data-start="1200"
                         data-easing="easeOutQuad"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         data-endeasing="Power4.easeIn" style="z-index: 3;">
                        WELCOME TO SMARTY
                    </div>

                    <div class="tp-caption customin ltl tp-resizeme small_light_white font-lato"
                         data-x="center"
                         data-y="295"
                         data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-speed="800"
                         data-start="1400"
                         data-easing="easeOutQuad"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         data-endeasing="Power4.easeIn" style="z-index: 3; width: 100%; max-width: 750px; white-space: normal; text-align:center; font-size:20px;">
                        Fabulas definitiones ei pri per recteque hendrerit scriptorem in errem scribentur mel fastidii propriae philosophia cu mea.
                    </div>

                    <div class="tp-caption customin ltl tp-resizeme"
                         data-x="center"
                         data-y="363"
                         data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-speed="800"
                         data-start="1550"
                         data-easing="easeOutQuad"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         data-endeasing="Power4.easeIn" style="z-index: 3;">
                        <a href="#purchase" class="btn btn-default btn-lg">
                            <span>Purchase Smarty Now</span>
                        </a>
                    </div>

                </li>

            </ul>

            <div class="tp-bannertimer"><!-- progress bar --></div>
        </div>
    </div>
    <!-- /REVOLUTION SLIDER -->


    <!-- INFO BAR -->
    <section class="info-bar info-bar-clean">
        <div class="container">

            <div class="row">

                <div class="col-sm-4">
                    <i class="glyphicon glyphicon-globe"></i>
                    <h3>FULLY RESPONSIVE</h3>
                    <p>Smarty Template is fully responsive</p>
                </div>

                <div class="col-sm-4">
                    <i class="glyphicon glyphicon-usd"></i>
                    <h3>ADMIN INCLUDED</h3>
                    <p>Smarty Template include admin</p>
                </div>

                <div class="col-sm-4">
                    <i class="glyphicon glyphicon-flag"></i>
                    <h3>ONLINE SUPPORT 24/7</h3>
                    <p>Free support via email</p>
                </div>

            </div>

        </div>
    </section>
    <!-- /INFO BAR -->



    <!-- WELCOME -->
    <section class="pb-0">
        <div class="container">
            <header class="text-center mb-40">
                <h1 class="fw-300">Welcome to Smarty</h1>
                <h2 class="fw-300 letter-spacing-1 fs-13"><span>THE MOST COMPLETE TEMPLATE EVER</span></h2>
            </header>

            <div class="text-center">
                <p class="lead">
                    Smarty has powerful options &amp; tools, unlimited designs, responsive framework and amazing support.
                    We are dedicated to providing you with the best experience possible. Read below to find out why the sky's the limit when using Smarty.
                </p>

                <div class="mt-40">
                    <img class="img-fluid" src="demo_files/images/index/ipad.jpg" alt="welcome" />
                </div>

            </div>
        </div>
    </section>
    <!-- /WELCOME -->




    <!-- -->
    <section class="alternate">
        <div class="container">

            <div class="row">

                <div class="col-md-4">

                    <div class="box-icon box-icon-side box-icon-color box-icon-round">
                        <i class="fa fa-tablet"></i>
                        <a class="box-icon-title" href="#">
                            <h2>Fully Reposnive</h2>
                        </a>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                        <a class="box-icon-more font-lato fw-300" href="#">Learn More</a>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="box-icon box-icon-side box-icon-color box-icon-round">
                        <i class="fa fa-tint"></i>
                        <a class="box-icon-title" href="#">
                            <h2>Reusable Elements</h2>
                        </a>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                        <a class="box-icon-more font-lato fw-300" href="#">Learn More</a>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="box-icon box-icon-side box-icon-color box-icon-round">
                        <i class="fa fa-cogs"></i>
                        <a class="box-icon-title" href="#">
                            <h2>Multipurpose</h2>
                        </a>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                        <a class="box-icon-more font-lato fw-300" href="#">Learn More</a>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- / -->




    <!-- -->
    <section>
        <div class="container">
            <header class="text-center mb-40">
                <h1 class="fw-300">Real Support. Real People.</h1>
                <h2 class="fw-300 letter-spacing-1 fs-13"><span>THE MOST COMPLETE TEMPLATE EVER</span></h2>
            </header>

            <div class="row">

                <div class="col-sm-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod consequuntur quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vero, animi suscipit id facere officia. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum magnam.</p>

                    <a class="btn btn-default" href="#">LEARN MORE</a>
                </div>

                <div class="col-sm-6">
                    <img class="img-fluid" src="demo_files/images/index/support.jpg" alt="support" />
                </div>

            </div>
        </div>
    </section>
    <!-- / -->




    <!-- COLOR BOXES -->
    <section class="p-0 b-0">
        <!--
            .box-pink
            .box-blue
            .box-orange
            .box-yellow
            .box-purple
            .box-red
            .box-brown
            .box-green
            .box-black
            .box-gray
            .box-teal



        CREATE YOUR OWN COLORS - CSS EXAMPLE:
            .box-pink>div:nth-child(1) {
                background-color:#e2476b;
            }
            .box-pink>div:nth-child(2) {
                background-color:#e9738f;
            }
            .box-pink>div:nth-child(3) {
                background-color:#f09fb2;
            }
            .box-pink>div:nth-child(4) {
                background-color:#f7cbd5;
            }

        -->
        <div class="row box-gradient box-gray">
            <div class="col-6 col-sm-3">
                <i class="fa fa-child fa-4x"></i>
                <h2 class="countTo font-raleway" data-speed="3000">8165</h2>
                <p>HAPPY CUSTOMERS</p>
            </div>

            <div class="col-6 col-sm-3">
                <i class="fa fa-smile-o fa-4x"></i>
                <h2 class="countTo font-raleway" data-speed="3000">1033</h2>
                <p>FACIALS</p>
            </div>

            <div class="col-6 col-sm-3">
                <i class="fa fa-heart fa-4x"></i>
                <h2 class="countTo font-raleway" data-speed="3000">24567</h2>
                <p>MASSAGES</p>
            </div>

            <div class="col-6 col-sm-3">
                <i class="fa fa-female fa-4x"></i>
                <h2 class="countTo font-raleway" data-speed="3000">68</h2>
                <p>MOTHERS TO BE</p>
            </div>
        </div>
    </section>
    <!-- /COLOR BOXES -->




    <!-- Features -->
    <section>
        <div class="container">

            <header class="text-center mb-40">
                <h1 class="fw-300">Smarty Features</h1>
                <h2 class="fw-300 letter-spacing-1 fs-13"><span>WE TRULY CARE ABOUT OUR CUSTOMERS</span></h2>
            </header>

            <div class="row mt-80">

                <div class="col-lg-4 col-md-4 order-md-2 text-center">

                    <img class="img-fluid" src="demo_files/images/iphone-min.png" alt="" />

                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 order-md-1">

                    <div class="box-icon box-icon-right">
                        <a class="box-icon-title" href="#">
                            <i class="fa fa-eye"></i>
                            <h2>Retina Ready</h2>
                        </a>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                    </div>

                    <div class="box-icon box-icon-right">
                        <a class="box-icon-title" href="#">
                            <i class="fa fa-check"></i>
                            <h2>Unlimited Options</h2>
                        </a>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                    </div>

                    <div class="box-icon box-icon-right">
                        <a class="box-icon-title" href="#">
                            <i class="fa fa-rocket"></i>
                            <h2>Premium Sliders</h2>
                        </a>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                    </div>

                    <div class="box-icon box-icon-right">
                        <a class="box-icon-title" href="#">
                            <i class="fa fa-flash"></i>
                            <h2>performance</h2>
                        </a>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                    </div>

                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 order-md-3">

                    <div class="box-icon box-icon-left">
                        <a class="box-icon-title" href="#">
                            <i class="fa fa-tablet"></i>
                            <h2>Fully Reposnive</h2>
                        </a>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                    </div>

                    <div class="box-icon box-icon-left">
                        <a class="box-icon-title" href="#">
                            <i class="fa fa-random"></i>
                            <h2>Clean Design</h2>
                        </a>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                    </div>

                    <div class="box-icon box-icon-left">
                        <a class="box-icon-title" href="#">
                            <i class="fa fa-tint"></i>
                            <h2>Reusable Elements</h2>
                        </a>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                    </div>

                    <div class="box-icon box-icon-left">
                        <a class="box-icon-title" href="#">
                            <i class="fa fa-cogs"></i>
                            <h2>Multipurpose</h2>
                        </a>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
                    </div>

                </div>

            </div>


        </div>
    </section>
    <!-- /Features -->




    <!-- CALLOUT -->
    <section class="callout-dark heading-title heading-arrow-bottom">
        <div class="container">

            <header class="text-center">
                <h1 class="fw-300 fs-40">Our Latest Works</h1>
                <h2 class="fw-300 letter-spacing-1 fs-13"><span>WE TRULY CARE ABOUT OUR CUSTOMERS</span></h2>
            </header>

        </div>
    </section>
    <!-- /CALLOUT -->




    <!-- WORK -->
    <section class="p-0">
        <div id="portfolio" class="portfolio-nogutter">
            <div class="row mix-grid">

                <div class="col-md-3 col-sm-3 mix development"><!-- item -->

                    <div class="item-box">
                        <figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/1-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus fs-20"></span>
											</a>

                                            <!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
											</a>

										</span>
									</span>

                            <img class="img-fluid" src="demo_files/images/mockups/600x399/1-min.jpg" width="600" height="399" alt="">
                        </figure>

                        <div class="item-box-desc">
                            <h3>Nature Photography</h3>
                            <ul class="list-inline categories m-0">
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">Design</a></li>
                            </ul>
                        </div>

                    </div>

                </div><!-- /item -->


                <div class="col-md-3 col-sm-3 mix development"><!-- item -->

                    <div class="item-box">
                        <figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/11-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus fs-20"></span>
											</a>

                                            <!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
											</a>

										</span>
									</span>

                            <img class="img-fluid" src="demo_files/images/mockups/600x399/11-min.jpg" width="600" height="399" alt="">
                        </figure>

                        <div class="item-box-desc">
                            <h3>Nature Photography</h3>
                            <ul class="list-inline categories m-0">
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">Design</a></li>
                            </ul>
                        </div>

                    </div>

                </div><!-- /item -->


                <div class="col-md-3 col-sm-3 mix photography"><!-- item -->

                    <div class="item-box">
                        <figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/20-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus fs-20"></span>
											</a>

                                            <!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
											</a>

										</span>
									</span>

                            <img class="img-fluid" src="demo_files/images/mockups/600x399/20-min.jpg" width="600" height="399" alt="">
                        </figure>

                        <div class="item-box-desc">
                            <h3>Fashion Design</h3>
                            <ul class="list-inline categories m-0">
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">Design</a></li>
                            </ul>
                        </div>

                    </div>

                </div><!-- /item -->


                <div class="col-md-3 col-sm-3 mix design"><!-- item -->

                    <div class="item-box">
                        <figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/19-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus fs-20"></span>
											</a>

                                            <!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
											</a>

										</span>
									</span>

                            <img class="img-fluid" src="demo_files/images/mockups/600x399/19-min.jpg" width="600" height="399" alt="">
                        </figure>

                        <div class="item-box-desc">
                            <h3>Ocean Project</h3>
                            <ul class="list-inline categories m-0">
                                <li><a href="#">Photography</a></li>
                                <li><a href="#">Design</a></li>
                            </ul>
                        </div>

                    </div>

                </div><!-- /item -->


                <div class="col-md-3 col-sm-3 mix design"><!-- item -->

                    <div class="item-box">
                        <figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/12-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus fs-20"></span>
											</a>

                                            <!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
											</a>

										</span>
									</span>

                            <img class="img-fluid" src="demo_files/images/mockups/600x399/12-min.jpg" width="600" height="399" alt="">
                        </figure>

                        <div class="item-box-desc">
                            <h3>Architect Project</h3>
                            <ul class="list-inline categories m-0">
                                <li><a href="#">Architecture</a></li>
                                <li><a href="#">Design</a></li>
                            </ul>
                        </div>

                    </div>

                </div><!-- /item -->


                <div class="col-md-3 col-sm-3 mix development"><!-- item -->

                    <div class="item-box">
                        <figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/13-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus fs-20"></span>
											</a>

                                            <!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
											</a>

										</span>
									</span>

                            <img class="img-fluid" src="demo_files/images/mockups/600x399/13-min.jpg" width="600" height="399" alt="">
                        </figure>

                        <div class="item-box-desc">
                            <h3>Speaker Design</h3>
                            <ul class="list-inline categories m-0">
                                <li><a href="#">Audio</a></li>
                                <li><a href="#">Design</a></li>
                            </ul>
                        </div>

                    </div>

                </div><!-- /item -->


                <div class="col-md-3 col-sm-3 mix photography"><!-- item -->

                    <div class="item-box">
                        <figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/14-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus fs-20"></span>
											</a>

                                            <!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
											</a>

										</span>
									</span>

                            <img class="img-fluid" src="demo_files/images/mockups/600x399/14-min.jpg" width="600" height="399" alt="">
                        </figure>

                        <div class="item-box-desc">
                            <h3>Mobile Development</h3>
                            <ul class="list-inline categories m-0">
                                <li><a href="#">Development</a></li>
                                <li><a href="#">Design</a></li>
                            </ul>
                        </div>

                    </div>

                </div><!-- /item -->


                <div class="col-md-3 col-sm-3 mix design"><!-- item -->

                    <div class="item-box">
                        <figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">

											<!-- lightbox -->
											<a class="ico-rounded lightbox" href="demo_files/images/mockups/1200x800/15-min.jpg" data-plugin-options='{"type":"image"}'>
												<span class="fa fa-plus fs-20"></span>
											</a>

                                            <!-- details -->
											<a class="ico-rounded" href="portfolio-single-slider.html">
												<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
											</a>

										</span>
									</span>

                            <img class="img-fluid" src="demo_files/images/mockups/600x399/15-min.jpg" width="600" height="399" alt="">
                        </figure>

                        <div class="item-box-desc">
                            <h3>Nature Art</h3>
                            <ul class="list-inline categories m-0">
                                <li><a href="#">Nature</a></li>
                                <li><a href="#">Art</a></li>
                            </ul>
                        </div>

                    </div>

                </div><!-- /item -->

            </div>

        </div>
    </section>
    <!-- /WORK -->




    <!-- -->
    <section>
        <div class="container">

            <div class="row">

                <!-- toggle -->
                <div class="col-md-4 col-sm-4">
                    <div class="toggle toggle-accordion toggle-transparent toggle-bordered-full">

                        <div class="toggle active">
                            <label>Lorem ipsum dolor.</label>
                            <div class="toggle-content">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                        </div>

                        <div class="toggle">
                            <label>Sit amet, consectetur.</label>
                            <div class="toggle-content">
                                <p>Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc.</p>
                            </div>
                        </div>

                        <div class="toggle">
                            <label>Consectetur adipiscing elit.</label>
                            <div class="toggle-content">
                                <p>Ut enim massa, sodales tempor convallis et, iaculis ac massa.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /toggle -->

                <!-- skills -->
                <div class="col-md-4 col-sm-4">
                    <h4>Our Skills</h4>

                    <label>
                        <span class="float-right">60%</span>
                        MARKETING
                    </label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%; min-width: 2em;"></div>
                    </div>

                    <label>
                        <span class="float-right">88%</span>
                        SALES
                    </label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 88%; min-width: 2em;"></div>
                    </div>

                    <label>
                        <span class="float-right">93%</span>
                        DESIGN
                    </label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 93%; min-width: 2em;"></div>
                    </div>

                    <label>
                        <span class="float-right">77%</span>
                        DEVELOPMENT
                    </label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 77%; min-width: 2em;"></div>
                    </div>

                    <label>
                        <span class="float-right">99%</span>
                        OTHER
                    </label>
                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 99%; min-width: 2em;"></div>
                    </div>

                </div>
                <!-- /skills -->

                <!-- recent news -->
                <div class="col-md-4 col-sm-4">
                    <h4>Recent News</h4>

                    <div class="row tab-post"><!-- post -->
                        <div class="col-md-2 col-sm-2 col-2">
                            <a href="blog-sidebar-left.html">
                                <img src="demo_files/images/people/300x300/1-min.jpg" width="50" alt="" />
                            </a>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10">
                            <a href="blog-sidebar-left.html" class="tab-post-link">Maecenas metus nulla</a>
                            <small>June 29 2014</small>
                        </div>
                    </div><!-- /post -->

                    <div class="row tab-post"><!-- post -->
                        <div class="col-md-2 col-sm-2 col-2">
                            <a href="blog-sidebar-left.html">
                                <img src="demo_files/images/people/300x300/2-min.jpg" width="50" alt="" />
                            </a>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10">
                            <a href="blog-sidebar-left.html" class="tab-post-link">Curabitur pellentesque neque eget</a>
                            <small>June 29 2014</small>
                        </div>
                    </div><!-- /post -->

                    <div class="row tab-post"><!-- post -->
                        <div class="col-md-2 col-sm-2 col-2">
                            <a href="blog-sidebar-left.html">
                                <img src="demo_files/images/people/300x300/3-min.jpg" width="50" alt="" />
                            </a>
                        </div>
                        <div class="col-md-10 col-sm-10 col-10">
                            <a href="blog-sidebar-left.html" class="tab-post-link">Nam et lacus neque. Ut enim massa</a>
                            <small>June 29 2014</small>
                        </div>
                    </div><!-- /post -->

                </div>
                <!-- /recent news -->

            </div>

        </div>
    </section>
    <!-- / -->




    <!-- PARALLAX -->
    <section class="parallax parallax-2" style="background-image: url('demo_files/images/1200x800/3-min.jpg');">
        <div class="overlay dark-8"><!-- dark overlay [1 to 9 opacity] --></div>

        <div class="container">

            <div class="text-center">
                <h3 class="m-0">Smarty Inside</h3>
                <p class="font-lato fw-300 lead mt-0">We can't solve problems by using the same kind of thinking we used when we created them.</p>
            </div>

            <ul class="mt-80 social-icons list-unstyled list-inline">
                <li>
                    <a target="_blank" href="#">
                        <i class="fa fa-facebook"></i>
                        <h4>Facebook</h4>
                        <span>Be Our Friend</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="#">
                        <i class="fa fa-twitter"></i>
                        <h4>Twitter</h4>
                        <span>Follow Us</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="#">
                        <i class="fa fa-youtube"></i>
                        <h4>Youtube</h4>
                        <span>Our Videos</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="#">
                        <i class="fa fa-instagram"></i>
                        <h4>Instagram</h4>
                        <span>See Our Images</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="#">
                        <i class="fa fa-linkedin"></i>
                        <h4>Linkedin</h4>
                        <span>Check Our Identity</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="#">
                        <i class="fa fa-pinterest"></i>
                        <h4>Pinterest</h4>
                        <span>Visual Discovery</span>
                    </a>
                </li>
            </ul>

        </div>

    </section>
    <!-- /PARALLAX -->




    <!-- TEAM -->
    <section>
        <div class="container">

            <header class="text-center mb-60">
                <h1 class="fw-300">Smarty Team</h1>
                <h2 class="fw-300 letter-spacing-1 fs-13"><span>WE TRULY CARE ABOUT OUR CUSTOMERS</span></h2>
            </header>

            <div class="row">

                <!-- item -->
                <div class="col-md-3 col-sm-6">

                    <div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
                        <div class="front">
                            <div class="box1 box-default">
                                <div class="box-icon-title">
                                    <img class="img-fluid" src="demo_files/images/people/460x700/7-min.jpg" alt="" />
                                    <h2>Felica Doe</h2>
                                    <small>CEO</small>
                                </div>
                            </div>
                        </div>

                        <div class="back">
                            <div class="box2 box-default">
                                <h4 class="m-0">Felica Doe</h4>
                                <small>CEO</small>

                                <hr />

                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>

                                <hr />

                                <a href="#" class="social-icon social-icon-sm social-facebook">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="social-icon social-icon-sm social-twitter">
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon social-icon-sm social-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /item -->

                <!-- item -->
                <div class="col-md-3 col-sm-6">

                    <div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
                        <div class="front">
                            <div class="box1 box-default">
                                <div class="box-icon-title">
                                    <img class="img-fluid" src="demo_files/images/people/460x700/12-min.jpg" alt="" />
                                    <h2>Joana Doe</h2>
                                    <small>Art Director</small>
                                </div>
                            </div>
                        </div>

                        <div class="back">
                            <div class="box2 box-default">
                                <h4 class="m-0">Joana Doe</h4>
                                <small>Art Director</small>

                                <hr />

                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>

                                <hr />

                                <a href="#" class="social-icon social-icon-sm social-facebook">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="social-icon social-icon-sm social-twitter">
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon social-icon-sm social-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /item -->

                <!-- item -->
                <div class="col-md-3 col-sm-6">

                    <div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
                        <div class="front">
                            <div class="box1 box-default">
                                <div class="box-icon-title">
                                    <img class="img-fluid" src="demo_files/images/people/460x700/10-min.jpg" alt="" />
                                    <h2>Melissa Doe</h2>
                                    <small>Web Developer</small>
                                </div>
                            </div>
                        </div>

                        <div class="back">
                            <div class="box2 box-default">
                                <h4 class="m-0">Melissa Doe</h4>
                                <small>Web Developer</small>

                                <hr />

                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>

                                <hr />

                                <a href="#" class="social-icon social-icon-sm social-facebook">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="social-icon social-icon-sm social-twitter">
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon social-icon-sm social-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /item -->

                <!-- item -->
                <div class="col-md-3 col-sm-6">

                    <div class="box-flip box-color box-icon box-icon-center box-icon-round box-icon-large text-center">
                        <div class="front">
                            <div class="box1 box-default">
                                <div class="box-icon-title">
                                    <img class="img-fluid" src="demo_files/images/people/460x700/8-min.jpg" alt="" />
                                    <h2>Jessica Doe</h2>
                                    <small>Manager</small>
                                </div>
                            </div>
                        </div>

                        <div class="back">
                            <div class="box2 box-default">
                                <h4 class="m-0">Jessica Doe</h4>
                                <small>Manager</small>

                                <hr />

                                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>

                                <hr />

                                <a href="#" class="social-icon social-icon-sm social-facebook">
                                    <i class="fa fa-facebook"></i>
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="social-icon social-icon-sm social-twitter">
                                    <i class="fa fa-twitter"></i>
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon social-icon-sm social-linkedin">
                                    <i class="fa fa-linkedin"></i>
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /item -->

            </div>


        </div>
    </section>
    <!-- /TEAM -->




    <!-- RECENT NEWS -->
    <section>
        <div class="container">

            <header class="text-center mb-60">
                <h1 class="fw-300">Recent News</h1>
                <h2 class="fw-300 letter-spacing-1 fs-13"><span>WE TRULY CARE ABOUT OUR CUSTOMERS</span></h2>
            </header>

            <!--
                controlls-over		= navigation buttons over the image
                buttons-autohide 	= navigation buttons visible on mouse hover only

                data-plugin-options:
                    "singleItem": true
                    "autoPlay": true (or ms. eg: 4000)
                    "navigation": true
                    "pagination": true
                    "items": "4"

                owl-carousel item paddings
                    .owl-padding-0
                    .owl-padding-3
                    .owl-padding-6
                    .owl-padding-10
                    .owl-padding-15
                    .owl-padding-20
            -->
            <div class="owl-carousel owl-padding-10 buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items":"4", "autoPlay": 4000, "navigation": true, "pagination": false}'>
                <div class="img-hover">
                    <a href="blog-single-default.html">
                        <img class="img-fluid" src="demo_files/images/451x300/24-min.jpg" alt="">
                    </a>

                    <h4 class="text-left mt-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                    <ul class="text-left fs-12 list-inline list-separator">
                        <li>
                            <i class="fa fa-calendar"></i>
                            29th Jan 2017
                        </li>
                        <li>
                            <a href="blog-single-default.html#comments">
                                <i class="fa fa-comments"></i>
                                3
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="img-hover">
                    <a href="blog-single-default.html">
                        <img class="img-fluid" src="demo_files/images/451x300/17-min.jpg" alt="">
                    </a>

                    <h4 class="text-left mt-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                    <ul class="text-left fs-12 list-inline list-separator">
                        <li>
                            <i class="fa fa-calendar"></i>
                            29th Jan 2017
                        </li>
                        <li>
                            <a href="blog-single-default.html#comments">
                                <i class="fa fa-comments"></i>
                                3
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="img-hover">
                    <a href="blog-single-default.html">
                        <img class="img-fluid" src="demo_files/images/451x300/30-min.jpg" alt="">
                    </a>

                    <h4 class="text-left mt-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                    <ul class="text-left fs-12 list-inline list-separator">
                        <li>
                            <i class="fa fa-calendar"></i>
                            29th Jan 2017
                        </li>
                        <li>
                            <a href="blog-single-default.html#comments">
                                <i class="fa fa-comments"></i>
                                3
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="img-hover">
                    <a href="blog-single-default.html">
                        <img class="img-fluid" src="demo_files/images/451x300/26-min.jpg" alt="">
                    </a>

                    <h4 class="text-left mt-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                    <ul class="text-left fs-12 list-inline list-separator">
                        <li>
                            <i class="fa fa-calendar"></i>
                            29th Jan 2017
                        </li>
                        <li>
                            <a href="blog-single-default.html#comments">
                                <i class="fa fa-comments"></i>
                                3
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="img-hover">
                    <a href="blog-single-default.html">
                        <img class="img-fluid" src="demo_files/images/451x300/18-min.jpg" alt="">
                    </a>
                    <h4 class="text-left mt-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                    <ul class="text-left fs-12 list-inline list-separator">
                        <li>
                            <i class="fa fa-calendar"></i>
                            29th Jan 2017
                        </li>
                        <li>
                            <a href="blog-single-default.html#comments">
                                <i class="fa fa-comments"></i>
                                3
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="img-hover">
                    <a href="blog-single-default.html">
                        <img class="img-fluid" src="demo_files/images/451x300/34-min.jpg" alt="">
                    </a>
                    <h4 class="text-left mt-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                    <ul class="text-left fs-12 list-inline list-separator">
                        <li>
                            <i class="fa fa-calendar"></i>
                            29th Jan 2017
                        </li>
                        <li>
                            <a href="blog-single-default.html#comments">
                                <i class="fa fa-comments"></i>
                                3
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="img-hover">
                    <a href="blog-single-default.html">
                        <img class="img-fluid" src="demo_files/images/451x300/37-min.jpg" alt="">
                    </a>
                    <h4 class="text-left mt-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                    <ul class="text-left fs-12 list-inline list-separator">
                        <li>
                            <i class="fa fa-calendar"></i>
                            29th Jan 2017
                        </li>
                        <li>
                            <a href="blog-single-default.html#comments">
                                <i class="fa fa-comments"></i>
                                3
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="img-hover">
                    <a href="blog-single-default.html">
                        <img class="img-fluid" src="demo_files/images/451x300/23-min.jpg" alt="">
                    </a>
                    <h4 class="text-left mt-20"><a href="blog-single-default.html">Lorem Ipsum Dolor</a></h4>
                    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                    <ul class="text-left fs-12 list-inline list-separator">
                        <li>
                            <i class="fa fa-calendar"></i>
                            29th Jan 2017
                        </li>
                        <li>
                            <a href="blog-single-default.html#comments">
                                <i class="fa fa-comments"></i>
                                3
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <!-- /RECENT NEWS -->


    <!--
        controlls-over		= navigation buttons over the image
        buttons-autohide 	= navigation buttons visible on mouse hover only

        data-plugin-options:
            "singleItem": true
            "autoPlay": true (or ms. eg: 4000)
            "navigation": true
            "pagination": true
    -->
    <div class="text-center mt-30 mb-30">
        <div class="owl-carousel m-0" data-plugin-options='{"items":6, "singleItem": false, "autoPlay": true}'>
            <div>
                <img class="img-fluid" src="demo_files/images/brands/1.jpg" alt="">
            </div>
            <div>
                <img class="img-fluid" src="demo_files/images/brands/2.jpg" alt="">
            </div>
            <div>
                <img class="img-fluid" src="demo_files/images/brands/3.jpg" alt="">
            </div>
            <div>
                <img class="img-fluid" src="demo_files/images/brands/4.jpg" alt="">
            </div>
            <div>
                <img class="img-fluid" src="demo_files/images/brands/5.jpg" alt="">
            </div>
            <div>
                <img class="img-fluid" src="demo_files/images/brands/6.jpg" alt="">
            </div>
            <div>
                <img class="img-fluid" src="demo_files/images/brands/7.jpg" alt="">
            </div>
            <div>
                <img class="img-fluid" src="demo_files/images/brands/8.jpg" alt="">
            </div>
        </div>
    </div>


    <!-- FOOTER -->
    <footer id="footer">
        <div class="container">

            <div class="row">

                <div class="col-md-3">
                    <!-- Footer Logo -->
                    <img class="footer-logo" src="assets/images/_smarty/logo-footer.png" alt="" />

                    <!-- Small Description -->
                    <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                    <!-- Contact Address -->
                    <address>
                        <ul class="list-unstyled">
                            <li class="footer-sprite address">
                                PO Box 21132<br>
                                Here Weare St, Melbourne<br>
                                Vivas 2355 Australia<br>
                            </li>
                            <li class="footer-sprite phone">
                                Phone: 1-800-565-2390
                            </li>
                            <li class="footer-sprite email">
                                <a href="mailto:support@yourname.com">support@yourname.com</a>
                            </li>
                        </ul>
                    </address>
                    <!-- /Contact Address -->

                </div>

                <div class="col-md-3">

                    <!-- Latest Blog Post -->
                    <h4 class="letter-spacing-1">LATEST NEWS</h4>
                    <ul class="footer-posts list-unstyled">
                        <li>
                            <a href="#">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue</a>
                            <small>29 June 2017</small>
                        </li>
                        <li>
                            <a href="#">Nullam id dolor id nibh ultricies</a>
                            <small>29 June 2017</small>
                        </li>
                        <li>
                            <a href="#">Duis mollis, est non commodo luctus</a>
                            <small>29 June 2017</small>
                        </li>
                    </ul>
                    <!-- /Latest Blog Post -->

                </div>

                <div class="col-md-2">

                    <!-- Links -->
                    <h4 class="letter-spacing-1">EXPLORE SMARTY</h4>
                    <ul class="footer-links list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Our Clients</a></li>
                        <li><a href="#">Our Pricing</a></li>
                        <li><a href="#">Smarty Tour</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                    <!-- /Links -->

                </div>

                <div class="col-md-4">

                    <!-- Newsletter Form -->
                    <h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
                    <p>Subscribe to Our Newsletter to get Important News &amp; Offers</p>

                    <form class="validate" action="php/newsletter.php" method="post" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" id="email" name="email" class="form-control required" placeholder="Enter your Email">
                            <span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
                        </div>
                    </form>
                    <!-- /Newsletter Form -->

                    <!-- Social Icons -->
                    <div class="mt-20">
                        <a href="#" class="social-icon social-icon-border social-facebook float-left" data-toggle="tooltip" data-placement="top" title="Facebook">

                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon social-icon-border social-twitter float-left" data-toggle="tooltip" data-placement="top" title="Twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <a href="#" class="social-icon social-icon-border social-gplus float-left" data-toggle="tooltip" data-placement="top" title="Google plus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>

                        <a href="#" class="social-icon social-icon-border social-linkedin float-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
                            <i class="icon-linkedin"></i>
                            <i class="icon-linkedin"></i>
                        </a>

                        <a href="#" class="social-icon social-icon-border social-rss float-left" data-toggle="tooltip" data-placement="top" title="Rss">
                            <i class="icon-rss"></i>
                            <i class="icon-rss"></i>
                        </a>

                    </div>
                    <!-- /Social Icons -->

                </div>

            </div>

        </div>

        <div class="copyright">
            <div class="container">
                <ul class="float-right m-0 list-inline mobile-block">
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li>&bull;</li>
                    <li><a href="#">Privacy</a></li>
                </ul>
                &copy; All Rights Reserved, Company LTD
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->

</div>
<!-- /wrapper -->


<!--
    SIDE card

        sidepanel-dark 			= dark color
        sidepanel-light			= light color (white)
        sidepanel-theme-color		= theme color

        sidepanel-inverse		= By default, sidepanel is placed on right (left for RTL)
                        If you add "sidepanel-inverse", will be placed on left side (right on RTL).
-->
<div id="sidepanel" class="sidepanel-light">
    <a id="sidepanel_close" href="#"><!-- close -->
        <i class="fa fa-remove"></i>
    </a>

    <div class="sidepanel-content">
        <h2 class="sidepanel-title">Explore Smarty</h2>

        <!-- SIDE NAV -->
        <ul class="list-group">

            <li class="list-group-item">
                <a href="#">
                    <i class="ico-category et-heart"></i>
                    ABOUT US
                </a>
            </li>
            <li class="list-group-item list-toggle"><!-- add "active" to stay open on page load -->
                <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-1" class="collapsed">
                    <i class="ico-dd icon-angle-down"><!-- Drop Down Indicator --></i>
                    <i class="ico-category et-strategy"></i>
                    PORTFOLIO
                </a>
                <ul id="collapse-1" class="list-unstyled collapse"><!-- add "in" to stay open on page load -->
                    <li><a href="#"><i class="fa fa-angle-right"></i> 1 COLUMN</a></li>
                    <li class="active">
                        <span class="badge">New</span>
                        <a href="#"><i class="fa fa-angle-right"></i> 2 COLUMNS</a>
                    </li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> 3 COLUMNS</a></li>
                </ul>
            </li>
            <li class="list-group-item list-toggle"><!-- add "active" to stay open on page load -->
                <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-2" class="collapsed">
                    <i class="ico-dd icon-angle-down"><!-- Drop Down Indicator --></i>
                    <i class="ico-category et-trophy"></i>
                    PORTFOLIO
                </a>
                <ul id="collapse-2" class="list-unstyled collapse"><!-- add "in" to stay open on page load -->
                    <li><a href="#"><i class="fa fa-angle-right"></i> SLIDER</a></li>
                    <li class="active"><a href="#"><i class="fa fa-angle-right"></i> HEADERS</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> FOOTERS</a></li>
                </ul>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <i class="ico-category et-happy"></i>
                    BLOG
                </a>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <i class="ico-category et-beaker"></i>
                    FEATURES
                </a>
            </li>
            <li class="list-group-item">
                <a href="#">
                    <i class="ico-category et-map-pin"></i>
                    CONTACT
                </a>
            </li>

        </ul>
        <!-- /SIDE NAV -->

        <!-- social icons -->
        <div class="text-center mb-30 mt-30">

            <a href="#" class="social-icon social-icon-sm social-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                <i class="icon-facebook"></i>
                <i class="icon-facebook"></i>
            </a>

            <a href="#" class="social-icon social-icon-sm social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
                <i class="icon-twitter"></i>
                <i class="icon-twitter"></i>
            </a>

            <a href="#" class="social-icon social-icon-sm social-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin">
                <i class="icon-linkedin"></i>
                <i class="icon-linkedin"></i>
            </a>

            <a href="#" class="social-icon social-icon-sm social-rss" data-toggle="tooltip" data-placement="top" title="RSS">
                <i class="icon-rss"></i>
                <i class="icon-rss"></i>
            </a>

        </div>
        <!-- /social icons -->

    </div>

</div>
<!-- /SIDE card -->


<!-- SCROLL TO TOP -->
<a href="#" id="toTop"></a>





<!-- JAVASCRIPT FILES -->
<script>var plugin_path = 'assets/plugins/';</script>
<script src="assets/plugins/jquery/jquery-3.3.1.min.js"></script>

<script src="assets/js/scripts.js"></script>

<!-- STYLESWITCHER - REMOVE -->
<script async src="demo_files/styleswitcher/styleswitcher.js"></script>

<!-- REVOLUTION SLIDER -->
<script src="assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/js/view/demo.revolution_slider.js"></script>

</body>
</html>
