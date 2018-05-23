<?php
include '../includes/user_header.php';
?>
    <div class="main">

    <div class="container">

        <div class="row">

            <?php
            $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, first_name, pro_pic, middle_name, last_name, phone, linkedin, postal_code, county, country, address, postal_code, email, department, work_status, dob, marital_status, about, passport, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, position1, position2, company1, company2, location1, location2, duration1, duration2, referee1, referee2, contact1, contact2, duties1, duties2, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $user_data['user_id']);
            $user = mysql_fetch_array($applicant);
            ?>

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
                            <p><img class="img-thumbnail img-responsive" width="150" height="180" src="../images/<?php echo $user['pro_pic']; ?>"></p>
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
                            <li>
                                <a href="settings.php">
                                    <i class="icon-user"></i>
                                    My Profile </a>
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

            <div class="col-md-9">

                <div class="widget stacked">

                    <div class="widget-header">
                        <h3>#Job</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">

                        <div class="tab-pane profile active" id="profile">
                            <?php
                            //check to see if logged in
                            if(!logged_in()){
                                echo "<div class='alert alert-info fade in'>
                                    <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                    <strong><h4>NOTICE !</h4></strong> You are currently not Logged in. Please Try  <strong><a href='../../login.php' class='btn btn-success'> Signing In</a></strong> or Continue <strong><a href='../../index.php'>Searching</a></strong>. </div>";
                            }else{
                                $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, phone, postal_code, CONCAT(county, ', ', country) AS location, gender, email, postal_code FROM staff WHERE staff_id =". $user_data['user_id']);
                                $user = mysql_fetch_array($applicant);

                                ?>
                                <form id="edit-profile2" class="form-horizontal col-md-12" method="post" action="" enctype="multipart/form-data">
                                    <fieldset>
                                        <h4>Applicant Details</h4>
                                        <hr />
                                        <div class="form-group">
                                            <label for="username" class="col-md-3 text-right"><i class="icon-user"></i> Fullname *</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="username" disabled value="<?php echo $user['fullname'];?>" name="full_name" placeholder="eg. John H Doe">
                                            </div> <!-- /controls -->
                                        </div>
                                        <div class="form-group">
                                            <label for="username" class="col-md-3 text-right"><i class="icon-envelope"></i> Email </label>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control" id="username" disabled value="<?php echo $user['email'];?>" name="email" placeholder="eg. johndoe@mail.com">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="form-group">
                                            <label for="username" class="col-md-3 text-right"><i class="icon-phone"></i> Contact </label>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control" id="username" disabled value="<?php echo $user['phone'];?>" name="contact" placeholder="eg. +254 705 000000">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="form-group">
                                            <label for="username" class="col-md-3 text-right"><i class="icon-tags"></i> Address </label>
                                            <div class="col-md-6">
                                                <input type="email" class="form-control" id="username" value="<?php echo $user['postal_code'];?>" name="address" placeholder="eg. 2514 - 00100 Nairobi Kenya">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="form-group">
                                            <label for="username" class="col-md-3 text-right"><i class="icon-briefcase"></i> Zip Code * </label>
                                            <div class="col-md-2">
                                                <input type="number" class="form-control" id="zip_code" value="<?php echo $user['address'];?>" name="zip_code" maxlength="5" placeholder="eg. 254">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="form-group">
                                            <label for="username" class="col-md-3 text-right"><i class="icon-briefcase"></i> City, State * </label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="zip_code" value="<?php echo $user['location'];?>" name="zip_code" maxlength="100" placeholder="eg. Nairobi, Kenya">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <hr />
                                        <h4>Vacancy Details</h4>
                                        <?php
                                        $applicant = $user['fullname'];
                                        $job_details = mysql_query("SELECT application_id, application_title, applicant_name, application_status, location, DATE_FORMAT(application_date, '%d %M %Y') AS applied, DATE_FORMAT(interview_date, '%d %M %Y') AS interview_date, DATE_FORMAT(deadline, '%d %M %Y') AS deadline FROM applications WHERE applicant_name = '$applicant'") or die(mysql_error());
                                        $details = mysql_fetch_array($job_details);

                                        ?>
                                        <br>
                                        <div class="form-group">
                                            <label for="username" class="col-md-3 text-right"><i class="icon-briefcase"></i> Job Vacancy </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="username" disabled value="<?php echo $details['application_title'];?>" name="job_title">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <div class="form-group">
                                            <label for="username" class="col-md-3 text-right"><i class="icon-file-alt"></i> Cover Letter </label>
                                            <div class="col-md-9">
                                                <input type="file" class="form-control" name="cover_letter" id="cover_letter">
                                                <p class="help-block">Accepts .docx, .doc, .odt, .pdf, .rtf, .txt up to 1MB</p>
                                            </div> <!-- /controls -->
                                        </div>
                                        <div class="form-group">
                                            <label for="username" class="col-md-3 text-right"><i class="icon-file-alt"></i> Resume </label>
                                            <div class="col-md-9">
                                                <input type="file" class=" form-control" name="resume" id="resume">
                                                <p class="help-block">Accepts .docx, .doc, .odt, .pdf, .rtf, .txt up to 1MB</p>
                                            </div> <!-- /controls -->
                                        </div>
                                        <div class="form-group">
                                            <label for="username" class="col-md-3 text-right"><i class="icon-briefcase"></i> Summary </label>
                                            <div class="col-md-9">
                                                <textarea name="summary" class="form-control" rows="6" maxlength="550" placeholder="Describe why you are perfect for this posistion"></textarea>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->
                                        <hr />
                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <div class="col-md-6">
                                                        <button type="submit" class="btn btn-primary"><i class="icon-file-alt"></i> Accept and Submit Proposal </button>
                                                    </div>
                                                    <div class="col-md-6 pull-right">
                                                        <a href="view_job.php" class="btn btn-danger"><i class="icon-trash"></i> Cancel</a>
                                                    </div>
                                                </div> <!-- /.form-group -->

                                            </div>
                                        </div> <!-- /.form-group -->
                                    </fieldset>
                                </form>
                            <?php } ?>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>


<?php include '../includes/footer.php';