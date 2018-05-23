<?php include '../includes/header.php'; ?>
    <div class="main">

    <div class="container">

        <div class="row">

            <div class="col-md-8">

                <div class="widget stacked ">

                    <div class="widget-header">
                        <i class="icon-user"></i>
                        <h3> Candidate <strong></strong></h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">

                        <?php

                        $app_id = $_GET['edit_id'];

                        if(isset($app_id))
                        {
                            $candidate = "SELECT application_id, applicant_name, applicant_contact, application_status, application_title, applicant_email, job_vacancy, DATE_FORMAT(DATE(application_date), '%D %M %Y') AS app_date FROM applications WHERE application_id = '$app_id'";
                            $query_result = mysql_query($candidate) or die (mysql_error($candidate));

                            if(mysql_num_rows($query_result) == 0){
                                echo 'Query error' . mysql_error($query_result);
                            }else{
                                $detail = mysql_fetch_assoc($query_result);
                            }
                        }
                        if(isset($_POST['btn-update'])) {
                            // variables for input data
                            $app_status = $_POST['app_status'];
                            // variables for input data

                            // sql query for update data into database
                            $sql_query = "UPDATE applications SET application_status = '$app_status' ";
                            // sql query for update data into database
                        }
                        ?>
                        <div class="tabbable">

                            <?php
                            $full_name = $detail['applicant_name'];

                            $candidate_info = mysql_query("SELECT * FROM application WHERE CONCAT(first_name,'.', surname ) = '$full_name'") or die(mysql_error());

                            if(mysql_num_rows($candidate_info) != 0){

                                $info = mysql_fetch_assoc($candidate_info);
                            }else{
                                echo "<div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                       <strong>Oh Snap! </strong> No user Details found </div>";
                            }

                            ?>

                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#profile" data-toggle="tab"><?php echo $detail['applicant_name']; ?></a></li>
                            </ul>

                            <br>

                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">
                                    <h4> Basic Info </h4>
                                    <hr>
                                    <br />
                                    <form id="edit-profile" class="form-horizontal col-md-8">
                                        <fieldset>

                                            <div class="form-group">
                                                <label for="firstname" class="col-md-4"><i class="icon-user"></i> Applicant </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="firstname" value="<?php echo $detail['applicant_name']; ?>" disabled>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label class="col-md-4" for="lastname"><i class="icon-envelope"></i> Email </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="lastname" value="<?php echo $detail['applicant_email']; ?>" disabled>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label class="col-md-4" for="lastname"><i class="icon-phone"></i> Contact No</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="lastname" value="<?php echo $detail['applicant_contact']; ?>" disabled>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <hr>

                                            <div class="form-group">
                                                <label class="col-md-4" for="lastname"><i class="icon-briefcase"></i> Job Vacancy</label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="lastname" value="<?php echo $detail['job_vacancy']; ?>" disabled>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label class="col-md-4" for="email"><i class="icon-calendar"></i> Date of application  </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="id" value="<?php echo $detail['app_date']; ?>" name="id_number" disabled>
                                                </div> <!-- /controls -->
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="gender"><i class="icon-adjust"></i> Status </label>
                                                <div class="col-md-8">

                                                    <p class="help-block"><?php echo $detail['application_status']; ?></p>

                                                    <select class="form-control" id="gender" name="app_status">
                                                        <option >Select an action</option>
                                                        <option value="Set Interview">Set Interview</option>
                                                        <option value="Rejected">Rejected</option>
                                                    </select>
                                                </div> <!-- /controls -->
                                            </div>

                                            <hr />

                                            <br />

                                            <div class="form-group">

                                                <div class="col-md-offset-4 col-md-8">
                                                    <a href="set_interview.php" class="btn btn-primary">Next</a>
                                                    <a href="index.php" class="btn btn-default"><i class="icon-trash"></i> Cancel</a>
                                                </div>
                                            </div> <!-- /form-actions -->
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->

            </div> <!-- /span8 -->

        </div> <!-- /container -->

    </div> <!-- /main -->

<?php include '../includes/footer.php'; ?>