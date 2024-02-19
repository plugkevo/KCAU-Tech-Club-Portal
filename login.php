<?php
    include('connection.php');
?>
<?php
    include('login_conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KCAU Tech club portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            font-family: poppins, Arial, Helvetica, sans-serif;
            font-size: 16px;
            font-weight: 400;
            color: #666666;
            background: #eaeff4;
        }
        .wrapper {
        
            margin: 0 auto;
            width: 100%;
            max-width: 1140px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .container {
            border-radius: 0.5cm;
            position: relative;
            width: 100%;
            max-width: 600px;
            height: auto;
            display: flex;
            background: #3D1383;
            box-shadow: 0 0 5px #999999;
        }.login .col-left,
        .login .col-right {
            padding: 30px;
            display: flex;
        }
        .login .col-left {
            width: 60%;
            clip-path: polygon(0 0, 0% 100%, 100% 0);
            background: #9E8605;
        }
        .login .col-right {
            padding: 60px 30px;
            width: 50%;
            margin-left: -10%;
            
        }
        @media(max-width: 575px) {
            .login .container {
                flex-direction: column;
                box-shadow: none;
            }
            .login .col-left,
            .login .col-right {
                width: 100%;
                margin: 0;
                clip-path: none;
            }
            .login .col-right {
                padding: 30px;
            }
        }
        .login .login-text {
            position: relative;
            width: 100%;
            color: #ffffff;
        }.login .login-text h2 {
            margin: 0 0 15px 0;
            font-size: 30px;
            font-weight: 700;
        }
        .login .login-text p {
            margin: 0 0 20px 0;
            font-size: 16px;
            font-weight: 500;
            line-height: 22px;
        }
        .login .login-text .btn {
            display: inline-block;
            font-family: poppins;
            padding: 7px 20px;
            font-size: 16px;
            letter-spacing: 1px;
            text-decoration: none;
            border-radius: 30px;
            color: #ffffff;
            outline: none;
            border: 1px solid #ffffff;
            box-shadow: inset 0 0 0 0 #ffffff;
            transition: .3s;
        }
        .login .login-text .btn:hover {
            color: #2aa15f;
            box-shadow: inset 150px 0 0 0 #ffffff;
        }
        .login .login-form {
            position: relative;
            width: 100%;
        }
        .login .login-form p {
            margin: 0 0 10px 0;
            text-align: left;
            color: #666666;
            font-size: 15px;
        }
        .login .login-form p:last-child {
            margin: 0;
            padding-top: 3px;
        }
        .login .login-form p a {
            color: #1EE732;
            font-size: 14px;
            text-decoration: none;
        }
        .login .login-form label {
            display: block;
            width: 100%;
            margin-bottom: 2px;
            letter-spacing: .5px;
        }
        .login .login-form p:last-child label {
            width: 60%;
            float: left;
        }
        .login .login-form label span {
            color: #ff574e;
            padding-left: 2px;
        }
        .login .login-form input {
            display: block;
            width: 100%;
            height: 35px;
            padding: 0 10px;
            outline: none;
            border: 1px solid #cccccc;
            border-radius: 30px;
        }
        
        .login .login-form input:focus {
            border-color: #ff574e;
        }
        
        .login .login-form button,
        .login .login-form input[type=submit] {
            display: inline-block;
            width: 100%;
            margin-top: 5px;
            color: #2aa15f;
            font-size: 16px;
            letter-spacing: 1px;
            cursor: pointer;
            background: transparent;
            border: 1px solid #2aa15f;
            border-radius: 30px;
            box-shadow: inset 0 0 0 0 #2aa15f;
            transition: .3s;
        }
        .login .login-form button:hover,
        .login .login-form input[type=submit]:hover {
            color: #ffffff;
            box-shadow: inset 250px 0 0 0 #2aa15f;
        }  
    </style>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid nav">
            <a class="navbar-brand" href="#">
                <img src="images/Screenshot (192).png" alt="" width="40" height="30" class="d-inline-block align-text-top">
            </a>
            <a class="navbar-brand" href="#">KCAU Tech Club</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.php">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blogs.php">Blogs</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="forum.php">Forums</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="job_board.php">Jobs</a>
                    </li>                    
                </ul>
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" style=" justify-content: end;">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sign_up.php">Sign Up</a>
                        </li>
                        <li class="nav-item" >
                            <a href="profile.php"><img src="images/download 4.jpeg" name="profile_img" style="height: 30px; width: 30px; border-radius: 50%;" alt=""></a>
                        </li>
                    </ul>
                </div>              
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <?php
            if($response)
            {
                include('response.php');
            }
            if($error)
        {
            include('error.php');
        }?>            
        <img src="" alt="">
    </div>
    <!-- munga-->
    <form action="login.php" method="POST">
        <div class="wrapper login">
            <div class="container">
                <div class="col-left">
                    <div class="login-text">
                        <h2>Welcome!</h2>
                        <p>Create your account.<br>For Free!</p> <a href="sign_up.php" class="btn">Sign Up</a>
                    </div>
                </div>
                <div class="col-right">
                    <div class="login-form">
                        <h2>Login</h2>
                        <form action="">
                            <p> <label>Username/Email address<span>*</span></label>
                                <input type="text" placeholder=" Email" name="email" required> </p>
                            <p> <label>Password<span>*</span></label>
                                <input type="password" placeholder="Password" name="password" required> </p>
                            <p> <input type="submit" name= "submit" value="Sign In"> </p>
                            <p> <a href="">Forgot password?</a> </p>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </form>         
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>