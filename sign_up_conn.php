<?php
session_start();



    
// Check if the form has been submitted
    if(isset($_POST['submit'])) {
    // Get the username and password from the form
    $email = $_POST['email'];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
  
    // Check if the passwords match
    if ($password !== $confirm_password) {
        $error= "Passwords do not match";
      
    } else {
      // Check if the username is already taken
      $sql = "SELECT username FROM user_credentials WHERE username='$username'";
      $result = $conn->query($sql);
  
      if ($result->num_rows > 0) {
        $error = "Username is already taken";
        
      } 
      else {
        // Insert the user's information into the database
        $insertData=mysqli_query($conn, "INSERT INTO user_credentials (email, username, password, skills, languages) VALUES ('$email', '$username', '$password', '$skills', '$languages')");
        if ($insertData)
       
         {
          $response = "User created successfully";
          $_SESSION['signup_completed'] = true; // Set session variable indicating sign-up completion
           header("Location: index.php");
        } 
        else{
            $error = "not created";
        }
      }
    }
  }

  // If the sign-up is already completed, redirect to the home page
if (isset($_SESSION['signup_completed']) && $_SESSION['signup_completed'] === true) {
    header("Location: index.php");
    exit; // Terminate script execution to prevent further processing
}
  ?>

