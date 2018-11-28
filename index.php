<?php

include 'config.php';
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>


    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Evento -Event Html Template">
    <meta name="keywords" content="Evento , Event , Html, Template">
    <meta name="author" content="ColorLib">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title>Takshak</title>
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/et-line.css" rel="stylesheet">
    <link href="assets/css/ionicons.min.css" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">
</head>
<body>
<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<!--header start here -->
<header class="header navbar fixed-top navbar-expand-md">

    <div class="errors">


             <?php

                    if(ISSET($_SESSION['register-status']))
                        {
                            echo $_SESSION['register-status'];
                            session_unset($_SESSION['register-status']);
                  }
            ?>


             <?php

                    if(ISSET($_SESSION['participant-register-status']))
                        {


                            $msg=$_SESSION['participant-register-status'];
                            echo "<script type='text/javascript'>alert('$msg');</script>";

                            session_unset($_SESSION['participant-register-status']);
                  }
            ?>



            <?php

                    if(ISSET($_SESSION['participate']))
                        {


                            $msg=$_SESSION['participate'];
                            echo "<script type='text/javascript'>alert('$msg');</script>";

                            session_unset($_SESSION['participate']);
                  }
            ?>






        </div>


    <div class="container">

        
        <div class="logo-text">TAKSHAK</div>

 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-text-align-right"></span>
        </button>
        <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
            <ul class=" nav navbar-nav menu">



                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>

                
                <li class="nav-item">
                    <a class="nav-link " href="#events">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="#contact">Contact</a>
                </li>

                <button class="nostyle" onclick="showhidelogin()">
                    
                        <a href="#login"><img class="login" src="assets/img/login.png"></a>
                   
                </button>

                    <li class="nav-item">

                         <a class="nav-link " href="logout.php">
                        <?php

                    if(ISSET($_SESSION['login_user']))
                        {
                            echo $_SESSION['login_user'];
                            
                        }
                        ?>

                    </a>
                    
                </li>




            </ul>
        </div>


    </div>
</header>
<!--header end here-->

<!--cover section slider -->
<section id="home" class="home-cover">
    <div class="cover_slider owl-carousel owl-theme">
        <div class="cover_item" style="background: url('assets/img/bg/slider.png');">
             <div class="slider_content">
                <div class="slider-content-inner">
                    <div class="container">
                        <div class="slider-content-center">
                            <h2 class="cover-title">
                                Prepare yourself for the 
                            </h2>
                            <strong class="cover-xl-text">Competition</strong>
                            <p class="cover-date">
                                14-15 February 2019  - MA College,Kothamangalam
                            </p>
                            <a href="#participant_registration" class=" btn btn-primary btn-rounded"  onclick="myFunction3()">
                                Register Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cover_item" style="background: url('assets/img/bg/slider.png');">
            <div class="slider_content">
                <div class="slider-content-inner">
                    <div class="container">
                        <div class="slider-content-left">
                            <h2 class="cover-title">
                                Prepare yourself for the 
                            </h2>
                            <strong class="cover-xl-text">Competition</strong>
                            <p class="cover-date">
                                14-15 February 2019  - MA College,Kothamangalam
                            </p>
                            <a href="#" class=" btn btn-primary btn-rounded" >
                                Register Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cover_item" style="background: url('assets/img/bg/slider.png');">
            <div class="slider_content">
                <div class="slider-content-inner">
                    <div class="container">
                        <div class="slider-content-center">
                            <h2 class="cover-title">
                                
                            </h2>
                            <strong class="cover-xl-text">#thrivebeyond</strong>
                            <p class="cover-date">
                                
                            </p>
                            <a href="#" class=" btn btn-primary btn-rounded" >
                                register now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cover_nav">
        <ul class="cover_dots">
            <li class="active" data="0.html"><span>1</span></li>
            <li  data="1.html"><span>2</span></li>
            <li  data="2.html"><span>3</span></li>
        </ul>
    </div>
</section>
<!--cover section slider end -->

