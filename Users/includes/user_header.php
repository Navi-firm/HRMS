<?php include '../../Includes/Core/init.php';
if(!logged_in())
{
    ?>
    <script type="text/javascript">
        window.location.href='../../login.php';
    </script>
    <?php
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>OpenHRMS | <?php echo $user_data['role']; ?> </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="../../assets/js/css/jquery.dataTables.css" rel="stylesheet">
    <link href="../../assets/js/css/jquery.dataTables_themeroller.css" rel="stylesheet">

    <link href="../../assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="../../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.9/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="../../assets/css/font-awesome.min.css" rel="stylesheet">

    <link href="../../assets/css/ui-lightness/jquery-ui-1.10.0.custom.min.css" rel="stylesheet">

    <link href="../../assets/css/base-admin-3.css" rel="stylesheet">
    <link href="../../assets/css/base-admin-3-responsive.css" rel="stylesheet">

    <link href="../../assets/css/pages/dashboard.css" rel="stylesheet">

    <link href="../../assets/css/custom.css" rel="stylesheet">


</head>

<body>

<nav class="navbar navbar-inverse" role="navigation">

    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="icon-cog"></i>
            </button>
            <a class="navbar-brand" href="../../register.php">OpenHRMS</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">

                    <a href="javscript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-user"></i>  { <?php echo $user_data['role']; ?> } ,
                        <?php echo $user_data['username']; ?>
                        <b class="caret"></b>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="../User/settings.php">My Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="../../Sign/Logout.php">Logout</a></li>
                    </ul>

                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div> <!-- /.container -->
</nav>
<div class="subnavbar">

    <div class="subnavbar-inner">

        <div class="container">

            <a href="javascript:;" class="subnav-toggle" data-toggle="collapse" data-target=".subnav-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="icon-reorder"></i>

            </a>

            <div class="collapse subnav-collapse">
                <ul class="mainnav">

                    <li class="active">
                        <a href="../User/index.php">
                            <i class="icon-home"></i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="../User/my_profile.php" style="color: #FFFFFF;">
                            <i class="icon-group"></i>
                            <span>My Profile</span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="../Jobs/dashboard.php" style="color: #FFFFFF;">
                            <i class="icon-briefcase"></i>
                            <span>Find a Job</span>
                        </a>
                    </li>

                </ul>
            </div> <!-- /.subnav-collapse -->

        </div> <!-- /container -->

    </div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->
