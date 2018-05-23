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

                <div class="widget stacked ">

                    <div class="widget-header">
                        <i class="icon-user"></i>
                        <h3><strong>Add Employee</strong></h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">

                        <?php

                        $app_id = $_GET['interview_id'];

                        if(isset($app_id))
                        {
                            $candidate = "SELECT summary_id, applicant, oral, written, total, summary, position, email, DATE_FORMAT(DATE(interview_date), '%D %M %Y') AS interview_date, hiring_manager, department, oral, written, total, summary, status, created FROM interview_summary WHERE summary_id = '$app_id'";
                            $query_result = mysql_query($candidate) or die (mysql_error($candidate));

                            if(mysql_num_rows($query_result) == 0){
                                echo 'Query error' . mysql_error($query_result);
                            }else{
                                $detail = mysql_fetch_assoc($query_result);
                            }
                        }

                        $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, username, pro_pic, phone, status, role, postal_code, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE email = '" . $detail['email'] . "'");
                        $user = mysql_fetch_array($applicant);

                        if(isset($_POST['btn-update'])) {
                            // variables for input data
                            $department = $detail['department'];
                            $appointment = date('Y-m-d', strtotime($_POST['appointment']));
                            $joining = date('Y-m-d', strtotime($_POST['hire_date']));
                            $probation = date('Y-m-d', strtotime($_POST['probation']));
                            $salary = $_POST['salary'];
                            // variables for input data
                            $user_id = $user['staff_id'];
                            // sql query for update data into database
                            $sql_query = mysql_query("UPDATE staff s INNER JOIN users u ON (s.staff_id = u.user_id) SET s.role = 'Employee', s.salary = '$salary', s.appointment = '$appointment', s.hire_date = '$joining', s.probation = '$probation', s.department = '$department', u.role = 'Employee' WHERE s.staff_id = '$user_id' AND u.user_id = '$user_id'") or die(mysql_error());
                            // sql query for update data into database
                            if($sql_query){
                                echo "<script>
                                        alert('New Employee Added');
                                        window.location.href = 'employee.php';
                                      </script>";
                            }else{
                                echo "<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a> <strong>ERROR !</strong> Adding New Employee</div>";
                            }
                        }
                        ?>
                        <div class="tabbable">

                            <?php

                            ?>


                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#profile" data-toggle="tab">General Info</a></li>
                            </ul>

                            <br>

                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">
                                    <h4> Personal Info </h4>
                                    <hr>
                                    <br />
                                    <form id="edit-profile" class="form-horizontal col-md-8" method="post" action="">
                                        <fieldset>

                                            <div class="form-group">
                                                <label for="firstname" class="col-md-4"><i class="icon-user"></i> Full Name </label>
                                                <div class="col-md-8">
                                                    <p><?php echo $detail['applicant']; ?></p>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label class="col-md-4" for="lastname"><i class="icon-envelope"></i> Email </label>
                                                <div class="col-md-8">
                                                    <p><?php echo $detail['email']; ?></p>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label class="col-md-4" for="lastname"><i class="icon-envelope"></i> Gender </label>
                                                <div class="col-md-8">
                                                    <p><?php echo $user['gender']; ?></p>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label class="col-md-4" for="lastname"><i class="icon-envelope"></i> Date Of Birth  </label>
                                                <div class="col-md-8">
                                                    <p><?php echo $user['dob']; ?></p>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label class="col-md-4" for="lastname"><i class="icon-envelope"></i> Contact 1 </label>
                                                <div class="col-md-8">
                                                    <p><?php echo $user['phone']; ?></p>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label class="col-md-4" for="lastname"><i class="icon-envelope"></i> Contact 2 </label>
                                                <div class="col-md-8">
                                                    <p><?php echo $user['contact1']; ?></p>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label class="col-md-4" for="lastname"><i class="icon-envelope"></i> Address </label>
                                                <div class="col-md-8">
                                                    <p><?php echo $user['address']; ?></p>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label class="col-md-4" for="lastname"><i class="icon-briefcase"></i> Position</label>
                                                <div class="col-md-8">
                                                    <p><?php echo $detail['position']; ?></p>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <hr>

                                            <div class="form-group">
                                                <label class="col-md-4" for="lastname"><i class="icon-user"></i> Hiring Manager</label>
                                                <div class="col-md-8">
                                                    <p><?php echo $detail['hiring_manager']; ?></p>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label class="col-md-4" for="gender"><i class="icon-adjust"></i> Interviewed on </label>
                                                <div class="col-md-8">
                                                    <p class="help-block"><?php echo $detail['interview_date']; ?></p>

                                                </div> <!-- /controls -->
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="gender"><i class="icon-adjust"></i> Interview Summary </label>
                                                <div class="col-md-8">
                                                    <h5>Scored : <?php echo $detail['total']; ?> Total</h5>
                                                    <p class="help-block"><?php echo $detail['summary']; ?></p>
                                                </div> <!-- /controls -->
                                            </div>
                                            <h4> Employment Details </h4>
                                            <hr>
                                            <br />

                                            <div class="form-group">
                                                <label for="job_vacancy" class="col-md-4"> Appointment Date : </label>
                                                <div class="col-md-6">
                                                    <input id="datepicker1" class="form-control" value="" name="appointment" placeholder="01/12/2016"/>
                                                </div> <!-- /controls -->

                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label for="job_vacancy" class="col-md-4"> Joining Date : </label>
                                                <div class="col-md-6">
                                                    <input id="datepicker2" class="form-control" value="" name="hire_date" placeholder="01/12/2016"/>
                                                </div> <!-- /controls -->

                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label class="col-md-4" for="email"><i class="icon-home"></i> Department  </label>
                                                <div class="col-md-8">
                                                    <p><?php echo $detail['department']; ?></p>
                                                </div> <!-- /controls -->
                                            </div>

                                            <div class="form-group">
                                                <label for="job_vacancy" class="col-md-4"> Probation End Date : </label>
                                                <div class="col-md-6">
                                                    <input id="datepicker3" class="form-control" value="" name="probation" placeholder="01/12/2016"/>
                                                </div> <!-- /controls -->

                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label class="col-md-4" for="email"><i class="icon-home"></i> Joining Salary  </label>
                                                <div class="col-md-4">
                                                    <input name="salary" value="" type="text" class="form-control"/>
                                                </div> <!-- /controls -->
                                            </div>

                                            <div class="form-group">
                                                <div class="">
                                                    <label for="username" class="col-md-4"> Employment Type</label>
                                                    <div class="col-md-6">
                                                        <select class="form-control" id="budget" name="work-type">
                                                            <option value="" selected="selected">Choose Employment Type </option>
                                                            <option value="Full-Time">Full-Time</option>
                                                            <option value="Part-Time">Part-Time</option>
                                                            <option value="Internship">Internship</option>
                                                            <option value="Consultancy">Consultancy</option>
                                                        </select>
                                                    </div> <!-- /controls -->
                                                </div>
                                            </div>

                                            <hr />

                                            <div class="form-group">

                                                <div class="col-md-8">
                                                    <button class="btn btn-primary" name="btn-update"><i class="icon-plus"></i> Save</button>
                                                    <a href="employee.php" class="btn btn-default"><i class="icon-trash"></i> Cancel</a>
                                                </div>
                                            </div> <!-- /form-actions -->
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->

            </div> <!-- /span8 -->

        </div> <!-- /container -->

    </div> <!-- /main -->

<?php include '../includes/footer.php'; ?>