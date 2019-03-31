<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Overseas Study</title>

    <!-- Bootstrap core CSS-->
    <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.php">Overseas Study</a>

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
    </nav>

    <div id="wrapper">
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Icon Cards-->
         
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              University Requirements</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>University Name</th>
                      <th>Country</th>
                      <th>Required IELTS</th>
                      <th>Required CGPA</th>
                      <th>Course Fees</th>
                      <th>Course Duration</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $serverName = "localhost"; //host name
                    $dbUserName = "root"; //Database Username
                    $dbPassword = ""; //Database Password
                    $dbName = "study"; //Database Name

                    $db = new mysqli($serverName, $dbUserName, $dbPassword, $dbName); //Database Connectons 
                   // $courses = "SELECT * FROM course_info WHERE country='$country' AND programType='$programType' AND fieldOfStudy = '$fieldOfStudy' AND universityName='$universityName'  ";
                    $country = mysqli_real_escape_string($db, $_POST['country']);
                    $programType = mysqli_real_escape_string($db, $_POST['programType']);
                    $fieldOfStudy = mysqli_real_escape_string($db, $_POST['fieldOfStudy']);
                    $universityName = mysqli_real_escape_string($db, $_POST['universityName']);
                  // if($country && $programType){
                  //    $courses = "SELECT * FROM course_info WHERE country='$country' AND programType='$programType' ";
                  //  }
                    // print_r($country);
                    // print_r($programType);
                    // print_r($fieldOfStudy);
                    // print_r($universityName);
                    // exit();
                   if($country!="SEARCH BY COUNTRY"){
                     $courses = "SELECT * FROM course_info WHERE country='$country' ";

                   }
                  else if($programType !="BY TYPE OF PROGRAM"){
                     $courses = "SELECT * FROM course_info WHERE programType='$programType' ";
                     
                   }
                  // else if($universityName && $fieldOfStudy){
                  //    $courses = "SELECT * FROM course_info WHERE universityName='$universityName'  AND fieldOfStudy ='$fieldOfStudy' ";
                  //  }
                   else if($universityName !="BY UNIVERSITY"){
                     $courses = "SELECT * FROM course_info WHERE universityName='$universityName'";
                   }
                    else if($fieldOfStudy != "BY FIELD OF STUDY"){
                     $courses = "SELECT * FROM course_info WHERE fieldOfStudy='$fieldOfStudy'";
                   }
                   else{
                    $courses = "SELECT * FROM course_info WHERE 1";
                   }
                      foreach($db->query($courses) as $course){ 
                      ?>
                    <tr>
                      <td><?php echo $course['universityName'] ?></td>
                      <td><?php echo $course['country'] ?></td>
                      <td><?php echo $course['ielts'] ?></td>
                      <td><?php echo $course['cgpa'] ?></td>
                      <td><?php echo $course['courseFees'] ?></td>
                      <td><?php echo $course['courseDuration'] ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer" style="width: 100%">
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

    <!-- Bootstrap core JavaScript-->
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="admin/vendor/chart.js/Chart.min.js"></script>
    <script src="admin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="admin/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin/js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="admin/js/demo/datatables-demo.js"></script>
    <script src="admin/js/demo/chart-area-demo.js"></script>

  </body>

</html>
