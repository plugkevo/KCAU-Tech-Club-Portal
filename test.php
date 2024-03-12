<?php


require_once('connection.php');
$stmt = $conn->prepare("SELECT profile_pic FROM user_credentials WHERE no=?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$profile_pic = $row["profile_pic"];

// Display the profile picture
echo '<script type="text/javascript">';
echo 'document.getElementById("profilePic").src="' . $profile_pic . '";';
echo '</script>';

// Close the statement and connection
$stmt->close();
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<img id="profilePic" src="placeholder.jpg" alt="Profile Picture" width="200" height="200">
</body>
</html>