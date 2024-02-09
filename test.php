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
$query = "SELECT username FROM user_credenials WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$username = $row['username'];

// Display the username
echo "Welcome, $username!";

// Close the statement and connection
$stmt->close();
$conn->close();
?>