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
                    <div class="widget stacked">

                        <div class="widget-header">
                            <i class="icon-briefcase"></i>
                            <h3>Create New Job</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">

                            <?php include '../../processes/admin_new_job.php'; ?>

                            <div class="tab-pane active" id="profile">
                                <h4> Job Info</h4>
                                <hr>
                                <br />
                                <form id="add_job" class="form-horizontal col-md-12" name="" action="" method="post">
                                    <fieldset>

                                        <div class="form-group">
                                            <label for="job_vacancy" class="col-md-3"> Job Title * </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="job_name" value="" name="job_title">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label class="col-md-3" for="category"> Category * </label>
                                            <div class="col-md-4">
                                                <select class="form-control" id="category" name="category">
                                                    <option >Select Job Category</option>
                                                    <?php
                                                        //Load names from staff
                                                        $my_department = $user['department'];
                                                        $category = mysql_query("SELECT department_name, category FROM department WHERE department_name = '$my_department' ORDER BY department_id ASC") or die(mysql_error());
                                                        While($row = mysql_fetch_assoc($category)){
                                                        echo "<option value='".$row['category']."'>".$row['category']."</option>";
                                                        }
                                                    ?>

                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label for="job_vacancy" class="col-md-3"> Location * </label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="job_name" value="" name="location">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label for="job_vacancy" class="col-md-3"> Deadline : </label>
                                            <div class="col-md-4">
                                                <input id="datepicker-inline" class="form-control" value="" name="deadline" placeholder="01/12/2016"/>
                                            </div> <!-- /controls -->

                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label class="col-md-3" for="lastname"> Job Details * </label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" name="details" id="reason" rows="25" cols="80" placeholder="State your reason for leaving"></textarea>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label class="col-md-3" for="lastname"> Purpose * </label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" name="purpose" id="description" rows="6" maxlength="250"></textarea>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label for="id_skills_required"  class="col-md-3" > Responsibilities </label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" name="responsibilities" id="description" rows="6" maxlength="300"></textarea>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3" for="budget"> Salary Range * </label>
                                            <div class="col-md-4">
                                                <select class="form-control" id="budget" name="salary">
                                                    <option value="" selected="selected">---------</option>
                                                    <option value="KSh 15,000">Micro: KSh 15,000</option>
                                                    <option value="KSh 15,000 to 50,000">Tiny: KSh 15,000 to 50,000</option>
                                                    <option value="KSh 50,000 to 100,000">Small: KSh 50,000 to 100,000</option>
                                                    <option value="KSh 100,000 to 250,000">Medium: KSh 100,000 to 250,000</option>
                                                    <option value="KSh 250,000 to 500,000">Large: KSh 250,000 to 500,000</option>
                                                    <option value="KSh 500,000 to 1,000,000">Macro: KSh 500,000 to 1,000,000</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3" for="agency">Contract Type </label>
                                            <div class="col-md-4">
                                                <select class="form-control" id="work_type" name="work_type">
                                                    <option >Select work type</option>
                                                    <option value="Internship">Internship</option>
                                                    <option value="Part Time">Part Time</option>
                                                    <option value="Full Time">Full Time</option>
                                                    <option value="Consultant">Consultant</option>

                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3" for="agency"> Contract Duration </label>
                                            <div class="col-md-4">
                                                <select class="form-control" id="experience" name="duration">
                                                    <option >Select Contract Duration</option>
                                                    <option value="Less than 1 year">Less than 1 year</option>
                                                    <option value="1 year">1 year</option>
                                                    <option value="1 - 2 years">1 - 2 years</option>
                                                    <option value="2 - 5 years">2 - 5 years</option>
                                                    <option value="5 years +">5 years +</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3" for="agency"> Experience </label>
                                            <div class="col-md-4">
                                                <select class="form-control" id="experience" name="experience">
                                                    <option >Select experience</option>
                                                    <option value="Entry Level">Entry Level</option>
                                                    <option value="Graduate">Graduate</option>
                                                    <option value="1 year">1 year</option>
                                                    <option value="1 - 2 years">1 - 2 years</option>
                                                    <option value="2 - 5 years">2 - 5 years</option>
                                                    <option value="5 years +">5 years +</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3" for="agency"> Urgency </label>
                                            <div class="col-md-4">
                                                <select class="form-control" id="agency" name="agency">
                                                    <option >Select Priority</option>
                                                    <option value="Critical">Critical</option>
                                                    <option value="Emergency">Emergency</option>
                                                    <option value="High">High</option>
                                                    <option value="Moderate">Moderate</option>
                                                    <option value="Low">Low</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label for=position" class="col-md-3"> Positions * </label>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="position" value="" name="position">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label class="col-md-3" for="budget"> Advertisement </label>
                                            <div class="col-md-4">
                                                <select class="form-control" id="budget" name="advertisement">
                                                    <option value="" selected="selected">---------</option>
                                                    <option value="Local">Local</option>
                                                    <option value="website">Website</option>
                                                    <option value="Paper">Paper</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <hr />

                                        <br />

                                        <div class="form-group">
                                            <div class=" col-md-12">
                                                <button type="submit" name="post" onclick="javascript:send_post()" class="btn btn-primary"><i class="icon-plus"></i> Save</button>
                                                <a href="jobs.php" class="btn btn-default"><i class="icon-trash"></i> Cancel</a>
                                            </div>
                                        </div> <!-- /form-actions -->
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../includes/footer.php';
