<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>e-HRMS | Get Hired</title>

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
            <a class="navbar-brand" href="../../index.php" style="color: #FFFFFF;">OpenHRMS</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">

            <ul class="nav navbar-nav navbar-right">
                <?php
                if(logged_in()){?>
                    <li class="dropdown">
                            <?php
                            if($user_data['role'] == 'Employee'){ ?>
                                <a href="Users/Employee/dashboard.php"> <i class="icon-user"></i>  { <?php echo $user_data['role']; ?> } ,
                                    <?php echo $user_data['username']; ?>
                                    <b class="caret"></b></a>
                            <?php }
                            elseif($user_data['role'] == 'Applicant'){ ?>
                                <a href="Users/User/dashboard.php"> <i class="icon-user"></i>  { <?php echo $user_data['role']; ?> } ,
                                    <?php echo $user_data['username']; ?>
                                    <b class="caret"></b></a>
                            <?php }
                            elseif($user_data['role'] == 'HOD'){ ?>
                                <a href="Users/HOD/dashboard.php"> <i class="icon-user"></i>  { <?php echo $user_data['role']; ?> } ,
                                    <?php echo $user_data['username']; ?>
                                    <b class="caret"></b></a>
                            <?php }
                            ?>
                    </li>
                <?php }else{
                ?>
                <li class="">
                    <a href="Users/Jobs/dashboard.php" style="color: #FFFFFF;">
                        <i class="icon-briefcase"></i> FIND A JOB
                    </a>
                </li>
                <li class="">
                    <a href="login.php"  style="color: #FFFFFF;">
                        <i class="icon-pencil"></i> LOGIN
                    </a>
                </li>
                <li class="">
                    <a href="register.php"  style="color: #FFFFFF;">
                        <i class="icon-signin"></i> SIGN UP
                    </a>
                </li>

            </ul>
            <?php }?>
        </div><!-- /.navbar-collapse -->
    </div> <!-- /.container -->
</nav>