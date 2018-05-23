<?php
include '../includes/header.php';
?>
    <div class="main">
    <div class="container">

        <?php
        $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, phone, postal_code, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $user_data['user_id']);
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
                <div class="panel panel-success">
                    <div class="panel-body">
                        <div class="col-md-3">
                            <h5 style="color: #009900;"><i class="icon-cogs"></i> <strong>Account</strong></h5>
                        </div>
                        <div class="col-md-9">
                        <?php include '../../processes/account.php'; ?>
                            <?php
                            $account_info = mysql_query("SELECT * FROM account");
                            $info = mysql_fetch_assoc($account_info);

                            $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, phone, postal_code, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $user_data['user_id']);
                            $user = mysql_fetch_array($applicant);
                            ?>
                        <form id="edit-profile2" class="form-horizontal col-md-12" method="post" action="">
                            <fieldset>
                                <h4 style="color: #000000;"><strong>Account Info</strong></h4>
                                <h5 style="color: #009900;"><i class="icon-cog"></i> <strong>Account Details</strong></h5>
                                <hr />
                                <div class="form-group">
                                    <label for="username" class="col-md-4"><i class="icon-home"></i> Company Name </label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" id="username" value="<?php echo $info['name']; ?>" name="name">
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="form-group">
                                    <label for="username" class="col-md-4"><i class="icon-user"></i> Account Owner </label>
                                    <div class="col-md-6">
                                        <h5 style="color: #000000;"><?php echo $info['owner']; ?> (<?php echo $user_data['role']; ?>)</h5>
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="form-group">
                                    <label for="username" class="col-md-4"><i class="icon-time"></i> Member Since </label>
                                    <div class="col-md-6">
                                        <h5 style="color: #000000;"><?php echo $user['joined']; ?></h5>
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="form-group">
                                    <label for="username" class="col-md-4 text-success"><i class="icon-phone"></i> Contact </label>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" id="username" value="<?php echo $info['contact']; ?>" name="contact" maxlength="13">
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="form-group">
                                    <label for="username" class="col-md-4 text-primary"><i class="icon-envelope"></i> Email </label>
                                    <div class="col-md-7">
                                        <input type="email" class="form-control" id="username" value="<?php echo $info['email']; ?> " name="email">
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="form-group">
                                    <label for="username" class="col-md-4 text-danger"><i class="icon-map-marker"></i> Location </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" id="username" value="<?php echo $info['location']; ?> " name="location">
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="form-group">
                                    <button class="btn btn-info" name="btn-update" type="submit">Update Info</button>
                                </div> <!-- /control-group -->
                                <hr />
                            </fieldset>
                        </form>
                        </div>
                    </div>
                </div>
            </div> <!-- /container -->

        </div>
    </div>

<?php
include '../includes/footer.php';