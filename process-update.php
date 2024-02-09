<?php


//updating records
if(isset($_POST['updateRecords']))
        {
            // fetch data
            $skills = $_POST['skills'];
            
            // create a prepared statement
            $stmt = $conn->prepare("UPDATE user_credentials set skills =? WHERE no=?");
            
            // bind the variables
            $stmt->bind_param("si", $skills, $user_id);
            
            // execute the prepared statement
            $success = $stmt->execute();

            if($success){
                $message="Records updated successfully!";
            }
            else{
                $message="Error updating records!";
            }
        }
?>