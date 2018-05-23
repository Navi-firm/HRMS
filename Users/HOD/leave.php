<?php
include '../includes/hod_header.php';
error_reporting(0);
?>
    <div class="main">

    <div class="container">
        <?php
        $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, phone, postal_code, pro_pic, CONCAT(county, ', ', country) AS location, gender, email, postal_code, DATE_FORMAT(created, '%d %M %Y') AS joined, department FROM staff WHERE staff_id =". $user_data['user_id']);
        $user = mysql_fetch_array($applicant);
        ?>
        <div class="row">

            <div class="col-sm-3"><!--left col-->
                <div class="list-group">
                    <a class="list-group-item" href="index.php">
                        <span class="icon-home"></span> Dashboard
                    </a>
                    <a class="list-group-item active" href="leave.php">
                        <span class="icon-arrow-left"></span> Leave <i class="icon-chevron-right pull-right"></i>
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
                    <a class="list-group-item" href="settings.php">
                        <span class="icon-cogs"></span> Settings
                    </a>
                </div>

            </div>

            <div class="col-md-9">
                <div class="widget stacked">

                    <div class="widget-header">
                        <h3>Leave Manager</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <div class="tabbable">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#profile" data-toggle="tab">Apply Leave</a>
                                </li>
                                <li>
                                    <a href="#balance" data-toggle="tab">All Leave Request</a>
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
                                        <div class="col-md-7">
                                            <form id="edit-profile2" class="form-horizontal col-md-12" method="post" action="">
                                                <fieldset>
                                                    <h4>Apply Leave</h4>
                                                    <hr />
                                                    <div class="form-group">
                                                        <label for="username" class="col-md-12"><i class="icon-user"></i> Your Name </label>
                                                        <div class="col-md-12">
                                                            <input type="text" class="form-control" id="username" value="<?php echo $user['fullname'];?>" name="applicant" disabled>
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->
                                                    <div class="form-group">
                                                        <label for="username" class="col-md-3">Leave Type</label>
                                                        <div class="col-md-7">
                                                            <select class="form-control" id="certificate" name="leave_type">
                                                                <option>-------------</option>
                                                                <option value="Sick Leave">Sick Leave</option>
                                                                <option value="Maternity Leave">Maternity Leave</option>
                                                                <option value="Casual Leave">Casual Leave</option>
                                                                <option value="Paternity Leave">Paternity Leave</option>
                                                            </select>
                                                        </div> <!-- /controls -->
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-md-3"><i class="icon-calendar"></i> From Date </label>
                                                        <div class="col-md-6 input-group">
                                                            <input required type="text" id="datepicker" class="form-control" name="start_date"><span class="input-group-addon"><i data-time-icon="icon-time" class="icon-calendar"></i></span>
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->
                                                    <div class="form-group">
                                                        <label for="username" class="col-md-3"><i class="icon-calendar"></i> To Date </label>
                                                        <div id="datetimepicker4" class="col-md-6 input-group">
                                                            <input required type="text" id="datepicker1" class="form-control" name="end_date"><span class="input-group-addon"><i data-time-icon="icon-time" class="icon-calendar"></i></span>
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->
                                                    <div class="form-group">
                                                        <label for="username" class="col-md-3">Department</label>
                                                        <div class="col-md-7">
                                                            <input type="text" class="form-control" id="username" value="<?php echo $user['department'];?>" name="department" disabled>
                                                        </div> <!-- /controls -->
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-md-12"><i class="icon-briefcase"></i> Reason </label>
                                                        <div class="col-md-12">
                                                            <textarea class="form-control" name="reason" id="reason" rows="15" cols="80" placeholder="Give description"></textarea>
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->
                                                    <hr />
                                                    <div class="form-group">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <div class="col-md-6">
                                                                    <button type="submit" class="btn btn-primary">Save</button>
                                                                </div>
                                                            </div> <!-- /.form-group -->

                                                        </div>
                                                    </div> <!-- /.form-group -->
                                                </fieldset>
                                            </form>
                                        </div>
                                        <div class="col-md-5">
                                            <h4>All Leave Details</h4>
                                            <p class="text-center">
                                            <table class="table table-user-information">
                                                <tbody>
                                                <tr>
                                                    <td>Sick Leave:</td>
                                                    <td>0/20</td>
                                                </tr>
                                                <tr>
                                                    <td>Casual Leave:</td>
                                                    <td>0/20</td>
                                                </tr>
                                                <tr>
                                                    <td>Paternity Leave:</td>
                                                    <td>0/30</td>
                                                </tr>
                                                <tr>
                                                    <td>Maternity Leave:</td>
                                                    <td>0/100</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Total :</b></td>
                                                    <td>0/170</td>
                                                </tr>

                                                </tbody>
                                            </table>
                                            </p>
                                        </div>
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
                                                <th class="budget">STATUS</th>
                                                &#32;
                                                <th class="bids">ACTION</th>
                                                &#32;
                                            </tr>
                                            &#32;
                                            </thead>
                                            &#32;
                                            <?php
                                            //Load table from database
                                            $applicant = $user['fullname'];
                                            $leave_requests = mysql_query("SELECT leave_id, leave_type, applicant, DATE_FORMAT(DATE(start_date), '%d/%m/%y') AS start, DATE_FORMAT(DATE(end_date), '%d/%m/%y') AS end_d, DATEDIFF(end_date, start_date) AS duration, status, department, description FROM leave_request WHERE applicant = '". $user_data['user_id'] ."' ORDER BY applied_date DESC") or die(mysql_error());

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
                                                        <td class="budget">
                                                            <p><span class='label label-warning job-status text-right'><?php echo $row['status'];?></span></p>
                                                        </td>
                                                        &#32;
                                                        <td class="bids">
                                                            <a href="leave_requests.php?leave_id=<?php echo $row['leave_id']; ?>" class="btn btn-info btn-sm"><i class="icon-eye-open"></i> View</a>
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