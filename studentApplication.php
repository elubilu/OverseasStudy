            <!-- Database -->
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
                     // foreach($db->query($countries) as $country){ 
                     //                    print_r($country); 
                     //                     } 
                     //                    exit();
                      //print_r($db->query($countries)); exit();
                      ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Student Application</title>
	 <!-- Bootstrap core CSS-->
    <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="adminvendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <style type="text/css">
    	.hello{
    		margin-top: 50px;
    	}
    	.title{
    		font-family: sans-serif;
    		font-weight: bold;
    		color: #EB9D14;
    		margin-top: 30px;
    	}
    	.footer{
    		margin-top: 850px;
    	}
    </style>
</head>
<body>
	 <?php include 'header.php';?> 
	 <div class="form-group">
	 	<center><h1 class="title">Student Application Form</h1></center>
	 </div>
	 <form action="application.php" method="POST" class="form-control hello">
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="name">Student Name</label>
			      <input type="text" class="form-control" id="name" name="name" placeholder="Student Name" required>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="email">Email</label>
			       <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
			    </div>
			  </div>			  
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="universityName"> Desired University Name</label>
			      <select class="form-control" id="universityName" name="universityName">
                    <option>Select UNIVERSITY</option>
                    <?php foreach($db->query($universities) as $university){ ?>
                    <option value="<?php echo $university['universityName']; ?>"><?php echo$university['universityName']; ?></option>
                        <?php } ?>
                  </select>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="programType">Program Type</label>
			       <select id="programType" name="programType" class="form-control" required>
			       		<option value="undergraduate">Undergraduate</option>
			       		<option value="postgraduate">Postgraduate</option>
			       </select>
			    </div>
			  </div>
			 <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="fieldOfStudy">Field Of Study</label>
			      <select class="form-control" id="sel1">
                    <option>FIELD OF STUDY</option>
                    <?php foreach($db->query($courses) as $course){ ?>
                    <option value="<?php echo $course['fieldOfStudy']; ?>"><?php echo  $course['fieldOfStudy']; ?></option>
                        <?php } ?>
                  </select>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="country">Desired Country</label>
			    
	               <select class="form-control" id="country" name="country">
                    <option>COUNTRY</option>
                    <?php foreach($db->query($countries) as $country){ ?>
                    <option value="<?php echo $country['country'] ?>"><?php echo $country['country']; ?></option>
                        <?php } ?>
                  </select>
			    </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="lastInstitution">Last Institution Name</label>
			      <input type="text" class="form-control" id="lastInstitution" name="lastInstitution" placeholder="Last Institution" required>
			    </div>
			   <div class="form-group col-md-6">
			      <label for="lastDegree">Last Program</label>
			       <select id="lastDegree" name="lastDegree" class="form-control" required>
			       		<option value="undergraduate">Undergraduate</option>
			       		<option value="HSC">HSC</option>
			       </select>
			    </div>
			  </div>
			 <div class="form-row">    
			    <div class="form-group col-md-6">
			      <label for="studentCgpa">CGPA</label>
			       <input type="text" class="form-control" id="studentCgpa" name="studentCgpa" placeholder="Required CGPA" required>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="cgpaScale">CGPA Scale</label>
			      <select id="cgpaScale" name="cgpaScale" class="form-control" required>
			       		<option value="5">5</option>
			       		<option value="4">4</option>
			       </select>
			    </div>
			  </div> 
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="studentIelts">IELTS Score</label>
			      <input type="text" class="form-control" id="studentIelts" name="studentIelts" placeholder="IELTS Score" required>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="studentGre">GRE Score</label>
			      <input type="text" class="form-control" id="studentGre" name="studentGre" placeholder="GRE Score">
			    </div>
			  </div>
			  <center><button type="submit" class="btn btn-primary mt-4">Submit Application</button></center>
			</form>
			 <!--Footer Start-->
            <footer class="footer-1 footer">
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
</body>
</html>