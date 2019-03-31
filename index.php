<!DOCTYPE html>
<html lang="zxx">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Overseas Study</title>
		<!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Bootstrap -->
		<link href="css/animate.css" rel="stylesheet">
        <!-- Typography CSS -->
		<link href="css/typography.css" rel="stylesheet">	
        <!-- DL Menu CSS -->
        <link href="js/dl-menu/component.css" rel="stylesheet">
        <!-- FontAwesome Icon CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/svg.css" rel="stylesheet">
        <!-- Slick Slider CSS -->
        <link href="css/slick.css" rel="stylesheet">
        <!-- Widget CSS -->
        <link href="css/widget.css" rel="stylesheet">
        <!-- Short Code CSS -->
        <link href="css/shortcode.css" rel="stylesheet">
        <!-- Custom Style CSS -->
		<link href="style.css" rel="stylesheet">
        <!-- Color CSS -->
        <link href="css/color.css" rel="stylesheet">
        <!-- Responsive CSS -->
        <link href="css/responsive.css" rel="stylesheet">
	</head>
	<body>
        <!-- Mester Wrapper Start-->
		<div class="mester_wrapper"> 
            <?php include 'header.php';?>      
            <div class="main-banner">
                <ul class="slider">
                    <li class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(extra-images/slide-1.jpg);">
                        <div class="banner-caption-wrapper">
                            <div class="banner-container container">
                                <div class="banner-caption text-center">
                                    <h6 data-animation="fadeInUp" data-delay="0.3s" class="title">Feed Your Knowledge</h6>
                                    <h6 data-animation="fadeInUp" data-delay="0.5s" class="title"> World’s Best University</h6>
                                    <p data-animation="fadeInUp" data-delay="1s" class="banner-description">
                                        We provides always our best services for our clients and  always<br>try to achieve our client's trust and satisfaction.
                                    </p>
                                    <a href="login.php" data-animation="fadeInUp" data-delay="1.3s" class="btn th-bg">Apply now</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(extra-images/slide-2.jpg);">
                        <div class="banner-caption-wrapper">
                            <div class="banner-container container">
                                <div class="banner-caption text-center">
                                    <h6 data-animation="fadeInUp" data-delay="0.3s" class="title">Feed Your Knowledge</h6>
                                    <h6 data-animation="fadeInUp" data-delay="0.5s" class="title"> World’s Best University</h6>
                                    <p data-animation="fadeInUp" data-delay="1s" class="banner-description">
                                        We provides always our best services for our clients and  always<br>try to achieve our client's trust and satisfaction.
                                    </p>
                                    <a href="login.php" data-animation="fadeInUp" data-delay="1.3s" class="btn th-bg">Apply now</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(extra-images/slide-3.jpg);">
                        <div class="banner-caption-wrapper">
                            <div class="banner-container container">
                                <div class="banner-caption text-center">
                                    <h6 data-animation="fadeInUp" data-delay="0.3s" class="title">Feed Your Knowledge</h6>
                                    <h6 data-animation="fadeInUp" data-delay="0.5s" class="title"> World’s Best University</h6>
                                    <p data-animation="fadeInUp" data-delay="1s" class="banner-description">
                                        We provides always our best services for our clients and  always<br>try to achieve our client's trust and satisfaction.
                                    </p>
                                    <a href="login.php" data-animation="fadeInUp" data-delay="1.3s" class="btn th-bg">Apply now</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Mester Mina Banner End-->  
            
            <!-- Search Button -->
             <?php 
                    $serverName = "localhost"; //host name
                    $dbUserName = "root"; //Database Username
                    $dbPassword = ""; //Database Password
                    $dbName = "study"; //Database Name

                    $db = new mysqli($serverName, $dbUserName, $dbPassword, $dbName); //Database Connectons 
                    //SELECT DISTINCT(country) AS Date FROM course_info ORDER BY updatedAt DESC;
                    $countries = "SELECT DISTINCT(country)  FROM course_info ORDER BY updatedAt DESC";
                    $courses = "SELECT DISTINCT(fieldOfStudy)  FROM course_info ORDER BY updatedAt DESC";
                    $universities = "SELECT DISTINCT(universityName) FROM course_info ORDER BY updatedAt DESC";
                    $allCourses = "SELECT * FROM course_info ORDER BY updatedAt DESC Limit 6";
                      ?>
       <section>       
             <div class="container">
                <div class="row">
                    <form action="search.php" method="POST">
                        <div class="col-md-12 ">
                            <div class="search-filter">
                              
                               <div class="col-md-3 margin_padding">
                                <select class="form-control" id="country" name="country">
                                    <option>SEARCH BY COUNTRY</option>
                                    <?php foreach($db->query($countries) as $country){ ?>
                                        <option value="<?php echo $country['country'] ?>"><?php echo $country['country']; ?></option>
                                        <?php } ?>
                                  </select>
                                </div>
                                <div class="col-md-3 margin_padding">
                                    <select class="form-control" id="programType" name="programType">
                                        <option>BY TYPE OF PROGRAM</option>
                                        <option value="Undergraduate">Undergraduate</option>
                                        <option value="Graduate">Graduate</option>
                                  </select>
                                </div>
                                <div class="col-md-2 margin_padding">
                                   <select class="form-control" id="fieldOfStudy" name="fieldOfStudy">
                                    <option>BY FIELD OF STUDY</option>
                                    <?php foreach($db->query($courses) as $course){ ?>
                                    <option value="<?php echo $course['fieldOfStudy']; ?>"><?php echo  $course['fieldOfStudy']; ?></option>
                                        <?php } ?>
                                  </select>
                                </div>
                                <div class="col-md-2 margin_padding">
                                   <!-- <input type="text" class="form-control keyword address" name="name" placeholder="Price">-->
                                    <select class="form-control" id="universityName" name="universityName">
                                    <option>BY UNIVERSITY</option>
                                    <?php foreach($db->query($universities) as $university){ ?>
                                        <option value="<?php echo $university['universityName']; ?>"><?php echo $university['universityName']; ?></option>
                                        <?php } ?>
                                  </select>
                                </div>
                                
                               
                                <div class="col-md-2 margin_padding">
                                    <button type="submit" class="searchbtn btn btn-default">Search</button>
                                </div>
                                <!--End Search Button-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>    
   </section>     
   
            <!-- Mester Contant Wrapper Start-->  
            <div class="main-contant">
                <Section>
                    <div class="container">
                        <div class="about-us">
                            <div class="row">
                                <div class="col-md-5">
                                    <figure>
                                        <img src="extra-images/about-uni.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-7">
                                    <div class="about-content">
                                        <div class="text">
                                            <h3> Welcome to The Study Abroad Portal!</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                                            <ul>
                                                <li><p>Consectetur adipisicing elit</p></li>
                                                <li><p>Quis nostrud exercitation ullamco</p></li>
                                                <li><p>Excepteur sint occaecat</p></li>
                                                <li><p>Sed ut perspiciatis unde omnis</p></li>
                                                <li><p>Perspiciatis unde omnis iste natus</p></li>
                                            </ul>
                                            <a class="btn" href="signup.php">Register now</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </Section>
                <section class="gray-bg">
                    <div class="container">
                        <div class="section_heading text-center">
                            <h3>Why Choose Us</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur a dipisicing elit. Vero omnis unde nesciunt ipsum dolor sit amet, consectetur a dipisicing elit. Vero omnis unde nesciunt</p>
                        </div><!-- / Section Heading --> 
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="services-1">
                                    <div class="svg-icon">
                                        <span class="icon-medical">
                                            <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span>
                                        </span>
                                    </div><!-- / Svg Icon -->
                                    <h5 class="title"><a href="#">Experience Yourself</a></h5><!-- / Title --> 
                                    <p>Lorem ipsum dolor sit amet, consectetur a dipisicing elit. Vero omnis unde nesciunt? Read more</p>
                                    <a class="btn" href="#">Read more</a>
                                </div><!-- / Services-1 End -->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="services-1">
                                    <div class="svg-icon">
                                        <span class="icon-science">
                                            <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span>
                                        </span>
                                    </div><!-- / Svg Icon -->
                                    <h5 class="title"><a href="#">Graduation Degree</a></h5><!-- / Title --> 
                                    <p>Lorem ipsum dolor sit amet, consectetur a dipisicing elit. Vero omnis unde nesciunt? Read more</p>
                                    <a class="btn" href="#">Read more</a>
                                </div><!-- / Services-1 End -->
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="services-1">
                                    <div class="svg-icon">
                                        <span class="icon-professor">
                                            <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span><span class="path30"></span><span class="path31"></span>
                                        </span>
                                    </div><!-- / Svg Icon -->
                                    <h5 class="title"><a href="#">Online Learning</a></h5><!-- / Title --> 
                                    <p>Lorem ipsum dolor sit amet, consectetur a dipisicing elit. Vero omnis unde nesciunt? Read more</p>
                                    <a class="btn" href="#">Read more</a>
                                </div><!-- / Services-1 End -->
                            </div>
                        </div>
                    </div>
                </section>
                <section class="teacher-section-bg parallax" data-stellar-background-ratio="0.5">
                    <div class="container">
                        <div class="our-teacher our_teacher_slider">
                            <div class="col-md-12">
                                <div class="teacher-thumb-1">
                                    <figure>
                                        <img src="extra-images/teacher-1.jpg" alt="">
                                    </figure>
                                    <div class="overflow-text">
                                        <div class="section_heading text-left">
                                            <h3>Aleena jonson</h3>
                                        </div><!-- / Section Heading --> 
                                        <p class="designation">Teacher (MBA)</p><!-- / Designation End -->
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p> 
                                        <div class="widget-contact">
                                            <div class="contact-info">
                                                <span>Phone:</span>
                                                <a href="viber://chat?number=+123456789">+1 916-875-2235</a>
                                            </div><!-- / Info Contact End -->
                                            <div class="contact-info">
                                                <span>Email:</span>
                                                <a class="th-cl" href="mailto:mesterthemes@gmail.com">mesterthemes@gmail.com</a>
                                            </div><!-- / Info Contact End -->
                                            <div class="contact-info">
                                                <span>Website:</span>
                                                <a class="th-cl" href="tg://resolve?domain=uoe">www.mesterthemes.com</a>
                                            </div><!-- / Info Contact End -->
                                            <div class="contact-info social-info">
                                                <span>Follow her:</span>
                                                <ul class="social-list">
                                                    <li><a class="facebook-bg" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="twitter-bg" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a class="google-bg" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a class="linkedin-bg" href="#"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div><!-- / Info Contact End -->
                                        </div><!-- / Widget Contact End --> 
                                    </div><!-- / OverFlow Text End --> 
                                </div><!-- / Teacher Thumb 1 End -->
                            </div> 
                            <div class="col-md-12">
                                <div class="teacher-thumb-1">
                                    <figure>
                                        <img src="extra-images/teacher-2.jpg" alt="">
                                    </figure>
                                    <div class="overflow-text">
                                        <div class="section_heading text-left">
                                            <h3>Muriel Barbery</h3>
                                        </div><!-- / Section Heading --> 
                                        <p class="designation">Teacher (BBA)</p><!-- / Designation End -->
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p> 
                                        <div class="widget-contact">
                                            <div class="contact-info">
                                                <span>Phone:</span>
                                                <a href="viber://chat?number=+123456789">+1 916-875-2235</a>
                                            </div><!-- / Info Contact End -->
                                            <div class="contact-info">
                                                <span>Email:</span>
                                                <a class="th-cl" href="mailto:mesterthemes@gmail.com">mesterthemes@gmail.com</a>
                                            </div><!-- / Info Contact End -->
                                            <div class="contact-info">
                                                <span>Website:</span>
                                                <a class="th-cl" href="tg://resolve?domain=uoe">www.mesterthemes.com</a>
                                            </div><!-- / Info Contact End -->
                                            <div class="contact-info social-info">
                                                <span>Follow her:</span>
                                                <ul class="social-list">
                                                    <li><a class="facebook-bg" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="twitter-bg" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a class="google-bg" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a class="linkedin-bg" href="#"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div><!-- / Info Contact End -->
                                        </div><!-- / Widget Contact End --> 
                                    </div><!-- / OverFlow Text End --> 
                                </div><!-- / Teacher Thumb 1 End -->
                            </div> 
                            <div class="col-md-12">
                                <div class="teacher-thumb-1">
                                    <figure>
                                        <img src="extra-images/teacher-3.jpg" alt="">
                                    </figure>
                                    <div class="overflow-text">
                                        <div class="section_heading text-left">
                                            <h3>July James </h3>
                                        </div><!-- / Section Heading --> 
                                        <p class="designation">Books Writer</p><!-- / Designation End -->
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p> 
                                        <div class="widget-contact">
                                            <div class="contact-info">
                                                <span>Phone:</span>
                                                <a href="#">+880 174-808-4106</a>
                                            </div><!-- / Info Contact End -->
                                            <div class="contact-info">
                                                <span>Email:</span>
                                                <a class="th-cl" href="mailto:mail@raselahmed.ml">info@overseasstudy.com</a>
                                            </div><!-- / Info Contact End -->
                                            <div class="contact-info">
                                                <span>Website:</span>
                                                <a class="th-cl" href="tg://resolve?domain=uoe">www.overseasstudy.com</a>
                                            </div><!-- / Info Contact End -->
                                            <div class="contact-info social-info">
                                                <span>Follow us:</span>
                                                <ul class="social-list">
                                                    <li><a class="facebook-bg" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a class="twitter-bg" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a class="google-bg" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a class="linkedin-bg" href="#"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div><!-- / Info Contact End -->
                                        </div><!-- / Widget Contact End --> 
                                    </div><!-- / OverFlow Text End --> 
                                </div><!-- / Teacher Thumb 1 End -->
                            </div> 
                        </div>
                    </div>
                </section>
                <section>
                    <div class="container">
                        <div class="section_heading text-center">
                            <h3>Papular courses</h3>
                             <p>Lorem ipsum dolor sit amet, consectetur a dipisicing elit. Vero omnis unde nesciunt ipsum dolor sit amet, consectetur a dipisicing elit. Vero omnis unde nesciunt</p>
                        </div><!-- / Section Heading --> 
                        <div class="row">
                            <?php 
                                foreach($db->query($allCourses) as $course){ 
                            ?>
                            <div class="col-md-4 col-sm-6">
                                <div class="courses-thumb-1">
                                    <figure><img src="extra-images/courses-1.jpg" alt=""></figure>
                                    <div class="text">
                                        <h6 class="title"><a href="#"><?php echo $course['universityName'] ?></a></h6>
                                        <p><?php echo $course['fieldOfStudy'] ?></p>
                                    </div><!-- / Text End -->
                                    <div class="courses-meta-wrap">
                                        <ul class="courses-meta-list">
                                            
                                            <li>
                                                <span><?php echo $course['ielts'] ?></span>
                                                <em>Minimum IELTS</em>
                                            </li>
                                            <li>
                                                <span><?php echo $course['cgpa'] ?></span>
                                                <em>Minimum CGPA</em>
                                            </li>
                                            <br>
                                            <li style="color: #EB9D14; padding-top: 10px; font-weight: bolder;text-transform: uppercase; font-family: Arial Black; ">
                                                <span><?php echo $course['programType'] ?></span>
                                                <em>Program</em>
                                            </li>
                                            
                                        </ul><!-- / Courses Meta List End -->
                                        <span class="btn">$<?php echo $course['courseFees']; ?></span>
                                        <a class="btn" href="login.php">APPLY NOW</a>
                                    </div><!-- / Courses Thumb 1 End -->
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </section>
                <section class="gallery-bg parallax" data-paroller-factor="0.02" data-paroller-type="background"  data-paroller-direction="vertical">
                    <div class="section_heading white text-center">
                        <h3>pHOTO GALLARY</h3>
                    </div><!-- / Section Heading --> 
                    <ul class="gallery-list popup-gallery no-padding">
                        <li>
                            <div class="gallery-thumb">
                                <img src="extra-images/gallery-1.jpg" alt="">
                                <a class="popup-icon" href="extra-images/gallery-1.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div><!-- / Gallery Thumb End --> 
                        </li>
                        <li>
                            <div class="gallery-thumb">
                                <img src="extra-images/gallery-2.jpg" alt="">
                                <a class="popup-icon" href="extra-images/gallery-2.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div><!-- / Gallery Thumb End --> 
                        </li>
                        <li>
                            <div class="gallery-thumb">
                                <img src="extra-images/gallery-3.jpg" alt="">
                                <a class="popup-icon" href="extra-images/gallery-3.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div><!-- / Gallery Thumb End --> 
                        </li>
                        <li>
                            <div class="gallery-thumb">
                                <img src="extra-images/gallery-4.jpg" alt="">
                                <a class="popup-icon" href="extra-images/gallery-4.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div><!-- / Gallery Thumb End --> 
                        </li>
                        <li>
                            <div class="gallery-thumb">
                                <img src="extra-images/gallery-5.jpg" alt="">
                                <a class="popup-icon" href="extra-images/gallery-5.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div><!-- / Gallery Thumb End --> 
                        </li>
                        <li>
                            <div class="gallery-thumb">
                                <img src="extra-images/gallery-6.jpg" alt="">
                                <a class="popup-icon" href="extra-images/gallery-6.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div><!-- / Gallery Thumb End --> 
                        </li>
                        <li>
                            <div class="gallery-thumb">
                                <img src="extra-images/gallery-7.jpg" alt="">
                                <a class="popup-icon" href="extra-images/gallery-7.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div><!-- / Gallery Thumb End --> 
                        </li>
                        <li>
                            <div class="gallery-thumb">
                                <img src="extra-images/gallery-8.jpg" alt="">
                                <a class="popup-icon" href="extra-images/gallery-8.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div><!-- / Gallery Thumb End --> 
                        </li>
                        <li>
                            <div class="gallery-thumb">
                                <img src="extra-images/gallery-9.jpg" alt="">
                                <a class="popup-icon" href="extra-images/gallery-9.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div><!-- / Gallery Thumb End --> 
                        </li>
                        <li>
                            <div class="gallery-thumb">
                                <img src="extra-images/gallery-10.jpg" alt="">
                                <a  class="popup-icon" href="extra-images/gallery-10.jpg">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div><!-- / Gallery Thumb End --> 
                        </li>
                    </ul>
                    <div class="mg-30 text text-center">
                        <a class="btn th-bg" href="#">VIEW ALL</a>
                    </div>
                </section>
                
                <section data-stellar-background-ratio="0.5" class="parallax newsletter">
                    <div class="container">
                        <div class="section_heading text-center">
                            <h3>newsletters</h3>
                        </div><!-- / Section Heading --> 
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                            <div class="input-field">
                                <div id="mc_embed_signup" class="nl-form-container clearfix">
                                    <form action="https://easyhostpk.us17.list-manage.com/subscribe/post-json?u=61f05c31aba9ccab1d61ccb47&amp;id=6a9a7c00fa&amp;c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletterform validate" target="_blank" novalidate>
                                        <!-- EDIT THIS ACTION URL (add "post-json?u" instead of "post?u" and appended "&amp;c=?" to the end of this URL) -->
                                        <input type="email" value="" name="EMAIL" class="email form-control nl-email-input" id="mce-EMAIL" placeholder="Email address" required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;">
                                            <input type="text" name="b_61f05c31aba9ccab1d61ccb47_6a9a7c00fa" tabindex="-1" value="">
                                        </div>
                                        <input class="btn th-bg" id="mc-embedded-subscribe" type="submit" name="subscribe" value="Your E-mail">
                                    </form>
                                    <div id="notification_container"  ></div>
                                </div>
                            </div><!-- / Input Field End --> 
                        </div>
                    </div>    
                </section><!-- / Newsletter Section End --> 
            </div>
            <!-- Mester Contant Wrapper End--> 
            <!--Footer Start-->
            <footer class="footer-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="widget widget_aboutus">
                                <h6 class="widget-title">About University</h6>
                                <p>Lorem ipsum dolor sit amet, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                <a href="#" class="btn">Know More</a>
                            </div>
                        </div>                        
                        <div class="col-md-3">
                            <!--Widget Start-->
                            <div class="widget widget_categories">
                                <!--Widget Title Start-->
                                <h6 class="widget-title">Papular Courses</h6>
                                <!--Widget Title End-->
                                <!--Form Contact Start-->
                                <ul> 
                                    <li><a href="#">Meterial Engineering</a></li>
                                    <li><a href="#">Electrical Engineering</a></li>
                                    <li><a href="#">Bio Chemical</a></li>
                                    <li><a href="#">Software Engineering</a></li>
                                    <li><a href="#">Autocade</a></li>
                                </ul>
                                <!--Form Contact End-->
                            </div>
                            <!--Widget End-->
                        </div>
                        <div class="col-md-3">
                            <!--Widget Latest Post Start-->
                            <div class="widget widget-latest-post">
                                <!--Widget Title Start-->
                                <h6 class="widget-title">Papular Posts</h6>
                                <!--Widget Title End-->
                                <!--Latest Post Wrap Start-->
                                <div class="latest-post-wrap">
                                    <!--Latest Post Thumb Start-->
                                    <div class="latest-post-thumb">
                                        <figure>
                                            <img src="extra-images/latest-post1.jpg" alt="">    
                                        </figure>
                                        <div class="overflow-text">
                                            <h6 class="title"><a href="#">Consectetur adipisicing elit</a></h6>
                                            <p>Incididunt ut labore et dolore</p>
                                            <span class="th-cl edu-date">19 Dec, 2015</span>
                                        </div>
                                    </div>
                                    <!--Latest Post Thumb End-->
                                    <!--Latest Post Thumb Start-->
                                    <div class="latest-post-thumb">
                                        <figure>
                                            <img src="extra-images/latest-post2.jpg" alt="">    
                                        </figure>
                                        <div class="overflow-text">
                                            <h6 class="title"><a href="#">Consectetur adipisicing elit</a></h6>
                                            <p>Incididunt ut labore et dolore</p>
                                            <span class="th-cl edu-date">19 Dec, 2015</span>
                                        </div>
                                    </div>
                                    <!--Latest Post Thumb End-->
                                </div>
                                <!--Latest Post Wrap End-->
                            </div>
                            <!--Widget Latest Post End-->
                        </div>
                        <div class="col-md-3">
                            <!--Widget Start-->
                            <div class="widget widget-contact">
                                <!--Widget Title Start-->
                                <h6 class="widget-title">Contact</h6>
                                <!--Widget Title End-->
                                <!--Contact Info List Start-->
                                <div class="contact-info-list">
                                    <div class="contact-info">
                                        <span>Phone:</span>
                                        <a href="#">+1 916-875-2235</a>
                                    </div>
                                    <!--Info Contact End-->
                                    <!--Info Contact Start-->
                                    <div class="contact-info">
                                        <span>Fax:</span>
                                        <a href="#">+880 1748084106</a>
                                    </div>
                                    <!--Info Contact End-->
                                    <!--Info Contact Start-->
                                    <div class="contact-info">
                                        <span>Email:</span>
                                        <a href="mailto:mail@raselahmed.ml">info@overseasstudy.com</a>
                                    </div>
                                    <!--Info Contact End-->
                                    <!--Info Contact Start-->
                                    <div class="contact-info">
                                        <span>Website:</span>
                                        <a href="#">www.overseasstudy.com</a>
                                    </div>
                                    <!--Info Contact End-->
                                    <!--Info Contact Start-->
                                    <div class="contact-info social-info">
                                        <span>Follow her:</span>
                                        <ul class="social-list">
                                            <li><a class="facebook-bg" href="#" tabindex="0"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter-bg" href="#" tabindex="0"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="google-bg" href="#" tabindex="0"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a class="linkedin-bg" href="#" tabindex="0"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                    <!--Info Contact End-->
                                </div>
                            </div>
                            <!--Widget End-->
                        </div>
                    </div>
                </div>
            </footer>
            <!--Footer End-->
            <div class="copy-right">
                <ul class="second-nav">
                    <li><a href="#">Support </a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Disclaimer</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="modal fade" id="search-box" role="dialog">
                <div class="container">
                    <!--SEARCH section STARTS-->  
                    <div class="search-popup">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div class="container">
                            <!--Heading Wrap Start-->
                            <div class="section_heading text-center">
                                <h3>Search For Our Courses</h3>
                            </div>
                            <!--Heading Wrap End-->  
                            <!--Mester FORM STARTS-->  
                            <div class="row">
                                <div class="col-md-12">
                                    <!--Mester Input STARTS-->
                                    <div class="input-field">
                                        <input class="form-control first_input" type="text" placeholder="Search Words">
                                    </div>
                                    <!--Mester Input End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Mester Input STARTS-->
                                    <div class="input-field">
                                        <select name="Category">
                                            <option value="0">Category</option>
                                            <option value="9">Publishing Date</option>
                                            <option value="2">Publishing Date</option>
                                            <option value="3">Publishing Date</option>
                                        </select>
                                    </div>
                                    <!--Mester Input End-->
                                </div>
                                <div class="col-md-12">
                                    <!--Mester Input STARTS-->
                                    <div class="input-field">
                                        <select name="Category">
                                            <option value="0">Category</option>
                                            <option value="9">Publishing Date</option>
                                            <option value="2">Publishing Date</option>
                                            <option value="3">Publishing Date</option>
                                        </select>
                                    </div>
                                    <!--Mester Input End-->
                                </div> 
                                <div class="col-md-12">
                                    <!--Mester Input STARTS-->
                                    <div class="input-field">
                                        <input class="btn" type="submit" value="Start Search">
                                    </div>
                                    <!--Mester Input End-->
                                </div>    
                            </div> 
                            <!--Mester FROM END-->  
                        </div>
                    </div>
                    <!--SEARCH section ENDS-->
                </div>
            </div>
		</div>
        <!-- Mester Wrapper End-->
    	<!-- jQuery -->
    	<script src="js/jquery.js"></script>
    	<!-- bootstrap -->
    	<script src="js/bootstrap.js"></script>
        <!--PrettyPhoto JavaScript-->
        <script src="js/prettyPhoto.js"></script>
        <!-- Slick Slider -->
        <script src="js/slick.min.js"></script>
        <!-- Parallax JavaScript -->
        <script src="js/parallax.js"></script>
        <!-- Masonry -->
        <script src="js/masonry.min.js"></script>
        <script src="js/waypoints-min.js"></script>
        <!--Dl Menu Script-->
        <script src="js/dl-menu/modernizr.custom.js"></script>
        <script src="js/dl-menu/jquery.dlmenu.js"></script>
        <!--Custom Script-->
    	<script src="js/custom.js"></script>
	</body>
</html>
