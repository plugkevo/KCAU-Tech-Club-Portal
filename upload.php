<?php
session_start();
require_once('connection.php');

// Get the user ID from the session
$user_id = $_SESSION['user_id'];

// Handle the file upload
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["profile_pic"]["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if the file is an image
if(isset($_POST["updateRecords"])) {
    $check = getimagesize($_FILES["profile_pic"]["tmp_name"]);
    if($check !== false) {
        move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file);
        $profile_pic = $target_file;

        // Update the profile picture in the database
        $stmt = $conn->prepare("UPDATE user_credentials SET profile_pic=? WHERE no=?");
        $stmt->bind_param("si", $profile_pic, $user_id);
        $stmt->execute();

        echo "Records updated successfully!";
    } else {
        echo "File is not an image.";
    }
}

// Close the statement and connection

$conn->close();
?>