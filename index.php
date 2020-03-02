<?php
if(isset($_POST["submit"])) {
include('db/connection.php');
$result = login($_POST);
if($result['success'] === 0) {
  //error
} else {
  session_start();
  $_SESSION['Username'] = $result['Username'];
  header('Location: welcome.php');
}
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login to WIS</title>
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="css/style.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
</head>

<body class="bg-home">

  <div class="container login-container" >
              <div class="row justify-content-center">
                  <div class="col-md-8 login-form-2 ">
                      <h3>Login</h3>
                      <form action="" method="post">
                          <div class="form-group">
                              <input type="text" name="username" class="form-control" placeholder="Your Uername*" value="" />
                          </div>
                          <div class="form-group">
                              <input type="password" name="password" class="form-control" placeholder="Your Password *" value="" />
                          </div>
                          <div class="form-group">
                              <input type="submit" name="submit" class="btnSubmit" value="Login" />
                          </div>
                          <div class="form-group">

                              <a href="register.php" class="register-login" value="Login">Not A Member Register Now!</a>
                          </div>
                      </form>
                  </div>
              </div>
          </div>

</body>

</html>
