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

        <script type="text/javascript">
            function delete_id(id)
            {
                if(confirm('Sure To Remove This Record ?'))
                {
                    window.location.href='dashboard.php?delete_id='+id;
                }
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
            <a class="navbar-brand" href="../Admin/index.php">OpenHRMS</a>
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
                        <li><a href="../Admin/profile.php"><i class="icon-user"></i> My Profile</a></li>
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
                        <a href="../Admin/index.php">
                            <i class="icon-home"></i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="../Admin/users.php">
                            <i class="icon-user"></i>
                            <span>Users</span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="../Departments/dashboard.php">
                            <i class="icon-list-ul"></i>
                            <span>Departments</span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="../Admin/leave.php">
                            <i class="icon-arrow-left"></i>
                            <span> Leave</span>
                        </a>
                    </li>

                    <li>
                        <a href="../Admin/employee.php">
                            <i class="icon-group"></i>
                            <span> Employee </span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="../Admin/events.php">
                            <i class="icon-list-alt"></i>
                            <span>Events</span>
                        </a>
                    </li>
                    <li>
                        <a href="../Admin/tasks.php">
                            <i class="icon-tasks"></i>
                            <span>Tasks</span>
                        </a>
                    </li>
                    <li>
                        <a href="../Admin/jobs.php">
                            <i class="icon-briefcase"></i>
                            <span>Jobs</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="../Admin/settings.php">
                            <i class="icon-cogs"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="../Admin/profile.php">
                            <i class="icon-info"></i>
                            <span>Profile</span>
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
        $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, hire_date, phone, postal_code, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $user_data['user_id']);
        $user = mysql_fetch_array($applicant);
        ?>

        <div class="row">

            <div class="col-md-3">
                <div class="list-group">
                    <a class="list-group-item" href="index.php">
                        <span class="icon-home"></span> Dashboard
                    </a>
                    <a class="list-group-item" href="users.php">
                        <span class="icon-user"></span> Users
                    </a>
                    <a class="list-group-item" href="../Departments/dashboard.php">
                        <span class="icon-list-ul"></span> Departments
                    </a>
                    <a class="list-group-item" href="leave.php">
                        <span class="icon-arrow-left"></span> Leave
                    </a>
                    <a class="list-group-item" href="employee.php">
                        <span class="icon-group"></span> Employee
                    </a>
                    <a class="list-group-item" href="jobs.php">
                        <span class="icon-briefcase"></span> Jobs
                    </a>
                    <a class="list-group-item" href="events.php">
                        <span class="icon-list-alt"></span> Events
                    </a>
                    <a class="list-group-item" href="tasks.php">
                        <span class="icon-tasks"></span> Tasks
                    </a>
                    <a class="list-group-item active" href="profile.php">
                        <span class="icon-user"></span> Profile <i class="icon-chevron-right pull-right"></i>
                    </a>
                    <a class="list-group-item" href="settings.php">
                        <span class="icon-cogs"></span> Settings
                    </a>
                </div>
            </div>
            <div class="col-md-9">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5><strong><i class="icon-arrow-left"></i> Exit Request </strong></h5>
                    </div>
                    <div class="panel-body">
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

                                if($count = 1){
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
                                }
                                else{
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
                                            <p class="help-block">First Day of employement eg. 12/11/2015</p>
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
                                            <button type="submit" name="post" onclick="javascript:send_post()" class="btn btn-primary">RESIGN</button>
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
</div><!-- /main -->


<?php
include '../includes/footer.php';