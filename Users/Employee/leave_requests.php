<?php include '../../Includes/Core/init.php'; ?>
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

                        <li class="active">
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

                        <li class="dropdown">
                            <a href="../Employee/profile.php">
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
                    <a class="list-group-item active" href="leave.php">
                        <span class="icon-arrow-left"></span>My Leave <i class="icon-chevron-right pull-right"></i>
                    </a>
                    <a class="list-group-item" href="tasks.php">
                        <span class="icon-tasks"></span>My Tasks
                    </a>
                    <a class="list-group-item" href="events.php">
                        <span class="icon-list-alt"></span> Events
                    </a>
                    <a class="list-group-item" href="jobs.php">
                        <span class="icon-briefcase"></span> Find Work
                    </a>
                    <a class="list-group-item" href="profile.php">
                        <span class="icon-user"></span> My Profile
                    </a>
                </div>

            </div>

            <div class="col-md-9">

                <div class="widget stacked">
                    <?php
                      //Load table from database
                      $leave_requests = mysql_query("SELECT leave_id, leave_type, applicant, DATE_FORMAT(DATE(start_date), '%d/%m/%y') AS start, DATE_FORMAT(DATE(end_date), '%d/%m/%y') AS end_d, DATEDIFF(end_date, start_date) AS duration, status, department, description FROM leave_request WHERE leave_id = ". $_GET['leave_id']) or die(mysql_error());
                      $leave= mysql_fetch_assoc($leave_requests);
                    ?>

                    <div class="widget-header">
                        <h3>Review Leave</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <div class="tabbable">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#profile" data-toggle="tab"># <?php echo $leave['leave_type']; ?> Request</a>
                                </li>
                            </ul>

                            <br>

                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">
                                    <hr />
                                    <div class="table-container">
                                        <?php
                                        include '../../processes/apply_leave.php';
                                        ?>
                                        <form id="edit-profile2" class="form-horizontal col-md-12" method="post" action="">
                                            <fieldset>
                                                <h4>Review Leave</h4>
                                                <hr />
                                                <div class="form-group">
                                                    <label for="username" class="col-md-3"><i class="icon-user"></i> Your Name </label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" id="username" value="<?php echo $user['fullname'];?>" name="applicant" disabled>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                                <div class="form-group">
                                                    <label for="username" class="col-md-3">Leave Type</label>
                                                    <div class="col-md-4">
                                                        <select class="form-control" id="certificate" name="leave_type">
                                                            <option value="<?php echo $leave['leave_type']; ?>"><?php echo $leave['leave_type']; ?></option>
                                                            <option value="Annual">Annual</option>
                                                            <option value="Maternity">Maternity</option>
                                                            <option value="Sick">Sick</option>
                                                            <option value="Study">Study</option>
                                                        </select>
                                                    </div> <!-- /controls -->
                                                </div>
                                                <div class="form-group">
                                                    <label for="username" class="col-md-3"><i class="icon-calendar"></i> From Date </label>
                                                    <div id="datetimepicker4" class="col-md-4 input-group">
                                                        <input type="text" id="datepicker" class="form-control" value="<?php echo $leave['start']; ?>" name="start_date"><span class="input-group-addon"><i data-time-icon="icon-time" class="icon-calendar"></i></span>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                                <div class="form-group">
                                                    <label for="username" class="col-md-3"><i class="icon-calendar"></i> To Date </label>
                                                    <div id="datetimepicker4" class="col-md-4 input-group">
                                                        <input type="text" id="datepicker1" class="form-control" value="<?php echo $leave['end_d']; ?>" name="end_date"><span class="input-group-addon"><i data-time-icon="icon-time" class="icon-calendar"></i></span>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                                <div class="form-group">
                                                    <label for="username" class="col-md-3"><i class="icon-time"></i> Number of Days </label>
                                                    <div class="col-md-2">
                                                        <input type="number" class="form-control" id="username" value="<?php echo $leave['duration']; ?>" name="duration" disabled>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                                <div class="form-group">
                                                    <label for="username" class="col-md-3">Department</label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" id="username" value="<?php echo $user['department'];?>" name="applicant" disabled>
                                                    </div> <!-- /controls -->
                                                </div>
                                                <div class="form-group">
                                                    <label for="username" class="col-md-3"><i class="icon-briefcase"></i> Reason </label>
                                                    <div class="col-md-9">
                                                        <textarea class="form-control" name="summary" id="reason" rows="15" cols="80" placeholder="Give description"><?php echo $leave['description']; ?></textarea>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                                <hr />

                                                <p class=" text-success">STATUS (<?php echo $leave['status']; ?>)</p>

                                                <div class="form-group">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="col-md-6">
                                                                <?php
                                                                if(($leave['status'] = 'Approved')){?>
                                                                <p> Cannot Edit</p>
                                                                <?php }else{?>
                                                                    <button type="submit" class="btn btn-primary"><i class="icon-file-alt"></i> Review Request </button>
                                                                <?php }?>
                                                            </div>
                                                        </div> <!-- /.form-group -->

                                                    </div>
                                                </div> <!-- /.form-group -->
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


<?php include '../includes/footer.php';