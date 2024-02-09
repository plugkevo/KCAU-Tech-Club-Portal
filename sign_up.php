<?php
    include('connection.php');
?>
<?php
    include('sign_up_conn.php');
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
        .container-fluid.main{
            width: 100vw;
            height: 100vh;
            background-image: url('/images/download.jpeg'); 
            background-repeat: no-repeat; 
            background-size: cover;
            background-position: center;
            background-color: #3D1383;
            animation: change-background 10s infinite; } @keyframes change-background { 0% { 
            background-image: url('/images/christopher-burns-Kj2SaNHG-hg-unsplash.jpg'); }
            33% {background-image: url('/images/luca-bravo-XJXWbfSo2f0-unsplash.jpg');} 
            66% {background-image: url('/images/robs-HOrhCnQsxnQ-unsplash.jpg');}
            100% {background-image: url('images/adi-goldstein-EUsVwEOsblE-unsplash.jpg');}
            display: flex; /* Use flexbox */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
        }
        .credentials{
            width: 400px;
            height: 450px;
            max-width: 100%;     
            background-color: #3D1383;
            border-radius: 0.8cm;
            color: white;
            margin: 0 auto;
            display: flex ;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            flex-direction: column;
            opacity: 0.9;
        }
        .label{
            margin-top: 10px;
            margin-left: 5px;
        }
        button{
            margin-top: 10px;
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
    <form action="sign_up.php" method="POST">
        <div class="container-fluid main">
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
        
            <div class="credentials" >
                <h3>SIGN UP</h3>
                <label for="email" class="label">Email</label>
                <input type="text" placeholder="Enter your school email" name="email" class="form-control" style=" width: 80%;">

                <label for="username" class="label">Username</label>
                <input type="text" name="username" id="" placeholder="Enter a username" class="form-control" style=" width: 80%;">

                <label for="password" class="label">Password</label>
                <input type="password" name="password" id="" placeholder="Enter a strong password" class="form-control" style=" width: 80%;">

                <label for="confirm_password" class="label">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" placeholder="Re-enter your password" style=" width: 80%;">

                <input type="text" hidden name="skills">
                <input type="text" hidden name="languages">

                <button class="btn btn-primary" name="submit" style="background-color: #9E8605;">SIGNUP</button>
            </div>
        </div>
    </form>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>