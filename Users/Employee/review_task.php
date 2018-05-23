<?php
include '../includes/employee_header.php';
error_reporting(0);
?>
    <div class="main">

    <div class="container">
        <?php
        $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, phone, postal_code, CONCAT(county, ', ', country) AS location, gender, email, postal_code, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $user_data['user_id']);
        $user = mysql_fetch_array($applicant);
        ?>
        <div class="row">

            <div class="col-md-3">

                <div class="list-group">
                    <a class="list-group-item active" href="index.php">
                        <span class="icon-home"></span> Dashboard
                    </a>
                </div>

                <div class="panel panel-default">
                    <!-- SIDEBAR USERPIC -->
                    <br>
                    <p class="text-center">
                        <img class="img-thumbnail img-responsive" width="150" height="180" src="https://s3-eu-west-1.amazonaws.com/cdn.kuhustle.com/media/cache/f4/7c/f47cd2d6808133503c12ebdb6b9e70fc.png">
                    </p>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name text-center">
                            <h3><?php echo $user['fullname']; ?> <p class="help-block">(<?php echo $user_data['username']; ?>)</p> </h3>
                        </div>
                        <div class="profile-usertitle-job text-center">
                            <h4><?php echo $user_data['role']; ?></h4>
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
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
                                    Tasks </a>
                            </li>
                            <li>
                                <a href="events.php">
                                    <i class="icon-bookmark"></i>
                                    Events </a>
                            </li>
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
                    <?php
                    //Load table from database
                    $leave_requests = mysql_query("SELECT task_id, title, description, urgency, DATE_FORMAT(DATE(end_date), '%d %M %Y') AS due, time_format(TIMEDIFF(end_date, start_time), '%h:%m') AS duration, status, author, created FROM tasks WHERE task_id = ". $_GET['task_id']) or die(mysql_error());
                    $leave= mysql_fetch_assoc($leave_requests);
                    ?>

                    <div class="widget-header">
                        <h3>Review Leave</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <div class="tabbable">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#profile" data-toggle="tab"># <?php echo $leave['title']; ?> </a>
                                </li>
                            </ul>

                            <br>

                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">
                                    <hr />
                                    <div class="table-container">
                                        <?php
                                        include '../../processes/apply_leave.php';
                                        ?>
                                        <form id="edit-profile2" class="form-horizontal col-md-12" method="post" action="">
                                            <fieldset>
                                                <h4>Review <?php echo $leave['title']; ?></h4>
                                                <hr />
                                                <div class="form-group">
                                                    <label for="username" class="col-md-3"><i class="icon-bookmark"></i> Task Name </label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" id="username" value="<?php echo $leave['title']; ?>" name="title">
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                                <div class="form-group">
                                                    <label for="username" class="col-md-3"><i class="icon-time"></i> Urgency</label>
                                                    <div class="col-md-2">
                                                        <select class="form-control" id="certificate" name="urgency">
                                                            <option value="<?php echo $leave['urgency']; ?>"><?php echo $leave['urgency']; ?></option>
                                                            <option value="Normal">Normal</option>
                                                            <option value="Low">Low</option>
                                                            <option value="High">High</option>
                                                            <option value="Critical">Critical</option>
                                                        </select>
                                                    </div> <!-- /controls -->
                                                </div>
                                                <div class="form-group">
                                                    <label for="username" class="col-md-3"><i class="icon-calendar"></i> From Date </label>
                                                    <div id="datetimepicker4" class="col-md-4 input-group">
                                                        <input data-format="yyyy-MM-dd" type="date" id="start" class="form-control" name="start_date"><span class="input-group-addon"><i data-time-icon="icon-time" class="icon-calendar"></i></span>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                                <div class="form-group">
                                                    <label for="username" class="col-md-3"><i class="icon-calendar"></i> To Date </label>
                                                    <div id="datetimepicker4" class="col-md-4 input-group">
                                                        <input data-format="yyyy-MM-dd" type="date" id="demo1" class="form-control" name="end_date" onclick="javascript:NewCssCal('demo1','yyyyMMdd','','','','','future')"><span class="input-group-addon"><i data-time-icon="icon-time" class="icon-calendar"></i></span>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                                <div class="form-group">
                                                    <label for="username" class="col-md-3"><i class="icon-briefcase"></i> Task Details </label>
                                                    <div class="col-md-6">
                                                        <textarea name="description" class="form-control" rows="6" maxlength="350"><?php echo $leave['description']; ?></textarea>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                                <hr />
                                                <div class="form-group">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <div class="col-md-9">
                                                                <p class="text-success">STATUS (<?php echo $leave['status']; ?>)</p>
                                                                <button type="submit" class="btn btn-info"><i class="icon-pencil"></i> Review TASK </button>
                                                                <a href="tasks.php" class="btn btn-danger"><i class="icon-remove"></i> Cancel</a>
                                                            </div>
                                                        </div> <!-- /.form-group -->

                                                    </div>
                                                </div> <!-- /.form-group -->
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


<?php include '../includes/footer.php';