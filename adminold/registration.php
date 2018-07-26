<?php 
require_once 'classes/User.php';
$user = new User();
?>

<?php 
if ($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['registration'])) {
   $errors = $user->userRegistration($_POST);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Traveladea Admin | Register Page</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="Login_assets/assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
    <link href="Login_assets/assets/plugins/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
    <link href="Login_assets/assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
    <link href="Login_assets/assets/plugins/animate/animate.min.css" rel="stylesheet" />
    <link href="Login_assets/assets/css/default/style.min.css" rel="stylesheet" />
    <link href="Login_assets/assets/css/default/style-responsive.min.css" rel="stylesheet" />
    <link href="Login_assets/assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="Login_assets/assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top bg-white">
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show"><span class="spinner"></span></div>
    <!-- end #page-loader -->
    
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin register -->
        <div class="register register-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image" style="background-image: url(Login_assets/assets/img/login-bg/login-bg-9.jpg)"></div>
                <div class="news-caption">
                    <h4 class="caption-title"><b>Traveladea</b></h4>
                    <p>
                        As a administrator, you use the Admin console to manage your organization’s account, such as add new users, manage security settings, and turn on the services you want your team to access.
                    </p>
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin register-header -->
                <h1 class="register-header">
                    Sign Up
                </h1>
                <?php require_once 'helpers/errors.php'; ?>
                <!-- end register-header -->
                <!-- begin register-content -->
                <div class="register-content">
                    <form class="form-horizontal" method="POST" action="">
                        <label class="control-label">Name <span class="text-danger">*</span></label>
                        <div class="row row-space-10">
                            <div class="col-md-12 m-b-15">
                                <input type="text" name="name" class="form-control" placeholder="Admin name" value=""  autofocus />
                            </div>
                        </div>
                        <label class="control-label">Email <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" name="email" class="form-control" placeholder="Email address"  />
                            </div>
                        </div>
                        <label class="control-label">Password <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input minlength="6" type="password" name="password" placeholder="Admin Password" class="form-control  password">
                            </div>
                        </div>
                        <label class="control-label">Confirm Password <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="password" name="password_confirmation" placeholder="Confirm Password" class="form-control  confirm-password">
                            </div>
                        </div>
                        <div class="register-buttons">
                            <button type="submit" name="registration" class="btn btn-primary btn-block btn-lg">Sign Up</button>
                        </div>
                        <div class="m-t-20 m-b-40 p-b-40 text-inverse">
                            Already a member? Click <a href="index.php">here</a> to login.
                        </div>
                    </form>
                </div>
                <!-- end register-content -->
            </div>
            <!-- end right-content -->
        </div>
        <!-- end register -->
        
        
    </div>
    <!-- end page container -->

    <script>
        $("#username").on('keypress', function (event) {
            $(this).val($(this).val().replace(/[^a-z0-9]/gi, ''));
        });

        function checkAvailability(){
            var username = $("#username").val();
            _token = $('input[name="_token"]').val();
            // var clearName =  username.replace(/[^A-Za-z0-9]/, '');
            // var username = $("#username").val(clearName);
            if(username !== " "){
                $.ajax({
                    url: "{{URL::to('/"+'/register/'+username,
                    type: "get",
                    data: {_token : _token,
                        username:username
                        },
                    success:function(result)
                    {
                        if(result=='no'){
                            $("#username").addClass('input-success');
                            $(".btn-next").show();
                            $("#user-availability-status").html('<span style="color:#49ce49">* This username is available</span>');
                        }else{
                            $("#username").addClass('input-error');
                            $(".btn-next").hide();
                            $("#user-availability-status").html('<span style="color:red">* This username is not available</span>');

                        }

                    }
                });
            }else{
                $("#user-availability-status").hide();  
            }
        };
    </script>
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="Login_assets/assets/plugins/jquery/jquery-3.2.1.min.js"></script>
    <script src="Login_assets/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="Login_assets/assets/plugins/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <!--[if lt IE 9]>
        <script src="../assets/crossbrowserjs/html5shiv.js"></script>
        <script src="../assets/crossbrowserjs/respond.min.js"></script>
        <script src="../assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="Login_assets/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="Login_assets/assets/plugins/js-cookie/js.cookie.js"></script>
    <script src="Login_assets/assets/js/theme/default.min.js"></script>
    <script src="Login_assets/assets/js/apps.min.js"></script>
    <!-- ================== END BASE JS ================== -->

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
</body>

<!-- Mirrored from seantheme.com/color-admin-v4.1/admin/html/register_v3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Jun 2018 05:03:47 GMT -->
</html>

