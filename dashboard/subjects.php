<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Academic Warehouse</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="css/slick.css">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="css/animate.css">
    
    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="css/nice-select.css">
    
    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="css/jquery.nice-number.min.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="css/default.css">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="css/style.css">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="css/responsive.css">
  
  
</head>

<body>
   
   <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
   
    <!--====== HEADER PART START ======-->
    
    <header id="header-part">
        <div class="header-logo-support pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="logo">
                            <a href="index.php">
                                <img src="images/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="support-button float-right d-none d-md-block">
                            <div class="support float-left">
                                <div class="icon">
                                    <img src="images/all-icon/support.png" alt="icon">
                                </div>
                                <div class="cont">
                                    <p>Stuck Somewhere??        Email us at </p>
                                    <p>acadwarehouse@gmail.com</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header logo support -->
        
       <?php
       include("nav.php");
       ?>
    </header>
    
    <!--====== HEADER PART ENDS ======-->
   
    <!--====== PAGE BANNER PART START ======-->
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(images/page-banner-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>My Subjects</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Subjects</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== COURSES PART START ======-->
    
    <section id="courses-part" class="pt-120 pb-120 gray-bg">
        <div class="container">
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="singel-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="images/subjects/cu-1.jpg" alt="Intelligent Systems (IB303)">
                                    </div>
                                </div>
                                <div class="cont">
                                     <a href="IBM.php"><h4>Intelligent Systems (IB303)</h4></a>
                                    <div class="course-teacher">
                                        <div class="thum">
                                            <a href="profile.php"><img src="images/subjects/teacher/t-1.jpg" alt="teacher"></a>
                                        </div>
                                        <div class="name">
                                            <a href="profile.php"><h6>Mr. Aman Singh</h6></a>
                                        </div>
                                        <div class="admin">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Intelligent Systems Subject -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="singel-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="images/subjects/cu-2.png" alt="Essentials of Software Engineering (IB304)">
                                    </div>
                                    
                                </div>
                                <div class="cont">
                                    
                                    <a href="software.php"><h4>Essentials of Software Engineering (IB304)</h4></a>
                                    <div class="course-teacher">
                                        <div class="thum">
                                            <a href="profile.php"><img src="images/subjects/teacher/t-2.jpg" alt="teacher"></a>
                                        </div>
                                        <div class="name">
                                            <a href="profile.php"><h6>Miss. Bhavna Chilwal</h6></a>
                                        </div>
                                        <div class="admin">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-heart"></i><span>12</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Software Engg. -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="singel-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="images/subjects/cu-3.jpg" alt="Web Technology (CS345)">
                                    </div>
                                    
                                </div>
                                <div class="cont">
                                    <a href="web.php"><h4>Web Technologies (CS345)</h4></a>
                                    <div class="course-teacher">
                                        <div class="thum">
                                            <a href="profile.php"><img src="images/subjects/teacher/t-3.jpg" alt="teacher"></a>
                                        </div>
                                        <div class="name">
                                            <a href="profile.php"><h6>Mr. Devendra Prasad</h6></a>
                                        </div>
                                        <div class="admin">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-heart"></i><span>20</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Web Technologies  -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="singel-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="images/subjects/cu-4.jpg" alt="Data Mining (CS352)">
                                    </div>
                                    
                                </div>
                                <div class="cont">
                                    
                                    <a href="mining.php"><h4>Data Mining and data Warehousing (CS352)</h4></a>
                                    <div class="course-teacher">
                                        <div class="thum">
                                            <a href="profile.php"><img src="images/subjects/teacher/t-1.jpg" alt="teacher"></a>
                                        </div>
                                        <div class="name">
                                            <a href="profile.php"><h6>Mr. Maynak Shah</h6></a>
                                        </div>
                                        <div class="admin">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-heart"></i><span>20</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Data Mining -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="singel-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="images/subjects/cu-5.jpg" alt="Advanced Computer Network">
                                    </div>
                                    
                                </div>
                                <div class="cont">
                                    
                                    <a href="ACN.php"><h4>Advanced Computer Network (CS348)</h4></a>
                                    <div class="course-teacher">
                                        <div class="thum">
                                            <a href="profile.php"><img src="images/subjects/teacher/t-5.jpg" alt="teacher"></a>
                                        </div>
                                        <div class="name">
                                            <a href="profile.php"><h6>Mr. Sisir Kumar Jeena</h6></a>
                                        </div>
                                        <div class="admin">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-heart"></i><span>20</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> <!--Advanced Computer Network -->
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="singel-course mt-30">
                                <div class="thum">
                                    <div class="image">
                                        <img src="images/subjects/cu-6.jpg" alt="Compiler Design (CS304)">
                                    </div>
                                    
                                </div>
                                <div class="cont">
                                   
                                    <a href="CD.php"><h4>Compiler Design (CS304)</h4></a>
                                    <div class="course-teacher">
                                        <div class="thum">
                                            <a href="profile.php"><img src="images/subjects/teacher/t-1.jpg" alt="teacher"></a>
                                        </div>
                                        <div class="name">
                                            <a href="profile.php"><h6>Mr. Ranjeet Kumar Singh</h6></a>
                                        </div>    
                                        <div class="admin">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-heart"></i><span>20</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Compiler Design (CS304) -->      
                        </div>
                                               
                    </div> <!-- row -->
                </div>
                
            <div class="row">
                <div class="col-lg-12">
                    <nav class="courses-pagination mt-50">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a href="#" aria-label="Previous">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="active" href="#">1</a></li>
                            <li class="page-item"><a href="subjects2.php">2</a></li>
                            <li class="page-item">
                                <a href="subjects2.php" aria-label="Next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>  <!-- courses pagination -->
                </div>
            </div>  <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== COURSES PART ENDS ======-->
   
    <!--====== FOOTER PART START ======-->
    
    <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <a href="#"><img src="images/logo.png" alt="Logo"></a>
                            </div>
                            <p>Academic Warehouse is a UNIVERSITY MANAGEMENT SYSTEM (UMS) which covers all aspects of Universities. Academic Warehouse is an outcome of hard work done by our team in supervision of our IBM faculties.</p>
                            
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-link mt-40">
                            <div class="footer-title pb-25">
                                <h6>Sitemap</h6>
                            </div>
                            <ul>
                                <li><a href="index-2.php"><i class="fa fa-angle-right"></i>Home</a></li>  
                                <li><a href="courses.php"><i class="fa fa-angle-right"></i>Subjects</a></li>
                                <li><a href="courses.php"><i class="fa fa-angle-right"></i>Notes</a></li>
                                <li><a href="courses.php"><i class="fa fa-angle-right"></i>Assignments</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-link support mt-40">
                            <div class="footer-title pb-25">
                                <h6>Support</h6>
                            </div>
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Our Faculties</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>News</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Event</a></li>
                                <li><a href="#"><i class="fa fa-angle-right"></i>Blogs</a></li>
                            </ul>
                        </div> <!-- support -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Contact Us</h6>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p>DIT University, Makka wala road, Dehradun 248009</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p>+91-9870691112</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p>acadwarehouse@gmail.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- footer address -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->
        
        
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
   
    <!--====== BACK TO TP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    
    <!--====== BACK TO TP PART ENDS ======-->
   
    
    
    <!--====== jquery js ======-->
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="js/bootstrap.min.js"></script>
    
    <!--====== Slick js ======-->
    <script src="js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="js/jquery.magnific-popup.min.js"></script>
    
    <!--====== Counter Up js ======-->
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    
    <!--====== Nice Select js ======-->
    <script src="js/jquery.nice-select.min.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="js/jquery.nice-number.min.js"></script>
    
    <!--====== Count Down js ======-->
    <script src="js/jquery.countdown.min.js"></script>
    
    <!--====== Validator js ======-->
    <script src="js/validator.min.js"></script>
    
    <!--====== Ajax Contact js ======-->
    <script src="js/ajax-contact.js"></script>
    
    <!--====== Main js ======-->
    <script src="js/main.js"></script>
    
    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="js/map-script.js"></script>

</body>

</html>
