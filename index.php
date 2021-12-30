<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['username']);
	unset($_SESSION['key']);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Dear Diary</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="shortcut icon" href="images/logo-mini.svg" />

    </head>
    
    <body>
    <?php
   include_once 'dbConnection.php';
   session_start();
    unset($_SESSION['username']);
	unset($_SESSION['key']);
    unset($_SESSION['name']);
    unset($_SESSION['email']);

    $result = mysqli_query($con,"SELECT * FROM articles WHERE admin = 1 ") or die('Error');
    while($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $title = $row['title'];
        $article = $row['article'];
        $date = $row['date'];
        $date= date("d-m-Y",strtotime($date));
        $time = $row['time'];
        $mail = $row['email'];
        $filename = $row['filename'];
    }
 
   ?>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="about.php">About</a></li>
                            <li class="scroll-to-section"><a href="#women">Top Strories</a></li>
                            <li class="scroll-to-section"><a href="#explore">Explore</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Sign in</a>
                                <ul>
                                    <li><a href="pages/user-login.php">User Login</a></li>
                                    <li><a href="pages/admin-login.php">Admin</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">FAQs</a>
                                <ul>
                                    <li><a href="about.php">Help</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading index-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="inner-content">
                        <h2>Dear Diary</h2>
                        <span>Just vent!</span> <br><br>
                        <div class="main-border-button">
                            <a href="#" style="color:darkcyan;">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bootstrap-carousel">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                </li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="left-content">
                                        <div class="thumb">
                                            <div class="inner-content">
                                                <span style="color:white;">Don't change your voice<br>
                                                     document your thoughts</span>
                                            </div></div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="left-content">
                                        <div class="thumb">
                                            <div class="inner-content">
                                                <span style="color:white;">Do you believe that your mental health <br>
                                                    and self-perception are at per?</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="left-content">
                                        <div class="thumb">
                                            <div class="inner-content">
                                                <span style="color:white;">what the state of your mental health?<br>
                                                Fit or Unfit , type away then respond later.<br>
                                                We don't promise it, but you might be surprised.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="left-content">
                                        <div class="thumb">
                                            <div class="inner-content">
                                                <span style="color:white;">Sign up, Keep track of your progress in life.<br>
                                                Have fun in holding yourself acountable to <br>achieving your goals<br>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span
                                    class="sr-only">Previous</span> </a><a class="carousel-control-next" href="#carouselExampleIndicators" data-slide="next"><span
                                    class="carousel-control-next-icon"></span>
                                <span class="sr-only">Next</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Stories Area Starts ***** -->
    <section class="section" id="women">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Top Strories</h2>
                        <span>Shared stories appear here</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            <div class="service-item">
                                <h4>Synther Vaporware</h4>
                                <p>Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut labore, et dolore quis ipsum suspend.</p>
                                <img src="assets/images/service-01.jpg" alt="">
                            </div>
                            <div class="service-item">
                                <h4>Locavore Squidward</h4>
                                <p>Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut labore, et dolore quis ipsum suspend.</p>
                                <img src="assets/images/service-02.jpg" alt="">
                            </div>
                            <div class="service-item">
                                <h4>Health Gothfam</h4>
                                <p>Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut labore, et dolore quis ipsum suspend.</p>
                                <img src="assets/images/service-03.jpg" alt="">
                            </div>
                            <div class="service-item">
                                <h4>Health Gothfam</h4>
                                <p>Lorem ipsum dolor sit amet, consecteturti adipiscing elit, sed do eiusmod temp incididunt ut labore, et dolore quis ipsum suspend.</p>
                                <img src="assets/images/about-left-image.jpeg" alt="" style="height: 280px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Stories Area Ends ***** -->


    <!-- ***** Explore Area Starts ***** -->
    <section class="section" id="explore">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="left-content">
                        <h2>Explore Dear Diary</h2>
                        <span>Our Goal and purpose isbe your mental wellne s partner and poit out the importnace of mental health.</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i><p>Those living with mental health issues should be treated with care, understanding and compasion.</p>
                        </div>
                        <p>One in five adults experienced a mental health issue. One in 10 young people experienced a period of major depression
    One in 25 Americans lived with a serious mental illness, such as schizophrenia, bipolar disorder, or major depression. </p>
                        <!-- <p>If this template is beneficial for your website or business, please kindly <a rel="nofollow" href="https://paypal.me/templatemo" target="_blank">support us</a> a little via PayPal. Please also tell your friends about our great website. Thank you.</p> -->
                        <div class="main-border-button">
                            <a href="https://www.mentalhealth.gov/basics/mental-health-myths-facts">Discover More</a>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!-- ***** Explore Area Ends ***** -->

    
    <!-- ***** Subscribe Area Starts ***** -->
    <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>Dear Diary guarantees privacy to your articals</h2>
                        <span>Subsribe to our our new letter to get updates and helpful materials to facilate your mental wellness journey</span>
                    </div>
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                          <div class="col-lg-5">
                            <fieldset>
                              <input name="name" type="text" id="name" placeholder="Your Name" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-5">
                            <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-2">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button"><i class="fa fa-paper-plane"></i></button>
                            </fieldset>
                          </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-6">
                            <ul>
                                <li>Phone:<br><span>010-020-0340</span></li>
                                <li>Email:<br><span>info@company.com</span></li>
                                <li>Social Media:<br><span><a href="#">Facebook</a>, <a href="#">Instagram</a>, <a href="#">Behance</a>, <a href="#">Linkedin</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Subscribe Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <ul><li><a href="#">dear-diary.com</a></li>
                            <li><a href="#">010-020-0340</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Top stories</Article></h4>
                    <ul>
                        <li><a href="#">Diary</a></li>
                        <li><a href="#">Thanks Giving</a></li>
                        <li><a href="#">Looking Back..</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="index.html">Homepage</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2021 Datasyde Technology Ltd. All Rights Reserved. 
                        
                        <br>Design: <a href="https://datasyde.co.ke" target="_parent" title="free css templates">DTL</a>

                        <br>Distributed By: <a href="https://dear-diary.com" target="_blank" title="free & premium responsive templates">dear-diary</a></p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>