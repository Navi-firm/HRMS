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

                <?php
                $job_id = $_GET['job'];

                $job_details = mysql_query("SELECT job_id, job_title, category, details, position, responsibilities, salary, agency, status, DATE_FORMAT(DATE(created), '%D %M %Y') AS posted, DATE_FORMAT(DATE(deadline), '%D %M %Y') AS deadline, work_type, experience FROM jobs WHERE job_id='$job_id'") or die(mysql_error());
                $details = mysql_fetch_assoc($job_details);
                ?>

                <div class="col-md-9 widget-content">
                    <div class="panel panel-default">
                        <div class="panel-body">
                        <div class="col-md-12">

                        </div>

                       <div class="col-md-12">
                           <div class=" pull-right">
                               <strong>Posted:</strong> <?php echo $details['posted']; ?>
                           </div>
                           <div class="page-header top">
                                <h1><?php echo $details['job_title']; ?></h1>
                               <h5 class="label label-success"><?php echo $details['status']; ?></h5>
                           </div>
                       </div>

                        <div class="form-horizontal">
                            <div class="col-sm-4">
                                <div class="well well-sm text-center">
                                    <strong>DeadLine:</strong>
                                    <br>
                                    <h4 class="text-primary"><?php echo $details['deadline']; ?></h4>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="well well-sm text-center">
                                    <strong>Positions:</strong>
                                    <br>
                                    <h4 class="text-primary"><?php echo $details['position']; ?> post</h4>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="well well-sm text-center">
                                    <strong>Salary Range:</strong>
                                    <br>
                                    <h4 class="text-primary"><?php echo $details['salary']; ?></h4>
                                </div>
                            </div>
                        </div>

                        <div class="form-horizontal">
                            <div class="col-sm-9">
                                <h4><strong>Job Description:</strong></h4>
                                <div property="description">
                                    <?php echo $details['details']; ?>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="client-details">
                                    <h5>
                                        <strong>
                                            Work Experience:
                                        </strong>
                                    </h5>
                                    <span class="badge badge-xs badge-important"></span>
                                    <span><i class='fa fa-ban likert-star'></i></span>
                                <span title="Rating based on average of">
                                  <?php echo $details['experience']; ?>
                                </span>
                                    <table>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="client-details">
                                    <h5>
                                        <strong>
                                            Work Type :
                                        </strong>
                                    </h5>
                                    <span class="badge badge-xs badge-important"></span>
                                    <span><i class='fa fa-ban likert-star'></i></span>
                                <span title="Rating based on average of">
                                  <?php echo $details['work_type']; ?>
                                </span>
                                    <table>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="form-horizontal">
                            <div class="col-xs-12 col-sm-8 col-lg-9">
                                <h5><strong>Responsibilities:</strong></h5>
                                <p property="skills">
                                    <p><?php echo $details['responsibilities']; ?></p>,
                                </p>
                            </div>
                            <div class="col-xs-12 col-sm-4 col-lg-3">
                                <h5>
                                    <a class="btn btn-primary" href="job_edit.php?job_id=<?php echo $details['job_id']; ?>">
                                        Edit Job
                                    </a>
                                </h5>

                            </div>

                        </div>
                </div>
                </div>

            </div>
        </div>
    </div>

<?php include '../includes/footer.php';
