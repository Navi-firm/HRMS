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
                            <a href="../Employee/settings.php">
                                <i class="icon-cogs"></i>
                                <span>Settings</span>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="../Jobs/dashboard.php">
                                <i class="icon-briefcase"></i>
                                <span>Find a Job</span>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="../Employee/info.php">
                                <i class="icon-info"></i>
                                <span>Company Into</span>
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
            error_reporting(0);
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
                        <a class="list-group-item" href="../Jobs/dashboard.php">
                            <span class="icon-briefcase"></span> Find Work
                        </a>
                        <a class="list-group-item" href="profile.php">
                            <span class="icon-user"></span> My Profile
                        </a>
                    </div>

                </div>

                <div class="col-md-9">
                    <div class="widget stacked">

                        <div class="widget-header">
                            <h3>Leave Manager</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <div class="tabbable">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#balance" data-toggle="tab">All Leave Request</a>
                                    </li>
                                    <li>
                                        <a href="#profile" data-toggle="tab">Apply Leave</a>
                                    </li>
                                </ul>
                                <br>
                                <div class="tab-content">
                                    <?php
                                    include '../../processes/apply_leave.php';
                                    ?>
                                    <div class="tab-pane" id="profile">
                                        <hr />
                                        <div class="table-container">
                                            <div class="col-md-7">
                                                <form id="edit-profile2" class="form-horizontal col-md-12" method="post" action="">
                                                    <fieldset>
                                                        <h4>Apply Leave</h4>
                                                        <hr />
                                                        <div class="form-group">
                                                            <label for="username" class="col-md-12"><i class="icon-user"></i> Your Name </label>
                                                            <div class="col-md-12">
                                                                <input type="text" class="form-control" id="username" value="<?php echo $user['fullname'];?>" name="applicant" disabled>
                                                            </div> <!-- /controls -->
                                                        </div> <!-- /control-group -->
                                                        <div class="form-group">
                                                            <label for="username" class="col-md-3">Leave Type</label>
                                                            <div class="col-md-7">
                                                                <select class="form-control" id="certificate" name="leave_type">
                                                                    <option>-------------</option>
                                                                    <option value="Sick Leave">Sick Leave</option>
                                                                    <option value="Maternity Leave">Maternity Leave</option>
                                                                    <option value="Casual Leave">Casual Leave</option>
                                                                    <option value="Paternity Leave">Paternity Leave</option>
                                                                </select>
                                                            </div> <!-- /controls -->
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="username" class="col-md-3"><i class="icon-calendar"></i> From Date </label>
                                                            <div class="col-md-6 input-group">
                                                                <input required type="text" id="datepicker" class="form-control" name="start_date"><span class="input-group-addon"><i data-time-icon="icon-time" class="icon-calendar"></i></span>
                                                            </div> <!-- /controls -->
                                                        </div> <!-- /control-group -->
                                                        <div class="form-group">
                                                            <label for="username" class="col-md-3"><i class="icon-calendar"></i> To Date </label>
                                                            <div id="datetimepicker4" class="col-md-6 input-group">
                                                                <input required type="text" id="datepicker1" class="form-control" name="end_date"><span class="input-group-addon"><i data-time-icon="icon-time" class="icon-calendar"></i></span>
                                                            </div> <!-- /controls -->
                                                        </div> <!-- /control-group -->
                                                        <div class="form-group">
                                                            <label for="username" class="col-md-3">Department</label>
                                                            <div class="col-md-7">
                                                                <input type="text" class="form-control" id="username" value="<?php echo $user['department'];?>" name="department" disabled>
                                                            </div> <!-- /controls -->
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="username" class="col-md-12"><i class="icon-briefcase"></i> Reason </label>
                                                            <div class="col-md-12">
                                                                <textarea class="form-control" name="reason" id="reason" rows="15" cols="80" placeholder="Give description"></textarea>
                                                            </div> <!-- /controls -->
                                                        </div> <!-- /control-group -->
                                                        <hr />
                                                        <div class="form-group">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <div class="col-md-6">
                                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                                    </div>
                                                                </div> <!-- /.form-group -->

                                                            </div>
                                                        </div> <!-- /.form-group -->
                                                    </fieldset>
                                                </form>
                                            </div>
                                            <div class="col-md-5">
                                                <h4>All Leave Details</h4>
                                                <p class="text-center">
                                                <table class="table table-user-information">
                                                    <tbody>
                                                    <tr>
                                                        <td>Sick Leave:</td>
                                                        <td>0/20</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Casual Leave:</td>
                                                        <td>0/20</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Paternity Leave:</td>
                                                        <td>0/30</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Maternity Leave:</td>
                                                        <td>0/100</td>
                                                    </tr>
                                                    <tr>
                                                        <td><b>Total :</b></td>
                                                        <td>0/170</td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane  active" id="balance">
                                        <div class="table-container">
                                            <table class="table table-striped">
                                                <thead>
                                                &#32;
                                                <tr>&#32;
                                                    <th class="title">TYPE</th>
                                                    &#32;
                                                    <th class="bid_end_date">DATES</th>
                                                    &#32;
                                                    <th class="budget">DAYS</th>
                                                    &#32;
                                                    <th class="budget">STATUS</th>
                                                    &#32;
                                                    <th class="bids">ACTION</th>
                                                    &#32;
                                                </tr>
                                                &#32;
                                                </thead>
                                                &#32;
                                                <?php
                                                //Load table from
                                                if(isset($_GET['page'])){ $page = $_GET['page']; } else {$page =1;}
                                                $start_from = ($page-1) * 4;
                                                $applicant = $user['fullname'];
                                                $leave_requests = mysql_query("SELECT leave_id, leave_type, applicant, DATE_FORMAT(DATE(start_date), '%d/%m/%y') AS start, DATE_FORMAT(DATE(end_date), '%d/%m/%y') AS end_d, DATEDIFF(end_date, start_date) AS duration, status, department, description FROM leave_request WHERE applicant = '". $user_data['user_id'] ."' ORDER BY applied_date DESC LIMIT " . $start_from .", 10") or die(mysql_error());

                                                if(mysql_num_rows($leave_requests) != 0){

                                                    While($row = mysql_fetch_assoc($leave_requests)){ ?>
                                                        <tbody>
                                                        &#32;
                                                        <tr class="odd">
                                                            &#32;
                                                            <td class="title">
                                                                <p class="text-info">
                                                                    <?php echo $row['leave_type']; ?>
                                                                </p>
                                                            </td>
                                                            &#32;
                                                            <td class="bid_end_date">
                                                                <?php echo $row['start']; ?> - <?php echo $row['end_d']; ?>
                                                            </td>
                                                            &#32;
                                                            <td class="budget">
                                                                <p class="text-success"><?php echo $row['duration']; ?> Days</p>
                                                            </td>
                                                            &#32;
                                                            <td class="budget">
                                                                <p><span class='label label-warning job-status text-right'><?php echo $row['status'];?></span></p>
                                                            </td>
                                                            &#32;
                                                            <td class="bids">
                                                                <a href="leave_requests.php?leave_id=<?php echo $row['leave_id']; ?>" class="btn btn-info btn-sm"><i class="icon-eye-open"></i> View</a>
                                                            </td>
                                                            &#32;
                                                        </tr>
                                                        &#32;
                                                        </tbody>
                                                        &#32;
                                                        <tfoot>

                                                        </tfoot>
                                                    <?php } ?>

                                                <?php }else {?>

                                                    <div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                                                        <strong>Oh Snap! </strong>No Records could be found</div>
                                                <?php }

                                                ?>
                                            </table>
                                            <ul class="pagination pull-right">
                                                <li class="active"><a href="javascript:;">&laquo;</a></li>
                                                <?php
                                                $applicant = $user['fullname'];
                                                $count = mysql_query("SELECT COUNT(leave_id) FROM leave_request WHERE applicant = '". $user_data['user_id'] ."' ") or die(mysql_error());
                                                $row = mysql_fetch_row($count);
                                                $total_records = $row['0'];
                                                $total_pages = ceil($total_records / 10);

                                                for($i = 1; $i<=$total_pages; $i++){
                                                    echo "<li><a href='leave.php?page=" . $i . "'><b>" . $i . "</b></a></li>";
                                                };
                                                ?>
                                                <li><a href="javascript:;">&raquo;</a></li>
                                            </ul>
                                            <ul class="pagination">
                                                <li class="cardinality">
                                                </li>
                                            </ul>
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