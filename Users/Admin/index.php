<?php include '../includes/header.php';
?>
    <div class="main">
    <div class="container">

        <div class="row">
            <?php
            $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, pro_pic, department, phone, pro_pic, postal_code, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $user_data['user_id']);
            $admin = mysql_fetch_array($applicant);
            ?>
            <div class="col-sm-3"><!--left col-->
                <div class="list-group">
                    <a class="list-group-item active" href="index.php">
                        <span class="icon-home"></span> Dashboard <i class="icon-chevron-right pull-right"></i>
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
                        <h4><strong><i class=""></i> Welcome </strong></h4>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-4">
                            <p class="text-center">
                                <img class="img-thumbnail img-responsive" width="150" height="180" src="../images/<?php echo $user['pro_pic']; ?>">
                            </p>
                            <h4><strong><i class=""></i> <?php echo $admin['fullname'];?> </strong></h4>
                        </div>
                        <div class="span5">
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <td>Department:</td>
                                    <td><?php echo $admin['department'];?></td>
                                </tr>
                                <tr>
                                    <td>Role:</td>
                                    <td><?php echo $user_data['role']; ?></td>
                                </tr>
                                <tr>
                                    <td>Hire date:</td>
                                    <td><?php echo $admin['joined'];?></td>
                                </tr>
                                <tr>
                                    <td>Home Address</td>
                                    <td><?php echo $admin['location'];?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><a href="mailto:info@support.com"><?php echo $admin['email'];?></a></td>
                                </tr>
                                <td>Phone Number</td>
                                <td><?php echo $admin['phone'];?>
                                </td>

                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5><strong><i class="icon-bar-chart"></i> Statistics </strong></h5>
                    </div>
                    <div class="panel-body">
                        <div>
                            <div class="col-xs-3 text-center">
                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        <h3><?php echo user_count(); ?></h3>
                                    </div>
                                    <div class="panel-heading">
                                        <p><i class="icon-user"></i> Total Users</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-3 text-center">
                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        <h3><?php echo staff_count(); ?></h3>
                                    </div>
                                    <div class="panel-heading">
                                        <p><i class="icon-group"></i> Total Employees</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-3 text-center">
                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        <h3><?php echo department_count(); ?></h3>
                                    </div>
                                    <div class="panel-heading">
                                        <p><i class="icon-list-ul"></i> Total Departments</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-3 text-center">
                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        <h3><?php echo jobs_count(); ?></h3>
                                    </div>
                                    <div class="panel-heading">
                                        <p><i class="icon-briefcase"></i> Total Job Posts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="col-md-12">

                        </div>

                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5><strong><i class="icon-tasks"></i> Tasks</strong></h5>
                    </div>
                    <div class="panel-body">

                         <!-- tabs left -->
                            <div class="tabbable tabs-left">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#a" data-toggle="tab">Started</a></li>
                                    <li><a href="#b" data-toggle="tab">Pending</a></li>
                                    <li><a href="#c" data-toggle="tab">Completed</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="a">
                                        <div class="table-container">
                                            <hr />
                                            <div class="table-container">
                                                <h5> Started </h5>
                                                <hr />
                                                <?php include 'started_task.php'; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="b">
                                        <div class="table-container">
                                            <hr />
                                            <div class="table-container">
                                                <h5>Pending</h5>
                                                <hr />
                                                <?php include 'pending_tasks.php'; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="c">
                                        <div class="table-container">
                                            <hr />
                                            <div class="table-container">
                                                <h5> Completed</h5>
                                                <hr />
                                                <?php include 'completed_tasks.php'; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /tabs -->
                    </div>
                </div>
            </div> <!-- /container -->

        </div>
    </div>

<?php
include '../includes/footer.php';