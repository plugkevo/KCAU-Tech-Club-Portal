<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KCAU Tech club portal</title>

    <!-- CSS Files -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    
    <style>
            .header{
            width: 100vw;
            height: 30px;
            margin-top: 50px;
            background-color: #3D1383;
            
        }
        .container-fluid.passed-events {
            background-size: cover;
            background-repeat: no-repeat;
            width: 95vw;
            background-color: #e3e2e7;
            padding-top: 10PX;
            height:400px;
            margin-left: 2%;
            margin-right: 2%;
            border-radius: 0.5cm;

        }
        .headerr{
            width: 100vw;
            height: 5px;
            background-color: #9E8605;
            margin-bottom: 20px;
        }
        .upcoming-events{
            background-color: #e3e2e7;
            border-radius: 0.4cm;
            width: 90%;
            height: 350px;
            margin-left: 70px;
            margin-bottom: 50px;
        }
        .details{
            margin-left: 10px;
            padding-left: 30px;
            float: right;
        }
        .details h2{
            padding-top: 10px;
            margin-bottom: 50px;
        }
        .my-button {
            background-color: #9E8605;
            color: black;
            border: none;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 50px 15px;
            cursor: pointer;
            border-radius: 25px;
        }
        .past-events{
            background-color: #e3e2e7;
            background-size: contain;
            border-radius: 5px;
            justify-content: center; 
            color: black;
            margin-bottom: 50px;
            width: 90%;
            margin-left: 70px;
        }
        .image{
            padding-left: 10px;
        }
        .past-events-1{
            padding-bottom: 20px;
            padding-left: 10px;
        }
        .past-events-media{
            padding: 10px;
        }
        .row{
            height: 400px;
        }
        .container-fluid.main{
            width: 90vw;
            height: 80vh;
            background-image: url(''); 
            background-repeat: no-repeat; 
            background-size: cover;
            background-position: center;
            background-color: #3D1383;
            border-radius: 0.4cm;
            margin-top: 90px;
            animation: change-background 15s infinite; } @keyframes change-background { 0% { 
            background-image: url('images/christopher-burns-Kj2SaNHG-hg-unsplash.jpg'); }
            33% {background-image: url('images/luca-bravo-XJXWbfSo2f0-unsplash.jpg');} 
            66% {background-image: url('images/robs-HOrhCnQsxnQ-unsplash.jpg');}
            100% {background-image: url('images/adi-goldstein-EUsVwEOsblE-unsplash.jpg');}
        }
        .passed-details{
            background-color: ;
            border-radius: 0.4cm;
            width: 40%;
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
                            <a href="profile.html"><img src="images/download 4.jpeg" name="profile_img" style="height: 30px; width: 30px; border-radius: 50%;" alt=""></a>
                        </li>
                    </ul>
                </div>              
            </div>
        </div>
    </nav>

    <div class="header fixed-top" ></div>
    <div class="container-fluid main">
        <img src="" alt="">
    </div>

    
    <div class="events" style="margin: 50px 0 10px 15px;">
        <h1>Upcoming Events</h1>
    </div>

    <div class="headerr"></div>

    <div class="upcoming-events" style="display: flex;">
        <img src="images/event 4.jpg" alt="" style="height: 300px; width: 600px; padding-top: 10px; padding-left: 10px;">
        <div class="details">
            <h2>Trivia Night</h2>
            
            <h6>📅 Date: 19th February</h6>
            <h6>🕒 Time: 2pm</h6>
            <h6>📍 Location: KCA University Main campus Ruaraka, Students Center</h6>

            <button type="button" class="my-button">More Info</button>
            <button type="button" class="my-button">But Ticket</button>
        </div>              
    </div>  
        
    <div class="upcoming-events" style="display: flex;">
        <img src="images/event 4.jpg" alt="" style="height: 300px; width: 600px; padding-top: 10px; padding-left: 10px; display: flex;">
        <div class="details">
            <h2>Code Fest</h2>
            
            <h6>📅 Date: Tomorrow 9th February</h6>
            <h6>🕒 Time: 2pm</h6>
            <h6>📍 Location: KCA University Main campus Ruaraka, Block C</h6>
            
            <button type="button" class="my-button">More Info</button>
            <button type="button" class="my-button">But Ticket</button>
        </div>    
    </div>
    
    
    <div class="events" style="margin: 50px 0 10px 15px;">
        <h1>Past Events</h1>
    </div>
    <div class="headerr"></div>
    
    <div class="container-fluid passed-events" style="display: flex; gap: 10px;">
        <div id="myCarousel" class="carousel slide"  style="width: 60%;" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/event 1.webp" alt="Image 1" width="100%" height="350px">
                </div>
                <div class="carousel-item">
                    <img src="images/event 2.webp" alt="Image 2" width="100%" height="350px">
                </div>
                <div class="carousel-item">
                    <img src="images/event 3.jpg" alt="Image 3" width="100%" height="350px">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>  
        <div class="passed-detais">
           <h3>Tech Expo</h3><br>
           <p>The School of Technology, in partnership with the Innovation, Incubation and Enterprise Development office. The the Theme of the Expo will be "Advancing Technology for Sustainable Development : From Theory to Reality". Unlock the future at our Tech Expo and Hackathon 🚀 Embrace innovation, collaborate with like-minded creators, and push the boundaries of technology. Join us on the journey to shape tomorrow's world today. </p>
        </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- JS Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>