<?php
session_start();

if (isset($_SESSION['email']) && isset($_SESSION['expire_time']) && time() < $_SESSION['expire_time'] ) {
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
        $_SESSION['expire_time'] = time() + (10 * 60); // Set session expiration time to 20 minutes from now

        // Get the user ID from the database based on the email address
        $sql = "SELECT no FROM user_credentials WHERE email='$email'";
        $result = $conn->query($sql);
        $user_id = $result->fetch_assoc()['no'];

        // Store the user ID in the session
        $_SESSION['user_id'] = $user_id;

      // The username and password are correct, so log the user in
      header("Location: index.php");
    } else {
      // The username and password are incorrect, so display an error message
      $error = "Invalid username or password";
    }
  }



// Function to retrieve the username from the database based on the user ID
function get_username_by_id($user_id) {
    global $conn;
    $sql = "SELECT username FROM user_credentials WHERE no=$user_id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    return $row['username'];
}

// Example usage:
if (isset($_SESSION['user_id'])) {
    $username = get_username_by_id($_SESSION['user_id']);
    echo "Welcome, $username!";
}

?>