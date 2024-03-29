<?php
    session_start();

    if (!isset($_SESSION['email']) || !isset($_SESSION['expire_time']) || time() > $_SESSION['expire_time']) {
    // User is not logged in or session has expired, redirect to the login page
    header("Location: login.php");
    exit();
    }

    // Get the user ID from the session
    $user_id = $_SESSION['user_id'];

    // Retrieve the username from the database based on the user ID
    require_once('connection.php');
    $query = "SELECT username,skills,languages,bio,profile_pic FROM user_credentials WHERE no = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $username = $row['username'];
    $skills = $row['skills'];
    $languages= $row['languages'];
    $bio=$row['bio'];
    $profile_pic=$row['profile_pic'];
    // Retrieve the blogs for the user
    $sql = "SELECT * FROM blogs_table WHERE username = '$username'";
    $result = $conn->query($sql);
    $imageData = $row['profile_pic'];
    $imageMimeType = 'image/jpeg';


// Close the statement and connection
$stmt->close();
$conn->close();
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
        body{
            background-color: #f4f2ee;
            
        }
        .container-fluid.main{
            margin-top: 60px;
        }
        .bio{
            width: 60%;
            border-radius: 0.4cm;

        }
        .col-lg-3{
            background-color: white;
            border-radius: 0.4cm;
            margin-left: 25px;
        }
        .blogs{
            background-color: white;
        }
        .header-blogs{
            display: flex;
            gap:90%;
        }
        a{
            text-decoration: none;
            color: black;
        }
        .contact{
            position: fixed; /* Fix the container to the bottom */
            bottom: 0;
            width: 100%;
            display: flex-end; /* Use flexbox for internal layout */
            justify-content: center; /* Center the button horizontally */
            align-items: center; /* Center the button vertically */
        }
        
        #slide-up-content {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 50%;
            height: 400px; /* Adjust height as needed */
            background-color: #3D1383;
            color: white;
            transform: translateY(100%); /* Initially hidden below the screen */
            transition: transform 0.3s ease-in-out; /* Add a smooth transition */
            border-radius: 0.4cm;
        
        }

        #slide-button:focus-within ~ #slide-up-content {
            transform: translateY(0); /* Reveal the div when button is focused */
        }
        /* Add this new rule to collapse the div when clicking outside */
        #slide-up-content:not(:focus-within) {
        transform: translateY(100%); /* Hide the div when not focused */
        }
        .existing-blogs-content{
            display: flex;
            
        }
    </style>
</head>
<body style="margin-left: 30px;">
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
                        <?php echo '<img src="data:' . $imageMimeType . ';base64,' . base64_encode($imageData) . '" style="border-radius: 50%; height: 30px; width: 30px;"  alt="Database Image">'; ?>

                        </li>
                    </ul>
                </div>              
            </div>
        </div>
    </nav>
    <form action="profile.php" method="POST">
        <div class="container-fluid main">
            <div class="row">
                <div class="col-lg-8 shadow p-3 mb-5 bg-body rounded ">
                    <div class="profile-image" style="display: flex; ">
                    <?php echo '<img src="data:' . $imageMimeType . ';base64,' . base64_encode($imageData) . '" style="border-radius: 50%; height: 200px; width: 200px;"  alt="Database Image">'; ?>
                        <a href="edit_profile_pic.php?user_id=$user_id" ><i class="fa-solid fa-pen" style="margin-top: 120px;"></i></a>  
                    </div>
                    <h3 style="margin-top: 20px;"><?php echo "$username"?></h3>
                    <h5 style="margin-top: 20px;">BIO</h5>
                    <a href='edit_bio.php?user_id=$user_id' ><i class="fa-solid fa-pen" style="float: right;"></i></a>

                    <div class="bio">
                        <p><?php echo "$bio" ?></p>
                    </div>
                </div>
                <div class="col-lg-3 shadow p-3 mb-5 bg-body rounded">
                    <div class="skills" style="height:50%;">
                        <h5 style="text-align: center;">SKILLS</h5>
                        <p><?php echo "$skills"?></p>
                        <a href='edit_skills.php?user_id=$user_id' ><i class="fa-solid fa-pen" style="float: right;"></i></a>
                    </div>
                    <hr>
                    <div class="languages">
                        <h5 style="text-align: center;">Languages/Frameworks</h5>
                        <p><?php echo "$languages"?></p>
                        <a href='edit_languages.php?user_id=$user_id' ><i class="fa-solid fa-pen" style="float: right;"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="inputs">
            <div class="row">
                <div class="blogs col-lg-9">
                    <div class="header-blogs">
                        <h5>Blogs</h5>
                        <button class="btn btn-primary" style="background-color: #9E8605;margin: 10px 0;"><a href="post_blog.php">post</a></button>
                    </div>
                    
                    <div class="body-blogs">
                        <div class="existing-blogs" style="display: flex; justify-content: space-between;">
                            <h6>Existing Blogs</h6> 
                            
                        </div>
                           
                        <table class="table table-striped table-hover table-responsive"  >
                            <thead>
                                <tr>
                                    <th scope="col">no.</th>
                                    <th scope="col">Action</th>

                
                                </tr>
                            </thead>
                        <tbody>
                            <?php if ($result && $result->num_rows > 0) { ?>
                                <?php while ($fetchrecord = $result->fetch_assoc()) { ?>
                                <tr>
                                
                                <td><?php  echo $fetchrecord['blogs']?></td>
                            
                                <td>
                                    <a href="edit_blogs.php?id=<?php echo $fetchrecord['blog_id']?>" class="btn btn-primary btn-sm">
                                    <i class="fa fa-edit"></i>
                                    </a>
                                    
                                    <a href="delete-blog.php?id=<?php echo $fetchrecord['blog_id']?>" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i> 
                                        
                                    </a>
                                </td>
            

                            </tr>
                        
                            <?php  }?>
                            <?php } ?>
                            
                        </tbody>
                        </table>   
                        
                    </div>           
                </div>
                <div class="contact col-lg-3">
                    <button id="slide-button" class="btn btn-primary" style="background-color: #3D1383; float: right; margin-right: 50px;">Contact Us</button>
                        <div id="slide-up-content" >
                            
                                <h4 style="text-align: center;"><b>Contactus!!</b></h4>
                                <label for="message" class="label"></label>
                                <textarea name="message" id="message" cols="30" rows="10"></textarea>
                                <button class="btn btn-primary" style="background-color: #9E8605; margin-left: 50%; margin-top: 15px;">Send</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>