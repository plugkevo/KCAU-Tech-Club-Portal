<?php


require_once('connection.php');

$query = "SELECT username,skills,languages,bio,profile_pic FROM user_credentials WHERE no = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $username = $row['username'];


$sqlDeleteBlog= mysqli_query($conn, 
"DELETE FROM  user_credentials WHERE = '".$_GET['id']."'");
if($sqlDeleteBlog)
{
    echo "user deleted successfully";
    header('location:profile.php');

}
else
{
"error occured. please try again";
}

?>