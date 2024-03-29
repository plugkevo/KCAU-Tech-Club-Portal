<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KCAU Tech club portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/css/bootstrap.min.css">

    <style>
        body{
            width: 100vw;
        }
        .header{
            width: 100vw;
            height: 30px;
            background-color: #9E8605;
            margin-top: 5%;
        }
        .container-fluid.main{
            width: 100vw;
            height: 80vh;
            background-image: url('/images/download.jpeg'); 
            background-repeat: no-repeat; 
            background-size: contain;
            background-position: right;
            background-color: #3D1383;
            animation: change-background 10s infinite; } @keyframes change-background { 0% { 
            background-image: url('images/christopher-burns-Kj2SaNHG-hg-unsplash.jpg'); }
            33% {background-image: url('images/luca-bravo-XJXWbfSo2f0-unsplash.jpg');} 
            66% {background-image: url('images/robs-HOrhCnQsxnQ-unsplash.jpg');}
            100% {background-image: url('images/adi-goldstein-EUsVwEOsblE-unsplash.jpg');}
        }
        .title{
            display: flex;
            justify-content: left;
            align-items: start;
            color: white;
        }
        .mission{
            display: flex;
            justify-content: left;
            align-items: start;
            color: white;
            width: 30%;
        }
        .horizontal{
            width: 30vw;
            height: 30px;
            background-color: #9E8605;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }
        .outer{
            display: flex; /* displays flex-items (children) inline */
            overflow-x: auto;
            margin-top: 10px;
        }

        .inner {
            flex: 0 0 20%; /* doesn't grow nor shrink, initial width set to 25% of the parent's */
            background-color: rgb(237, 243, 243);
            
            border-radius: 0.8cm;
            margin-right: 7px;
            display: flex;
            justify-content: center;
            height: 20%;
            
        }
        footer{
            align-items: center;
            justify-content: center;
            display: flex;
            
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
    <div class="header">
        
    </div>
    <div class="container-fluid main">
        <img src=""   alt="">
        <div class="title">
            <h2>KCAU Tech Club</h2>
        </div>    
            <br>
        <div class="mission">
            <p style="align-items: start;">Mission: To ignite passion for robotics in university students, 
                cultivate a spirit of teamwork and excellence, and compete fiercely to design, 
                build, and program robots that push the boundaries of technology and inspire the world.
            </p>
        </div>
        <div class="icons" style="position: absolute; bottom: 10vh;"> 
            <a href=""><i class="fa-brands fa-instagram fa-2x"  style="color: white; padding-right: 7px;" ></i></a>
            <a href=""><i class="fa-brands fa-x fa-2x"  style="color: white; padding-right: 7px;"></i></a>
            <a href=""><i class="fa-brands fa-facebook fa-2x"  style="color: white; padding-right: 7px;"></i></a>
            <a href=""><i class="fa-brands fa-whatsapp fa-2x" style="color: white;"></i></a>
        </div>
        
    </div>
    <div class="horizontal" style="margin-top: 5px; border-radius: 0.4cm;" >
        <h4>Leaders</h4>
    </div>
   
    <div class="outer">
        <div class="inner">
            <div class="col-lg-3">
                <img src="images/WhatsApp Image 2023-11-05 at 20.45.06_8719fd9e.jpg" height="80px" width="80px" style="border-radius: 50%;" alt="">
                <h5>Kevin Mungai</h5>
                <p>Web Master</p>
                <div class="icons" style="display: flex;">
                    <a href=""><i class="fa-brands fa-x "  style="color: black; padding-right: 7px;"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin" style="color: black; padding-right: 7px;"></i></a>
                    <a href=""><i class="fa-brands fa-github" style="color: black; padding-right: 7px;"></i></a>
                </div>
            </div>
        </div>
        <div class="inner">
            <div class="col-lg-3">
                <img src="images/WhatsApp Image 2023-11-05 at 20.45.06_8719fd9e.jpg" height="80px" width="80px" style="border-radius: 50%;" alt="">
                <h5>Kevin Mungai</h5>
                <p>Web Master</p>
                <div class="icons" style="display: flex;">
                    <a href=""><i class="fa-brands fa-x "  style="color: black; padding-right: 7px;"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin" style="color: black; padding-right: 7px;"></i></a>
                    <a href=""><i class="fa-brands fa-github" style="color: black; padding-right: 7px;"></i></a>
                </div>
            </div>
        </div>
        <div class="inner">
            <div class="col-lg-3">
                <img src="images/WhatsApp Image 2023-11-05 at 20.45.06_8719fd9e.jpg" height="80px" width="80px" style="border-radius: 50%;" alt="">
                <h5>Kevin Mungai</h5>
                <p>Web Master</p>
                <div class="icons" style="display: flex;">
                    <a href=""><i class="fa-brands fa-x "  style="color: black; padding-right: 7px;"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin" style="color: black; padding-right: 7px;"></i></a>
                    <a href=""><i class="fa-brands fa-github" style="color: black; padding-right: 7px;"></i></a>
                </div>
            </div>
        </div>
        <div class="inner">
            <div class="col-lg-3">
                <img src="images/WhatsApp Image 2023-11-05 at 20.45.06_8719fd9e.jpg" height="80px" width="80px" style="border-radius: 50%;" alt="">
                <h5>Kevin Mungai</h5>
                <p>Web Master</p>
                <div class="icons" style="display: flex;">
                    <a href=""><i class="fa-brands fa-x "  style="color: black; padding-right: 7px;"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin" style="color: black; padding-right: 7px;"></i></a>
                    <a href=""><i class="fa-brands fa-github" style="color: black; padding-right: 7px;"></i></a>
                </div>
            </div>
        </div>
        <div class="inner">
            <div class="col-lg-3">
                <img src="images/WhatsApp Image 2023-11-05 at 20.45.06_8719fd9e.jpg" height="80px" width="80px" style="border-radius: 50%;" alt="">
                <h5>Kevin Mungai</h5>
                <p>Web Master</p>
                <div class="icons" style="display: flex;">
                    <a href=""><i class="fa-brands fa-x "  style="color: black; padding-right: 7px;"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin" style="color: black; padding-right: 7px;"></i></a>
                    <a href=""><i class="fa-brands fa-github" style="color: black; padding-right: 7px;"></i></a>
                </div>
            </div>
        </div>
        <div class="inner">
            <div class="col-lg-3">
                <img src="images/WhatsApp Image 2023-11-05 at 20.45.06_8719fd9e.jpg" height="80px" width="80px" style="border-radius: 50%;" alt="">
                <h5>Kevin Mungai</h5>
                <p>Web Master</p>
                <div class="icons" style="display: flex;">
                    <a href=""><i class="fa-brands fa-x "  style="color: black; padding-right: 7px;"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin" style="color: black; padding-right: 7px;"></i></a>
                    <a href=""><i class="fa-brands fa-github" style="color: black; padding-right: 7px;"></i></a>
                </div>
            </div>
        </div>
        <div class="inner">
            <div class="col-lg-3">
                <img src="images/WhatsApp Image 2023-11-05 at 20.45.06_8719fd9e.jpg" height="80px" width="80px" style="border-radius: 50%;" alt="">
                <h5>Kevin Mungai</h5>
                <p>Web Master</p>
                <div class="icons" style="display: flex;">
                    <a href=""><i class="fa-brands fa-x "  style="color: black; padding-right: 7px;"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin" style="color: black; padding-right: 7px;"></i></a>
                    <a href=""><i class="fa-brands fa-github" style="color: black; padding-right: 7px;"></i></a>
                </div>
            </div>
        </div>
        <div class="inner">
            <div class="col-lg-3">
                <img src="images/WhatsApp Image 2023-11-05 at 20.45.06_8719fd9e.jpg" height="80px" width="80px" style="border-radius: 50%;" alt="">
                <h5>Kevin Mungai</h5>
                <p>Web Master</p>
                <div class="icons" style="display: flex;">
                    <a href=""><i class="fa-brands fa-x "  style="color: black; padding-right: 7px;"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin" style="color: black; padding-right: 7px;"></i></a>
                    <a href=""><i class="fa-brands fa-github" style="color: black; padding-right: 7px;"></i></a>
                </div>
            </div>
        </div>
        <div class="inner">
            <div class="col-lg-3">
                <img src="images/WhatsApp Image 2023-11-05 at 20.45.06_8719fd9e.jpg" height="80px" width="80px" style="border-radius: 50%;" alt="">
                <h5>Kevin Mungai</h5>
                <p>Web Master</p>
                <div class="icons" style="display: flex;">
                    <a href=""><i class="fa-brands fa-x "  style="color: black; padding-right: 7px;"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin" style="color: black; padding-right: 7px;"></i></a>
                    <a href=""><i class="fa-brands fa-github" style="color: black; padding-right: 7px;"></i></a>
                </div>
            </div>
        </div>
      </div>

      <footer>
       
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>