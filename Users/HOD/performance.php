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
                <?php
                $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, username, phone, postal_code, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, role, department, status, employement, address, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $_GET['employee_id']);
                $staff = mysql_fetch_array($applicant);
                ?>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h5><strong><i class="icon-group"></i> EMPLOYEE PERFORMANCE </strong></h5>
                    </div>
                    <div class="panel-body">
                        <form id="edit-profile2" class="form-horizontal col-md-12" method="post" action="">
                            <fieldset>
                                <h4>EVALUATION FORM</h4>
                                <hr />
                                <div class="form-group">
                                    <label for="username" class="col-md-3"><i class="icon-user"></i> Employee </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="username" value="<?php echo $staff['fullname']; ?>" name="employee" disabled>
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="form-group">
                                    <label for="username" class="col-md-3"><i class="icon-bookmark"></i> Ref No. </label>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" id="username" value="<?php echo $staff['staff_id']; ?>" name="id" disabled>
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="form-group">
                                    <label for="username" class="col-md-3"><i class="icon-screenshot"></i> Department </label>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" id="username" value="<?php echo $staff['department']; ?>" name="department" disabled>
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->

                                <div class="form-group">
                                    <label for="username" class="col-md-3"><i class="icon-screenshot"></i> Supervisor </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="username" value="<?php echo $user['fullname']; ?>" name="supervisor" disabled>
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="form-group">
                                    <label for="username" class="col-md-3"><i class="icon-barcode"></i> Performance Title </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="username" value="" name="title" >
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
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
                                <hr  />
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
                                <hr />
                                <div class="form-group">
                                    <label class="col-xs-3">Job Knowledge</label>
                                    <div class="input-group col-xs-9">
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">1</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">2</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">3</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">4</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">5</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3">Work Quality</label>
                                    <div class="input-group col-xs-9">
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">1</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">2</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">3</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">4</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">5</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3">Punctuality</label>
                                    <div class="input-group col-xs-9">
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">1</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">2</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">3</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">4</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">5</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3">Initiative</label>
                                    <div class="input-group col-xs-9">
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">1</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">2</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">3</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">4</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">5</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3">communication</label>
                                    <div class="input-group col-xs-9">
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">1</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">2</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">3</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">4</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">5</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3">Dependability</label>
                                    <div class="input-group col-xs-9">
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">1</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">2</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">3</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">4</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">5</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-3">Overall Rating</label>
                                    <div class="input-group col-xs-9">
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">1</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">2</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">3</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">4</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                        <div class="col-xs-2">
                                            <label class="col-xs-3">5</label>
                                            <input class="" type="radio" name="knowledge">
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="form-group">
                                    <label for="username" class="col-md-3"><i class="icon-comments"></i> Supervisor Comments</label>
                                    <div class="col-md-8">
                                        <textarea name="description" class="form-control" rows="6" maxlength="450"></textarea>
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->

                                <div class="form-group">
                                    <label for="username" class="col-md-3"><i class="icon-comment"></i> Recommendations</label>
                                    <div class="col-md-6">
                                        <textarea name="description" class="form-control" rows="5" maxlength="300"></textarea>
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->

                                <hr />
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-info"><i class="icon-chevron-sign-up"></i> Review Employee </button>
                                            </div>
                                        </div> <!-- /.form-group -->

                                    </div>
                                </div> <!-- /.form-group -->
                            </fieldset>
                        </form>
                    </div>
                </div>

                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h5><strong><i class="icon-bar-chart"></i> PERFORMANCE REPORT</strong></h5>
                    </div>
                    <div class="panel-body">
                        <hr>
                    </div>
                </div>
            </div> <!-- /container -->

        </div>
    </div>

<?php include '../includes/footer.php';

