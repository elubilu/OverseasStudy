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

    <!-- Custom styles for this template-->
    <link href="admin/css/sb-admin.css" rel="stylesheet">

  </head>

  <body>
    <div class="bg-dark">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Signup</div>
        <div class="card-body">
          <form action="signup1.php" method="POST">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="firstName" name="firstName" class="form-control" placeholder="First Name" required="required" autofocus="autofocus">
                <label for="firstName">First Name</label>
              </div>
            </div>
             <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last Name" required="required" autofocus="autofocus">
                <label for="lastName">Last Name</label>
              </div>
            </div>
             <div class="form-group">
              <div class="form-label-group">
                <input type="userName" id="userName" name="userName" class="form-control" placeholder="userName" required="required" autofocus="autofocus">
                <label for="userName">User Name</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email Address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
             <div class="form-group">
              <div class="form-label-group">
                <input type="password" name="conPassword" id="conPassword" class="form-control" placeholder="Confirm Password" required="required">
                <label for="conPassword">Confirm Password</label>
              </div>
            </div>
            <button class="btn btn-primary btn-block">Signup</button>
          </form>
           Already have acount? <a class="btn btn-success btn-block" href="login.php">Signin</a>
        </div>
      </div>
    </div>
</div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
