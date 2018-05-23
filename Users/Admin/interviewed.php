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

    <div class="main">
    <div class="container">

        <?php
        $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, phone, postal_code, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $user_data['user_id']);
        $user = mysql_fetch_array($applicant);
        ?>

        <div class="row">

            <div class="col-md-3">

                <div class="list-group">
                    <a class="list-group-item active" href="index.php">
                        <span class="icon-home"></span> Dashboard
                    </a>
                </div>

                <div class="panel-default panel">
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name text-center">

                            <br>
                            <p class="text-center">
                                <img class="img-thumbnail img-responsive" width="150" height="180" src="../images/<?php echo $user['pro_pic']; ?>">
                            </p>
                            <h3><?php echo $user['fullname']; ?> <p class="help-block">(<?php echo $user_data['username']; ?>)</p> </h3>
                        </div>
                        <div class="profile-usertitle-job text-center">
                            <h4><?php echo $user_data['role']; ?> <?php echo $user['department']; ?></h4>
                        </div>
                    </div>
                    <div class="profile-userbuttons text-center">
                        <P class="help-block">Joined <?php echo $user['joined']; ?></P>
                    </div>
                    <hr />
                    <!-- END SIDEBAR BUTTONS -->
                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active">
                                <a href="profile.php">
                                    <i class="icon-user"></i>
                                    My Profile </a>
                            </li>
                            <li>
                                <a href="settings.php">
                                    <i class="icon-pencil"></i>
                                    Edit Profile </a>
                            </li>
                            <li>
                                <a href="leave.php">
                                    <i class="icon-signout"></i>
                                    Request Leave </a>
                            </li>
                            <li>
                                <a href="employee.php">
                                    <i class="icon-bar-chart"></i>
                                    Performance Review </a>
                            </li>
                            <li>
                                <a href="jobs.php">
                                    <i class="icon-briefcase"></i>
                                    Post a Job </a>
                            </li>
                            <li>
                                <a href="events.php">
                                    <i class="icon-calendar"></i>
                                    My Calendar </a>
                            </li>
                            <li>
                                <a href="help.php">
                                    <i class="icon-flag-alt"></i>
                                    Help </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
            </div>

            <div class="col-md-9">
                <div class="widget stacked">

                    <div class="widget-header">
                        <i class="icon-copy"></i>
                        <h3>ADD EMPLOYEE</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">

                        <div class="col-md-12">
                            <?php
                            $author =  $user_data['username'];
                            $my_employees = mysql_query("SELECT COUNT(application_id) AS my_jobs FROM applications");
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
                            $my_employees = mysql_query("SELECT COUNT(application_id) AS my_jobs FROM applications WHERE application_status = 'Set Interview'");
                            $open_job = mysql_fetch_assoc($my_employees);
                            ?>
                            <div class="col-xs-4 text-center">
                                <div class="panel panel-danger">
                                    <div class="panel-body">
                                        <h3><?php echo $open_job['my_jobs']; ?></h3>
                                    </div>
                                    <div class="panel-heading">
                                        <p>SCHEDULED INTERVIEW</p>
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
                                        <p>INTERVIEWED</p>
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
                                        <a href="#balance" data-toggle="tab">SHORT LISTED</a>
                                    </li>
                                    <li>
                                        <a href="#review" data-toggle="tab">INTERVIEWS</a>
                                    </li>
                                    <li>
                                        <a href="#interview" data-toggle="tab">INTERVIEW SUMMARY</a>
                                    </li>
                                </ul>

                                <br>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="profile">
                                        <div class="table-container">
                                            <hr />
                                            <div class="table-container">
                                                <h4>APPLICATION PENDING REVIEW</h4>
                                                <hr />
                                                <br>
                                                <?php include 'job_applications.php'; ?>
                                            </div>
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

                                    <div class="tab-pane" id="review">
                                        <div class="table-container">
                                            <hr />
                                            <div class="table-container">
                                                <h4>INTERVIEWS</h4>
                                                <hr />
                                                <br>
                                                <?php include 'interviewed_candidate.php'; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="interview">
                                        <div class="table-container">
                                            <hr />
                                            <div class="table-container">
                                                <h4>INTERVIEW SUMMARY</h4>
                                                <hr />
                                                <br>
                                                <?php include 'interviews.php'?>
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
