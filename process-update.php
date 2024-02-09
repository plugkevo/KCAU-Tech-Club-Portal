<?php
 $server="localhost";
 $username="root";
 $password="";
 $database="zalego";

 $conn=mysqli_connect($server,$username,$password,$database);


if(isset($_POST['updateRecords']))
        {
            // fetch data
            $fullname = $_POST['fullname'];
            $phonenumber = $_POST['phonenumber'];
            $email= $_POST['email'];
            $gender= $_POST['gender'];
            $course = $_POST['course'];

            // perform the sql query
            $updateRecords = mysqli_query($conn, "UPDATE user_credentials set skills ='$skills'
            WHERE no='".$_GET['id']."'");

            if($updateRecords){
                $message="Records updated successfully";
            }
            else{
                $message="Error occured";
            }
        }
?>