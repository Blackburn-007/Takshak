<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
      
      $sql = "SELECT username FROM event_heads WHERE username = '$username' and password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // session_register("myusername");
         $_SESSION['login_user'] = $username;
         
         header("location:index.php");
      } else {

         $_SESSION['login_status'] = "Invalid username or password";
         header("location:index.php#login");
      }
   }
?>