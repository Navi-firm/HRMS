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
                        <h3>JOB MANAGER</h3>
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
                                        <p>JOBS BY ME</p>
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
                                        <p>OPEN JOBS</p>
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
                                        <p>EXPIRED</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <hr />
                        <br>

                        <br>
                        <div class="col-md-12 form-horizontal">
                            <div class="tabbable">

                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#profile" data-toggle="tab"><i class="icon-tasks"></i> My Jobs </a>
                                    </li>
                                    <li>
                                        <a href="#balance" data-toggle="tab"><i class="icon-plus-sign"></i> Pending Approval</a>
                                    </li>
                                </ul>

                                <br>

                                <div class="tab-content">

                                    <div class="tab-pane active" id="profile">
                                        <div class="table-container">
                                            <hr />
                                            <div class="table-container">
                                                <h5><i class="icon-tasks"></i> Job Posting <a href="add_job.php" class="btn btn-primary pull-right">Post Job</a></h5>
                                                <hr />
                                                <?php include '../Tables/jobs_table.php'; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="balance">
                                        <div class="table-container">
                                            <hr />
                                            <div class="table-container">
                                                <h5><i class="icon-tasks"></i> Pending Approval <a href="add_job.php" class="btn btn-primary pull-right">Post Job</a></h5>
                                                <hr />
                                                <?php include '../Tables/job_pending_approval.php'; ?>
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
</div>
<?php include '../includes/footer.php';