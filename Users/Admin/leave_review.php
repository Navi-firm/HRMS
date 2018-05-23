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

                        <li>
                            <a href="../Departments/dashboard.php">
                                <i class="icon-list-ul"></i>
                                <span>Departments</span>
                            </a>
                        </li>

                        <li class="active">
                            <a href="../Admin/leave.php">
                                <i class="icon-arrow-left"></i>
                                <span> Leave</span>
                            </a>
                        </li>

                        <li class="dropdown">
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
                        <li class="dropdown">
                            <a href="../Admin/tasks.php">
                                <i class="icon-tasks"></i>
                                <span>Tasks</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="../Admin/jobs.php">
                                <i class="icon-briefcase"></i>
                                <span>Jobs</span>
                            </a>
                        </li>
                        <li class="dropdown">
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

        <div class="row">

            <?php
            $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, phone, postal_code, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $user_data['user_id']);
            $user = mysql_fetch_array($applicant);
            ?>
            <div class="col-sm-3"><!--left col-->
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
                    <a class="list-group-item active" href="leave.php">
                        <span class="icon-arrow-left"></span> Leave <i class="icon-chevron-right pull-right"></i>
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
                    <a class="list-group-item" href="profile.php">
                        <span class="icon-user"></span> Profile
                    </a>
                    <a class="list-group-item" href="settings.php">
                        <span class="icon-cogs"></span> Settings
                    </a>
                </div>
            </div>

            <div class="col-md-9">
                <div class="widget stacked">
                    <?php
                    $applicant = mysql_query("SELECT leave_id, leave_type, applicant, status, department, description, duration, DATE_FORMAT(start_date, '%d/%m/%Y') AS start_date, DATE_FORMAT(end_date, '%d/%m/%Y') AS end_date, DATE_FORMAT(applied_date, '%d %M %Y') AS applied_date FROM leave_request WHERE leave_id =". $_GET['leave_id']);
                    $user = mysql_fetch_array($applicant);
                    ?>
                    <div class="widget-header">
                        <i class="icon-arrow-left"></i>
                        <h3>Leave Request</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <div class="col-md-7">
                            <?php include "../../processes/review_leave.php"; ?>
                            <form id="edit-profile" class="form-horizontal col-md-8" method="post" action="">
                                <fieldset>

                                    <div class="form-group">
                                        <label for="firstname" class="col-md-"><i class=""></i> Applicant </label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" id="firstname" value="<?php echo $user['applicant']; ?>" disabled>
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->

                                    <div class="form-group">
                                        <label class="col-md-" for="lastname"><i class=""></i> Leave Type </label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" id="lastname" value="<?php echo $user['leave_type']; ?>" disabled>
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->

                                    <div class="form-group">
                                        <label class="col-md-" for="lastname"><i class=""></i> Department</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" id="lastname" value="<?php echo $user['department']; ?>" disabled>
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->

                                    <hr>

                                    <div class="form-group">
                                        <label class="col-md-" for="lastname"><i class=""></i> Start Date</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" id="lastname" value="<?php echo $user['start_date']; ?>" disabled>
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->

                                    <div class="form-group">
                                        <label class="col-md-" for="email"><i class=""></i> End Date </label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" id="id" value="<?php echo $user['end_date']; ?>" name="id_number" disabled>
                                        </div> <!-- /controls -->
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-" for="gender"><i class=""></i> Duration </label>
                                        <div class="col-md-12">
                                            <p class="help-block"><?php echo $user['duration']; ?> Days</p>
                                        </div> <!-- /controls -->
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-" for="gender"><i class=""></i> Reason </label>
                                        <div class="col-md-12">
                                            <p class="help-block"><?php echo $user['description']; ?></p>
                                        </div> <!-- /controls -->
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-" for="gender"><i class="t"></i> Leave Status </label>
                                        <div class="col-md-12">

                                            <p class="help-block"><span class="label label-success job-status text-right"><?php echo $user['status']; ?></span></p>

                                            <select class="form-control" id="status" name="status">
                                                <option >Select an action</option>
                                                <option value="Approved">Approve</option>
                                                <option value="Rejected">Reject</option>
                                            </select>
                                        </div> <!-- /controls -->
                                    </div>

                                    <hr />

                                    <br />

                                    <div class="form-group">

                                        <div class="col-md-12">
                                            <?php if($user['status'] == 'Approved'){?>
                                                <p class="help-block"><span class="label label-success job-status text-right"><?php echo $user['status']; ?></span></p>
                                                <a href="leave.php" class="btn btn-default"><i class="icon-trash"></i> Cancel</a>
                                            <?php } else {?>
                                                <button class="btn btn-primary" name="btn-review"><i class="icon-plus"></i> Review Request</button>
                                                <a href="leave.php" class="btn btn-default"><i class="icon-trash"></i> Cancel</a>
                                            <?php }?>
                                        </div>
                                    </div> <!-- /form-actions -->
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
            </div>
        </div>
    </div>

<?php
include '../includes/footer.php';
