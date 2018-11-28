<?php

include("config.php");
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      


   	$name =$_POST['name']; 
   	$college =$_POST['college']; 

   	$email =$_POST['email']; 

    $mob =$_POST['mobile'];  
    




    



    session_start();




 
    
if(!empty($name) && !empty($college) && !empty($email) && !empty($mob))
{


$insert="INSERT INTO participant (name,email,phone,college) VALUES ('$name','$email','$mob','$college')";
$ins=mysqli_query($db,$insert);



if($ins==True)
	{
    $_SESSION['participant-register-status']="Registered, Use your Email address to Participate in  events";
    header("location:index.php");
    
	}

		else
		{
    
    	$_SESSION['participant-register-status']="Failed";
      header("location:index.php");
    	

		}
   

}

  else
    {

      $_SESSION['participant-register-status']="Error";

      header("location:index.php");

    }



}



?>