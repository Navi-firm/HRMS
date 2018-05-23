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

                <div class="col-md-9">

                    <div class="widget stacked ">

                        <div class="widget-header">
                            <i class="icon-user"></i>
                            <h3> Candidate <strong></strong></h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">

                            <?php

                            $app_id = $_GET['candidate_id'];

                            if(isset($app_id))
                            {
                                $candidate = "SELECT application_id, application_title, applicant_name, DATE_FORMAT(DATE(application_date), '%D %M %Y') AS app_date, applicant_contact, applicant_email, application_status, resume, cover_letter FROM applications WHERE application_id = " . $_GET['candidate_id'];
                                $query_result = mysql_query($candidate) or die (mysql_error($candidate));

                                $detail = mysql_fetch_assoc($query_result);
                            }
                            if(isset($_POST['btn-update'])) {
                                // variables for input data
                                $app_status = $_POST['app_status'];
                                // variables for input data

                                // sql query for update data into database
                                $sql_query = "UPDATE applications SET application_status = '$app_status' WHERE application_id = " . $_GET['candidate_id'];
                                // sql query for update data into database
                                $update = mysql_query($sql_query);

                                if($update){
                                    echo "<script> alert('Candidate Shortlisted'); </script>";
                                }else{
                                    echo "<script> alert('Error Shortlisting Candidate. !!'); </script>";
                                }
                            }
                            ?>
                            <div class="tabbable">

                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#profile" data-toggle="tab"><?php echo $detail['applicant_name']; ?></a></li>
                                </ul>

                                <br>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="profile">
                                        <br />
                                        <form id="edit-profile" class="form-horizontal col-md-8" method="post" action="">
                                            <fieldset>

                                                <div class="form-group">
                                                    <label for="firstname" class="col-md-4"><i class="icon-user"></i> Full Name </label>
                                                    <div class="col-md-8">
                                                        <h5><?php echo $detail['applicant_name']; ?> </h5>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->

                                                <div class="form-group">
                                                    <label class="col-md-4" for="lastname"><i class="icon-envelope"></i> Email </label>
                                                    <div class="col-md-8">
                                                        <h5><?php echo $detail['applicant_email']; ?></h5>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->

                                                <div class="form-group">
                                                    <label class="col-md-4" for="lastname"><i class="icon-phone"></i> Contact No</label>
                                                    <div class="col-md-8">
                                                        <h5><?php echo $detail['applicant_contact']; ?></h5>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->

                                                <hr>

                                                <div class="form-group">
                                                    <label class="col-md-4" for="lastname"><i class="icon-briefcase"></i> Job Vacancy</label>
                                                    <div class="col-md-8">
                                                        <h5><?php echo $detail['application_title']; ?></h5>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->

                                                <div class="form-group">
                                                    <label class="col-md-4" for="email"><i class="icon-calendar"></i> Date of application  </label>
                                                    <div class="col-md-8">
                                                        <h5><?php echo $detail['app_date']; ?></h5>
                                                    </div> <!-- /controls -->
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-4" for="resume"><i class="icon-file"></i> Resume </label>
                                                    <div class="col-md-8">
                                                        <a href="uploads/<?php echo $detail['resume'] ?>" target="_blank">Resume</a>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-4" for="resume"><i class="icon-file"></i> Cover Letter </label>
                                                    <div class="col-md-8">
                                                        <a href="uploads/<?php echo $detail['cover_letter'] ?>" target="_blank">Cover Letter</a>
                                                    </div>
                                                </div>

                                                <hr />

                                                <div class="form-group">
                                                    <label class="col-md-4" for="gender"><i class="icon-adjust"></i> Status </label>
                                                    <div class="col-md-8">

                                                        <p class="help-block"><?php echo $detail['application_status']; ?></p>

                                                        <select class="form-control" id="app_status" name="app_status">
                                                            <option >Select action</option>
                                                            <option value="Set Interview">Set Interview</option>
                                                            <option value="50 -50">50 - 50</option>
                                                        </select>
                                                    </div> <!-- /controls -->
                                                </div>

                                                <hr />

                                                <br />

                                                <div class="form-group">

                                                    <div class="col-md-offset-6">
                                                        <button type="submit" class="btn btn-primary" id="btn-update" name="btn-update"> Review Candidate </button>
                                                        <a href="applications.php" class="btn btn-default"><i class="icon-trash"></i> Cancel</a>
                                                    </div>
                                                </div> <!-- /form-actions -->
                                            </fieldset>
                                        </form>
                                    </div>

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
                                    <a href="tasks.php">
                                        <i class="icon-tasks"></i>
                                        My Tasks </a>
                                </li>
                                <li>
                                    <a href="events.php">
                                        <i class="icon-bookmark"></i>
                                        My Events </a>
                                </li>
                                <li>
                                    <a href="settings.php">
                                        <i class="icon-user"></i>
                                        My Profile </a>
                                </li>
                                <li>
                                    <a href="settings.php">
                                        <i class="icon-signout"></i>
                                        My Leave </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-flag-alt"></i>
                                        Help </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END MENU -->
                    </div>
                </div>
            </div>

            <div class="col-md-12">

                <div class="widget stacked ">

                    <div class="widget-header">
                        <i class="icon-user"></i>
                        <h3> Candidate's History <strong></strong></h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <?php include 'my_history.php'; ?>
                    </div>

                </div>

            </div>

        </div> <!-- /container -->

    </div> <!-- /main -->

<?php include '../includes/footer.php'; ?>