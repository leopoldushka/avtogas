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
    <link href="{{ asset('css/green.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="smoothscroll enable-animation">

<!-- SLIDE TOP -->

<!-- /SLIDE TOP -->


<!-- wrapper -->
<div id="wrapper">

    <!-- Top Bar -->

    <!-- /Top Bar -->



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
                <a class="logo float-left" href="/">
                    <img src="{{ asset('img/logo.jpg') }}" alt="" />
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
                                <a class="dropdown-toggle header_a" href="">
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
                                        <a href="/station">c.	Список заправок ГБО (таблица наименование/адрес)</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"><!-- PAGES -->
                                <a class="dropdown-toggle" href="/product">
                                    Прайс
                                </a>
                            </li>
                            <li class="dropdown"><!-- PAGES -->
                                <a class="dropdown-toggle disabled" href="#">
                                    Калькулятор
                                </a>
                            </li>
                            <li class="dropdown"><!-- PAGES -->
                                <a class="dropdown-toggle" href="/bids">
                                    Заказ услуги
                                </a>
                            </li>
                            <li class="dropdown"><!-- PAGES -->
                                <a class="dropdown-toggle disabled" href="#">
                                    Фотогалерея
                                </a>
                            </li>
                            <li class="dropdown"><!-- PAGES -->
                                <a class="dropdown-toggle disabled" href="#">
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
    <!-- FOOTER -->
    <footer id="footer">
        <div class="copyright">
            <div class="container">
                <ul class="float-right m-0 list-inline mobile-block">
                    <li><a href="#">Адрес: Костюшко - Григоровича, 29ст2 </a></li>
                    <li>&bull;</li>
                    <li><a href="#">Телефон: 8-914-460-98-23, 8-914-461-51-19, 8-924-519-92-97</a></li>
                </ul>
                &copy; AVTOGAS
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->

</div>
<!-- /wrapper -->



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
