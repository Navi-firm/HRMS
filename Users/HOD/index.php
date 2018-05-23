<?php
include '../includes/hod_header.php';
?>

    <div class="main">
    <div class="container">

        <?php
        $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, phone, postal_code, pro_pic, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $user_data['user_id']);
        $user = mysql_fetch_array($applicant);
        ?>

    <div class="row">
        <div class="col-sm-3"><!--left col-->
            <div class="list-group">
                <a class="list-group-item active" href="index.php">
                    <span class="icon-home"></span> Dashboard <i class="icon-chevron-right pull-right"></i>
                </a>
                <a class="list-group-item" href="leave.php">
                    <span class="icon-arrow-left"></span> Leave
                </a>
                <a class="list-group-item" href="employee.php">
                    <span class="icon-group"></span> Employee
                </a>
                <a class="list-group-item" href="employ.php">
                    <span class="icon-file-text-alt"></span> Employ
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
                    <h5><strong><i class="icon-time"></i> WELCOME </strong></h5>
                </div>
                <div class="panel-body">
                    <div class="col-md-4">
                        <p class="text-center">
                            <img class="img-thumbnail img-responsive" width="150" height="180" src="../images/<?php echo $user['pro_pic']; ?>">
                        </p>
                        <h4><strong><i class=""></i> <?php echo $user['fullname'];?> </strong></h4>
                    </div>
                    <div class="span5">
                        <table class="table table-user-information">
                            <tbody>
                            <tr>
                                <td>Department:</td>
                                <td><?php echo $user['department'];?></td>
                            </tr>
                            <tr>
                                <td>Role:</td>
                                <td><?php echo $user_data['role']; ?></td>
                            </tr>
                            <tr>
                                <td>Hire date:</td>
                                <td><?php echo $user['joined'];?></td>
                            </tr>
                            <tr>
                                <td>Home Address</td>
                                <td><?php echo $user['location'];?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><a href="mailto:info@support.com"><?php echo $user['email'];?></a></td>
                            </tr>
                            <td>Phone Number</td>
                            <td><?php echo $user['phone'];?>
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
                                    <p><i class="icon-user"></i> My Tasks</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3 text-center">
                            <div class="panel panel-info">
                                <div class="panel-body">
                                    <h3><?php echo staff_count(); ?></h3>
                                </div>
                                <div class="panel-heading">
                                    <p><i class="icon-group"></i> My Employees</p>
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
                    <h5><strong><i class="icon-time"></i> </strong></h5>
                </div>
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <span class="glyphicon glyphicon-tasks"></span>
                                    My Tasks
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table id="shortlisted" class="table table-striped" cellspacing="0" width="100%">
                                    <thead>
                                    <th>Task Name</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th></th>
                                    </thead>

                                    <?php
                                    //Load table from database
                                    $assigned = $user['staff_id'];

                                    $application = mysql_query("SELECT task_id, task_name, description, DATE_FORMAT(start_time, '%d/%m/%Y') AS start_time, DATE_FORMAT(due_date, '%d/%m/%Y') AS due_date, estimated_hours, status, DATE_FORMAT(created, '%d %M %Y') AS created FROM tasks WHERE assigned_to = '$assigned' OR creator = '$assigned' ORDER BY created DESC LIMIT 0, 10") or die(mysql_error());

                                    if(mysql_num_rows($application) != 0){

                                        While($row = mysql_fetch_assoc($application)){ ?>
                                            <tbody>
                                            <tr>
                                                <td><?php echo $row['task_name']; ?></td>
                                                <td><p class="text-danger"><?php echo $row['due_date'];?></p></td>
                                                <td><span class="label label-success job-status"><?php echo $row['status'];?></span></td>
                                                <td>
                                                    <a href="view_task.php?task_id=<?php echo $row['task_id']; ?>" alt="edit" class="btn btn-info btn-sm"><i class="icon-eye-open"></i></a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        <?php } ?>

                                    <?php }else {?>

                                        <div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                                            <strong>Oh Snap! </strong>No Tasks Assigned </div>

                                    <?php }

                                    ?>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- /container -->

    </div>
</div>

<?php include '../includes/footer.php';

