<?php  
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {



if(isset($_POST['email']) && 
   isset($_POST['uname'])){

    include "../db_conn.php";

    $email = $_POST['email'];
    $uname = $_POST['username'];
    $old_pp = $_POST['old_pp'];
    $id = $_SESSION['id'];

    if (empty($email)) {
    	$em = "Full name is required";
    	header("Location: ../edit.php?error=$em");
	    exit;
    }else if(empty($uname)){
    	$em = "User name is required";
    	header("Location: ../edit.php?error=$em");
	    exit;
    }else {

      if (isset($_FILES['pp']['name']) AND !empty($_FILES['pp']['name'])) {
         
        
         $img_name = $_FILES['pp']['name'];
         $tmp_name = $_FILES['pp']['tmp_name'];
         $error = $_FILES['pp']['error'];
         
         if($error === 0){
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_to_lc = strtolower($img_ex);

            $allowed_exs = array('jpg', 'jpeg', 'png');
            if(in_array($img_ex_to_lc, $allowed_exs)){
               $new_img_name = uniqid($uname, true).'.'.$img_ex_to_lc;
               $img_upload_path = '../upload/'.$new_img_name;
               // Delete old profile pic
               $old_pp_des = "../upload/$old_pp";
               if(unlink($old_pp_des)){
               	  // just deleted
               	  move_uploaded_file($tmp_name, $img_upload_path);
               }else {
                  // error or already deleted
               	  move_uploaded_file($tmp_name, $img_upload_path);
               }
               

               // update the Database
               $sql = "UPDATE user_credentials 
                       SET email=?, username=?, profile_pic=?
                       WHERE no=?";
               $stmt = $conn->prepare($sql);
               $stmt->execute([$email, $uname, $new_img_name, $id]);
               $_SESSION['email'] = $email;
               header("Location: ../edit.php?success=Your account has been updated successfully");
                exit;
            }else {
               $em = "You can't upload files of this type";
               header("Location: ../edit.php?error=$em&$data");
               exit;
            }
         }else {
            $em = "unknown error occurred!";
            header("Location: ../edit.php?error=$em&$data");
            exit;
         }

        
      }else {
       	$sql = "UPDATE user_credentials 
       	        SET email=?, username=?
                WHERE no=?";
       	$stmt = $conn->prepare($sql);
       	$stmt->execute([$email, $uname, $id]);

       	header("Location: ../edit.php?success=Your account has been updated successfully");
   	    exit;
      }
    }


}else {
	header("Location: ../edit.php?error=error");
	exit;
}


}else {
	header("Location: login.php");
	exit;
} 

