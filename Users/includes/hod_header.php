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

    <link href="../../assets/css/bootstrap-responsive.min.css" rel="stylesheet">

    <link href="../../assets/css/datepicker.css" rel="stylesheet">
    <link href="../../assets/css/calendrical.css" rel="stylesheet">

    <link href="../../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

    <link href="../../assets/css/font-awesome.min.css" rel="stylesheet">

    <link href="../../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

    <link href="../../assets/css/ui-lightness/jquery-ui-1.10.0.custom.min.css" rel="stylesheet">

    <link href="../../assets/css/base-admin-3.css" rel="stylesheet">
    <link href="../../assets/css/base-admin-3-responsive.css" rel="stylesheet">

    <link href="../../assets/css/pages/dashboard.css" rel="stylesheet">
    <link href="../../assets/css/custom.css" rel="stylesheet">

    <script>
        function currentDate(){
            var  strcount
            var current = new Date()

            var current_date = current.getDay() + "/" + current.getMonth() + "/" + current.getYear();
            current_date = current_date + " " + current.getHours() + ":" + current.getMinutes();

            document.getElementById('date_time').placeholder = current_date;
        }
    </script>

    <script type="text/javascript">

        /***********************************************
         * Drop Down Date select script- by JavaScriptKit.com
         * This notice MUST stay intact for use
         * Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and more
         ***********************************************/

        var monthtext=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'];

        function populatedropdown(dayfield, monthfield, yearfield){
            var today=new Date()
            var dayfield=document.getElementById(dayfield)
            var monthfield=document.getElementById(monthfield)
            var yearfield=document.getElementById(yearfield)
            for (var i=0; i<32; i++)
                dayfield.options[i]=new Option(i, i+1)
            dayfield.options[today.getDate()]=new Option(today.getDate(), today.getDate(), true, true) //select today's day
            for (var m=0; m<12; m++)
                monthfield.options[m]=new Option(monthtext[m], monthtext[m])
            monthfield.options[today.getMonth()]=new Option(monthtext[today.getMonth()], monthtext[today.getMonth()], true, true) //select today's month
            var thisyear=today.getFullYear()
            for (var y=0; y<46; y++){
                yearfield.options[y]=new Option(thisyear, thisyear)
                thisyear+=1
            }
            yearfield.options[0]=new Option(today.getFullYear(), today.getFullYear(), true, true) //select today's year
        }

    </script>

</head>

<body onload="currentDate()">

<nav class="navbar navbar-inverse" role="navigation">

    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <i class="icon-cog"></i>
            </button>
            <a class="navbar-brand" href="../HOD/index.php">OpenHRMS</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">

                    <a href="../Jobs/dashboard.php" >
                        <i class="icon-briefcase"></i>
                        Browse Jobs
                    </a>

                </li>

                <li class="dropdown">

                    <a href="javscript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-user"></i>  { <?php echo $user_data['role']; ?> } ,
                        <?php echo $user_data['username']; ?>
                        <b class="caret"></b>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="../HOD/my_profile.php"><i class="icon-user"></i> My Profile</a></li>
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
                        <a href="../HOD/index.php">
                            <i class="icon-home"></i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="../HOD/employee.php">
                            <i class="icon-group"></i>
                            <span>Employee</span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="../HOD/employ.php">
                            <i class="icon-copy"></i>
                            <span>Employ</span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="../HOD/jobs.php">
                            <i class="icon-briefcase"></i>
                            <span> Job Post </span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="../HOD/leave.php">
                            <i class="icon-signout"></i>
                            <span> Leave </span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="../HOD/events.php">
                            <i class="icon-file-text"></i>
                            <span>Events</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="../HOD/tasks.php">
                            <i class="icon-tasks"></i>
                            <span>Tasks</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="../HOD/profile.php">
                            <i class="icon-user"></i>
                            <span>Profile</span>
                        </a>
                    </li>

                </ul>
            </div> <!-- /.subnav-collapse -->

        </div> <!-- /container -->

    </div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->
