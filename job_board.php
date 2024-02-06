<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KCAU Tech club portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        body{
            width: 100vw;
        }
        .header{
            width: 100vw;
            height: 40px;
            background-color: #9E8605;
            margin-top: 60px;
        }
        .form-control{
            padding-top: 0;
            width: 15%;
            margin-top: 5px;
        }
        .label{
            display: flex;
            justify-content: right;
            align-items: end;
            margin-top: 10px;
        }
        .title{
            background-color: #3D1383;
            width: 40%;
            height: 35px;
            color: white;
            margin-top: 10px;
            border-radius: 0.3cm;
            text-align: center;
        }
        .job{
            border-radius: 1cm;
            background-color: #F8F6F6;           
            margin-top: 10px;
            margin-left: 20px;
        }
        .user-details{
            display: flex;
        }
        .job-tips{
            background-color: #9E8605;
            border-radius: 0.5cm;
            margin-left: 30px;
            color: white;
            height: 100%;
        }
        #slide-up-content {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 200px; /* Adjust height as needed */
            background-color: #f0f0f0;
            transform: translateY(100%); /* Initially hidden below the screen */
            transition: transform 0.3s ease-in-out; /* Add a smooth transition */
        }

        #slide-button:focus-within ~ #slide-up-content {
            transform: translateY(0); /* Reveal the div when button is focused */
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
    <div class="header">
        <div class="label">
            <label for="search" class=""></label>
            <input type="text" placeholder="search" class="form-control">

            <button class="btn btn-primary" style=" background-color: #3D1383; margin-left: 5px; margin-top: ;" >Search</button>
        </div>      
    </div>
    <div class="title">
        <h4>JOB Board</h4>
    </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="job">  
                        <div class="user-details">
                            <img src="images/download 4.jpeg" name="profile_img" style="height: 30px; width: 30px; border-radius: 50%;" alt="">
                            <h6>Username</h6>
                        </div>
                                  
                        <div class="job_details">
                            <p>Lorem ipsum dolor sit amet tibus debitis nihil repellendus mollitia quaerat reprehenderit. Corporis labore a repellendus amet dolore aut eveniet quod illo! Doloremque laudantium ratione porro animi a placeat similique veritatis consequatur nesciunt recusandae repudiandae, exercitationem possimus eos non eius, excepturi autem veniam reiciendis! Beatae ex voluptates libero, tempora placeat eos commodi ipsa laborum dolorem fuga expedita consequatur animi quam aliquam repellat quidem praesentium debitis autem ducimus! Quae repudiandae laudantium at eveniet delectus, officiis illo explicabo, facilis dolorem amet, consequuntur repellat esse laboriosam molestiae voluptates quo dolor. Id molestias consequuntur maxime.</p>
                            <div class="icons" style="text-align: end; margin-right: 13px;">
                                <a href=""><i class="fa-regular fa-heart fa-1x" style="margin-right: 10px; color: black;"></i></a>
                                <a href=""><i class="fa-regular fa-comment fa-1x" style="color: black; margin-right: 10px;"></i></a>
                                <a href=""><i class="fa-regular fa-share-from-square" style="color: black; margin-right: 10px;" ></i></a>
                            </div>    
                        </div>   
                    </div>        
                </div>  
                <div class="col-lg-4">
                    <div class="job-tips" style="">
                        <h4 style="text-align: center;"> Job tips</h4>
                        <ul>
                            <li style="margin-bottom: 4px;">Define your goals and target your search</li>
                            <li style="margin-bottom: 4px;">Craft a compelling resume and cover letter:</li>
                            <li style="margin-bottom: 4px;">Leverage your network</li>
                            <li style="margin-bottom: 4px;"> Practice your interviewing skills</li>
                            <li style="margin-bottom: 4px;">Stay focused and persistent</li>
                        </ul>
                    </div>
                </div>   
                <button id="slide-button">Slide Up</button>
                    <div id="slide-up-content">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, sapiente.
                </div>
   
            </div>    
        </div>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
