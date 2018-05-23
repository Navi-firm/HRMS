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
                <?php
                $app_id = $_GET['application_id'];

                if(isset($app_id))
                {
                    $candidate = "SELECT application_id, application_title, applicant_name, DATE_FORMAT(DATE(application_date), '%D %M %Y') AS app_date, applicant_contact, applicant_email, application_status, resume, cover_letter, application_rating, application_summary FROM applications WHERE application_id = " . $_GET['application_id'];
                    $query_result = mysql_query($candidate) or die (mysql_error($candidate));

                    if(mysql_num_rows($query_result) == 0){
                        echo 'Query error' . mysql_error($query_result);
                    }else{
                        $detail = mysql_fetch_assoc($query_result);
                    }
                }
                ?>
                <div class="col-md-9">
                    <div class="widget stacked">

                        <div class="widget-header">
                            <i class="icon-bookmark"></i>
                            <h3>Schedule Interview</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <?php include '../../processes/post_task.php'; ?>
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#profile" data-toggle="tab"><?php echo $detail['applicant_name']; ?></a></li>
                            </ul>
                            <br>
                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">
                                    <h4> Candidate Interview Info</h4>
                                    <hr>
                                    <br />
                                    <form id="edit-profile" class="form-horizontal" method="post" action="">
                                        <fieldset>

                                            <div class="form-group">
                                                <label for="firstname" class="col-md-4"> Candidate * </label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="title" value="<?php echo $detail['applicant_name']; ?>" name="applicant" disabled>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label for="firstname" class="col-md-4"> Vacancy Position * </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" id="title" value="<?php echo $detail['application_title']; ?>" name="vacancy" disabled>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label for="firstname" class="col-md-4"> Candidate Email * </label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="title" value="<?php echo $detail['applicant_email']; ?>" name="email" disabled>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label for="firstname" class="col-md-4"> Hiring Manager * </label>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" id="title" value="<?php echo $user['fullname']; ?>" name="email" disabled>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->
                                            <hr />

                                            <div class="form-group">
                                                <label for="firstname" class="col-md-4"> Subject * </label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" id="title" value="" name="subject">
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label class="col-md-4" for="gender"><i class="icon-time"></i> Set Interview Date </label>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control" id="position" value="" name="interview_date" placeholder="eg. 21/05/2015">
                                                    <p class="help-block">If schedule interview set date here</p>
                                                </div> <!-- /controls -->
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="lastname"> Message </label>
                                                <div class="col-md-7">
                                                    <textarea class="form-control" name="description" id="description" rows="6"></textarea>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <hr>

                                            <div class="form-group">

                                                <div class="col-md-offset-4 col-md-8">
                                                    <button type="submit" name="" class="btn btn-success"><i class="icon-coffee"></i> Postpone Interview</button>
                                                    <a href="set_interview.php" class="btn btn-default"><i class="icon-trash"></i> Cancel</a>
                                                </div>
                                            </div> <!-- /form-actions -->

                                        </fieldset>
                                    </form>

                                </div>

                            </div>
                        </div> <!-- /widget-content -->

                    </div> <!-- /widget -->

                </div>

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
                                    <img class="img-thumbnail img-responsive" width="150" height="180" src="https://s3-eu-west-1.amazonaws.com/cdn.kuhustle.com/media/cache/f4/7c/f47cd2d6808133503c12ebdb6b9e70fc.png">
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
                                    <a href="my_profile.php">
                                        <i class="icon-user"></i>
                                        My Profile </a>
                                </li>
                                <li>
                                    <a href="settings.php">
                                        <i class="icon-pencil"></i>
                                        Edit Profile </a>
                                </li>
                                <li>
                                    <a href="my_leave.php">
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

            </div>
        </div>
    </div>

<?php include '../includes/footer.php';

