<?php 
require_once 'classes/Login.php';
$log = new Login();
?>

<?php 
if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['login'])) {
   $errors = $log->userLogin($_POST);
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Traveladea Admin | Login Page</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="Login_assets/assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
    <link href="Login_assets/assets/plugins/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="Login_assets/assets/plugins/animate/animate.min.css" rel="stylesheet" />
    <link href="Login_assets/assets/css/default/style.min.css" rel="stylesheet" />
    <link href="Login_assets/assets/css/default/style-responsive.min.css" rel="stylesheet" />
    <link href="Login_assets/assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="Login_assets/assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top">
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show"><span class="spinner"></span></div>
    <!-- end #page-loader -->
    
    <div class="login-cover">
        <div class="login-cover-image" style="background-image: url(Login_assets/assets/img/login-bg/login-bg-1-thumb.jpg)" data-id="login-cover-image"></div>
        <div class="login-cover-bg"></div>
    </div>
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin login -->
        <div class="login login-v2" data-pageload-addclass="animated fadeIn">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                    <span class="logo"></span> <b>Traveladea Admin</b>
                </div>
                <div class="icon">
                    <i class="fa fa-sign-in"></i>
                </div>
            </div>
            <?php require_once 'helpers/errors.php'; ?>
            <!-- end brand -->
            <!-- begin login-content -->
            <div class="login-content">
                <form class="form-horizontal" method="POST" action="#">
                    <div class="form-group m-b-20">
                        <input type="text"   name="email" value=""  class="form-control form-control-lg" placeholder="Email Address"  />
                    </div>
                    <div class="form-group m-b-20">
                        <input id="password" type="password" class="form-control" name="password"  placeholder="Password">
                    </div>
                    <div class="checkbox checkbox-css m-b-20">
                        <input type="checkbox" id="remember_checkbox" name="remember"/> 
                        <label for="remember_checkbox">
                            Remember Me
                        </label>
                    </div>
                    <div class="login-buttons">
                        <button type="submit" name="login" class="btn btn-success btn-block btn-lg">
                            Sign me in
                        </button>
                        <a style="padding-left: 0px;" class="btn btn-link" href="">
                            Forgot Your Password?
                        </a>
                    </div>
                    <div class="m-t-20">
                        Not a member yet? Click <a href="registration.php">here</a> to register.
                    </div>
                </form>
            </div>
            <!-- end login-content -->
        </div>
        <!-- end login -->
    </div>
    <!-- end page container -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="Login_assets/assets/plugins/jquery/jquery-3.2.1.min.js"></script>
    <script src="Login_assets/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="Login_assets/assets/plugins/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <!--[if lt IE 9]>
        <script src="Login_assets/assets/crossbrowserjs/html5shiv.js"></script>
        <script src="Login_assets/assets/crossbrowserjs/respond.min.js"></script>
        <script src="Login_assets/assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="Login_assets/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="Login_assets/assets/plugins/js-cookie/js.cookie.js"></script>
    <script src="Login_assets/assets/js/theme/default.min.js"></script>
    <script src="Login_assets/assets/js/apps.min.js"></script>
    <!-- ================== END BASE JS ================== -->
    
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="Login_assets/assets/js/demo/login-v2.demo.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <script>
        $(document).ready(function() {
            App.init();
            LoginV2.init();
        });
    </script>

</body>

<!-- Mirrored from seantheme.com/color-admin-v4.1/admin/html/login_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Jun 2018 05:03:44 GMT -->
</html>

