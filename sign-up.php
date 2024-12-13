<?php
include "Config/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from admin.pixelstrap.net/zono/template/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Dec 2024 15:28:15 GMT -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta
    name="description"
    content="Zono admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities." />
  <meta
    name="keywords"
    content="admin template, Zono admin template, dashboard template, flat admin template, responsive admin template, web app" />
  <meta name="author" content="pixelstrap" />
  <link rel="icon" href="manager/assets/images/favicon.png" type="image/x-icon" />
  <link
    rel="shortcut icon"
    href="manager/assets/images/favicon.png"
    type="image/x-icon" />
  <title>Zono - Premium Admin Template</title>
  <!-- Google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com/index.html" />
  <link
    rel="preconnect"
    href="https://fonts.gstatic.com/index.html"
    crossorigin="" />
  <link
    href="https://fonts.googleapis.com/css2e3ea.css?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css8807.css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="manager/assets/css/font-awesome.css" />
  <!-- ico-font-->
  <link
    rel="stylesheet"
    type="text/css"
    href="manager/assets/css/vendors/icofont.css" />
  <!-- Themify icon-->
  <link
    rel="stylesheet"
    type="text/css"
    href="manager/assets/css/vendors/themify.css" />
  <!-- Flag icon-->
  <link
    rel="stylesheet"
    type="text/css"
    href="manager/assets/css/vendors/flag-icon.css" />
  <!-- Feather icon-->
  <link
    rel="stylesheet"
    type="text/css"
    href="manager/assets/css/vendors/feather-icon.css" />
  <!-- Plugins css start-->
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link
    rel="stylesheet"
    type="text/css"
    href="manager/assets/css/vendors/bootstrap.css" />
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="manager/assets/css/style.css" />
  <link
    id="color"
    rel="stylesheet"
    href="manager/assets/css/color-1.css"
    media="screen" />
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="manager/assets/css/responsive.css" />
</head>

<body>
  <!-- login page start-->
  <div class="container-fluid p-0">
    <div class="row m-0">
      <div class="col-12 p-0">
        <div class="login-card login-dark">
          <div>
            <div>
              <a class="logo" href="index.html"><img
                  class="img-fluid for-light"
                  src="manager/assets/images/logo/logo.png"
                  alt="looginpage" /><img
                  class="img-fluid for-dark"
                  src="manager/assets/images/logo/logo_dark.png"
                  alt="looginpage" /></a>
            </div>
            <div class="login-main">
              <form class="theme-form" method="post">
                <h4>Create your account</h4>
                <p>Enter your personal details to create account</p>
                <div class="form-group">
                  <label class="col-form-label pt-0">Your Name</label>
                  <div class="row g-2">
                    <div class="col-6">
                      <input
                        class="form-control"
                        type="text"
                        name="first"
                        required=""
                        placeholder="First name" />
                    </div>
                    <div class="col-6">
                      <input
                        class="form-control"
                        type="text"
                        name="last"
                        required=""
                        placeholder="Last name" />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-form-label">Email Address</label>
                  <input
                    class="form-control"
                    type="email"
                    name="email"
                    required=""
                    placeholder="Test@gmail.com" />
                </div>
                <div class="form-group">
                  <label class="col-form-label">Password</label>
                  <div class="form-input position-relative">
                    <input
                      class="form-control"
                      type="password"
                      name="password"
                      required=""
                      placeholder="*********" />
                    <div class="show-hide"><span class="show"></span></div>
                  </div>
                </div>
                <div class="form-group mb-0">

                  <button
                    class="btn btn-primary btn-block w-100"
                    name="reg"
                    type="submit">
                    Create Account
                  </button>
                </div>

                <p class="mt-4 mb-0">
                  Already have an account?<a class="ms-2" href="login.php">Sign in</a>
                </p>
              </form>
              <?php
              if (isset($_POST["reg"])) {
                $first = $_POST["first"];
                $last = $_POST["last"];
                $email = $_POST["email"];
                $password = $_POST["password"];

                $user = new User($conn);
                $register = $user->register($first, $last, $email, $password);
                if ($register == "duplicate") {
                  echo "<script>alert('User with this email already exists!')</script>";
                } elseif ($register == "success") {
                  echo "<script>alert('Registered successfully'); location.replace('login.php')</script>";
                } elseif ($register == "failed") {
                  echo "<script>alert('Registration Failed!')</script>";
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="manager/assets/js/jquery.min.js"></script>
    <!-- Bootstrap js-->
    <script src="manager/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="manager/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="manager/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <!-- Sidebar jquery-->
    <script src="manager/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="manager/assets/js/script.js"></script>
    <!-- Plugin used-->
  </div>
</body>

<!-- Mirrored from admin.pixelstrap.net/zono/template/sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Dec 2024 15:28:15 GMT -->

</html>