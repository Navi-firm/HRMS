<?php
include '../includes/hod_header.php';
?>

    <div class="main">
    <div class="container">

        <?php
        $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, phone, postal_code, pro_pic, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $user_data['user_id']);
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
                                <img class="img-thumbnail img-responsive" width="150" height="180" src="../images/<?php echo $user['pro_pic']; ?>">
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
                                <a href="tasks.php">
                                    <i class="icon-tasks"></i>
                                    My Tasks </a>
                            </li>
                            <li>
                                <a href="events.php">
                                    <i class="icon-bookmark"></i>
                                    My Events </a>
                            </li>
                            <li>
                                <a href="settings.php">
                                    <i class="icon-user"></i>
                                    My Profile </a>
                            </li>
                            <li>
                                <a href="settings.php">
                                    <i class="icon-signout"></i>
                                    My Leave </a>
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

            <div class="col-sm-9"><!--left col-->
                <?php
                $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, username, phone, pro_pic, postal_code, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, role, department, status, employement, address, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $_GET['employee_id']);
                $staff = mysql_fetch_array($applicant);
                ?>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h5><strong><i class="icon-group"></i> EMPLOYEE DETAILS </strong></h5>
                    </div>
                    <div class="panel-body">
                        <div class="col-xs-4">
                            <p class="text-center">
                                <img class="img-thumbnail img-responsive" width="150" height="180" src="../images/<?php echo $staff['pro_pic']; ?>">
                            </p>
                        </div>
                        <div class="col-xs-8">
                            <h3 class="text-info"><?php echo $staff['fullname']; ?> <p class="help-block">(<?php echo $staff['username']; ?>)</p> </h3>
                            <div class="profile-usertitle-job">
                                <h5><?php echo $staff['role']; ?></h5>
                                <h5 class="help-block">Joined       : <?php echo $staff['joined']; ?></h5>
                                <p class="help-block">Department    : <?php echo $staff['department']; ?></p>
                                <p class="help-block">Address       : <?php echo $staff['address']; ?></p>
                                <p class="help-block">Residence     : <?php echo $staff['location']; ?></p>
                                <p class="help-block">Phone         : <?php echo $staff['phone']; ?></p>
                                <p class="help-block">Employement   : <?php echo $staff['employement']; ?></p>
                                <p class="text-danger"> STATUS <?php echo $staff['status']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h5><strong><i class="icon-user"></i> EMPLOYEE PERFORMANCE </strong></h5>
                    </div>
                    <div class="panel-body">
                        <a href="performance.php?employee_id=<?php echo $staff['staff_id']; ?>" class="pull-right btn btn-info">Review Performance</a>
                        <br>
                        <hr>
                    </div>
                </div>
            </div> <!-- /container -->

        </div>
    </div>

<?php include '../includes/footer.php';

