<?php include '../includes/hod_header.php';?>

    <div class="main">

        <div class="container">

            <?php
            $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, phone, postal_code, pro_pic, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $user_data['user_id']);
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

                    <div class="widget stacked ">

                        <div class="widget-header">
                            <i class="icon-user"></i>
                            <h3><strong>Interview Summary </strong></h3>
                        </div> <!-- /widget-header -->



                        <div class="widget-content">
                            <?php

                            $app_id = $_GET['interview_id'];

                            if(isset($app_id))
                            {
                                $candidate = "SELECT applicant, interview_date, interview_id, position, email, hiring_manager, subject, department, DATE_FORMAT(interview_date, '%d %M %Y') AS interview_date, status FROM interview WHERE interview_id = " . $_GET['interview_id'];
                                $query_result = mysql_query($candidate) or die (mysql_error($candidate));

                                if(mysql_num_rows($query_result) == 0){
                                    echo 'Query error' . mysql_error($query_result);
                                }else{
                                    $detail = mysql_fetch_assoc($query_result);
                                }
                            }

                            ?>
                            <div class="tabbable">

                                <?php include '../../processes/interview_candidate.php'; ?>

                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#profile" data-toggle="tab"><?php echo $detail['applicant']; ?></a></li>
                                </ul>

                                <br>

                                <div class="tab-content">
                                    <div class="tab-pane active" id="profile">
                                        <br />
                                        <form id="edit-profile" class="form-horizontal" method="post" action="">
                                            <fieldset>
                                                <div class="form-group">
                                                    <label for="firstname" class="col-md-4"><i class="icon-user"></i> Full Name </label>
                                                    <div class="col-md-8">
                                                        <h5><?php echo $detail['applicant']; ?> </h5>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->

                                                <div class="form-group">
                                                    <label class="col-md-4" for="lastname"><i class="icon-envelope"></i> Email </label>
                                                    <div class="col-md-8">
                                                        <h5><?php echo $detail['email']; ?></h5>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->

                                                <div class="form-group">
                                                    <label class="col-md-4" for="lastname"><i class="icon-calendar"></i> Interview Date </label>
                                                    <div class="col-md-8">
                                                        <h5><?php echo $detail['interview_date']; ?></h5>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->

                                                <hr>

                                                <div class="form-group">
                                                    <label class="col-md-4" for="lastname"><i class="icon-briefcase"></i> Job Vacancy</label>
                                                    <div class="col-md-8">
                                                        <h5><?php echo $detail['position']; ?></h5>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->

                                                <div class="form-group">
                                                    <label class="col-md-4" for="email"><i class="icon-user"></i> Hiring Manager </label>
                                                    <div class="col-md-8">
                                                        <h5><?php echo $detail['hiring_manager']; ?></h5>
                                                    </div> <!-- /controls -->
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-4" for="email"><i class="icon-home"></i> Department </label>
                                                    <div class="col-md-8">
                                                        <h5><?php echo $detail['department']; ?></h5>
                                                    </div> <!-- /controls -->
                                                </div>
                                                <hr />

                                                <h3>Interview Summary Details </h3>
                                                <br>

                                                <div class="form-group">
                                                    <label class="col-xs-3"></label>
                                                    <div class="input-group col-xs-9">
                                                        <div class="col-xs-2">
                                                            <label class="col-xs-12">1 = Poor</label>
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <label class="col-xs-12">2 = Fair</label>
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <label class="col-xs-12">3 = Satisfactory</label>
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <label class="col-xs-12">4 = Good</label>
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <label class="col-xs-12">5 = Excellent</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-xs-3">Oral Interview</label>
                                                    <div class="input-group col-xs-9">
                                                        <div class="col-xs-2">
                                                            <label class="col-xs-3">1</label>
                                                            <input class="" type="radio" name="rating" value="1">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <label class="col-xs-3">2</label>
                                                            <input class="" type="radio" name="rating" value="2">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <label class="col-xs-3">3</label>
                                                            <input class="" type="radio" name="rating" value="3">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <label class="col-xs-3">4</label>
                                                            <input class="" type="radio" name="rating" value="4">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <label class="col-xs-3">5</label>
                                                            <input class="" type="radio" name="rating" value="5">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-xs-3">Written Test</label>
                                                    <div class="input-group col-xs-9">
                                                        <div class="col-xs-2">
                                                            <label class="col-xs-3">1</label>
                                                            <input class="" type="radio" name="written" value="1">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <label class="col-xs-3">2</label>
                                                            <input class="" type="radio" name="written" value="2">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <label class="col-xs-3">3</label>
                                                            <input class="" type="radio" name="written" value="3">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <label class="col-xs-3">4</label>
                                                            <input class="" type="radio" name="written" value="4">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <label class="col-xs-3">5</label>
                                                            <input class="" type="radio" name="written" value="5">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-xs-3">Total Score</label>
                                                    <div class="input-group col-xs-9">
                                                        <div class="col-xs-2">
                                                            <label class="col-xs-3">1</label>
                                                            <input class="" type="radio" name="total" value="1">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <label class="col-xs-3">2</label>
                                                            <input class="" type="radio" name="total" value="2">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <label class="col-xs-3">3</label>
                                                            <input class="" type="radio" name="total" value="3">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <label class="col-xs-3">4</label>
                                                            <input class="" type="radio" name="total" value="4">
                                                        </div>
                                                        <div class="col-xs-2">
                                                            <label class="col-xs-3">5</label>
                                                            <input class="" type="radio" name="total" value="5">
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr />

                                                <h3>Comments and Recommendation </h3>
                                                <br>

                                                <div class="form-group">
                                                    <label class="col-md-3" for="gender"><i class="icon-file-text"></i> Review Summary </label>
                                                    <div class="col-md-9">
                                                        <textarea class="form-control" name="application_summary" id="reason" rows="25" cols="80" placeholder="State your reason for leaving"></textarea>
                                                    </div> <!-- /controls -->
                                                </div>

                                                <hr />

                                                <br />

                                                <div class="form-group">

                                                    <div class="col-md-offset-1">
                                                        <button type="submit" class="btn btn-primary" id="btn-update" name="btn-update"> Submit</button>
                                                        <a href="employ.php" class="btn btn-default"><i class="icon-trash"></i> Cancel</a>
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
            </div>

        </div> <!-- /container -->

    </div> <!-- /main -->

<?php include '../includes/footer.php';