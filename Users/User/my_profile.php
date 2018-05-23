<?php
include '../includes/user_header.php';
?>
    <div class="main">

    <div class="container">

        <div class="row">

            <?php
            $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, first_name, pro_pic, middle_name, last_name, phone, linkedin, postal_code, county, country, address, postal_code, email, department, work_status, dob, marital_status, about, passport, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, position1, position2, company1, company2, location1, location2, duration1, duration2, referee1, referee2, contact1, contact2, duties1, duties2, DATE_FORMAT(created, '%d %M %Y') AS joined, institution_1, loc_1, award_1, title_1, date_1 FROM staff WHERE staff_id =". $user_data['user_id']);
            $user = mysql_fetch_array($applicant);

            include '../../processes/update_setting.php';
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
                                <a href="../Jobs/dashboard.php">
                                    <i class="icon-briefcase"></i> <b>FIND JOBs</b></a>
                            </li>
                            <li>
                                <a href="my_profile.php">
                                    <i class="icon-user"></i> VIEW  MY PROFILE </a>
                            </li>
                            <li>
                                <a href="settings.php">EDIT PROFILE </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-flag-alt"></i> HELP </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>

            </div>

            <div class="col-md-9">

                <div class="widget stacked">

                    <div class="widget-header">
                        <h3>My Profile</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <div class="form-horizontal">
                            <div class="col-xs-3">
                                <p class="text-center">
                                <p><img class="img-thumbnail img-responsive" width="150" height="180" src="../images/<?php echo $user['pro_pic']; ?>"></p>
                                </p>
                            </div>
                            <div class="col-xs-9">
                                <a href="settings.php" class="pull-right"><h5>Edit My Profile</h5></a>
                                <h3><?php echo $user['fullname']; ?>. </h3>
                                <h5 class="help-block">(<?php echo $user_data['username']; ?>)</h5>
                                <h6 class="help-block" style="color: #000000;"> Member Since <?php echo $user['joined']; ?></h6>
                                <hr />
                            </div>
                            <br>
                            <div class="col-md-12">
                                <br>
                                <h4>Overview</h4>
                                <p><?php echo $user['about']; ?></p>
                                <hr />
                                <br>
                                <h4>Work History</h4>
                                <div class="col-xs-4">
                                    <h5><?php echo $user['position1']; ?></h5>
                                </div>
                                <div class="col-md-8">
                                    <h5><?php echo $user['company1']; ?></h5>
                                    <h6><?php echo $user['location1']; ?></h6>
                                    <p class="help-block"><?php echo $user['duration1']; ?></p>
                                </div>
                                <div class="col-xs-4">
                                    <h5><?php echo $user['position2']; ?></h5>
                                </div>
                                <div class="col-md-8">
                                    <h5><?php echo $user['company2']; ?></h5>
                                    <h6><?php echo $user['location2']; ?></h6>
                                    <p class="help-block"><?php echo $user['duration2']; ?></p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <?php
                                $owner = $user_data['user_id'];
                                $applicant = mysql_query("SELECT certificate_id, owner, school1, year1, award1, location1, award_title1, file_name1, file1, DATE_FORMAT(created, '%d %M %Y') AS uploaded FROM certificate WHERE owner =". $user_data['user_id']);
                                $education = mysql_fetch_array($applicant);
                                ?>
                                <hr />
                                <div class="col-md-12">
                                    <hr />
                                    <h4>Education</h4>
                                    <div class="col-xs-4">
                                        <h5><?php echo $user['institution_1']; ?></h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><?php echo $user['award_1']; ?> <?php echo $user['title_1']; ?></h5>
                                        <h6><?php echo $user['date_1']; ?></h6>
                                        <p class="help-block"><?php echo $user['loc_1']; ?></p>
                                    </div>
                                    <div class="col-xs-4">
                                        <h5><?php echo $user['institution_1']; ?></h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><?php echo $user['award_1']; ?> <?php echo $user['title_1']; ?></h5>
                                        <h6><?php echo $user['date_1']; ?></h6>
                                        <p class="help-block"><?php echo $user['loc_1']; ?></p>
                                    </div>
                                    <div class="col-xs-4">
                                        <h5><?php echo $user['institution_1']; ?></h5>
                                    </div>
                                    <div class="col-md-8">
                                        <h5><?php echo $user['award_1']; ?> <?php echo $user['title_1']; ?></h5>
                                        <h6><?php echo $user['date_1']; ?></h6>
                                        <p class="help-block"><?php echo $user['loc_1']; ?></p>
                                    </div>
                                    <a href="settings.php" class="pull-right"><h5>Edit My Profile</h5></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>


<?php include '../includes/footer.php';