<?php
include '../includes/hod_header.php';
?>

    <div class="main">
        <div class="container">
            <?php
            $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, phone, postal_code, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $user_data['user_id']);
            $user = mysql_fetch_array($applicant);
            ?>
            <div class="row">
                <div class="col-sm-3"><!--left col-->
                    <div class="list-group">
                        <a class="list-group-item" href="index.php">
                            <span class="icon-home"></span> Dashboard
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
                        <a class="list-group-item  active" href="tasks.php">
                            <span class="icon-tasks"></span> Tasks <i class="icon-chevron-right pull-right"></i>
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
                            <h3><i class="icon-tasks"></i> My Tasks</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">

                            <div class="tabbable">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#profile" data-toggle="tab">NEW TASK</a>
                                    </li>
                                    <li>
                                        <a href="#balance" data-toggle="tab">MY TASKS</a>
                                    </li>
                                    <li>
                                        <a href="#complete" data-toggle="tab">COMPLETED</a>
                                    </li>
                                </ul>

                                <br>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="profile">
                                        <hr />
                                        <div class="table-container">
                                            <?php
                                            error_reporting(0);
                                            include '../../processes/post_task.php';
                                            ?>
                                            <form id="edit-profile2" class="form-horizontal col-md-12" method="post" action="">
                                                <fieldset>
                                                    <h4>CREATE NEW OBJECTIVE</h4>
                                                    <hr />
                                                    <div class="form-group">
                                                        <label for="username" class="col-md-3"><i class="icon-bookmark"></i> Task Name </label>
                                                        <div class="col-md-8">
                                                            <input type="text" class="form-control" id="username" value="" name="t_name">
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->
                                                    <div class="form-group">
                                                        <label for="username" class="col-md-3"><i class="icon-calendar"></i> From Date </label>
                                                        <div id="datetimepicker4" class="col-md-4 input-group">
                                                            <input type="text" id="datepicker" class="form-control" name="start_date"><span class="input-group-addon"><i data-time-icon="icon-time" class="icon-calendar"></i></span>
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->
                                                    <div class="form-group">
                                                        <label for="username" class="col-md-3"><i class="icon-calendar"></i> To Date </label>
                                                        <div id="datetimepicker4" class="col-md-4 input-group">
                                                            <input type="text" id="datepicker1" class="form-control" name="end_date"><span class="input-group-addon"><i data-time-icon="icon-time" class="icon-calendar"></i></span>
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->
                                                    <div class="form-group">
                                                        <label for="username" class="col-md-3"><i class="icon-briefcase"></i> Task Details </label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control" name="description" id="reason" rows="15" cols="80" placeholder="Give description"></textarea>
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->
                                                    <hr />
                                                    <div class="form-group">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <div class="col-md-6">
                                                                    <button type="submit" class="btn btn-primary">Save </button>
                                                                </div>
                                                            </div> <!-- /.form-group -->

                                                        </div>
                                                    </div> <!-- /.form-group -->
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="balance">
                                        <div class="table-container">
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

                                    <div class="tab-pane" id="complete">
                                        <div class="table-container">
                                            <table id="shortlisted" class="table table-striped" cellspacing="0" width="100%">
                                                <thead>
                                                <th>Task Name</th>
                                                <th>Due Date</th>
                                                <th>Status</th>
                                                <th></th>
                                                </thead>

                                                <?php
                                                //Load table from database
                                                $assigned = $user_data['user_id'];

                                                $application = mysql_query("SELECT task_id, task_name, description, DATE_FORMAT(start_time, '%d/%m/%Y') AS start_time, DATE_FORMAT(due_date, '%d/%m/%Y') AS due_date, estimated_hours, status, DATE_FORMAT(created, '%d %M %Y') AS created FROM tasks WHERE status = 'Completed' AND assigned_to = '$assigned' OR creator = '$assigned' AND status = 'Completed' ORDER BY created DESC LIMIT 0, 10") or die(mysql_error());

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
                                                        <strong>Oh Snap! </strong>No Tasks Completed </div>

                                                <?php }

                                                ?>

                                            </table>
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

<?php include '../includes/footer.php';
