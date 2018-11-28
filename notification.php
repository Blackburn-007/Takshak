<?php

include("config.php");
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      


   	$name =$_POST['event']; 
   	$datee =date('Y-m-d', strtotime($_POST['con_date']));
   	$content =$_POST['content']; 
   	$time =$_POST['con_time']; 



    



    session_start();




 
    
if(!empty($name) && !empty($datee) && !empty($content) && !empty($time))
{

  


  
  



$insert="INSERT INTO notification (event,con_date,content,con_time) VALUES ('$name','$datee','$content','$time')";
$ins=mysqli_query($db,$insert);



if($ins==True)
	{
    $_SESSION['notification-status']="Registered";
    header("location:index.php#notification");
    
	}

		else
		{
    
    	$_SESSION['notification-status']="Failed";
      header("location:index.php");
    	

		}
   

}

  else
    {

      $_SESSION['notification-status']="Error";

      header("location:index.php");

    }



}



?>