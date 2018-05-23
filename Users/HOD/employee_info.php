<?php
include '../includes/hod_header.php';
?>

    <div class="main">
    <div class="container">

        <?php
        $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, phone, postal_code,  pro_pic, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $user_data['user_id']);
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
                    <a class="list-group-item active" href="employee.php">
                        <span class="icon-group"></span> Employee <i class="icon-chevron-right pull-right"></i>
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

            <div class="col-md-9">
                <?php
                $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, employement, username, pro_pic, phone, status, role, postal_code, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, DATE_FORMAT(created, '%d %M %Y') AS joined, DATE_FORMAT(hire_date, '%d %M %Y') AS hired FROM staff WHERE staff_id =". $_GET['staff_id']);
                $user = mysql_fetch_array($applicant);
                ?>
                <div class="widget stacked">

                    <div class="widget-header">
                        <i class="icon-group"></i>
                        <h3>EMPLOYEE MANAGER</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <?php include '../../processes/assign_task.php'; ?>
                        <div class="col-sm-3">
                            <p class="text-center">
                            <p><img class="img-thumbnail img-responsive" width="150" height="180" src="../images/<?php echo $user['pro_pic']; ?>"></p>
                            </p>
                        </div>
                        <div class="col-sm-9">
                            <div class="page-header top">
                                <h1>

                                    <div class="pull-right">

                                    </div>

                                    <?php echo $user['fullname']; ?> <small>(<?php echo $user['username']; ?>)</small>
                                </h1>
                                <p>

                                    <span class="fa fa-fw fa-map-marker"></span>
                                    <?php echo $user['location']; ?>
                                    <span class="text-muted pipe">|</span>

                                    <span class="fa fa-fw fa-clock-o"></span> Joined
                                    <?php echo $user['joined']; ?>
                                </p>
                            </div>
                            <div class="span6">
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>Gender:</td>
                                        <td><?php echo $user['gender'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Role:</td>
                                        <td><?php echo $user['role']; ?> (<?php echo $user['department']; ?>)</td>
                                    </tr>
                                    <tr>
                                        <td>Employment Date :</td>
                                        <td><?php echo $user['hired'];?></td>
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
                                        <td>Work Type:</td>
                                        <td><?php echo $user['employement']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Status:</td>
                                        <td><?php echo $user['status']; ?></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <div>
                                <h4>About Me</h4>
                                <p><?php echo $user['about']; ?></p>
                            </div>
                        </div>
                        <br>
                        <hr />
                        <br>

                        <div class="form-horizontal col-md-12">
                            <hr />
                            <br>
                            <hr />
                            <br>

                            <div class="tabbable">
                                <hr />
                                <br>
                                <hr />

                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#profile" data-toggle="tab"><i class="icon-bar-chart"></i> Perfomance Track</a>
                                    </li>
                                </ul>

                                <br>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="profile">
                                        <div class="table-container">
                                            <hr />
                                            <div class="table-container">
                                                <h4><i class="icon-bar-chart"></i> TASKS
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

<?php include '../includes/footer.php';