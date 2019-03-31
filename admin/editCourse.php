<?php
	$serverName = "localhost"; //host name
			$dbUserName = "root"; //Database Username
			$dbPassword = ""; //Database Password
			$dbName = "study"; //Database Name

			$db = new mysqli($serverName, $dbUserName, $dbPassword, $dbName); //Database Connectons intval
			$courseId = intval($_GET['id']);
			//print_r($courseId); exit();
			$courses = $db->query("SELECT * FROM course_info WHERE universityId = '$courseId'");
			 // $countries = "SELECT DISTINCT(country)  FROM course_info ORDER BY updatedAt DESC";
    //          $programs = "SELECT DISTINCT(fieldOfStudy)  FROM course_info ORDER BY updatedAt DESC";
    //          $universities = "SELECT DISTINCT(universityName) FROM course_info ORDER BY updatedAt DESC";
			//print_r($courses);
	

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Overseas Study Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Overseas Study</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="home.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="addCourse.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Add Course</span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-table"></i>
            <span>Add University</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="manageCourse.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage Courses</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="studentApplication.php">
            <i class="fas fa-fw fa-table"></i>
            <span>All Applications</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Update Course</li>
          </ol>

          <form action="updateCourse.php" method="POST">
          	<?php foreach($courses as $course){ ?>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="universityName">University Name</label>
			      <input type="text" class="form-control" id="universityName" name="universityName" value="<?php echo $course['universityName']; ?>" placeholder="University Name" required>
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
			      <input type="text" class="form-control" id="fieldOfStudy" name="fieldOfStudy" placeholder="Field Of Study" value="<?php echo $course['fieldOfStudy']; ?>" required>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="country">Country</label>
			      <select id="country" name="country" class="form-control" required>
	                <option value="Afghanistan">Afghanistan</option>
	                <option value="Australia">Australia</option>
	                <option value="Austria">Austria</option>
	                <option value="Bangladesh">Bangladesh</option>
	                <option value="Belgium">Belgium</option>
	                <option value="Brazil">Brazil</option>
	                <option value="China">China</option>
	                <option value="Croatia">Croatia</option>
	                <option value="Cyprus">Cyprus</option>
	                <option value="Czech Republic">Czech Republic</option>
	                <option value="Denmark">Denmark</option>
	                <option value="Egypt">Egypt</option>
	                <option value="Finland">Finland</option>
	                <option value="France">France</option>
	                <option value="Hungary">Hungary</option>
	                <option value="Iceland">Iceland</option>
	                <option value="India">India</option>
	                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
	                <option value="Iraq">Iraq</option>
	                <option value="Ireland">Ireland</option>
	                <option value="Italy">Italy</option>
	                <option value="Japan">Japan</option>
	                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
	                <option value="Korea, Republic of">Korea, Republic of</option>
	                <option value="Kuwait">Kuwait</option>
	                <option value="Malaysia">Malaysia</option>
	                <option value="Maldives">Maldives</option>
	                <option value="Mexico">Mexico</option>
	                <option value="Nepal">Nepal</option>
	                <option value="Netherlands">Netherlands</option>
	                <option value="New Zealand">New Zealand</option>
	                <option value="Pakistan">Pakistan</option>
	                <option value="Poland">Poland</option>
	                <option value="Portugal">Portugal</option>
	                <option value="Qatar">Qatar</option>
	                <option value="Saudi Arabia">Saudi Arabia</option>
	                <option value="Singapore">Singapore</option>
	                <option value="South Africa">South Africa</option>
	                <option value="Spain">Spain</option>
	                <option value="Sri Lanka">Sri Lanka</option>
	                <option value="Sweden">Sweden</option>
	                <option value="Switzerland">Switzerland</option>
	                <option value="Tunisia">Tunisia</option>
	                <option value="Turkey">Turkey</option>
	                <option value="Ukraine">Ukraine</option>
	                <option value="United Arab Emirates">United Arab Emirates</option>
	                <option value="United Kingdom">United Kingdom</option>
	                <option value="United States">United States</option>
	                <option value="Zimbabwe">Zimbabwe</option>
	            </select>
			    </div>
			  </div>
			 <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="ielts">Required IELTS</label>
			      <input type="text" class="form-control" id="ielts" name="ielts" placeholder="Required IELTS" value="<?php echo $course['ielts']; ?>" required>
			    </div>
			    <div class="form-group col-md-6">
			      <label for="cgpa">Required CGPA</label>
			       <input type="text" class="form-control" id="cgpa" name="cgpa" placeholder="Required CGPA" value="<?php echo $course['cgpa']; ?>" required>
			    </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="gre">Required GRE</label>
			      <input type="text" class="form-control" id="gre" name="gre" placeholder="Required GRE" value="<?php if($course['gre']) echo $course['gre']; ?>">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="toefl">Required TOEFL</label>
			       <input type="text" class="form-control" id="toefl" name="toefl" placeholder="Required TOEFL" value="<?php if($course['toefl']) echo $course['toefl']; ?>">
			    </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="courseDuration">Course Duration</label>
			      <select name="courseDuration"  class="form-control" required>
			      	<option value="6 Months">6 Months</option>
			      	<option value="12 Months">12 Months</option>
			      	<option value="18 Months">18 Months</option>
			      	<option value="24 Months">24 Months</option>
			      	<option value="36 Months">36 Months</option>
			      	<option value="48 Months">48 Months</option>
			      </select>
			      
			    </div>
			    <div class="form-group col-md-6">
			      <label for="courseFees">Course Fees</label>
			       <input type="text" class="form-control" id="courseFees" name="courseFees" placeholder="Course Fees" value="<?php echo $course['courseFees']; ?>" required>
			    </div>
			  </div>
			  <?php } ?>
			  <div class="form-group">
			    <div class="form-check">
			      <input class="form-check-input" type="checkbox" id="gridCheck">
			      <label class="form-check-label" for="gridCheck">
			        Check me out
			      </label>
			    </div>
			  </div>
        <input type="hidden" class="form-control" id="courseId" name="courseId" value="<?php echo $courseId; ?>" >

			  <center><button type="submit" class="btn btn-primary">Update Course</button></center>
			</form>
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Overseas Study 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="index.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