<!--event info -->
<section class="pt100 pb100">
    <div class="container">
        <div class="row justify-content-center">


            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-calendar-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            DATE
                        </h5>
                        <p>
                            12-14 february 2018
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-location-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            location
                        </h5>
                        <p>
                            MA COLLEGE OF ENGINEERING
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-person-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            GUSTS
                        </h5>
                        <p>
                            gust1
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-3  ">
                <div class="icon_box_two">
                    <i class="ion-ios-pricetag-outline"></i>
                    <div class="content">
                        <h5 class="box_title">
                            Prizes
                        </h5>
                        <p>
                            $65 early bird
                        </p>
                    </div>
                </div>
            </div>



        </div>
    </div>


</section>
<!--event info end -->


<!--event countdown -->
<section class="bg-img pt70 pb70" style="background-image: url('assets/img/bg/bg-img.png');">
    <div class="overlay_dark"></div>
    <div class="container" id="countdown">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">
                <h4 class="mb30 text-center color-light">Counter until the big event
                	<div class="countdowner">
                        <p id="demo">
                		<div id="days">00</div> <span>Days</span> <div id="hours">00</div> <span>Hrs</span> <div id="minutes">00</div> <span>Mins</span> <div id="secs">00</div> <span>Secs</span>
                        </p> 
                	</div> 

                	


    </h4></div>
</div></div></section>
<!--event count down end-->






<section class="bg-img pt100 pb100"  id="participant_registration">
    <div class="container">
        <div class="section_title mb30">
            <h3 class="title color-light">

                Register Here !!
            </h3>
        </div>



        
            <form action="participant_registration.php" method="post">
                <div class="form-inline">
                
                <input type="text"  placeholder="Fullname" name="name">

                <input type="text"  placeholder="College" name="college">

                <input type="email"  placeholder="E-Mail" name="email">

                

                 <input type="text"  placeholder="Mobile No +91" name="mobile">
                
                

               

                    </div>

                    <div class="footer_box_body">
                        <div class="newsletter_form">

                             
                            
                            <button id="register" value="submit" class="btn btn-rounded btn-block btn-primary">Register</button>
                        </div>
                            
                           
                        </div>
                    </div>

                    
            </form>


        </div>
    </div>
</section>







<!--about the event -->
<section class="pt100 pb100" id="about">
    <div class="container">
        <div class="section_title">
            <h3 class="title">
                About the event
            </h3>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <p>
                    Takshak has ever since brought excitement and spirit among the young minds.The developments in the technology is reshaping the world to a greater extent and this techfest has so far broadened the visions of us , opening up the panorama of the present world.This year its gonna be much much better than what it was!!
                </p>
            </div>
            <div class="col-12 col-md-6">
                <p>
                    Takshak has ever since brought excitement and spirit among the young minds.The developments in the technology is reshaping the world to a greater extent and this techfest has so far broadened the visions of us , opening up the panorama of the present world.This year its gonna be much much better than what it was!!
                </p>
            </div>
        </div>

        <!--event features-->
        <div class="row justify-content-center mt30">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="icon_box_one">
                    <i class="lnr lnr-mic"></i>
                    <div class="content">
                        <h4>9 Speakers</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec graviante.
                        </p>
                        <a href="#">read more</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="icon_box_one">
                    <i class="lnr lnr-rocket"></i>
                    <div class="content">
                        <h4>8 hrs Marathon</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec graviante.
                        </p>
                        <a href="#">read more</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="icon_box_one">
                    <i class="lnr lnr-bullhorn"></i>
                    <div class="content">
                        <h4>Live Broadcast</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec graviante.
                        </p>
                        <a href="#">read more</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
                <div class="icon_box_one">
                    <i class="lnr lnr-clock"></i>
                    <div class="content">
                        <h4>60000k prize </h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus massa nec graviante.
                        </p>
                        <a href="#">read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!--event features end-->
    </div>
</section>
<!--about the event end -->


<!--speaker section-->
<section class="pb100" id="events">
    <div class="container">
        <div class="section_title mb50">
            <h3 class="title">
               Events
            </h3>
        </div>
    </div>


    <div class="row justify-content-center no-gutters">


