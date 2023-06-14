<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link href="../assets/css/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">

    <link href="../assets/css/all.min.css" rel="stylesheet">

    <link href="../assets/css/fontawesome.min.css" rel="stylesheet">


    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="stylesheet" href="../assets/css/app.css">

    <title>@yield('title')</title>

</head>

<body>

    <div class="preloader">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>


    <header class="header-area position_top">
        <div class="site-logo">
            <div class="logo">
                <a href="{{ url('/') }}"><img src="../assets/img/logo.png" alt="image"></a>
            </div>
        </div>
        <div class="main-menu">
            <nav class="main-nav">
                <div class="mobile-menu-logo">
                    <a href="{{ url('/') }}"><img src="../assets/img/logo.png" alt=""></a>
                    <div class="remove">
                        <i class="bi bi-plus-lg"></i>
                    </div>
                </div>
            </nav>
        </div>
        <div class="nav-right">
            <div class="get-qoute">
                <div class="btn bg-white btn-lg">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                    <a href="{{ url('/logout') }}" class="text-danger">Logout</a>
                </div>
            </div>
        </div>
    </header>


    <main class="creasoft-wrap">

        <div class="line_wrap">
            <div class="line_item"></div>
            <div class="line_item"></div>
            <div class="line_item"></div>
            <div class="line_item"></div>
            <div class="line_item"></div>
        </div>
        @yield('content')

        <br><br><br><br><br>
        <footer style="margin-top: 200px;">
            <div class="container">
                <div class="footer-bottom">
                    <div class="row align-items-center">
                        <div class="col-sm-4 col-lg-4 col-xl-5">
                            <div class="copy-txt">
                                <span> © 2023 <b>Chivita</b>. All Right Reserved</span>
                            </div>
                        </div>
                        <div class="col-sm-8 col-lg-8 col-xl-7">
                            <ul class="footer-bottom-menu">
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </main>


    <script data-cfasync="false " src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js "></script>
    <script src="../assets/js/jquery-3.6.0.min.js "></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <script src="../assets/js/swiper-bundle.min.js "></script>

    <script src="../assets/js/waypoints.min.js "></script>

    <script src="../assets/js/jquery.counterup.min.js "></script>

    <script src="../assets/js/isotope.pkgd.min.js "></script>

    <script src="../assets/js/jquery.magnific-popup.min.js "></script>

    <script src="../assets/js/wow.min.js "></script>

    <script src="../assets/js/custom.js "></script>
</body>

</html>