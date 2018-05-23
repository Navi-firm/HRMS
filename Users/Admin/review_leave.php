<?php include '../../Includes/Core/init.php';
if(!logged_in())
{
    ?>
    <script type="text/javascript">
        window.location.href='../../login.php';
    </script>
    <?php
}
?>
    <div class="main">

        <div class="container">

            <div class="row">

                <div class="col-md-3">

                    <div class="list-group">
                        <a class="list-group-item active" href="index.php">
                            <span class="icon-home"></span> Dashboard
                        </a>
                    </div>

                    <div class="list-group">
                        <p class="list-group-item text-info">
                            <span class="icon-signout"></span> Employee Leave Stats
                        </p>
                        <p id="bids" class="list-group-item">
                            <span class="badge">18</span>
                            <span class="icon-file-alt"></span> Annual
                        </p>
                        <p id="bids" class="list-group-item">
                            <span class="badge">5</span>
                            <span class="icon-file-alt"></span> Medical
                        </p>
                        <p id="bids" class="list-group-item">
                            <span class="badge">60</span>
                            <span class="icon-file-alt"></span> Maternity
                        </p>
                        <p id="bids" class="list-group-item">
                            <span class="badge">2</span>
                            <span class="icon-file-alt"></span> Paternity
                        </p>
                        <p id="bids" class="list-group-item">
                            <span class="badge">5</span>
                            <span class="icon-file-alt"></span> Optional Leave
                        </p>
                        <p id="bids" class="list-group-item">
                            <span class="badge">4</span>
                            <span class="icon-file-alt"></span> Compassionate
                        </p>
                    </div>

                    <div class="list-group">
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

                        <?php
                        $leave_requests = mysql_query("SELECT leave_id, leave_type, applicant, DATE_FORMAT(DATE(start_date), '%D %M %Y') AS start, DATE_FORMAT(DATE(end_date), '%D %M %Y') AS end_d, DATEDIFF(end_date, start_date) AS duration, status, department, description FROM leave_request ORDER BY applied_date DESC") or die(mysql_error());
                        $row = mysql_fetch_assoc($leave_requests);
                        ?>

                        <div class="widget-content">

                            <hr />
                            <div class="tabbable">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#profile" data-toggle="tab">Review Leave</a>
                                    </li>
                                </ul>
                                <br>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="profile">
                                        <hr />
                                        <div class="table-container">
                                            <?php include '../../processes/review_leave.php'; ?>

                                            <form id="edit-profile2" class="form-horizontal col-md-12" method="post" action="">
                                                <fieldset>
                                                    <h4>Leave #<?php echo $row['leave_id'] ?></h4>
                                                    <hr />
                                                    <div class="form-group">
                                                        <label for="username" class="col-md-3"><i class="icon-user"></i> Your Name </label>
                                                        <div class="col-md-6">
                                                            <h5><?php echo $row['applicant'] ?></h5>
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->
                                                    <div class="form-group">
                                                        <label for="username" class="col-md-3">Leave Type</label>
                                                        <div class="col-md-6">
                                                            <h5><?php echo $row['leave_type'] ?></h5>
                                                        </div> <!-- /controls -->
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-md-3"><i class="icon-calendar"></i> From Date </label>
                                                        <div class="col-md-3">
                                                            <h5><?php echo $row['start'] ?></h5>
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->
                                                    <div class="form-group">
                                                        <label for="username" class="col-md-3"><i class="icon-calendar"></i> To Date </label>
                                                        <div id="datetimepicker4" class="col-md-3 input-group">
                                                            <h5><?php echo $row['end_d'] ?></h5>
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->
                                                    <div class="form-group">
                                                        <label for="username" class="col-md-3"><i class="icon-time"></i> Number of Days </label>
                                                        <div class="col-md-2">
                                                            <h5><?php echo $row['duration'] ?> Days</h5>
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->
                                                    <div class="form-group">
                                                        <label for="username" class="col-md-3">Department</label>
                                                        <div class="col-md-4">
                                                            <h5><?php echo date("y-m-d h:m:s"); ?></h5>
                                                        </div> <!-- /controls -->
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="username" class="col-md-3"><i class="icon-briefcase"></i> Reason </label>
                                                        <div class="col-md-6">
                                                            <h5><?php echo $row['description'] ?></h5>
                                                        </div> <!-- /controls -->
                                                    </div> <!-- /control-group -->
                                                    <div class="form-group">
                                                        <label for="username" class="col-md-3">Review Request</label>
                                                        <div class="col-md-4">
                                                            <p class="help-block"><?php echo $row['status'] ?></p>
                                                            <select class="form-control" id="certificate" name="review_leave">
                                                                <option>-------------</option>
                                                                <option value="Approved">Approved</option>
                                                                <option value="Cancelled">Cancelled</option>
                                                                <option value="Rejected">Rejected</option>
                                                            </select>
                                                        </div> <!-- /controls -->
                                                    </div>
                                                    <hr />
                                                    <div class="form-group">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <div class="col-md-6">
                                                                    <button type="submit" id="btn-review" name="btn-review" class="btn btn-info"><i class="icon-file-alt"></i> Apply job </button>
                                                                </div>
                                                                <div class="col-md-6 pull-right">
                                                                    <a href="index.php" class="btn btn-danger"><i class="icon-trash"></i> Cancel</a>
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
                                                    <th class="title">Leave type</th>
                                                    &#32;
                                                    <th class="bid_end_date">Total</th>
                                                    &#32;
                                                    <th class="budget">Taken</th>
                                                    &#32;
                                                    <th class="bids">Remaining</th>
                                                    &#32;
                                                </tr>
                                                &#32;
                                                </thead>
                                                &#32;
                                                <tbody>
                                                &#32;
                                                <tr class="odd">
                                                    &#32;
                                                    <td class="title">
                                                        <a href="edit_application.php?job_name=">
                                                            Annual Leave
                                                        </a>
                                                    </td>
                                                    &#32;
                                                    <td class="bid_end_date">
                                                        21
                                                    </td>
                                                    &#32;
                                                    <td class="budget">
                                                        14
                                                    </td>
                                                    &#32;
                                                    <td class="bids">
                                                        7
                                                    </td>
                                                    &#32;
                                                </tr>
                                                &#32;
                                                </tbody>
                                                &#32;
                                                <tfoot>

                                                </tfoot>
                                            </table>
                                            <ul class="pagination">
                                                <li class="cardinality">
                                                    4 Task
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