<!------------------------- Event Grid------------------------------->

    <?php
                
                $sql = "SELECT * FROM Events"; 
                $result = mysqli_query($db, $sql);
                $disp="'none'";
                
                while($row = mysqli_fetch_assoc($result)) 
                {
                    
                            

                    
  
 
                       echo' <div class="col-md-3 col-sm-6">';
                       echo '<div onclick=openTab("' . $row['event_name']. '");>'; 
                       echo '<div class="speaker_box">';
                       echo' <div class="speaker_img">';
                       echo '<img src="'.$row['cover'].'">';
                       echo'<div class="info_box">';
                       echo'<h5 class="name">';
                       echo $row['event_name'] . '</h5>';
                       echo'<p class="position"></p>';

                       echo '</div>';
                      
                       echo'</div>';
                       echo'</div>';

                       echo '</div>';
                       
                       echo'</div>';

                       echo '<div class="speaker_box">';
                       echo'<div id="' . $row['event_name']. '" class="expand" style="display:none;">';
                         
                       
                        //secho '<span onclick="this.parentElement.style.display='.$disp.'" class="closebtn">&times;</span>';

                        echo '<h4>'; echo $row['event_name']; echo' </h4><br>';
                        echo $row['event_details'].'<br>';
                        echo $row['type'].'<br>';
                        echo $row['description'].'<br>';
                        echo $row['prize']."$".'<br>';
                        echo '<form name="' . $row['event_name']. '" method="post" action="participate.php">';
                        echo'<input type="email" placeholder="Registered Email" name="reg-email" required>';
                        echo '<input type="hidden" name="frmname" value="' . $row['event_name']. '"/>';
                        echo'<button id="register" value="submit" class="btn btn-rounded btn-block btn-primary">Participate</button>';
                       echo '</form>';
                        

                       echo '</div>';
                       echo '</div>';
                       



                }
    ?>           



              



    <?php


       

                    if(ISSET($_SESSION['login_user']))
                        {
                            
                            
                            echo '<div class="col-md-3 col-sm-6">';
                            echo '<div class="speaker_box">';
                            echo '<div class="speaker_img">';
                            echo '<img class="new-event" src="assets/img/game2.jpg" alt="speaker name">';
                    echo '<div class="info_box">';
                    echo ' <h5 class="name">'; echo '<a href="#create_new_event" class="nostyle">';echo ' <button class="nostyle" onclick="myFunction2()">Create New Event</h5>'; echo '</button>'; echo '</a>';
                     echo '  <p class="position"></p>';
                   echo ' </div>';
                echo '</div>';
           echo ' </div>';

        echo'</div>';

         

        


                        }
    ?> 




    <?php


       

                    if(ISSET($_SESSION['login_user']))
                        {
                            
                            echo '<div class="col-md-3 col-sm-6">';
                            echo '<div class="speaker_box">';
                            echo '<div class="speaker_img">';
                            echo '<img class="new-event" src="assets/img/game2.jpg" alt="speaker name">';
                            echo '<div class="info_box">';
                            echo ' <h5 class="name">'; 
                            echo '<a href="#create_new_event" class="nostyle">';
                            echo ' <button class="nostyle" onclick="myFunction2()">Edit Event</h5>'; 
                            echo '</a>';echo '</button>';
                            echo'</div>';
                            echo '  <p class="position"></p>';
                            echo ' </div>';
                            echo '</div>';
                            echo ' </div>';

                            echo'</div>';

                            


        


                        }



    ?> 







           



 
        <!--

        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/speakers/s2.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">James Oliver</h5>
                        <p class="position">CEO Company</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/speakers/s3.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">Carla Banks</h5>
                        <p class="position">CEO Company</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/speakers/s4.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">William Smith</h5>
                        <p class="position">CEO Company</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/speakers/s5.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">Jessica Black</h5>
                        <p class="position">CEO Company</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/speakers/s6.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">Patricia Stone</h5>
                        <p class="position">CEO Company</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/speakers/s7.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">Duncan Stan</h5>
                        <p class="position">CEO Company</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="speaker_box">
                <div class="speaker_img">
                    <img src="assets/img/speakers/s8.png" alt="speaker name">
                    <div class="info_box">
                        <h5 class="name">Patricia Stone</h5>
                        <p class="position">CEO Company</p>
                    </div>
                </div>
            </div>
        </div>

    -->






 









    </div>
