<?php
if(isset($_POST["submit"])) {
include('db/connection.php');
register($_POST);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Register to WIS</title>
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="css/style.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
</head>

<body class="bg-home">

  <div class="container login-container" >
              <div class="row justify-content-center">
                  <div class="col-md-8 login-form-2 ">
                      <h3>Register</h3>
                      <form action="" method="post">
                          <div class="form-group">
                              <input type="text" class="form-control" name="username" placeholder="Username *" value="" />
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control" name="password" placeholder="Your Password *" value="" />
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" name="email" placeholder="Email *" value="" />
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" name="firstName" placeholder="First Name *" value="" />
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" name="lastName" placeholder="Last Name *" value="" />
                          </div>

                          <div class="form-group">
                              <input type="submit" name="submit" class="btnSubmit" value="Register" />
                          </div>
                          <div class="form-group">

                              <a href="index.php" class="register-login" value="Login">Already Account Login Now!</a>
                          </div>
                      </form>
                  </div>
              </div>
          </div>

</body>

</html>
