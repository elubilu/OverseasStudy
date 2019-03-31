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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <div id="wrapper">

      <div id="content-wrapper">

        <div class="container-fluid">
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
                    $courses = "SELECT * FROM course_info WHERE 1";
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
