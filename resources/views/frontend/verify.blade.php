<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Verify Email || Chivita</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
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
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }
        
        .background .shape {
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }
        
        .shape:first-child {
            background: linear-gradient( #1845ad, #23a2f6);
            left: -80px;
            top: -80px;
        }
        
        .shape:last-child {
            background: linear-gradient( to right, #ff512f, #f09819);
            right: -30px;
            bottom: -80px;
        }
        
        form {
            height: 320px;
            width: 450px;
            background-color: #fff;
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 30px 35px;
        }
        
        form * {
            font-family: 'Poppins', sans-serif;
            color: #000;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }
        
        form h3 {
            font-size: 22px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
        }
        
        label {
            display: block;
            margin-top: 15px;
            font-size: 16px;
            font-weight: 500;
        }
        
        input {
            display: block;
            height: 50px;
            width: 100%;
            background: transparent;
            border: 2px solid #000;
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }
        
         ::placeholder {
            color: #000;
        }
        
        button {
            margin-top: 20px;
            width: 100%;
            background-color: red;
            color: #fff;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <form>
        <div align="center">
            <a href="{{ url('/') }}"><img src="../assets/img/logo1.png" alt="image"></a>
        </div><br>
        <h3>Verify your email address</h3><br>

        <p style="text-align:center;">
            Please click on the link that was sent to your email to verify your email address
        </p>
        <button>Continue </button><br><br><br>
    </form>


    <script src="../assets/js/jquery-3.6.0.min.js"></script>

    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>