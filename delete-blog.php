<?php
require_once('connection.php');
$sqlDeleteBlog= mysqli_query($conn, 
"DELETE FROM  blogs_table WHERE blog_id = '".$_GET['id']."'");
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