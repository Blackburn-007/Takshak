<?php

include("config.php");
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {


    $target="Events/";

      // username and password sent from form 
      


   	$eventname =$_POST['event_name']; 
   	$type =$_POST['types']; 
   	$details =$_POST['event_det']; 
   	$prz =$_POST['prize']; 

    $desc =$_POST['description']; 



 


 
    
if(!empty($eventname) && !empty($details)  && !empty($prz) && !empty($desc))
{
       if(isset($_FILES['cover'])){


     
      $file_name = $_FILES['cover']['name'];
      $file_size =$_FILES['cover']['size'];
      $file_tmp =$_FILES['cover']['tmp_name'];
      $file_type=$_FILES['cover']['type'];

         move_uploaded_file($file_tmp,$target.$file_name);

         

         
      }


 

$img=$target.$file_name;

$insert="INSERT INTO events (event_name,type,event_details,prize,description,cover) VALUES ('$eventname','$type','$details','$prz','$desc','$img')";
$ins=mysqli_query($db,$insert);



if($ins==True)
	{
    $_SESSION['event-status']="created";
    header("location:index.php");
    
	}

		else
		{
    
    	$_SESSION['event-status']="Failed";
      header("location:index.php");
    	

		}
   

}

  else
    {

      $_SESSION['event-status']="Error";

      header("location:index.php");

    }





}





?>