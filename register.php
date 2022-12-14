<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="TemplateAdmin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="TemplateAdmin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="TemplateAdmin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="TemplateAdmin/assets/images/logoTypeSV.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="TemplateAdmin/assets/images/logoTypeSV.png">
                </div>
                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>

                <form action="process/RegisterLogin.php" method="POST" class="pt-3">

                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputFullname1" name="fullname" placeholder="Fullname">
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername" name="username" placeholder="Username">
                  </div>

                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Password">
                  </div>

                  <div class="mt-3">
                    <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" name="submit" value="Register">Register</button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="login.php" class="text-primary">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="TemplateAdmin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="TemplateAdmin/assets/js/off-canvas.js"></script>
    <script src="TemplateAdmin/assets/js/hoverable-collapse.js"></script>
    <script src="TemplateAdmin/assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>