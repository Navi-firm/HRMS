<?php
include '../includes/jobs.php';
?>
    <div class="main">
        <div class="container">
            <br>
            <div class="row">
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
                                    $job_details = mysql_query("SELECT job_id, job_title, category, details, purpose, duration, advertisement, position, deadline, responsibilities, salary, location, agency, department, author, status, DATE_FORMAT(DATE(created), '%D %M %Y') AS posted, work_type, experience FROM jobs WHERE  job_id = " . $_GET['job']) or die(mysql_error());
                                    $details = mysql_fetch_array($job_details);

                                    $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, pro_pic, first_name, middle_name, last_name, phone, linkedin, postal_code, county, country, address, postal_code, email, department, work_status, dob, marital_status, about, passport, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, position1, position2, company1, company2, location1, location2, duration1, duration2, referee1, referee2, contact1, contact2, duties1, duties2, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $user_data['user_id']);
                                    $user = mysql_fetch_array($applicant);

                                    $author = $user_data['user_id'];
                                    //Load table from database
                                    $jobs = mysql_query("SELECT application_id, application_title, applicant_name, application_status, DATE_FORMAT(application_date, '%d %M %Y') AS applied, DATE_FORMAT(interview_date, '%d %M %Y') AS interview_date, DATE_FORMAT(deadline, '%d %M %Y') AS deadline FROM applications WHERE applicant_name = '" . $user['fullname'] . "' AND interview_date > CURDATE() ORDER BY application_date DESC ") or die(mysql_error());
                                    $my_application = mysql_fetch_array($jobs);

                                    ///upload cover letter
                                    $my_email = $user['email'];
                                    $job_title = $details['job_title'];

                                    $applied = mysql_query("SELECT applicant_email, application_title, application_id FROM applications WHERE applicant_email = '$my_email' AND application_title = '$job_title'") or die(mysql_error());
                                    $count = mysql_num_rows($applied);

                                    if($count == 1)
                                    {
                                        echo "<div class='alert alert-info fade in'>
                                              <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                              <strong>Alert!</strong> You already applied to this Job</div>";
                                    }

                                    if(isset($_POST["btn-apply"])) {

                                    $applicant = $user['fullname'];
                                    $email = $user['email'];
                                    $phone = $user['phone'];
                                    $address = $user['address'];
                                    $location = $_POST['state'];
                                    $job_title = $details['job_title'];
                                    $cover_letter = $_POST['cover_letter'];
                                    $summary = $_POST['summary'];
                                    $deadline = $details['deadline'];
                                    $department = $details['department'];
                                    $hiring_manager = $details['author'];

                                    //File properties
                                    $file = rand(1000,2000000)."-".$_FILES['resume']['name'];
                                    $file_loc = $_FILES['resume']['tmp_name'];
                                    $file_size = $_FILES['resume']['size'];
                                    $file_type = $_FILES['resume']['type'];
                                    $folder = "../resume/";
                                    $new_size = $file_size/1024;
                                    $new_file_name = strtolower($file);
                                    $final_file = str_replace(' ','-',$new_file_name);
                                    //move_uploaded_file
                                if(move_uploaded_file($file_loc,$folder.$final_file)) {
                                    //Apply Job
                                $apply = mysql_query("INSERT INTO applications (application_title, applicant_name, applicant_contact, applicant_email, resume, resume_type, resume_size, cover_letter, summary, hiring_manager, deadline, department, location)  VALUES ('$job_title','$applicant','$phone','$email','$final_file','$file_type','$new_size','$cover_letter','$summary','$hiring_manager','$deadline','$department','$location')");
                                if($apply)
                                {
                                        echo "<div class='alert alert-success fade in'>
                                              <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                              <strong>Success!</strong> Job Application successful</div>
                                              <script>
                                                window.location.href='dashboard.php';
                                              </script>";
                                }
                                else
                                {
                                    echo "<div class='alert alert-danger fade in'>
                                                  <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                                  <strong>Error!</strong> Applying for Job</div>";
                                }
                                }}

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
                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['address'];?>" name="address" placeholder="eg. 2514 - 00100 Nairobi Kenya">
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->
                                            <div class="form-group">
                                                <label for="username" class="col-md-3 text-right"><i class="icon-briefcase"></i> City, State * </label>
                                                <div class="col-md-4">
                                                    <input type="text" class="form-control" id="zip_code" value="" name="state" maxlength="100" placeholder="eg. Nairobi, Kenya">
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->
                                            <hr />
                                            <h4>Vacancy Details</h4>
                                            <br>
                                            <div class="form-group">
                                                <label for="username" class="col-md-3 text-right"><i class="icon-briefcase"></i> Job Vacancy </label>
                                                <div class="col-md-9">
                                                    <input type="text" class="form-control" id="username" disabled value="<?php echo $details['job_title'];?>" name="job_title">
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->
                                            <div class="form-group">
                                                <label for="username" class="col-md-3 text-right"><i class="icon-file-alt"></i> Cover Letter </label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" name="cover_letter" id="reason" rows="25" cols="80" placeholder="State your reason for leaving"></textarea>
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
                                                            <button type="submit" class="btn btn-primary" name="btn-apply"><i class="icon-file-alt"></i> Submit </button>
                                                            <a href="view_job.php" class="btn btn-default"><i class="icon-trash"></i> Cancel</a>
                                                        </div>
                                                        <div class="col-md-6">

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

                <div class="col-md-3">

                    <div class="list-group">
                        <a class="list-group-item active" href="dashboard.php">
                            <span class="icon-home"></span> Find Job
                        </a>
                    </div>

                    <?php
                    if(logged_in() === true){
                        ?>

                        <div class="panel-default panel">
                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name text-center">

                                    <br>
                                    <p><img class="img-thumbnail img-responsive" width="150" height="180" src="../images/<?php echo $user['pro_pic']; ?>"></p>
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
                                        <?php
                                        if($user_data['role'] == 'Employee'){ ?>
                                            <a href="../Employee/index.php">My Account</a>
                                        <?php }
                                        elseif($user_data['role'] == 'Applicant'){ ?>
                                            <a href="../User/index.php">My Account</a>
                                        <?php }
                                        elseif($user_data['role'] == 'HOD'){ ?>
                                            <a href="../HOD/index.php">My Account</a>
                                        <?php }
                                        elseif($user_data['role'] == 'admin'){ ?>
                                            <a href="../Admin/index.php">My Account</a>
                                        <?php }
                                        ?>
                                    </li>
                                </ul>
                            </div>
                            <!-- END MENU -->
                        </div>

                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
<?php include '../includes/footer.php';