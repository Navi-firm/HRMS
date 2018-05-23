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
                    <li class="dropdown">
                        <a href="../Admin/tasks.php">
                            <i class="icon-tasks"></i>
                            <span>Tasks</span>
                        </a>
                    </li>
                    <li class="active">
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
        $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, phone, postal_code, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $user_data['user_id']);
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
                    <a class="list-group-item active" href="jobs.php">
                        <span class="icon-briefcase"></span> Jobs <i class="icon-chevron-right pull-right"></i>
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
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <?php
                            include '../../processes/review_job.php';
                            //Load table from database
                            $job_posts = mysql_query("SELECT job_id, job_title, category, work_type, details, author, department, purpose, responsibilities, duration, salary, experience, status, location, position, DATE_FORMAT(deadline, '%d %b %Y') AS deadline, DATE_FORMAT(DATE(created), '%d %b %Y') AS posted FROM jobs WHERE job_id = " . $_GET['job']) or die(mysql_error());
                            $row = mysql_fetch_assoc($job_posts);
                            ?>
                            <br>
                            <div class="col-md-12">
                                <h2 style="color: #000000;"><?php echo $row['job_title']; ?></h2>
                                <h5 style="color: #3333FF;"><strong><?php echo $row['category']; ?></strong></h5>
                            </div>
                            <div class="col-md-9">
                                <p style=""><strong><?php echo $row['work_type']; ?> | <?php echo $row['location']; ?> | Posted on <?php echo $row['posted']; ?></strong></p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="text-primary pull-right"><a href="jobs.php"><i class="icon-arrow-left"></i> BACK</a></h5>
                            </div>
                            <hr />
                            <div class="col-md-9">
                                <hr />
                                <p style=""><?php echo $row['purpose']; ?></p>
                                <h5 style="color: #3333FF;"><strong>Job Description</strong></h5>
                                <p class="span9" style=""><?php echo $row['details']; ?></p>
                                <h5 style="color: #3333FF;"><strong>Requirements</strong></h5>
                                <p style=""><?php echo $row['responsibilities']; ?></p>
                                <hr />
                            </div>
                            <div class="col-md-9">
                                <h5 style="color: #3333FF;"><strong>JOB SUMMARY</strong></h5>
                                <br>
                                <div class="col-md-4">
                                    <h6 style="color: #3333FF;"><strong>Location</strong></h6>
                                    <p class="help-block"><?php echo $row['location']; ?></p>
                                </div>
                                <div class="col-md-4">
                                    <h6 style="color: #3333FF;"><strong>Job type</strong></h6>
                                    <p class="help-block"><?php echo $row['work_type']; ?></p>
                                </div>
                                <div class="col-md-4">
                                    <h6 style="color: #3333FF;"><strong>Experience</strong></h6>
                                    <p class="help-block"><?php echo $row['experience']; ?></p>
                                </div>
                                <div class="col-md-4">
                                    <h6 style="color: #3333FF;"><strong>Contract</strong></h6>
                                    <p class="help-block"><?php echo $row['duration']; ?></p>
                                </div>
                                <div class="col-md-4">
                                    <h6 style="color: #3333FF;"><strong>Position</strong></h6>
                                    <p class="help-block"><?php echo $row['position']; ?></p>
                                </div>
                                <div class="col-md-4">
                                    <h6 style="color: #3333FF;"><strong>Deadline</strong></h6>
                                    <p class="help-block"><?php echo $row['deadline']; ?></p>

                                </div>
                                <div class="col-md-4">
                                    <h6 style="color: #3333FF;"><strong>Budget</strong></h6>
                                    <p class="help-block"><?php echo $row['salary']; ?></p>

                                </div>
                                <div class="col-md-4">
                                    <h6 style="color: #3333FF;"><strong>Hiring Manager</strong></h6>
                                    <p class="help-block"><?php echo $row['author']; ?></p>

                                </div>
                                <div class="col-md-4">
                                    <h6 style="color: #3333FF;"><strong>Department</strong></h6>
                                    <p class="help-block"><?php echo $row['department']; ?></p>

                                </div>

                            </div>
                            <hr />
                            <div class="col-md-12">
                                <hr />
                                <form id="edit-profile" class="form-horizontal col-md-8" method="post" action="">
                                    <fieldset>
                                        <br>
                                        <h4>Review Vacancy Request</h4>
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <select class="form-control" id="gender" name="status">
                                                    <option >Select an action</option>
                                                    <option value="Approved">Approve</option>
                                                    <option value="Postponed">Postponed</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>
                                        <div class="form-group col-md-6">
                                            <button class="btn btn-block btn-success btn-large" name="btn-update">Approve Job</button>
                                        </div>
                                    </fieldset>
                                </form>
                                <hr />
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

<?php include '../includes/footer.php';