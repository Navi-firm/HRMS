<?php include '../includes/hod_header.php'; ?>
    <div class="main">

    <div class="container">

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
                        <a class="list-group-item  active" href="profile.php">
                            <span class="icon-user"></span> Profile <i class="icon-chevron-right pull-right"></i>
                        </a>
                        <a class="list-group-item" href="settings.php">
                            <span class="icon-cogs"></span> Settings
                        </a>
                    </div>

                </div>

            <?php
                    $user_id = $user_data['user_id'];

                    $user_details = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, first_name, pro_pic, middle_name, last_name, phone, linkedin, postal_code, county, country, address, postal_code, email, department, work_status, dob, marital_status, about, passport, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, position1, position2, company1, company2, location1, location2, duration1, duration2, referee1, referee2, contact1, contact2, duties1, duties2, DATE_FORMAT(created, '%d %M %Y') AS joined, institution_1, loc_1, award_1, title_1, date_1 FROM staff WHERE staff_id = '$user_id'") or die(mysql_error());
                    $user = mysql_fetch_assoc($user_details);
            ?>

            <div class="col-md-9">

                <div class="widget stacked">

                    <div class="widget-header">
                        <h3><i class="icon-user"></i> My Profile</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <div class="form-horizontal">
                            <div class="col-xs-3">
                                <p class="text-center">
                                    <img class="img-thumbnail img-responsive" width="150" height="180" src="../images/<?php echo $user['pro_pic']; ?>">
                                </p>
                            </div>
                            <div class="col-xs-9">
                                <a href="settings.php" class="pull-right"><h5>Edit My Profile</h5></a>
                                <h3><?php echo $user['fullname']; ?>. </h3>
                                <h5 class="help-block">(<?php echo $user_data['username']; ?>)</h5>
                                <h5 class="help-block"><?php echo $user['email']; ?> | <?php echo $user['phone']; ?> | <?php echo $user['location']; ?></h5>
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

                <div class="widget stacked">

                    <div class="widget-header">
                        <h3><i class="icon-cog"></i> Account Manager</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <div class="form-horizontal">
                            <div class="col-xs-4 text-center">
                                <div class="panel panel-info">
                                    <div class="panel-heading">EDIT PROFILE</div>
                                    <div class="panel-body">
                                        <h3><i class="icon-user text-danger"></i> </h3>
                                        <a class="btn btn-block btn-default" href="settings.php" title="">update profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 text-center">
                                <div class="panel panel-info">
                                    <div class="panel-heading">ACCOUNT SETTINGs</div>
                                    <div class="panel-body">
                                        <h3><i class="icon-cog text-info"></i> </h3>
                                        <a class="btn btn-block btn-default" href="resign.php" title="">manage account setting</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

      </div>
                </div>

            </div> <!-- /span8 -->

        </div> <!-- /container -->

    </div> <!-- /main -->

<?php include '../includes/footer.php'; ?>