</section>
<!--speaker section end -->



<section class="bg-img pt100 pb100"  id="create_new_event">
    <div class="container">
        <div class="section_title mb30">
            <h3 class="title color-light">
                        new event
            </h3>
        </div>



        
            <form action="event.php" method="post" enctype="multipart/form-data">
                <div class="form-inline">
                
                <input type="text"  placeholder="Event Name" name="event_name">
              
                <input list="types" name="types">
                  <datalist id="types">
                    <option value="Single-Event">
                    <option value="Duet">
                    <option value="Group">
                    
                  </datalist>            
  
                
                
                    
                
                

                <input type="text"  placeholder="Event Details" name="event_det">

                 <input type="text"  placeholder="Total prize" name="prize">

                 <br><br><br><br>

                 <textarea rows="4" name="description" cols="50" placeholder="Describe yourself here..."></textarea>

                 <input type="file" name="cover">
                    
                    </div>

                    <div class="footer_box_body">
                        <div class="newsletter_form">

                             
                            
                            <button id="register" value="submit" class="btn btn-rounded btn-block btn-primary">Create</button>
                        </div>
                            
                           
                        </div>
                    </div>

                    
            </form>


        </div>
    </div>
</section>









<!--

<section class="pb100">
    <div class="container">
        <div class="section_title mb50">
            <h3 class="title">
                Pricing table
            </h3>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-4 col-12">
                <div class="price_box active">
                    <div class="price_highlight">
                        recommended
                    </div>
                   <div class="price_header">
                       <h4>
                           Early Bird
                       </h4>
                       <h6>
                           For the fast ones
                       </h6>
                   </div>
                    <div class="price_tag">
                        65 <sup>$</sup>
                    </div>
                    <div class="price_features">
                        <ul>
                            <li>
                                Early Entrance
                            </li>
                            <li>
                                Front seat
                            </li>
                            <li>
                                Complementary Drinks
                            </li>
                            <li>
                                Promo Gift
                            </li>
                        </ul>
                    </div>
                    <div class="price_footer">
                        <a href="#" class="btn btn-primary btn-rounded">Purchase</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="price_box">
                    <div class="price_header">
                        <h4>
                            Start up
                        </h4>
                        <h6>
                            For the begginers
                        </h6>
                    </div>
                    <div class="price_tag">
                        85 <sup>$</sup>
                    </div>
                    <div class="price_features">
                        <ul>
                            <li>
                                Early Entrance
                            </li>
                            <li>
                                Front seat
                            </li>
                            <li>
                                Complementary Drinks
                            </li>
                            <li>
                                Promo Gift
                            </li>
                        </ul>
                    </div>
                    <div class="price_footer">
                        <a href="#" class="btn btn-primary btn-rounded">Purchase</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="price_box">
                    <div class="price_header">
                        <h4>
                            Corporate
                        </h4>
                        <h6>
                            For the business
                        </h6>
                    </div>
                    <div class="price_tag">
                        95 <sup>$</sup>
                    </div>
                    <div class="price_features">
                        <ul>
                            <li>
                                Early Entrance
                            </li>
                            <li>
                                Front seat
                            </li>
                            <li>
                                Complementary Drinks
                            </li>
                            <li>
                                Promo Gift
                            </li>
                        </ul>
                    </div>
                    <div class="price_footer">
                        <a href="#" class="btn btn-primary btn-rounded">Purchase</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 -->


