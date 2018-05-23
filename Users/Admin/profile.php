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
                        <li class="active">
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
            $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, first_name, pro_pic, middle_name, last_name, phone, linkedin, postal_code, county, country, address, postal_code, email, department, work_status, dob, marital_status, about, passport, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, position1, position2, company1, company2, location1, location2, duration1, duration2, referee1, referee2, contact1, contact2, duties1, duties2, DATE_FORMAT(created, '%d %M %Y') AS joined, institution_1, loc_1, award_1, title_1, date_1 FROM staff WHERE staff_id =". $user_data['user_id']);
            $user = mysql_fetch_array($applicant);

            include '../../processes/update_setting.php';
            ?>

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

                <div class="widget stacked">

                    <div class="widget-header">
                        <h3><i class="icon-user"></i> My Profile</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <div class="form-horizontal">
                            <div class="col-xs-3">
                                <p class="text-center">
                                    <img class="img-thumbnail img-responsive" width="150" height="180" src="../images/<?php echo $user['pro_pic']; ?>">
                                </p>
                            </div>
                            <div class="col-xs-9">
                                <a href="editprofile.php" class="pull-right"><h5>Edit My Profile</h5></a>
                                <h3><?php echo $user['fullname']; ?>. </h3>
                                <h5 class="help-block">(<?php echo $user_data['username']; ?>)</h5>
                                <h5 class="help-block"><?php echo $user['email']; ?> | <?php echo $user['phone']; ?> | <?php echo $user['location']; ?></h5>
                                <h6 class="help-block" style="color: #000000;"> Member Since <?php echo $user['joined']; ?></h6>
                                <hr />
                            </div>
                            <br>
                            <div class="col-md-12">
                                <br>
                                <h4>Overview</h4>
                                <p><?php echo $user['about']; ?></p>
                                <hr />
                                <br>
                                <h4>Work History</h4>
                                <div class="col-xs-4">
                                    <h5><?php echo $user['position1']; ?></h5>
                                </div>
                                <div class="col-md-8">
                                    <h5><?php echo $user['company1']; ?></h5>
                                    <h6><?php echo $user['location1']; ?></h6>
                                    <p class="help-block"><?php echo $user['duration1']; ?></p>
                                </div>
                                <div class="col-xs-4">
                                    <h5><?php echo $user['position2']; ?></h5>
                                </div>
                                <div class="col-md-8">
                                    <h5><?php echo $user['company2']; ?></h5>
                                    <h6><?php echo $user['location2']; ?></h6>
                                    <p class="help-block"><?php echo $user['duration2']; ?></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <hr />
                                <h4>Education</h4>
                                <div class="col-xs-4">
                                    <h5><?php echo $user['institution_1']; ?></h5>
                                </div>
                                <div class="col-md-8">
                                    <h5><?php echo $user['award_1']; ?> <?php echo $user['title_1']; ?></h5>
                                    <h6><?php echo $user['date_1']; ?></h6>
                                    <p class="help-block"><?php echo $user['loc_1']; ?></p>
                                </div>
                                <div class="col-xs-4">
                                    <h5><?php echo $user['institution_1']; ?></h5>
                                </div>
                                <div class="col-md-8">
                                    <h5><?php echo $user['award_1']; ?> <?php echo $user['title_1']; ?></h5>
                                    <h6><?php echo $user['date_1']; ?></h6>
                                    <p class="help-block"><?php echo $user['loc_1']; ?></p>
                                </div>
                                <div class="col-xs-4">
                                    <h5><?php echo $user['institution_1']; ?></h5>
                                </div>
                                <div class="col-md-8">
                                    <h5><?php echo $user['award_1']; ?> <?php echo $user['title_1']; ?></h5>
                                    <h6><?php echo $user['date_1']; ?></h6>
                                    <p class="help-block"><?php echo $user['loc_1']; ?></p>
                                </div>
                                <a href="editprofile.php" class="pull-right"><h5>Edit My Profile</h5></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="widget stacked">

                    <div class="widget-header">
                        <h3><i class="icon-cog"></i> Account Manager</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <div class="form-horizontal">
                            <div class="col-xs-4 text-center">
                                <div class="panel panel-info">
                                    <div class="panel-heading">EDIT PROFILE</div>
                                    <div class="panel-body">
                                        <h3><i class="icon-user text-danger"></i> </h3>
                                        <a class="btn btn-block btn-default" href="editprofile.php" title="">update profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 text-center">
                                <div class="panel panel-info">
                                    <div class="panel-heading">ACCOUNT SETTINGs</div>
                                    <div class="panel-body">
                                        <h3><i class="icon-cog text-info"></i> </h3>
                                        <a class="btn btn-block btn-default" href="resign.php" title="">manage account setting</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>


<?php include '../includes/footer.php';