<?php
include("dbconnection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>..ohs..</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet"  href="bootstrap/css/font-awesome.min.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="jquery/jquery.js"></script>
   <script src="jquery/nav-shrink.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>

</head>
<body>
 <header class="main-header">
 <div class="header-top">
 <div class="container-fluid">
          <div class="col-sm-4 col-xs-4" id="top-lefts">         	
            	<a href="#"><span class="glyphicon glyphicon-earphone" style="color:#42b3e5;"></span> Call Us : (+977) 1234567896</a>
          </div>
          <div class="col-sm-4 col-xs-4" id="top-lefts"> 
                <a href="#"><span class="glyphicon glyphicon-envelope" style="color:#42b3e5;" ></span> Email Us : codemandu@domain.com</a>
          </div>
          <div class="col-sm-4 col-xs-4" id="top-right">
            			      <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-google-plus">&nbsp &nbsp</span></a>
                        <a href="#"><span class="fa fa-twitter">&nbsp &nbsp</span></a>
                       
                       </div>
 </div>
 </div>
</header>

<!--main navigation part with logo-->
<?php
include("navig.php");
?>
 <!--contaiener of services options-->
<div class="container-fluid mybanner">
       <div class="container banner-content" >
         <span ><center style="margin-top:85px;">WELCOME TO OHS</center></span> </br>
        <div class="row banner-choices ">
            <a href="#"><div class="col-sm-2 col-xs-12 pull-left choices1">
                  <div class="icon-main "><img src="images/booking.png"alt="booking" class="img-responsive icon-pic"></div> </br> </br> 
                   <button type="button" class="btn btn-primary" style="width:140px;" >Book Appointment</button>
            </div></a>
            <a href="#"><div class="col-sm-2 col-xs-12 pull-right choices1">
                     <div class="icon-main"><img src="images/video.png"alt="icon" class="img-responsive icon-pic"></div> </br> </br> 
                       <button type="button" class="btn btn-primary" style="width:140px;">Video Tutorial</button>
                    
           </div></a>
           <a href="#"><div class="col-sm-2 col-xs-12 pull-left choices1">
                <div class="icon-main"><img src="images/payment.png"alt="icon" class="img-responsive icon-pic"></div> </br> </br> 
                  <button type="button" class="btn btn-primary" style="width:140px;">Pay Online</button>
            </div></a>
           <a href="#"><div class="col-sm-2 col-xs-12 pull-right choices1">
                     <div class="icon-main"><img src="images/find-doctor.png"alt="icon" class="img-responsive icon-pic"></div> </br> </br> 
                    <button type="button" class="btn btn-primary" style="width:140px;">Find A Doctor</button>
            </div></a>
           <a href="#"><div class="col-sm-2 col-xs-12 pull-left choices1">
                     <div class="icon-main"><img src="images/booking.png"alt="icon" class="img-responsive icon-pic"></div> </br> </br> 
                      <button type="button" class="btn btn-primary" style="width:140px;">Heath</button>
          </div></a>
           <a href="#"><div class="col-sm-2 col-xs-12 pull-right choices1">
                     <div class="icon-main"><img src="images/health-records.png"alt="icon" class="img-responsive icon-pic"></div> </br> </br> 
                        <button type="button" class="btn btn-primary" style="width:140px;">Health Records</button>
            </div></a>
       </div>     
    </div>
 
 </div>

</div>

<!--news part-->
<?php
include("news-headlines.php");
?>

 
</body>
</html>