<!--event calender-->
<section class="pb100" id="notification">
    <div class="container">
        <div class="table-responsive">
            <table class="event_calender table">
                <thead class="event_title">
                <tr>
                    <th>
                        <i class="ion-ios-calendar-outline"></i>
                        <span>Important Notifications</span>
                    </th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            Event
                        </td>
                        <td>
                            Date
                        </td>
                        <td>
                            Details
                        </td>
                        <td>
                            Time
                        </td>
                        <td>
                            
                        </td>
                        

                    </tr>

            <?php


                    $sql = "SELECT * FROM notification"; 
                $result = mysqli_query($db, $sql);
                
                
                while($row = mysqli_fetch_assoc($result)) 
                {


                echo '

                <tr>
                    <td>
                        <h5>';

                        echo $row['event'].'</h5>';
                       
                       
                echo'    </td>

                    <td class="event_date">
                        
                        <span>';

                       echo $row['con_date'].'</span>';
                        
                echo'    </td>
                    <td>
                        <div class="event_place">
                            <h5>';

                echo $row['content'].'</h5>';
                            
                echo'           <td>
                            <h6>';
                echo $row['con_time'].'</h6>';
                            
                echo'           </td>

                        </div>
                    </td>
                    <td>
                        <a href="#" class="btn btn-primary btn-rounded">Read More</a>
                    </td>';


                }

            ?>

                <?php

                        if(ISSET($_SESSION['login_user'])) {



                            echo '

                            <form method="post" action="notification.php">
                <tr>
                    <td>
                        <h5><input type="text" placeholder="Related Event" name="event"></h5>
                    </td>
                    <td class="event_date">
                        
                        <span><input type="date" placeholder="month" name="con_date"></span>
                    </td>
                    <td>
                        <div class="event_place">
                            <h5><input type="text" placeholder="content" name="content"></h5>
                            <td>
                            <h6><input type="time" placeholder="Time constraint" name="con_time"></h6>
                            </td>
                        </div>
                    </td>
                    <td>
                    <button  value="submit" class="btn btn-primary btn-rounded">Add</button>
                    </td>
                    </form>
                    </tr>';

                            
                        }



                ?>





                </tbody>
            </table>
        </div>
    </div>
</section>
<!--event calender end -->

<!--brands section -->
<section class="bg-gray pt100 pb100">
    <div class="container">
        <div class="section_title mb50">
            <h3 class="title">
                Our Sponsers
            </h3>
        </div>
        <div class="brand_carousel owl-carousel">
            <div class="brand_item text-center">
                <img src="assets/sponsers/coca.png" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="assets/img/game2.jpg" alt="brand">
            </div>

            <div class="brand_item text-center">
                <img src="assets/img/brands/b3.png" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="assets/img/brands/b4.png" alt="brand">
            </div>
            <div class="brand_item text-center">
                <img src="assets/img/brands/b5.png" alt="brand">
            </div>

                <?php

                    if(ISSET($_SESSION['login_user']))
                        {
              
                    echo '   <div id="addspon" class="brand_item text-center">
                       
                       
                      <img src="assets/img/new-event.png"><br>
                      <form method="post" action="sponsers.php">
                      <p><input type="file" name="logo" class=""></p>
                       <p><button  value="submit" class="nostyle">Add</button></p>
                       </form>
                        </div>';

                        }
                ?>



        </div>
    </div>






</section>
<!--brands section end-->

<!--get tickets section -->
<section class="bg-img pt100 pb100" style="background-image: url('assets/img/bg/tickets.png');">
    <div class="container">
        <div class="section_title mb30">
            <h3 class="title color-light">
                Premium Events
            </h3>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-md-9 text-md-left text-center color-light">
                
            </div>
            <div class="col-md-3 text-md-right text-center">
                <a href="#" class="btn btn-primary btn-rounded mt30">buy now</a>
            </div>
        </div>
    </div>
</section>
<!--get tickets section end-->



