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

                        <li class="active">
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

        <?php
        $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, phone, postal_code, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, DATE_FORMAT(created, '%d %M %Y') AS joined, employement FROM staff WHERE staff_id =". $user_data['user_id']);
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
                    <a class="list-group-item active" href="employee.php">
                        <span class="icon-group"></span> Employee <i class="icon-chevron-right pull-right"></i>
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
                <?php

                $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, employement, username, pro_pic, phone, status, role, postal_code, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, DATE_FORMAT(created, '%d %M %Y') AS joined, DATE_FORMAT(hire_date, '%d %M %Y') AS hired FROM staff WHERE staff_id =". $_GET['staff_id']);
                $user = mysql_fetch_array($applicant);

                $user_id = $user['staff_id'];

                if(isset($_POST['new_admin']))
                            {
                                $admin = mysql_query("UPDATE staff s INNER JOIN users u ON (s.staff_id = u.user_id) SET s.role = 'H.R.', u.role = 'H.R.' WHERE s.staff_id = '$user_id' AND u.user_id = '$user_id'")or die(mysql_error());

                                if($admin){

                                    echo "<div class='alert alert-success fade in'>
                                          <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                          <strong>Success !</strong> New Admin added </div>";
                                    ?>
                                    <script>window.location = "users.php";</script>
                                    <?php
                                }else{
                                    echo "<div class='alert alert-danger fade in'>
                                          <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                          <strong>ERROR !</strong> Something went wrong</div>";
                                }
                            }
                            if(isset($_POST['demote_admin']))
                            {
                                $not_admin = mysql_query("UPDATE staff s INNER JOIN users u ON (s.staff_id = u.user_id) SET s.role = 'Employee', u.role = 'Employee' WHERE s.staff_id = '$user_id' AND u.user_id = '$user_id'")or die(mysql_error());
                                if($not_admin){

                                    echo "<div class='alert alert-warning fade in'>
                                          <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                          <strong>Success !</strong> Admin Removed </div>";
                                    ?>
                                    <script>window.location = "users.php";</script>
                                    <?php
                                }else{
                                    echo "<div class='alert alert-danger fade in'>
                                          <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                          <strong>ERROR !</strong> Something went wrong</div>";
                                }
                            }

                ?>
                <div class="widget stacked">

                    <div class="widget-header">
                        <i class="icon-group"></i>
                        <h3>EMPLOYEE MANAGER</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                    <?php include '../../processes/assign_task.php'; ?>
                        <div class="col-md-12">
                            <form method="post" action="">
                                                    <?php
                                                    if(($user['status']) == 'Active')
                                                    {
                                                        if(($user['role']) == 'H.R.')
                                                        {
                                                        ?>
                                                        <button class="btn btn-default pull-right" name="demote_admin">Demote H.R.</button>
                                                    <?php } else {?>
                                                        <button type="button" class="btn btn-success btn-small pull-right" data-toggle="modal" data-target="#new_admin">Make H.R.</button>
                                                    <?php } } ?>
                                                </form>
                        </div>
                        <div></div>
                        <br><br>
                        <div class="col-md-3">
                            <p class="text-center">
                            <p><img class="img-thumbnail img-responsive" width="150" height="180" src="../images/<?php echo $user['pro_pic']; ?>"></p>
                            </p>
                        </div>
                        <div class="col-md-9">
                                <h2><?php echo $user['fullname']; ?></h2>
                                <div class="">
                                    <table class="table table-user-information">
                                        <tbody>
                                        <tr>
                                            <td>Gender:</td>
                                            <td><?php echo $user['gender'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Role:</td>
                                            <td><?php echo $user['role']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Joined:</td>
                                            <td><?php echo $user['joined'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Address:</td>
                                            <td><?php echo $user['address'];?></td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td><a href=""><?php echo $user['email'];?></a></td>
                                        </tr>
                                        <tr>
                                            <td>Phone:</td>
                                            <td><?php echo $user['phone'];?></td>
                                        </tr>
                                        <tr>
                                            <td><?php echo $user['status']; ?></td>
                                            <td>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                        <div class="col-md-12">
                            <div class="tabbable">
                                <hr />
                                <br>
                                <hr />

                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#profile" data-toggle="tab"><i class="icon-bar-chart"></i> Perfomance Track</a>
                                    </li>
                                    <li>
                                        <a href="#balance" data-toggle="tab"><i class="icon-signout"></i> Leave Requests</a>
                                    </li>
                                    <li>
                                        <a href="#resign" data-toggle="tab"><i class="icon-arrow-down"></i> Resignation Request</a>
                                    </li>
                                </ul>

                                <br>

                                <div class="tab-content">

                                    <div class="tab-pane active" id="profile">
                                        <div class="table-container">
                                            <hr />
                                            <div class="table-container">
                                                <h4><i class="icon-bar-chart"></i> PERFORMANCE TRACK
                                                    <div class="pull-right">
                                                        <a href="#assignTask" data-toggle="modal" class="btn btn-primary"><i class="icon-plus icon-white"></i> Assign Task</a>
                                                    </div>
                                                </h4>
                                                <hr />
                                                <br>
                                                <?php include 'employee_task.php'; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="balance">
                                        <div class="table-container">
                                            <hr />
                                            <div class="table-container">
                                                <h4><i class="icon-signout"></i> LEAVE TRACK</h4>
                                                <hr />
                                                <br>
                                                <?php include 'leave_track.php'; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="resign">
                                        <div class="table-container">
                                            <hr />
                                            <div class="table-container">
                                                <h4><i class="icon-arrow-down"></i> Resignation Letter</h4>
                                                <hr />
                                                <br>
                                                <?php include 'resignation_request.php'; ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>


    <div id="assignTask" class="modal fade b" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h4 class="modal-title" >Assign Task</h4>
                </div>
                <div class="modal-body">
                    <form id="add_job" class="form-horizontal col-md-12" name="" action="" method="post">
                        <fieldset>
                            <div class="form-group">
                                <label for="job_vacancy" class="col-md-3"> Task Name </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" id="job_name" value="" name="t_name" placeholder="">
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="form-group">
                                <label for="job_vacancy" class="col-md-3"> Start Date : </label>
                                <div class="col-md-5">
                                    <input id="datepicker" class="form-control" value="" name="start_time" placeholder="01/12/2016"/>
                                </div> <!-- /controls -->

                            </div> <!-- /control-group -->

                            <div class="form-group">
                                <label for="job_vacancy" class="col-md-3"> End Date : </label>
                                <div class="col-md-5">
                                    <input id="datepicker1" class="form-control" value="" name="end_time" placeholder="01/12/2016"/>
                                </div> <!-- /controls -->

                            </div> <!-- /control-group -->

                            <div class="form-group">
                                <label for="job_vacancy" class="col-md-3"> Task Description </label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="description" id="reason" rows="25" cols="80" placeholder="State your reason for leaving"></textarea>
                                </div> <!-- /controls -->
                            </div> <!-- /control-group -->

                            <div class="form-group">
                                <label class="col-md-3" for="agency"> Task Status </label>
                                <div class="col-md-4">
                                    <select class="form-control" id="work_type" name="status">
                                        <option >-----------</option>
                                        <option value="Started">Started</option>
                                        <option value="Completed">Completed</option>
                                    </select>
                                </div> <!-- /controls -->
                            </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </fieldset>
                </form>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div> <!-- /.modal -->
    </div>

<div class="modal fade activate" id="new_admin" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Make <?php echo $user['fullname']; ?>  Admin</h4>
                </div>
                <div class="modal-body">
                    <p>Do You want to make <?php echo $user['fullname']; ?> New HR Administrator ?</p>
                </div>
                <div class="modal-footer">
                    <form method="post" action="">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="new_admin" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
<?php
include '../includes/footer.php';
