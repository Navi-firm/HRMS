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

                        <li class="active">
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
                            <a href="../Admin/account_info.php">
                                <i class="icon-cogs"></i>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="../Admin/account_info.php">
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
                    <a class="list-group-item active" href="users.php">
                        <span class="icon-user"></span> Users <i class="icon-chevron-right pull-right"></i>
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
                    <a class="list-group-item" href="profile.php">
                        <span class="icon-user"></span> Profile
                    </a>
                    <a class="list-group-item" href="settings.php">
                        <span class="icon-cogs"></span> Settings
                    </a>
                </div>
            </div>

            <div class="col-sm-9"><!--left col-->

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5><strong><i class="icon-user"></i> System Users </strong></h5>
                    </div>
                    <div class="panel-body">

                        <div class="tabbable">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#profile" data-toggle="tab">ALL USERS</a>
                                </li>
                            </ul>

                            <div class="tab-content">

                                <div class="tab-pane active" id="profile">
                                    <hr />
                                    <div class="table-container">
                                        <div class="table-responsive">
                                            <table class="table table-striped" id="myUsers" width="100%">
                                                <thead>
                                                &#32;
                                                <tr>&#32;
                                                    <th class="title">User Id.</th>
                                                    &#32;
                                                    <th class="bid_end_date">User</th>
                                                    &#32;
                                                    <th class="budget">Email</th>
                                                    &#32;
                                                    <th class="budget">Role</th>
                                                    &#32;
                                                    <th class="bids">Status</th>
                                                    &#32;
                                                    <th class="bids">Actions</th>
                                                    &#32;
                                                </tr>
                                                &#32;
                                                </thead>
                                                &#32;
                                                <?php

                                                //Load table from
                                                if(isset($_GET['page'])){ $page = $_GET['page']; } else {$page =1;}

                                                $start_from = ($page-1) * 4;

                                                //Load table from database
                                                $leave_requests = mysql_query("SELECT staff_id, email, CONCAT(first_name, ' ', last_name) AS full_name, status, phone, country, county, username, role, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff ORDER BY created DESC LIMIT " . $start_from . ",15 ") or die(mysql_error());

                                                if(mysql_num_rows($leave_requests) != 0){

                                                    While($row = mysql_fetch_assoc($leave_requests)){ ?>
                                                        <tbody>
                                                        &#32;
                                                        <tr class="odd">
                                                            &#32;
                                                            <td class="title">
                                                                <p class="text-info">
                                                                    <?php echo $row['staff_id']; ?>
                                                                </p>

                                                            </td>
                                                            &#32;
                                                            <td class="bid_end_date">
                                                                <h5><strong><?php echo $row['full_name']; ?></strong></h5>
                                                            </td>
                                                            &#32;
                                                            <td class="budget">
                                                                <p><?php echo $row['email']; ?></p>
                                                            </td>
                                                            &#32;
                                                            <td class="budget">
                                                                <p class="text-success"><?php echo $row['role']; ?></p>
                                                            </td>
                                                            &#32;
                                                            <td class="budget">
                                                                <p class="text-success"><?php echo $row['status']; ?></p>
                                                            </td>
                                                            &#32;
                                                            <td class="bids">
                                                                <a href="user_manager.php?ref_no=<?php echo $row['staff_id']; ?>" class="btn btn-info btn-sm"><i class="icon-eye-open"></i></a>
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
                                                <li class="active"><a href="jobs.php?page=1">&laquo;</a></li>
                                                <?php

                                                $count = mysql_query("SELECT COUNT(job_id) FROM jobs") or die(mysql_error());
                                                $row = mysql_fetch_row($count);
                                                $total_records = $row['0'];
                                                $total_pages = ceil($total_records / 15);

                                                for($i = 1; $i<=$total_pages; $i++){
                                                    echo "<li><a href='users.php?page=" . $i . "'><b>" . $i . "</b></a></li>";
                                                };
                                                ?>
                                                <li><a href="javascript:;">&raquo;</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">

                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /container -->

        </div>
    </div>

<?php
include '../includes/footer.php';