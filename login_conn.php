
<?php
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['expire_time']) && time() < $_SESSION['expire_time'] ) {
  // User is already logged in, redirect to the new page
  header("Location: index.php");
  exit();
}


if(isset ($_POST['submit'])) {
    // Get the username and password from the form
    $email = $_POST["email"];
    $username= $_POST["username"];
    $password = $_POST["password"];
  
    // Check if the username and password match a record in the database
    $sql = "SELECT * FROM user_credentials WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
  
    if ($result->num_rows == 1) {
        $_SESSION['email'] = $email; 
        $_SESSION['expire_time'] = time() + (20 * 60); // Set session expiration time to 20 minutes from now

      // The username and password are correct, so log the user in
    
      header("Location: index.php");
    } else {
      // The username and password are incorrect, so display an error message
      $error = "Invalid username or password";
    }
  }
  



?>




