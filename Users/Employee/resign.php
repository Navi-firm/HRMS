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

                        <li>
                            <a href="../Employee/events.php">
                                <i class="icon-calendar"></i>
                                <span>Events</span>
                            </a>
                        </li>

                        <li class="active">
                            <a href="profile.php">
                                <i class="icon-user"></i>
                                <span>Profile</span>
                            </a>
                        </li>

                        <li>
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
        $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, hire_date, first_name, pro_pic, middle_name, last_name, phone, linkedin, postal_code, county, country, address, postal_code, email, department, work_status, dob, marital_status, about, passport, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, position1, position2, company1, company2, location1, location2, duration1, duration2, referee1, referee2, contact1, contact2, duties1, duties2, DATE_FORMAT(created, '%d %M %Y') AS joined, institution_1, loc_1, award_1, title_1, date_1 FROM staff WHERE staff_id =". $user_data['user_id']);
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
                    <a class="list-group-item" href="events.php">
                        <span class="icon-list-alt"></span> Events
                    </a>
                    <a class="list-group-item" href="../Jobs/dashboard.php">
                        <span class="icon-briefcase"></span> Find Work
                    </a>
                    <a class="list-group-item active" href="profile.php">
                        <span class="icon-user"></span> My Profile <i class="icon-chevron-right pull-right"></i>
                    </a>
                </div>

            </div>

            <div class="col-md-9">

                <div class="widget stacked">

                    <div class="widget-header">
                        <h3><i class="icon-user"></i> Resignation Request</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <div class="tab-pane active" id="profile">
                            <h4>Resignation Request</h4>
                            <hr>
                            <br />
                            <?php include "../../processes/resign_request.php";
                            //Check if already applied before
                            $my_id = $user_data['user_id'];
                            $request = mysql_query("SELECT resign_id, ref_no, applicant, department, email, phone, title, DATE_FORMAT(exit_date, '%d %M %Y') AS exit_date, DATE_FORMAT(last_date, '%d %M %Y') AS last_date, DATE_FORMAT(hire_date, '%d %M %Y') AS hire_date, reason, DATE_FORMAT(created, '%d %M %Y') AS created, status FROM resign_request WHERE ref_no = '$my_id'") or die(mysql_error()) ;
                            $applicant = mysql_fetch_array($request);

                            $applied = mysql_query("SELECT COUNT(resign_id) FROM resign_request WHERE ref_no = '$my_id'");
                            $count = mysql_num_rows($applied);

                            if($count = 0){
                                echo "<div class='alert alert-info fade in'>
                                      <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                      <strong>Alert !</strong> You already applied for resignation</div>";
                                ?>
                                <p><?php echo $applicant['created']; ?></p>
                                <br>
                                <p><?php echo $applicant['applicant']; ?>, <span class="pull-right">Hire Date : <?php echo $applicant['hire_date']; ?></span></p>
                                <p><?php echo $applicant['department']; ?>,<span class="pull-right">Exit Date : <?php echo $applicant['exit_date']; ?></span></p>
                                <p><?php echo $applicant['email']; ?>,</p>
                                <p><?php echo $applicant['phone']; ?>.</p>
                                <br><br>
                                <p><?php echo $applicant['title']; ?></p>
                                <br>
                                <p>Dear Sir/Madam/Dr. , </p>
                                <p><?php echo $applicant['reason']; ?></p>
                                <?php
                            } else{
                                ?>
                                <form id="add_job" class="form-horizontal col-md-12" action="" method="post">
                                    <fieldset>

                                        <div class="form-group">
                                            <label for="job_vacancy" class="col-md-3 form-inline"> Full Name* </label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" id="job_name" value="<?php echo $user['fullname']; ?>" name="full_name" placeholder="" disabled>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label for="job_vacancy" class="col-md-3"> Ref No. * </label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="" value="<?php echo $user_data['user_id']; ?>" name="ref_no" disabled>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label for="job_vacancy" class="col-md-3"> Department * </label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="department" value="<?php echo $user['department']; ?>" name="department" disabled>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label for="job_vacancy" class="col-md-3"> Email * </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="department" value="<?php echo $user['email']; ?>" name="email" disabled>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label for="job_vacancy" class="col-md-3"> Phone * </label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id="department" value="<?php echo $user['phone']; ?>" name="phone" disabled>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label for="job_vacancy" class="col-md-3"> Title * </label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" id="department" value="" name="title">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label for="job_vacancy" class="col-md-3"> Exit Date * </label>
                                            <div class="col-md-5">
                                                <input id="datepicker" class="form-control" value="" name="exit_date" placeholder="01/12/2016"/>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label for="job_vacancy" class="col-md-3"> Last Work Day * </label>
                                            <div class="col-md-5">
                                                <input id="datepicker1" class="form-control" value="" name="last_date" placeholder="01/12/2016"/>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label for="job_vacancy" class="col-md-3"> First Work Day * </label>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control col-md-3" id="job_name" value="<?php echo $user['hire_date']; ?>" name="hire_date" placeholder="" disabled>
                                                <p class="help-block">First Day of employment </p>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label class="col-md-3" for="lastname"> Reason * </label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" name="reason" id="reason" rows="15" cols="80" placeholder="State your reason for leaving"></textarea>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <hr />

                                        <br />

                                        <div class="form-group">

                                            <div class=" col-md-12">
                                                <button type="submit" name="post" onclick="javascript:send_post()" class="btn btn-primary">Save</button>
                                                <a href="profile.php" class="btn btn-default"><i class="icon-trash"></i> Cancel</a>
                                            </div>
                                        </div> <!-- /form-actions -->
                                    </fieldset>
                                </form>
                                <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

<?php include '../includes/footer.php';