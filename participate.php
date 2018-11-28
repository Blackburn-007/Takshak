<?php
   include("config.php");
   session_start();

   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
    $regmail=$_POST['reg-email'];

    $event_name=$_POST['frmname'];
      $sql = "SELECT email FROM participant WHERE email = '$regmail'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);



      
      // If result matched $myusername and $mypassword, table row must be 1 row

      
		
      if($count == 1) {
        // session_register("myusername");



          $insert="INSERT INTO registration (event_name,email) VALUES ('$event_name','$regmail')";
          $ins=mysqli_query($db,$insert);
          if($ins)
          {
            $_SESSION['participate'] ="successful";
            header("location:index.php");
          }

          else
          {
              $_SESSION['participate'] ="Failed";
            header("location:index.php");

          }
       
         
      } 

      else {

         $_SESSION['participate'] = "Failed";
         header("location:index.php");
      }


      
   }
?>