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
                            <i class="icon-bookmark"></i>
                            <h3>Schedule Interview</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <?php include '../../processes/set_interview.php'; ?>
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
                                                    <input type="text" class="form-control" id="title" value="<?php echo $user['fullname']; ?>" name="hiring_manager" disabled>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label for="firstname" class="col-md-4"> Department * </label>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control" id="title" value="<?php echo $user['department']; ?>" name="department" disabled>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label for="firstname" class="col-md-4"> Subject * </label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" id="title" value="" name="subject">
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label class="col-md-4" for="gender"><i class="icon-time"></i> Set Interview Date </label>
                                                <div class="col-md-3">
                                                    <input id="datepicker" class="form-control" value="" name="interview_date" placeholder="01/12/2016"/>
                                                    <p class="help-block">If schedule interview set date here</p>
                                                </div> <!-- /controls -->
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="lastname"> Message </label>
                                                <div class="col-md-7">
                                                    <textarea class="form-control" name="message" id="reason" rows="25" cols="80" placeholder="State your reason for leaving"></textarea>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <hr>

                                            <div class="form-group">

                                                <div class="col-md-offset-1 col-md-8">
                                                    <button type="submit" name="set-interview" class="btn btn-primary">Save </button>
                                                    <a href="employ.php" class="btn btn-default"><i class="icon-trash"></i> Cancel</a>
                                                </div>
                                            </div> <!-- /form-actions -->

                                        </fieldset>
                                    </form>

                                </div>

                            </div>
                        </div> <!-- /widget-content -->

                    </div> <!-- /widget -->

                </div>

            </div>
        </div>
    </div>

<?php include '../includes/footer.php';

