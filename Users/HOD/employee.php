<?php
include '../includes/hod_header.php';
?>

    <div class="main">
    <div class="container">

        <?php
        $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, phone, postal_code,  pro_pic, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $user_data['user_id']);
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
                    <a class="list-group-item active" href="employee.php">
                        <span class="icon-group"></span> Employee <i class="icon-chevron-right pull-right"></i>
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

            <div class="col-sm-9"><!--left col-->
                <div class="widget stacked">

                    <div class="widget-header">
                        <i class="icon-group"></i>
                        <h3>Employee</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <div class="form-horizontal col-md-12">
                            <div class="tabbable">

                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#profile" data-toggle="tab"><i class="icon-group"></i> ALL EMPLOYEES</a>
                                    </li>
                                </ul>

                                <br>

                                <div class="tab-content">

                                    <div class="tab-pane active" id="profile">
                                        <div class="table-container">
                                            <hr />
                                            <div class="table-container">
                                                <h4><i class="icon-group"></i> ALL EMPLOYEES
                                                </h4>
                                                <hr />
                                                <br>
                                                <?php include 'employee_list.php'; ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div> <!-- /container -->

        </div>
    </div>

<?php include '../includes/footer.php';

