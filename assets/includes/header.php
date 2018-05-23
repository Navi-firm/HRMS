<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HRMS | Welcome</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

    <link href="assets/css/ui-lightness/jquery-ui-1.10.0.custom.min.css" rel="stylesheet">

    <link href="assets/css/base-admin-3.css" rel="stylesheet">
    <link href="assets/css/base-admin-3-responsive.css" rel="stylesheet">

    <link href="assets/css/pages/signin.css" rel="stylesheet">

    <link href="assets/css/custom.css" rel="stylesheet">

    <script type="text/javascript">
        function checkPasswordMatch() {
            var password = $("#password").val();
            var confirmPassword = $("#password2").val();

            if (password != confirmPassword)
                $("#checkPassMatch").html("Passwords do not match!");
            else
                $("#checkPassMatch").html("Passwords match.");
        }

        $(document).ready(function(){
            $("#checkPassMatch").keyup(checkPasswordMatch());
        });
    </script>

</head>

<body>

<nav class="navbar navbar-inverse" role="navigation">

    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">OpenHRMS</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="Users/Jobs/dashboard.php">
                        <h5><i class="icon-briefcase"></i> Find A Job</h5>
                    </a>
                </li>
                <li class="">
                    <a href="login.php">
                        <h5><i class="icon-user"></i> Already have an Account ?</h5>
                    </a>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div> <!-- /.container -->
</nav>