<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">

    <link href="assets/css/all.min.css" rel="stylesheet">

    <link href="assets/css/fontawesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/animate.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <title>Creasoft - Software and Digital Agency HTML Template</title>

    <style>
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #080710;
        }

        .background {
            width: 70%;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }

        .background .shape {
            height: 30vh;
            width: 30vh;
            position: absolute;
            border-radius: 50%;
        }

        .shape:first-child {
            background: linear-gradient(#1845ad, #23a2f6);
            left: -10%;
            top: -10%;
        }

        .shape:last-child {
            background: linear-gradient(to right, #ff512f, #f09819);
            right: -5%;
            bottom: -10%;
        }

        .form-card {
            background-color: #fff;
            width: 100%;
            position: relative;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 15px 25px 15px 25px;
        }

        h3 {
            font-size: 3.5vh;
            font-weight: 500;
            line-height: 4.5vh;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 2vh;
            font-size: 1.6vh;
            font-weight: 500;
        }

        input {
            display: block;
            height: 5vh;
            width: 100%;
            background: transparent;
            border: 2px solid #000;
            border-radius: 3px;
            padding: 0 1vh;
            margin-top: 1.3vh;
            font-size: 1.4vh;
            font-weight: 300;
        }

        ::placeholder {
            color: #000;
        }

        button {
            margin-top: 2.7vh;
            width: 100%;
            background-color: red;
            color: #fff;
            padding: 1.8vh 0;
            font-size: 1.8vh;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
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
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <main class="creasoft-wrap">

        <div class="line_wrap">
            <div class="line_item"></div>
            <div class="line_item"></div>
            <div class="line_item"></div>
            <div class="line_item"></div>
            <div class="line_item"></div>
        </div>


        <section class="sec-mar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="form-card wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <form method="post" action="{{ url('/signin') }}">
                                @csrf
                                @include('include.success')
                                @include('include.warning')
                                @include('include.error')
                                <div align="center">
                                    <a href="{{ url('/') }}"><img src="assets/img/logo1.png" alt="image"></a>
                                </div><br>
                                <h3>Login</h3>

                                <label for="username">Email</label>
                                <input type="email" placeholder="Email" name="email" id="username">

                                <label for="password">Password</label>
                                <input type="password" placeholder="Password" name="password" id="password">

                                <button type="submit">Log In</button><br><br><br>

                                <p style="color: red;text-align: center;">
                                    Forgot Password? <span style="color:#000;">Cick to reset</span>
                                </p>

                                <p style="color: red;text-align: center;">
                                    New User? <a href="{{ url('/') }}#register" style="color:#000;">Click to register</a>
                                </p>

                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    </div>
                </div>
            </div>
        </section>


    </main>

    <div class="cursor"></div>


    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/swiper-bundle.min.js"></script>

    <script src="assets/js/waypoints.min.js"></script>

    <script src="assets/js/jquery.counterup.min.js"></script>

    <script src="assets/js/isotope.pkgd.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/wow.min.js"></script>

    <script src="assets/js/custom.js"></script>
</body>

</html>