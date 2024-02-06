<?php
     $response="";
     $error="";
     $server="localhost";
     $username="root";
     $password="";
     $database="kcau_tech_club";
 
     $conn = mysqli_connect($server, $username, $password, $database);
     if($conn){
         echo "";
     }
     else{
         echo "failed";
     }
?>