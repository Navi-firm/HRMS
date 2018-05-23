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
                    <a class="list-group-item" href="employee.php">
                        <span class="icon-group"></span> Employee
                    </a>
                    <a class="list-group-item active" href="employ.php">
                        <span class="icon-file-text-alt"></span> Employ <i class="icon-chevron-right pull-right"></i>
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
                <div class="widget stacked">

                    <div class="widget-header">
                        <i class="icon-copy"></i>
                        <h3>Employ</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">

                        <div class="col-md-12">
                            <?php
                            $author =  $user_data['username'];
                            $my_employees = mysql_query("SELECT COUNT(job_id) AS my_jobs FROM jobs WHERE author = '$author'");
                            $my_jobs = mysql_fetch_assoc($my_employees);
                            ?>
                            <div class="col-xs-4 text-center">
                                <div class="panel panel-success">
                                    <div class="panel-body">
                                        <h3><?php echo $my_jobs['my_jobs']; ?></h3>
                                    </div>
                                    <div class="panel-heading">
                                        <p>ALL APPLICATIONS</p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $author =  $user_data['username'];
                            $my_employees = mysql_query("SELECT COUNT(job_id) AS my_jobs FROM jobs WHERE author = '$author' AND status = 'Approved' AND deadline >= CURRENT_DATE()");
                            $open_job = mysql_fetch_assoc($my_employees);
                            ?>
                            <div class="col-xs-4 text-center">
                                <div class="panel panel-danger">
                                    <div class="panel-body">
                                        <h3><?php echo $open_job['my_jobs']; ?></h3>
                                    </div>
                                    <div class="panel-heading">
                                        <p>REJECTED APPLICATIONS</p>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $author =  $user_data['username'];
                            $my_employees = mysql_query("SELECT COUNT(job_id) AS my_jobs FROM jobs WHERE author = '$author' AND deadline < CURRENT_DATE()");
                            $expired = mysql_fetch_assoc($my_employees);
                            ?>
                            <div class="col-xs-4 text-center">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h3><?php echo $expired['my_jobs']; ?></h3>
                                    </div>
                                    <div class="panel-heading">
                                        <p>REVIEWED APPLICATIONS</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr />
                        <br>
                        <div class="form-horizontal col-md-12">
                            <hr />
                            <br>
                            <hr />
                            <div class="tabbable">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#profile" data-toggle="tab">ALL APPLICATION</a>
                                    </li>
                                    <li>
                                        <a href="#balance" data-toggle="tab">SCHEDULE INTERVIEW</a>
                                    </li>
                                    <li>
                                        <a href="#taken" data-toggle="tab">INTERVIEW APPLICATION</a>
                                    </li>
                                </ul>

                                <br>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="profile">
                                        <hr />
                                        <div class="table-container">
                                            <h4>ALL APPLICATION</h4>
                                            <hr />
                                            <br>
                                            <?php include 'interview_candidates.php'; ?>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="balance">
                                        <div class="table-container">
                                            <hr />
                                            <div class="table-container">
                                                <h4>SHORT LISTED</h4>
                                                <hr />
                                                <br>
                                                <?php include 'scheduled_interview.php'; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="taken">
                                        <div class="table-container">
                                            <hr />
                                            <div class="table-container">
                                                <h4>SCHEDULE INTERVIEW</h4>
                                                <hr />
                                                <br>
                                                <?php include 'shorlisted_table.php'; ?>
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
                                <label for="job_vacancy" class="col-md-3"> Estimated Hours </label>
                                <div class="col-md-4">
                                    <input type="number" min="1" class="form-control" id="job_name" value="" maxlength="4" name="t_hours" placeholder="">
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