<?php
include '../includes/hod_header.php';
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
                                <a href="my_profile.php">
                                    <i class="icon-user"></i>
                                    My Profile </a>
                            </li>
                            <li>
                                <a href="settings.php">
                                    <i class="icon-pencil"></i>
                                    Edit Profile </a>
                            </li>
                            <li>
                                <a href="my_leave.php">
                                    <i class="icon-signout"></i>
                                    Request Leave </a>
                            </li>
                            <li>
                                <a href="employee.php">
                                    <i class="icon-bar-chart"></i>
                                    Performance Review </a>
                            </li>
                            <li>
                                <a href="jobs.php">
                                    <i class="icon-briefcase"></i>
                                    Post a Job </a>
                            </li>
                            <li>
                                <a href="events.php">
                                    <i class="icon-calendar"></i>
                                    My Calendar </a>
                            </li>
                            <li>
                                <a href="help.php">
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
                        <h3>Leave Manager</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">

                        <div class="col-xs-4 text-center">
                            <div class="panel panel-info">
                                <div class="panel-heading">TOTAL DAYS</div>
                                <div class="panel-body">
                                    <h3><i class="icon-time text-success"></i></h3>
                                    <p class="help-block">DAYS</p>
                                    <p class="text-info">All Leave Days Entitled</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 text-center">
                            <div class="panel panel-danger">
                                <div class="panel-heading">DAYS TAKEN</div>
                                <div class="panel-body">
                                    <h3><i class="icon-minus-sign text-success"></i></h3>
                                    <p class="help-block">DAYS</p>
                                    <p class="text-info">All Leave Days Taken</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4 text-center">
                            <div class="panel panel-success">
                                <div class="panel-heading">REMAINING</div>
                                <div class="panel-body">
                                    <h3><i class="icon-plus-sign text-success"></i></h3>
                                    <p class="help-block">DAYS</p>
                                    <p class="text-info">All Leave Days Remaining</p>
                                </div>
                            </div>
                        </div>

                        <br>
                        <br>
                        <hr>

                        <hr />
                        <div class="tabbable">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#profile" data-toggle="tab">NEW REQUEST</a>
                                </li>
                                <li>
                                    <a href="#balance" data-toggle="tab">REQUESTED</a>
                                </li>
                                <li>
                                    <a href="#taken" data-toggle="tab">TAKEN</a>
                                </li>
                                <li>
                                    <a href="#progress" data-toggle="tab">IN PROGRESS</a>
                                </li>
                                <li>
                                    <a href="#view" data-toggle="tab">BALANCE</a>
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
                                                <h4>Apply Leave</h4>
                                                <hr />
                                                <div class="form-group">
                                                    <label for="username" class="col-md-3"><i class="icon-user"></i> Your Name </label>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control" id="username" value="<?php echo $user['fullname'];?>" name="applicant" disabled>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                                <div class="form-group">
                                                    <label for="username" class="col-md-3">Leave Type</label>
                                                    <div class="col-md-4">
                                                        <select class="form-control" id="certificate" name="leave_type">
                                                            <option>-------------</option>
                                                            <option value="Annual">Annual</option>
                                                            <option value="Maternity">Maternity</option>
                                                            <option value="Sick">Sick</option>
                                                            <option value="Study">Study</option>
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
                                                    <label for="username" class="col-md-3"><i class="icon-time"></i> Number of Days </label>
                                                    <div class="col-md-4">
                                                        <input type="number" class="form-control" id="username" value="" name="duration" disabled>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                                <div class="form-group">
                                                    <label for="username" class="col-md-3">Department</label>
                                                    <div class="col-md-4">
                                                        <select class="form-control" id="certificate" name="department">
                                                            <option>-------------</option>
                                                            <?php
                                                            $department_details = mysql_query("SELECT department_name FROM department ORDER BY department_name ASC ") or die(mysql_error());
                                                            While($row = mysql_fetch_assoc($department_details)){ ?>
                                                                <option><?php echo $row['department_name']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div> <!-- /controls -->
                                                </div>
                                                <div class="form-group">
                                                    <label for="username" class="col-md-3"><i class="icon-briefcase"></i> Reason </label>
                                                    <div class="col-md-6">
                                                        <textarea name="summary" class="form-control" rows="6" maxlength="350"></textarea>
                                                    </div> <!-- /controls -->
                                                </div> <!-- /control-group -->
                                                <hr />
                                                <div class="form-group">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <div class="col-md-6">
                                                                <button type="submit" class="btn btn-info"><i class="icon-file-alt"></i> REQUEST LEAVE </button>
                                                            </div>
                                                        </div> <!-- /.form-group -->

                                                    </div>
                                                </div> <!-- /.form-group -->
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane" id="balance">
                                    <div class="table-container">
                                        <table class="table table-striped">
                                            <thead>
                                            &#32;
                                            <tr>&#32;
                                                <th class="title">TYPE</th>
                                                &#32;
                                                <th class="bid_end_date">DATES</th>
                                                &#32;
                                                <th class="budget">DAYS</th>
                                                &#32;
                                                <th class="bids">ACTION</th>
                                                &#32;
                                            </tr>
                                            &#32;
                                            </thead>
                                            &#32;
                                            <?php
                                            //Load table from database
                                            $leave_requests = mysql_query("SELECT leave_id, leave_type, applicant, DATE_FORMAT(DATE(start_date), '%d/%m/%y') AS start, DATE_FORMAT(DATE(end_date), '%d/%m/%y') AS end_d, DATEDIFF(end_date, start_date) AS duration, status, department, description FROM leave_request WHERE applicant = '". $user_data['user_id'] ."' AND status = 'Pending' OR status = 'Cancelled' AND start_date >= CURDATE() ORDER BY applied_date DESC") or die(mysql_error());

                                            if(mysql_num_rows($leave_requests) != 0){

                                                While($row = mysql_fetch_assoc($leave_requests)){ ?>
                                                    <tbody>
                                                    &#32;
                                                    <tr class="odd">
                                                        &#32;
                                                        <td class="title">
                                                            <p class="text-info">
                                                                <?php echo $row['leave_type']; ?> (<?php echo $row['status']; ?>)
                                                            </p>
                                                        </td>
                                                        &#32;
                                                        <td class="bid_end_date">
                                                            <?php echo $row['start']; ?> - <?php echo $row['end_d']; ?>
                                                        </td>
                                                        &#32;
                                                        <td class="budget">
                                                            <p class="text-success"><?php echo $row['duration']; ?> Days</p>
                                                        </td>
                                                        &#32;
                                                        <td class="bids">
                                                            <a href="leave_requests.php?leave_id=<?php echo $row['leave_id']; ?>" class="btn btn-info btn-sm"><i class="icon-pencil"></i></a>
                                                            <a href="" class="btn btn-danger btn-sm"><i class="icon-remove"></i></a>
                                                        </td>
                                                        &#32;
                                                    </tr>
                                                    &#32;
                                                    </tbody>
                                                    &#32;
                                                    <tfoot>

                                                    </tfoot>
                                                <?php } ?>

                                            <?php }else {?>

                                                <div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                                                    <strong>Oh Snap! </strong>No Records could be found</div>
                                            <?php }

                                            ?>
                                        </table>
                                        <ul class="pagination">
                                            <li class="cardinality">
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="tab-pane" id="taken">
                                    <div class="table-container">
                                        <table class="table table-striped">
                                            <thead>
                                            &#32;
                                            <tr>&#32;
                                                <th class="title">TYPE</th>
                                                &#32;
                                                <th class="bid_end_date">DATES</th>
                                                &#32;
                                                <th class="budget">DAYS</th>
                                                &#32;
                                                <th class="bids">STATUS</th>
                                                &#32;
                                            </tr>
                                            &#32;
                                            </thead>
                                            &#32;
                                            <?php
                                            //Load table from database
                                            $leave_requests = mysql_query("SELECT leave_id, leave_type, applicant, DATE_FORMAT(DATE(start_date), '%d/%m/%y') AS start, DATE_FORMAT(DATE(end_date), '%d/%m/%y') AS end_d, DATEDIFF(end_date, start_date) AS duration, status, department, description FROM leave_request WHERE applicant = '". $user_data['user_id'] ."' AND status = 'Approved' AND end_date <= CURDATE() ORDER BY applied_date DESC") or die(mysql_error());

                                            if(mysql_num_rows($leave_requests) != 0){

                                                While($row = mysql_fetch_assoc($leave_requests)){ ?>
                                                    <tbody>
                                                    &#32;
                                                    <tr class="odd">
                                                        &#32;
                                                        <td class="title">
                                                            <p class="text-info">
                                                                <?php echo $row['leave_type']; ?>
                                                            </p>
                                                        </td>
                                                        &#32;
                                                        <td class="bid_end_date">
                                                            <?php echo $row['start']; ?> - <?php echo $row['end_d']; ?>
                                                        </td>
                                                        &#32;
                                                        <td class="budget">
                                                            <p class="text-success"><?php echo $row['duration']; ?> Days</p>
                                                        </td>
                                                        &#32;
                                                        <td class="bids">
                                                            <?php echo $row['status']; ?>
                                                        </td>
                                                        &#32;
                                                    </tr>
                                                    &#32;
                                                    </tbody>
                                                    &#32;
                                                    <tfoot>

                                                    </tfoot>
                                                <?php } ?>

                                            <?php }else {?>

                                                <div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                                                    <strong>Oh Snap! </strong>No Records could be found</div>

                                            <?php }

                                            ?>
                                        </table>
                                        <ul class="pagination">
                                            <li class="cardinality">
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="tab-pane" id="progress">
                                    <div class="table-container">
                                        <table class="table table-striped">
                                            <thead>
                                            &#32;
                                            <tr>&#32;
                                                <th class="title">TYPE</th>
                                                &#32;
                                                <th class="bid_end_date">DATES</th>
                                                &#32;
                                                <th class="budget">DAYS</th>
                                                &#32;
                                                <th class="bids">STATUS</th>
                                                &#32;
                                            </tr>
                                            &#32;
                                            </thead>
                                            &#32;
                                            <?php
                                            //Load table from database
                                            $leave_requests = mysql_query("SELECT leave_id, leave_type, applicant, DATE_FORMAT(DATE(start_date), '%d/%m/%y') AS start, DATE_FORMAT(DATE(end_date), '%d/%m/%y') AS end_d, DATEDIFF(end_date, start_date) AS duration, status, department, description FROM leave_request WHERE applicant = '". $user_data['user_id'] ."' AND status = 'Approved' AND end_date > CURDATE() ORDER BY applied_date DESC") or die(mysql_error());

                                            if(mysql_num_rows($leave_requests) != 0){

                                                While($row = mysql_fetch_assoc($leave_requests)){ ?>
                                                    <tbody>
                                                    &#32;
                                                    <tr class="odd">
                                                        &#32;
                                                        <td class="title">
                                                            <p class="text-info">
                                                                <?php echo $row['leave_type']; ?>
                                                            </p>
                                                        </td>
                                                        &#32;
                                                        <td class="bid_end_date">
                                                            <?php echo $row['start']; ?> - <?php echo $row['end_d']; ?>
                                                        </td>
                                                        &#32;
                                                        <td class="budget">
                                                            <p class="text-success"><?php echo $row['duration']; ?> Days</p>
                                                        </td>
                                                        &#32;
                                                        <td class="bids">
                                                            <?php echo $row['status']; ?>
                                                        </td>
                                                        &#32;
                                                    </tr>
                                                    &#32;
                                                    </tbody>
                                                    &#32;
                                                    <tfoot>

                                                    </tfoot>
                                                <?php } ?>

                                            <?php }else {?>

                                                <div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                                                    <strong>Oh Snap! </strong>No Records could be found</div>

                                            <?php }

                                            ?>
                                        </table>
                                        <ul class="pagination">
                                            <li class="cardinality">
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="tab-pane" id="view">
                                    <div class="table-container">
                                        <table class="table table-striped">
                                            <thead>
                                            &#32;
                                            <tr>&#32;
                                                <th class="title">TYPE</th>
                                                &#32;
                                                <th class="bid_end_date"></th>
                                                &#32;
                                                <th class="budget">DAYS</th>
                                                &#32;
                                                <th class="bids">STATUS</th>
                                                &#32;
                                            </tr>
                                            &#32;
                                            </thead>
                                            &#32;
                                            <?php
                                            //Load table from database
                                            $leave_requests = mysql_query("SELECT leave_id, leave_type, applicant, DATE_FORMAT(DATE(start_date), '%d/%m/%y') AS start, DATE_FORMAT(DATE(end_date), '%d/%m/%y') AS end_d, DATEDIFF(end_date, start_date) AS duration, status, department, description FROM leave_request WHERE applicant = '". $user_data['user_id'] ."' AND status = 'Approved' AND end_date < CURDATE() ORDER BY applied_date DESC") or die(mysql_error());

                                            if(mysql_num_rows($leave_requests) != 0){

                                                While($row = mysql_fetch_assoc($leave_requests)){ ?>
                                                    <tbody>
                                                    &#32;
                                                    <tr class="odd">
                                                        &#32;
                                                        <td class="title">
                                                            <p class="text-info">
                                                                <?php echo $row['leave_type']; ?>
                                                            </p>
                                                        </td>
                                                        &#32;
                                                        <td class="bid_end_date">
                                                            <?php echo $row['start']; ?> - <?php echo $row['end_d']; ?>
                                                        </td>
                                                        &#32;
                                                        <td class="budget">
                                                            <p class="text-success"><?php echo $row['duration']; ?> Days</p>
                                                        </td>
                                                        &#32;
                                                        <td class="bids">
                                                            <?php echo $row['status']; ?>
                                                        </td>
                                                        &#32;
                                                    </tr>
                                                    &#32;
                                                    </tbody>
                                                    &#32;
                                                    <tfoot>

                                                    </tfoot>
                                                <?php } ?>

                                            <?php }else {?>

                                                <div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                                                    <strong>Oh Snap! </strong>No Records could be found</div>

                                            <?php }

                                            ?>
                                        </table>
                                        <ul class="pagination">
                                            <li class="cardinality">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


<?php include '../includes/footer.php';