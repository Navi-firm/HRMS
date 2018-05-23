<?php
include '../includes/jobs.php';
error_reporting(0);
?>
    <div class="main">
        <div class="container">
            <br>
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-body">
                    <?php
                    //Load table from database
                    $job_posts = mysql_query("SELECT job_id, job_title, category, work_type, details, purpose, responsibilities, duration, experience, status, location, position, DATE_FORMAT(deadline, '%d %b %Y') AS deadline, DATE_FORMAT(DATE(created), '%d %b %Y') AS posted FROM jobs WHERE job_id = " . $_GET['job']) or die(mysql_error());
                    $row = mysql_fetch_assoc($job_posts);
                    ?>
                            <br>
                            <div class="col-md-12">
                            <h2 style="color: #000000;"><?php echo $row['job_title']; ?></h2>
                            <h5 style="color: #3333FF;"><strong><?php echo $row['category']; ?></strong></h5>
                            </div>
                            <div class="col-md-9">
                                <p style=""><strong><?php echo $row['work_type']; ?> | <?php echo $row['location']; ?> | Posted on <?php echo $row['posted']; ?></strong></p>
                            </div>
                            <div class="col-md-3">
                                <h5 class="text-primary pull-right"><a href="dashboard.php"><i class="icon-arrow-left"></i> BACK</a></h5>
                            </div>
                            <hr />
                            <div class="col-md-9">
                                <hr />
                                <p style=""><?php echo $row['purpose']; ?></p>
                                <h5 style="color: #3333FF;"><strong>Job Description</strong></h5>
                                <p style=""><?php echo $row['details']; ?></p>
                                <h5 style="color: #3333FF;"><strong>Requirements</strong></h5>
                                <p style=""><?php echo $row['responsibilities']; ?></p>
                                <hr />
                            </div>
                            <div class="col-md-9">
                                <h5 style="color: #3333FF;"><strong>JOB SUMMARY</strong></h5>
                                <br>
                                <div class="col-md-4">
                                    <h6 style="color: #3333FF;"><strong>Location</strong></h6>
                                    <p class="help-block"><?php echo $row['location']; ?></p>
                                </div>
                                <div class="col-md-4">
                                    <h6 style="color: #3333FF;"><strong>Job type</strong></h6>
                                    <p class="help-block"><?php echo $row['work_type']; ?></p>
                                </div>
                                <div class="col-md-4">
                                    <h6 style="color: #3333FF;"><strong>Experience</strong></h6>
                                    <p class="help-block"><?php echo $row['experience']; ?></p>
                                </div>
                                <div class="col-md-4">
                                    <h6 style="color: #3333FF;"><strong>Contract</strong></h6>
                                    <p class="help-block"><?php echo $row['duration']; ?></p>
                                </div>
                                <div class="col-md-4">
                                    <h6 style="color: #3333FF;"><strong>Position</strong></h6>
                                    <p class="help-block"><?php echo $row['position']; ?></p>
                                </div>
                                <div class="col-md-4">
                                    <h6 style="color: #3333FF;"><strong>Deadline</strong></h6>
                                    <p class="help-block"><?php echo $row['deadline']; ?></p>
                                </div>

                                <div class="col-md-6">
                                    <div class="list-group">
                                        <hr />
                                        <a href="apply_job.php?job=<?php echo $row['job_id']; ?>" class="btn btn-block btn-success btn-large">APPLY NOW</a>
                                    </div>
                                </div>

                                <hr />
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <br>
                    <div class="list-group">
                        <a href="apply_job.php?job=<?php echo $row['job_id']; ?>" class="btn btn-block btn-success btn-large">APPLY NOW</a>
                    </div>

                    <?php

                    $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, first_name, pro_pic, middle_name, last_name, phone, linkedin, postal_code, county, country, address, postal_code, email, department, work_status, dob, marital_status, about, passport, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, position1, position2, company1, company2, location1, location2, duration1, duration2, referee1, referee2, contact1, contact2, duties1, duties2, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $user_data['user_id']);
                    $user = mysql_fetch_array($applicant);

                    if(logged_in() === true){
                        ?>
                        <div class="list-group">
                            <a class="list-group-item active" href="../User/index.php">
                                <span class="icon-home"></span> Dashboard
                            </a>
                        </div>
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
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php include '../includes/footer.php';