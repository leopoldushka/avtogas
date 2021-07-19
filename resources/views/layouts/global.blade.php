<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>AVTOGAS</title>
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
                            <li class="dropdown"><!-- PAGES -->
                                <a class="dropdown-toggle" href="">
                                    Сведения о ГБО
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown">
                                        <a href="/">a.	Преимущество использования ГБО</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="/reg">b.	Правила оформления установки ГБО</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="portfolio-single-project.html">c.	Список заправок ГБО (таблица наименование/адрес)</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><!-- PAGES -->
                                <a class="dropdown-toggle" href="/product">
                                    Прайс
                                </a>
                            </li>
                            <li class="dropdown"><!-- PAGES -->
                                <a class="dropdown-toggle" href="#">
                                    Калькулятор
                                </a>
                            </li>
                            <li class="dropdown"><!-- PAGES -->
                                <a class="dropdown-toggle" href="/bids">
                                    Заказ услуги
                                </a>
                            </li>
                            <li class="dropdown"><!-- PAGES -->
                                <a class="dropdown-toggle" href="#">
                                    Фотогалерея
                                </a>
                            </li>
                            <li class="dropdown"><!-- PAGES -->
                                <a class="dropdown-toggle" href="#">
                                    Отзывы
                                </a>
                            </li>
                            <li class="dropdown"><!-- PAGES -->
                                <a class="dropdown-toggle" href="/about">
                                    О нас
                                </a>
                            </li>
                        </ul>

                    </nav>
                </div>

            </div>
        </header>
        <!-- /Top Nav -->

    </div>




@yield('content')
    <!-- -->






    <!-- FOOTER -->
    <footer id="footer">
        <div class="container">

            <div class="row">

                <div class="col-md-3">
                    <!-- Footer Logo -->
                    <img class="footer-logo" src="assets/images/_smarty/logo-footer.png" alt="" />

                    <!-- Small Description -->
                    <p>Кратко контакты</p>

                    <!-- Contact Address -->
                    <address>
                        <ul class="list-unstyled">
                            <li class="footer-sprite address">
                                местоположение
                            </li>
                            <li class="footer-sprite phone">
                                Телефон: 11111111
                            </li>
                            <li class="footer-sprite email">
                                <a href="#">почта</a>
                            </li>
                        </ul>
                    </address>
                    <!-- /Contact Address -->

                </div>

                <div class="col-md-3">

                    <!-- Latest Blog Post -->
                    <h4 class="letter-spacing-1">Последние события</h4>
                    <ul class="footer-posts list-unstyled">
                        <li>
                            <a href="#">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue</a>
                            <small>29 June 2017</small>
                        </li>
                        <li>
                            <a href="#">Nullam id dolor id nibh ultricies</a>
                            <small>29 June 2017</small>
                        </li>
                    </ul>
                    <!-- /Latest Blog Post -->

                </div>

                <div class="col-md-2">

                    <!-- Links -->
                    <h4 class="letter-spacing-1">Основные ссылки</h4>
                    <ul class="footer-links list-unstyled">
                        <li><a href="#">Старт</a></li>
                        <li><a href="#">О нас</a></li>
                    </ul>
                    <!-- /Links -->

                </div>

                <div class="col-md-4">

                    <!-- Newsletter Form -->
                    <h4 class="letter-spacing-1">Наши допсервисы</h4>
                    <p>Описание</p>


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
