<?php
include '../includes/user_header.php';
?>
<div class="main">

    <div class="container">

        <div class="row">
            <?php
                $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, first_name, middle_name, last_name, phone, linkedin, postal_code, county, country, address, postal_code, email, department, work_status, dob, marital_status, about, passport, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, position1, position2, company1, company2, location1, location2, duration1, duration2, referee1, referee2, contact1, contact2, duties1, duties2, DATE_FORMAT(created, '%d %M %Y') AS joined,pro_pic FROM staff WHERE staff_id =". $user_data['user_id']);
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
                        <h3>Dashboard</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">

                            <div class="col-sm-4">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <span class="icon-briefcase"></span> Available Vacancies
                                        </h3>
                                    </div>
                                    <div class="panel-body">
                                        <h2 class="text-center"><?php echo open_job();?></h2>
                                    </div>
                                </div>
                            </div>
                        <?php
                        $name = $user['fullname'];
                        $my_jobs = mysql_query("SELECT COUNT(application_id) as my_jobs FROM applications WHERE applicant_name = '$name'") or die(mysql_error());
                        $me = mysql_fetch_array($my_jobs);
                        ?>
                        <div class="col-sm-4">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <span class="icon-tags"></span> My Proposals
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    <h2 class="text-center"><?php echo $me['my_jobs'];?></h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <span class="icon-briefcase"></span> My Interviews
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    <h2 class="text-center"><sup></sup>0</h2>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="tabbable">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#profile" data-toggle="tab">My Applications</a>
                                </li>
                                <li><a href="#settings" data-toggle="tab">My Interviews</a></li>
                            </ul>

                            <br>

                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">
                                    <a class="btn btn-primary" href="../Jobs/dashboard.php">Apply for a Job</a>
                                    <hr />
                                    <div class="table-container">
                                        <table class="table table-striped">
                                            <thead>
                                            &#32;
                                            <tr>&#32;
                                                <th class="title">Job Name</th>
                                                &#32;
                                                <th class="bid_end_date">Job Status</th>
                                                &#32;
                                                <th class="budget">Applied Date</th>
                                                &#32;
                                                <th class="budget">Deadline</th>
                                                &#32;
                                                <th class="bids">Action</th>
                                                &#32;
                                            </tr>
                                            &#32;
                                            </thead>
                                            <?php
                                            $author = $user_data['user_id'];
                                            //Load table from database
                                            $jobs = mysql_query("SELECT application_id, application_title, applicant_name, application_status, DATE_FORMAT(application_date, '%d %M %Y') AS applied, DATE_FORMAT(deadline, '%d %M %Y') AS deadline FROM applications WHERE applicant_name = '" . $user['fullname'] . "' ORDER BY application_date DESC ") or die(mysql_error());

                                            if(mysql_num_rows($jobs) != 0){

                                                While($row = mysql_fetch_assoc($jobs)){ ?>
                                            &#32;
                                            <tbody>
                                            &#32;
                                            <tr class="odd">
                                                &#32;
                                                <td class="title">
                                                    <a href="edit_application.php?job_name=">
                                                        <?php echo $row['application_title']; ?>
                                                    </a>
                                                </td>
                                                &#32;
                                                <td class="bid_end_date">
                                                    <?php echo $row['application_status']; ?>
                                                </td>
                                                &#32;
                                                <td class="budget">
                                                    <?php echo $row['applied']; ?>
                                                </td>
                                                &#32;
                                                <td class="budget">
                                                    <?php echo $row['deadline']; ?>
                                                </td>
                                                &#32;
                                                <td class="bids">
                                                    <?php
                                                    if(strtotime($row['deadline']) <= time()){
                                                        echo "CLOSED";
                                                    }else{
                                                    ?>
                                                    <a href="apply_job.php?job=<?php echo $row['application_id']; ?>" class="btn btn-small btn-info"><i class="icon-pencil"></i></a>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                                &#32;
                                            </tr>
                                            &#32;
                                                </tbody>
                                                <?php } ?>
                                            <?php }else {?>

                                                <div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                                                    <strong>Oh Snap! </strong>No Jobs applications</div>

                                            <?php }

                                            ?>
                                                &#32;<tfoot></tfoot></table><ul class="pagination"><li class="cardinality"><?php echo $me['my_jobs'];?> jobs</li></ul></div>
                                </div>
                                <div class="tab-pane" id="settings">
                                    <a class="btn btn-primary" href="../Jobs/dashboard.php">Apply for a Job</a>
                                    <hr />
                                    <div class="table-container">
                                        <table class="table table-striped">
                                            <thead>
                                            &#32;
                                            <tr>&#32;
                                                <th class="title">Job Name</th>
                                                &#32;
                                                <th class="bid_end_date">Job Status</th>
                                                &#32;
                                                <th class="budget">Applied Date</th>
                                                &#32;
                                                <th class="budget">Interview Date</th>
                                                &#32;
                                            </tr>
                                            &#32;
                                            </thead>
                                            <?php
                                            $author = $user_data['user_id'];
                                            //Load table from database
                                            $jobs = mysql_query("SELECT application_id, application_title, applicant_name, application_status, DATE_FORMAT(application_date, '%d %M %Y') AS applied, DATE_FORMAT(interview_date, '%d %M %Y') AS interview_date, DATE_FORMAT(deadline, '%d %M %Y') AS deadline FROM applications WHERE applicant_name = '" . $user['fullname'] . "' AND interview_date > CURDATE() ORDER BY application_date DESC ") or die(mysql_error());

                                            if(mysql_num_rows($jobs) != 0){

                                                While($row = mysql_fetch_assoc($jobs)){ ?>
                                                    &#32;
                                                    <tbody>
                                                    &#32;
                                                    <tr class="odd">
                                                        &#32;
                                                        <td class="title">
                                                            <a href="edit_application.php?job_name=">
                                                                <?php echo $row['application_title']; ?>
                                                            </a>
                                                        </td>
                                                        &#32;
                                                        <td class="bid_end_date">
                                                            <?php echo $row['application_status']; ?>
                                                        </td>
                                                        &#32;
                                                        <td class="budget">
                                                            <?php echo $row['applied']; ?>
                                                        </td>
                                                        &#32;
                                                        <td class="budget">
                                                            <?php echo $row['interview_date']; ?>
                                                        </td>
                                                        &#32;
                                                        <td class="bids">
                                                            <a href="apply_job.php?job=<?php echo $row['application_id']; ?>" class="btn btn-small btn-info"><i class="icon-pencil"></i></a>
                                                        </td>
                                                        &#32;
                                                    </tr>
                                                    &#32;
                                                    </tbody>
                                                <?php } ?>
                                            <?php }else {?>

                                                <div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                                                    <strong>Oh Snap! </strong>No Job Interviews</div>

                                            <?php }

                                            ?>
                                            &#32;<tfoot></tfoot></table><ul class="pagination"><li class="cardinality"><?php echo $me['my_jobs'];?> jobs</li></ul></div>
                                </div>
                            </div>
                        </div>

                    </div>

        </div>

    </div>

</div>

</div>


 <?php include '../includes/footer.php';