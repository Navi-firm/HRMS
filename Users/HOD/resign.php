<?php
include '../includes/hod_header.php';
?>

    <div class="main">
        <div class="container">
            <?php
            $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, phone, postal_code, about, pro_pic, CONCAT(county, ', ', country) AS location, gender, hire_date, email, postal_code, department, address, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $user_data['user_id']);
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
                        <a class="list-group-item" href="tasks.php">
                            <span class="icon-tasks"></span> Tasks
                        </a>
                        <a class="list-group-item" href="profile.php">
                            <span class="icon-user"></span> Profile
                        </a>
                        <a class="list-group-item active" href="settings.php">
                            <span class="icon-cogs"></span> Settings <i class="icon-chevron-right pull-right"></i>
                        </a>
                    </div>

                </div>

                <div class="col-md-9">

                    <div class="widget stacked">

                        <div class="widget-header">
                            <h3><i class="icon-user"></i> Resignation Request</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <div class="tab-pane active" id="profile">
                                <h4>Resignation Request</h4>
                                <hr>
                                <br />
                                <?php include "../../processes/resign_request.php";
                                //Check if already applied before
                                $my_id = $user_data['user_id'];
                                $request = mysql_query("SELECT resign_id, ref_no, applicant, department, email, phone, title, DATE_FORMAT(exit_date, '%d %M %Y') AS exit_date, DATE_FORMAT(last_date, '%d %M %Y') AS last_date, DATE_FORMAT(hire_date, '%d %M %Y') AS hire_date, reason, DATE_FORMAT(created, '%d %M %Y') AS created, status FROM resign_request WHERE ref_no = '$my_id'") or die(mysql_error()) ;
                                $applicant = mysql_fetch_array($request);

                                $applied = mysql_query("SELECT COUNT(resign_id) FROM resign_request WHERE ref_no = '$my_id'");
                                $count = mysql_num_rows($applied);

                                if($count = 0){
                                    echo "<div class='alert alert-info fade in'>
                                      <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                      <strong>Alert !</strong> You already applied for resignation</div>";
                                    ?>
                                    <p><?php echo $applicant['created']; ?></p>
                                    <br>
                                    <p><?php echo $applicant['applicant']; ?>, <span class="pull-right">Hire Date : <?php echo $applicant['hire_date']; ?></span></p>
                                    <p><?php echo $applicant['department']; ?>,<span class="pull-right">Exit Date : <?php echo $applicant['exit_date']; ?></span></p>
                                    <p><?php echo $applicant['email']; ?>,</p>
                                    <p><?php echo $applicant['phone']; ?>.</p>
                                    <br><br>
                                    <p><?php echo $applicant['title']; ?></p>
                                    <br>
                                    <p>Dear Sir/Madam/Dr. , </p>
                                    <p><?php echo $applicant['reason']; ?></p>
                                    <?php
                                } else{
                                    ?>
                                    <form id="add_job" class="form-horizontal col-md-12" action="" method="post">
                                        <fieldset>

                                            <div class="form-group">
                                                <label for="job_vacancy" class="col-md-3 form-inline"> Full Name* </label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" id="job_name" value="<?php echo $user['fullname']; ?>" name="full_name" placeholder="" disabled>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label for="job_vacancy" class="col-md-3"> Ref No. * </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" id="" value="<?php echo $user_data['user_id']; ?>" name="ref_no" disabled>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label for="job_vacancy" class="col-md-3"> Department * </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" id="department" value="<?php echo $user['department']; ?>" name="department" disabled>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label for="job_vacancy" class="col-md-3"> Email * </label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="department" value="<?php echo $user['email']; ?>" name="email" disabled>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label for="job_vacancy" class="col-md-3"> Phone * </label>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control" id="department" value="<?php echo $user['phone']; ?>" name="phone" disabled>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label for="job_vacancy" class="col-md-3"> Title * </label>
                                                <div class="col-md-7">
                                                    <input type="text" class="form-control" id="department" value="" name="title">
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label for="job_vacancy" class="col-md-3"> Exit Date * </label>
                                                <div class="col-md-5">
                                                    <input id="datepicker" class="form-control" value="" name="exit_date" placeholder="01/12/2016"/>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label for="job_vacancy" class="col-md-3"> Last Work Day * </label>
                                                <div class="col-md-5">
                                                    <input id="datepicker1" class="form-control" value="" name="last_date" placeholder="01/12/2016"/>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label for="job_vacancy" class="col-md-3"> First Work Day * </label>
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control col-md-3" id="job_name" value="<?php echo $user['hire_date']; ?>" name="hire_date" placeholder="" disabled>
                                                    <p class="help-block">First Day of employment </p>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label class="col-md-3" for="lastname"> Reason * </label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" name="reason" id="reason" rows="15" cols="80" placeholder="State your reason for leaving"></textarea>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <hr />

                                            <br />

                                            <div class="form-group">

                                                <div class=" col-md-12">
                                                    <button type="submit" name="post" onclick="javascript:send_post()" class="btn btn-primary">Save</button>
                                                    <a href="profile.php" class="btn btn-default"><i class="icon-trash"></i> Cancel</a>
                                                </div>
                                            </div> <!-- /form-actions -->
                                        </fieldset>
                                    </form>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

<?php include '../includes/footer.php';
