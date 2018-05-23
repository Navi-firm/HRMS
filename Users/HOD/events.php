<?php
include '../includes/hod_header.php';
?>

    <div class="main">
        <div class="container">
            <?php
            $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, phone, postal_code, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $user_data['user_id']);
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
                        <a class="list-group-item" href="employ.php">
                            <span class="icon-file-text-alt"></span> Employ
                        </a>
                        <a class="list-group-item" href="jobs.php">
                            <span class="icon-briefcase"></span> Jobs
                        </a>
                        <a class="list-group-item active" href="events.php">
                            <span class="icon-list-alt"></span> Events <i class="icon-chevron-right pull-right"></i>
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

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h5><strong><i class="icon-calendar"></i> Calendar Events </strong></h5>
                        </div>
                        <div class="panel-body">
                            <hr />
                            <div class="col-md-12">
                                <?php
                                //Load table from database
                                if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
                                $start_from = ($page-1) * 20;

                                $application = mysql_query("SELECT event_id, event_name, description, venue, DATE_FORMAT(start_date, '%d/%m/%Y') AS start_time, DATE_FORMAT(start_date, '%d') AS event_day, DATE_FORMAT(start_date, '%M') AS event_month, DATE_FORMAT(start_date, '%Y') AS event_year, DATE_FORMAT(end_date, '%d/%m/%Y') AS due_date, venue, status, DATE_FORMAT(created, '%d/8%m/%Y') AS created FROM events ORDER BY created DESC LIMIT " . $start_from . ", 20") or die(mysql_error());

                                if(mysql_num_rows($application) != 0){

                                    While($row = mysql_fetch_assoc($application)){ ?>
                                        <div class="">
                                            <h2>
                                                <p class="calendar">
                                                    <?php echo $row['event_day']; ?> <em><?php echo $row['event_month']; ?></em>

                                                </p>
                                                <?php echo $row['event_name']; ?> <small>Events for <?php echo $row['event_month']; ?> <?php echo $row['event_year']; ?></small>
                                            </h2>
                                            <div class="">
                                                <h4>
                                                    <?php echo $row['venue']; ?>
                                                </h4>
                                                <h5>
                                                    <h5><a class="" href="view_event.php?event_id=<?php echo $row['event_id']; ?>" role="button" >View details >></a></h5>
                                                </h5>
                                            </div><!--/. col-md -->
                                        </div><!--/row-->
                                        <hr />
                                    <?php } ?>

                                <?php }else {?>

                                    <div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                                        <strong>Oh Snap! </strong>No Events</div>

                                <?php } ?>
                                <ul class="pagination text-center">
                                    <li class="active"><a href="javascript:;">&laquo;</a></li>
                                    <?php

                                    $count = mysql_query("SELECT COUNT(job_id) FROM jobs") or die(mysql_error());
                                    $row = mysql_fetch_row($count);
                                    $total_records = $row['0'];
                                    $total_pages = ceil($total_records / 20);

                                    for($i = 1; $i<=$total_pages; $i++){
                                        echo "<li><a href='jobs.php?page=" . $i . "'><b>" . $i . "</b></a></li>";
                                    };
                                    ?>
                                    <li><a href="javascript:;">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include '../includes/footer.php';
