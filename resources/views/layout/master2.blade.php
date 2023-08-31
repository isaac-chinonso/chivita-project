<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="../assets/css/bootstrap-icons.css" rel="stylesheet">

    <link href="../assets/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">

    <link rel="stylesheet" href="../assets/css/magnific-popup.css">

    <link rel="stylesheet" href="../assets/css/animate.min.css">

    <link rel="stylesheet" href="../assets/css/style.css">

    <!---------------  Font Aewsome  --------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <title>@yield('title')</title>

</head>

<body>
    <header class="header-area position_top">
        <div class="site-logo">
            <div class="logo">
                <a href="{{ url('/') }}"><img src="../../assets/img/logo.png" alt="image"></a>
            </div>
        </div>
        <div class="main-menu">
            <nav class="main-nav">
                <div class="mobile-menu-logo">
                    <a href="{{ url('/') }}"><img src="../../assets/img/logo.png" alt=""></a>
                    <div class="remove">
                        <i class="bi bi-plus-lg"></i>
                    </div>
                </div>
                <div class="get-qoute d-flex justify-content-center d-lg-none d-block">
                    <div class="cmn-btn btn-sm">
                        <div class="line-1"></div>
                        <div class="line-2"></div>
                        <a href="{{ url('/') }}#register" style="padding:5px;">Upload your video</a>
                    </div>
                </div><br>
                <div class="d-flex justify-content-center d-lg-none d-block" style="padding: 5px 20px 5px 20px">
                    <button class="btn btn-outline-dark d-block"><a href="{{ url('/login') }}" class="text-danger" style="padding: 5px 38px 5px 38px">Login</a></button>
                </div>
            </nav>
        </div>
        <div class="nav-right">
            <div class="get-qoute">
                <div class="btn bg-white btn-lg">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                    @if(!Auth::check())
                    <a href="{{ url('/') }}#register" class="btn btn-outline-danger mobile-image">Upload your video</a>
                    <div class="mobile-menu">
                        <a href="javascript:void(0)" class="cross-btn">
                            <span class="cross-top"></span>
                            <span class="cross-middle"></span>
                            <span class="cross-bottom"></span>
                        </a>
                    </div>
                    @else
                    <a href="{{ route('userprofile') }}" class="btn btn-outline-danger text-danger">My Profile</a>
                    @endif
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

        <footer>
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
                                <li><a href="https://www.instagram.com/chivitajuices/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://twitter.com/Chivitajuices" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </main>


    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../assets/js/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <script src="../assets/js/filedrag.js"></script>

    <script src="../assets/js/swiper-bundle.min.js"></script>

    <script src="../assets/js/waypoints.min.js"></script>

    <script src="../assets/js/jquery.counterup.min.js"></script>

    <script src="../assets/js/isotope.pkgd.min.js"></script>

    <script src="../assets/js/jquery.magnific-popup.min.js"></script>

    <script src="../assets/js/wow.min.js"></script>

    <script src="../assets/js/custom.js"></script>

    <script>
        function validatePhoneNumber(input) {
            // Remove any non-numeric characters from the input value
            input.value = input.value.replace(/\D/g, '');

            // display an error message if an alphabet is entered
            if (/\D/.test(input.value)) {
                alert("Please enter only numbers.");
                input.value = input.value.replace(/\D/g, '');
            }

            // maximum length for the phone number
            if (input.value.length > 11) {
                input.value = input.value.slice(0, 11);
            }
        }
    </script>
</body>

</html>