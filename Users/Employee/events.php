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

        <link href="../../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

        <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

        <link href="../../assets/css/font-awesome.min.css" rel="stylesheet">

        <link href="../../assets/js/datetimepicker_css.js">

        <link href="../../assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <script type="text/javascript" src="../../assets/js/bootstrap-datetimepicker.min.js"></script>

        <link href="../../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

        <link href="../../assets/css/ui-lightness/jquery-ui-1.10.0.custom.min.css" rel="stylesheet">

        <link href="../../assets/css/base-admin-3.css" rel="stylesheet">
        <link href="../../assets/css/base-admin-3-responsive.css" rel="stylesheet">

        <link href="../../assets/css/pages/dashboard.css" rel="stylesheet">
        <link href="../../assets/css/custom.css" rel="stylesheet">

        <script>
            $(document).ready(function(){
                $("#mytable #checkall").click(function () {
                    if ($("#mytable #checkall").is(':checked')) {
                        $("#mytable input[type=checkbox]").each(function () {
                            $(this).prop("checked", true);
                        });

                    } else {
                        $("#mytable input[type=checkbox]").each(function () {
                            $(this).prop("checked", false);
                        });
                    }
                });

                $("[data-toggle=tooltip]").tooltip();
            });
        </script>

        <script type="text/javascript">
            function call()
            {
                var kcyear = document.getElementsByName("year1")[0],
                    kcmonth = document.getElementsByName("month1")[0],
                    kcday = document.getElementsByName("day1")[0];
                var d = new Date();
                var n = d.getFullYear();
                for (var i = n;
                     i >= 2015;
                     i--)
                {
                    var opt = new Option();
                    opt.value = opt.text = i;
                    kcyear.add(opt);
                }
                kcyear.addEventListener("change", validate_date);
                kcmonth.addEventListener("change", validate_date);
                function validate_date()
                {
                    var y = +kcyear.value,
                        m = kcmonth.value,
                        d = kcday.value;
                    if (m === "2") var mlength = 28 + (!(y & 3) && ((y % 100) !== 0 || !(y & 15)));
                    else
                        var mlength = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][m - 1];
                    kcday.length = 0;
                    for
                    (var i = 1; i <= mlength; i++)
                    {
                        var opt = new Option();
                        opt.value = opt.text = i;
                        if (i == d) opt.selected = true;
                        kcday.add(opt);
                    }
                }
                validate_date();
            }
        </script>

        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#datetimepicker4').datetimepicker({
                    pickTime: false
                });
            });
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
                <a class="navbar-brand" href="../Employee/index.php">OpenHRMS</a>
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
                            <li><a href="../Employee/settings.php"><i class="icon-user"></i> My Profile</a></li>
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

                        <li>
                            <a href="../Employee/index.php">
                                <i class="icon-home"></i>
                                <span >Home</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="../Employee/leave.php">
                                <i class="icon-copy"></i>
                                <span>Leave</span>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="../Employee/tasks.php">
                                <i class="icon-tasks"></i>
                                <span>Tasks</span>
                            </a>
                        </li>

                        <li class="active">
                            <a href="../Employee/events.php">
                                <i class="icon-calendar"></i>
                                <span>Events</span>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="profile.php">
                                <i class="icon-user"></i>
                                <span>Profile</span>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="../Jobs/dashboard.php">
                                <i class="icon-briefcase"></i>
                                <span>Find a Job</span>
                            </a>
                        </li>

                    </ul>
                </div> <!-- /.subnav-collapse -->

            </div> <!-- /container -->

        </div> <!-- /subnavbar-inner -->

    </div> <!-- /subnavbar -->

<div class="main">

    <div class="container">
        <?php
        $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, phone, postal_code, department, CONCAT(county, ', ', country) AS location, gender, email, postal_code, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $user_data['user_id']);
        $user = mysql_fetch_array($applicant);
        ?>
        <div class="row">

            <div class="col-md-3">

                <div class="list-group">
                    <a class="list-group-item" href="index.php">
                        <span class="icon-home"></span> Dashboard
                    </a>
                    <a class="list-group-item" href="leave.php">
                        <span class="icon-arrow-left"></span>My Leave
                    </a>
                    <a class="list-group-item" href="tasks.php">
                        <span class="icon-tasks"></span>My Tasks
                    </a>
                    <a class="list-group-item active" href="events.php">
                        <span class="icon-list-alt"></span> Events <i class="icon-chevron-right pull-right"></i>
                    </a>
                    <a class="list-group-item" href="../Jobs/dashboard.php">
                        <span class="icon-briefcase"></span> Find Work
                    </a>
                    <a class="list-group-item" href="profile.php">
                        <span class="icon-user"></span> My Profile
                    </a>
                </div>

            </div>

            <div class="col-md-9">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5><strong><i class="icon-calendar"></i> Calendar Events </strong></h5>
                    </div>
                    <div class="panel-body">
                        <hr />
                        <div class="col-md-12">
                            <?php
                            //Load table from database
                            if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
                            $start_from = ($page-1) * 20;

                            $application = mysql_query("SELECT event_id, event_name, description, venue, DATE_FORMAT(start_date, '%d/%m/%Y') AS start_time, DATE_FORMAT(start_date, '%d') AS event_day, DATE_FORMAT(start_date, '%M') AS event_month, DATE_FORMAT(start_date, '%Y') AS event_year, DATE_FORMAT(end_date, '%d/%m/%Y') AS due_date, venue, status, DATE_FORMAT(created, '%d/8%m/%Y') AS created FROM events ORDER BY created DESC LIMIT " . $start_from . ", 20") or die(mysql_error());

                            if(mysql_num_rows($application) != 0){

                                While($row = mysql_fetch_assoc($application)){ ?>
                                    <div class="">
                                        <h2>
                                            <p class="calendar">
                                                <?php echo $row['event_day']; ?> <em><?php echo $row['event_month']; ?></em>

                                            </p>
                                            <?php echo $row['event_name']; ?> <small>Events for <?php echo $row['event_month']; ?> <?php echo $row['event_year']; ?></small>

                                        </h2>
                                        <div class="">
                                            <h4>
                                                <?php echo $row['venue']; ?>
                                            </h4>
                                            <h5>
                                                <h5><a class="" href="view_event.php?event_id=<?php echo $row['event_id']; ?>" role="button" >View details >></a></h5>
                                            </h5>
                                        </div><!--/. col-md -->
                                    </div><!--/row-->
                                    <hr />
                                <?php } ?>

                            <?php }else {?>

                                <div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                                    <strong>Oh Snap! </strong>No Events</div>

                            <?php } ?>
                            <ul class="pagination text-center">
                                <li class="active"><a href="javascript:;">&laquo;</a></li>
                                <?php

                                $count = mysql_query("SELECT COUNT(event_id) FROM events") or die(mysql_error());
                                $row = mysql_fetch_row($count);
                                $total_records = $row['0'];
                                $total_pages = ceil($total_records / 20);

                                for($i = 1; $i<=$total_pages; $i++){
                                    echo "<li><a href='events.php?page=" . $i . "'><b>" . $i . "</b></a></li>";
                                };
                                ?>
                                <li><a href="javascript:;">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

<?php include '../includes/footer.php';