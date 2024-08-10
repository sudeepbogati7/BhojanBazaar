<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  //include connection file
error_reporting(0);  // using to hide undefine undex errors
session_start(); //start temp session until logout/browser closed

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title> B.B | About us</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- <link href="css/animsition.min.css" rel="stylesheet"> -->
    <link href="css/animate.css" rel="stylesheet">    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>

<body class="home">
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.html"> <img class="img-rounded" src="images/logo-bb.png" width="200" alt=""> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="dishes.php?res_id=48">Menu<span class="sr-only"></span></a> </li>
        
							<?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
                              <li class="nav-item"><a href="registration.php" class="nav-link active">Signup</a> </li>';
                              echo '<li class="nav-item"> <a class="nav-link active" href="about_us.php">About us<span class="sr-only"></span></a> </li>
                              <li class="nav-item"> <a class="nav-link active" href="contact_us.php">Contact us<span class="sr-only"></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link active" href="faq.php">FAQ<span class="sr-only"></span></a> </li>';
							}
						else
							{
									//if user is login
                                    echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">Your Orders</a> </li>
                                    <li class="nav-item"> <a class="nav-link active" href="user_profile.php">Profile<span class="sr-only"></span></a> </li>';
                                    echo '<li class="nav-item"> <a class="nav-link active" href="about_us.php">About us<span class="sr-only"></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link active" href="contact_us.php">Contact us<span class="sr-only"></span></a> </li>
                                    <li class="nav-item"> <a class="nav-link active" href="faq.php">FAQ<span class="sr-only"></span></a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}
                        ?>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- banner part starts -->
        <section class="hero bg-image" data-image-src="images/img/main.jpeg">
            <div class="hero-inner">
                <div class="container text-center hero-text font-white">
                    <h1>About Us</h1>
                    <div class="text-gray-200 font-semibold  "> Developed by stuents of ASCOL as Web Technology-II project work.  </div>
                    <div class="text-gray-200"> Under the guidance of <strong> Yuba Raj Devkota Sir </strong>  </div>
                    <!-- end:Steps -->
                </div>
            </div>
            <!--end:Hero inner -->
        </section>
        <!-- banner part ends -->
        <!-- Popular block starts -->
        <section class="popular">
            <div class="container">
                <div class="title  m-b-30">
                    <div class="text-2xl w-fit mx-auto flex items-center justify-center font-semibold "> Our <span class="text-orange-500">Team</span></div>
                    <div class="w-full flex gap-16 mt-12 justify-center items-center text-center">
                        <div class="w-[200px] h-[400px] p-2 shadow-xl rounded-lg bg-gray-200 border-gray-300 border-2">
                            <div class="border border-orange-600 w h-fit  rounded-xl overflow-hidden "><img class="" src="images/anurag.jpg" width="200" alt="anurag-img"></div>
                            <div class="font-bold text-lg">Mr. Anurag Oli </div>
                            <!-- <div class="text-sm ">Machine Learning Engineer  </div> -->
                            <!-- <span> ICEBREAKR</span> -->
                            <div class="text-sm">Roll No. 2009/078 </div>
                        </div>
                        <div class="w-[200px] h-[400px] p-2 rounded-lg shadow-xl bg-gray-200 border-gray-300 border-2">
                            <div class="border border-gray-600 w h-fit shadow-xl  rounded-xl overflow-hidden "><img class="" src="images/sudeep.jpg" width="200" alt="anurag-img"></div>
                            <div class="font-bold text-lg">Mr. Sudeep Bogati </div>
                            <!-- <div class="text-sm ">Software Engineer  </div> -->
                            <!-- <span> Greentick Nepal </span> -->
                            <div class="text-sm">Roll No. 2006/078 </div>
                        </div>
                        <div class="w-[200px] h-[400px] p-2 rounded-lg shadow-xl bg-gray-200 border-gray-300 border-2">
                            <div class="border border-gray-600 w h-fit  rounded-xl overflow-hidden "><img class="" src="images/binod.jpg" width="200" alt="anurag-img"></div>
                            <div class="font-bold text-lg">Mr.Binod Rawat </div>
                            <!-- <div class="text-sm "> Cyber Security Practitioner  </div> -->
                            <div class="text-sm">Roll No. 200*/078 </div>
                        </div>
                        <div class="w-[200px] h-[400px] p-2 flex flex-col gap-16 rounded-lg shadow-xl bg-gray-200 border-gray-300 border-2">
                            <div class="border border-gray-600 w h-fit  rounded-xl overflow-hidden "><img class="" src="images/sid.jpg" width="200" alt="anurag-img"></div>
                           <div>
                           <div class="font-bold text-lg">Mr.Binod Rawat </div>
                            <!-- <div class="text-sm "> Cyber Security Practitioner  </div> -->
                            <div class="text-sm">Roll No. 200*/078 </div>
                           </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
         <!-- start: FOOTER -->
         <footer class="footer">
            <div class="container">
                <!-- top footer statrs -->
                <div class="row top-footer">
                    <div class="col-xs-12 col-sm-3 footer-logo-block color-gray">
                        <a href="/bhojan-bazaar"><img class="img-rounded" src="images/logo-bb.png" width="200" alt=""> </a> <span>Order Delivery &amp; Take-Out </span> </div>
                    <div class="col-xs-12 col-sm-2 about color-gray">
                        <ul>
                            <li><a href="about_us.php">About us</a> </li>
                        </ul>
                    </div>
                </div>
                <!-- top footer ends -->
                <!-- bottom footer statrs -->
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 address color-gray">
                            <span> Kathmandu Valley , Nepal  </span>
                            <p> Bhojan Bazaar </p>
                            <div class="text-gray-300 font-semibold  ">Phone: <span class="">98********</span>  </div> 
                    </div>
                </div>
                <!-- bottom footer ends -->
            </div>
        </footer>
        <!-- end:Footer -->
    </div>
    <!--/end:Site wrapper -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js" async></script>

    <script src="js/tether.min.js" async></script>
    <script src="js/bootstrap.min.js" async></script>
    <script src="js/animsition.min.js" async></script>
    <script src="js/bootstrap-slider.min.js" async></script>
    <script src="js/jquery.isotope.min.js" async></script>
    <script src="js/headroom.js" async></script>
    <script src="js/foodpicky.min.js" async></script>
</body>
</html>