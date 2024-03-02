<?php
    session_start();
    $reponse = "";
    if (!isset($_SESSION['email']) || !isset($_SESSION['expire_time']) || time() > $_SESSION['expire_time']) {
    // User is not logged in or session has expired, redirect to the login page
    header("Location: edit_skills.php");
    exit();
    }

    // Get the user ID from the session
    $user_id = $_SESSION['user_id'];

    // Retrieve the username from the database based on the user ID
    require_once('connection.php');
    $query = "SELECT skills FROM user_credentials WHERE no = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $skills = $row['skills'];


    //updating records
    if(isset($_POST['updateRecords']))
            {
                // fetch data
                $skills = $_POST['skills'];
                
                // create a prepared statement
                $stmt = $conn->prepare("UPDATE user_credentials set skills =? WHERE no=?");
                
                // bind the variables
                $stmt->bind_param("si", $skills, $user_id);
                
                // execute the prepared statement
                $success = $stmt->execute();

                if($success){
                    $response="Records updated successfully!";
                }
                else{
                    $response="Error updating records!";
                }
            }

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/css/bootstrap.min.css">

    <style>
        body{
            width: 100vw;
            background-color: #3D1383;
        }
        .header{
            width: 100vw;
            height: 30px;
            background-color: #9E8605;
            margin-top: 5%;
        }
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #3D1383;
           
            
        }
        .content{
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
            margin-top: 5%;
        }
        .response {
            position: fixed;
            top: 60px; /* height of navbar */
            left: 0;
            right: 0;
            z-index: 1030;
            padding: 1rem 1.5rem;
            background-color: #fff;
            border-bottom: 1px solid #dee2e6;
            box-shadow: 0 1px 3px rgba(0, 0, 0, .06), 0 1px 2px rgba(0, 0, 0, .04);
            text-align: center;
        }
        textarea {
			width: 100%;
			height: 200px;
			padding: 10px;
			font-size: 16px;
			border: 1px solid #ddd;
			border-radius: 5px;
			resize: vertical;
		}

    </style>
</head>
<body>
    <div class="response">
        <i><?php echo $response?></i>
    </div>
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
    <form action="edit_skills.php?user_id=$user_id" method="post">
        <div class="container">
            <div class="content">
            <h3>Update Your Skills!!</h3>
            <textarea name="skills" id="skills" ><?php echo "$skills"?></textarea>
            <button class="btn btn-primary" name="updateRecords" style="background-color: #9E8605; margin-top: 10px;">Update </button>
            </div>
        </div>
    </form>    
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>