<section class="bg-img pt100 pb100"  id="event_head_registration">
    <div class="container">
        <div class="section_title mb30">
            <h3 class="title color-light">

                Register Here !!
            </h3>
        </div>



        
            <form action="register.php" method="post">
                <div class="form-inline">
                
                <input type="text"  placeholder="Fullname" name="name">
              
                <input type="text"  placeholder="Class" name="class">

            
            <div class="radio-group">
            <label class="radiocontainer">Gender :</label>
            <label class="radiocontainer">Male
            <input type="radio"  name="gender" value="Male">
            <span class="checkmark"></span>
            </label>
            <label class="radiocontainer">Female
            <input type="radio" value="Female"  name="gender">
            <span class="checkmark"></span>
            </label>

            </div>
  
                
                
                <input type="email"  placeholder="E-Mail" name="email">

                <input type="text"  placeholder="Username" name="username">

                 <input type="text"  placeholder="Mobile No +91" name="mobile">
                
                <input type="password"  placeholder="Enter password" name="password">

                <input type="password"  placeholder="Confirm password" name="pswd">

                    </div>

                    <div class="footer_box_body">
                        <div class="newsletter_form">

                             
                            
                            <button id="register" value="submit" class="btn btn-rounded btn-block btn-primary">Register</button>
                        </div>
                            
                           
                        </div>
                    </div>

                    
            </form>


        </div>
    </div>
</section>


<footer id="login">
    <div class="container" >
        <div class="row justify-content-center">

           

           
            <div class="col-12 col-md-4">
                <div class="footer_box">
                    <div class="footer_header">
                        <h4 class="footer_title">
                            Login
                        </h4>
                    </div>
                    <div class="footer_box_body">
                        <div class="newsletter_form">
                            <form action="event_head_login.php" method="post">
                            <input type="text"  name="username" class="form-control" placeholder="Username">
                            <input type="password" name= "password" class="form-control" placeholder="Password">
                            <button value="submit" class="btn btn-rounded btn-block btn-primary">LOGIN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>




<!--footer start -->
<footer>
    <div class="container" id="contact">
        <div class="row justify-content-center">

            <div class="col-md-4 col-12">
                <div class="footer_box">
                    <div class="footer_header">
                        <div class="footer_logo">
                            <div class="logo-text">TAKSHAK</div>
                        </div>
                    </div>
                    <div class="footer_box_body">
                        <p>|
                            Takshak has ever since brought excitement and spirit among the young minds.The developments in the technology is reshaping the world to a greater extent and this techfest has so far broadened the visions of us , opening up the panorama of the present world.This year its gonna be much much better than what it was!!
                        </p>
                        <ul class="footer_social">
                            <li>
                                <a href="#"><i class="ion-social-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-dribbble"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ion-social-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="footer_box">
                    <div class="footer_header">
                        <h4 class="footer_title">
                            instagram
                        </h4>
                    </div>
                    <div class="footer_box_body">
                        <ul class="instagram_list">
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c1.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c2.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c3.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c3.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c2.png" alt="instagram">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/cleander/c1.png" alt="instagram">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="footer_box">
                    <div class="footer_header">
                        <h4 class="footer_title">
                            subscribe to our newsletter
                        </h4>
                    </div>
                    <div class="footer_box_body">
                        <div class="newsletter_form">
                            <input type="email" class="form-control" placeholder="E-Mail here">
                            <button class="btn btn-rounded btn-block btn-primary">SUBSCRIBE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="copyright_footer">
    <div class="container">
        <div class="row justify-content-center">
           
            <div class="col-12 col-md-6 ">
                <ul class="footer_menu">
                    <button class="nostyle" onclick="myFunction()">
                    <li>
                        <a href="#event_head_registration">Cordinator</a>
                    </li>
                    </button>
                    
                    <li>
                        <a href="#events">Events</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>

                    <li>
                        <a href="#">Home</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>
<!--footer end -->

<!-- jquery -->
<script src="assets/js/jquery.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<!--slick carousel -->
<script src="assets/js/owl.carousel.min.js"></script>
<!--parallax -->
<script src="assets/js/parallax.min.js"></script>
<!--Counter up -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!--Counter down -->
<script src="assets/js/jquery.countdown.min.js"></script>
<!-- WOW JS -->
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/timer.js"></script>
<script src="assets/js/scroller.js"></script>
<!-- Custom js -->
<script src="assets/js/main.js"></script>
<script src="assets/js/showhide.js"></script>



<script>
function openTab(tabName) {
  
  document.getElementById(tabName).style.display = "block";
}

</script>





</body>


</html>



