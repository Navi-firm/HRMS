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
                        <a class="list-group-item" href="events.php">
                            <span class="icon-list-alt"></span> Events
                        </a>
                        <a class="list-group-item  active" href="tasks.php">
                            <span class="icon-tasks"></span> Tasks <i class="icon-chevron-right pull-right"></i>
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
                            <h5><strong><i class="icon-tasks"></i> Tasks </strong></h5>
                        </div>
                        <div class="panel-body">
                            <div class="form-horizontal col-md-12">
                                <?php
                                $my_task = mysql_query("SELECT task_id, task_name, description, DATE_FORMAT(start_time, '%d/%m/%Y') AS start_time, DATE_FORMAT(due_date, '%d/%m/%Y') AS due_date, estimated_hours, creator, status, created FROM tasks WHERE task_id = " . $_GET['task_id']);
                                $task = mysql_fetch_assoc($my_task);

                                if(isset($_POST['btn-update']))
                                {
                                    $task_id = $_GET['task_id'];
                                    $task_status = $_POST['status'];

                                    $update_job = mysql_query("UPDATE tasks SET status = '$task_status' WHERE task_id = '$task_id'")or die(mysql_error());

                                    if($update_job){
                                        echo "<script>
                                        alert('Task Status Updated');
                                        window.location.href = 'tasks.php';
                                      </script>";
                                    }else{
                                        echo "<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a> <strong>ERROR !</strong> Task Status update error</div>";
                                    }
                                }

                                ?>
                                <div class="tabbable">
                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#profile" data-toggle="tab"><i class="icon-tasks"></i> Review Task #<?php echo $task['task_id']; ?></a>
                                        </li>
                                    </ul>

                                    <br>

                                    <div class="tab-content">

                                        <div class="tab-pane active" id="profile">
                                            <div class="table-container">
                                                <hr />
                                                <div class="table-container">
                                                    <form id="add_job" class="form-horizontal col-md-12" name="" action="" method="post">
                                                        <fieldset>
                                                            <div class="form-group">
                                                                <label for="job_vacancy" class="col-md-3"> Task Name </label>
                                                                <div class="col-md-6">
                                                                    <input type="text" disabled class="form-control" id="job_name" value="<?php echo $task['task_name']; ?>" name="t_name" placeholder="">
                                                                </div> <!-- /controls -->
                                                            </div> <!-- /control-group -->

                                                            <div class="form-group">
                                                                <label for="job_vacancy" class="col-md-3"> Start Date : </label>
                                                                <div class="col-md-9">
                                                                    <p class="text-success"><?php echo $task['start_time']; ?></p>
                                                                </div> <!-- /controls -->

                                                            </div> <!-- /control-group -->

                                                            <div class="form-group">
                                                                <label for="job_vacancy" class="col-md-3"> End Date : </label>
                                                                <div class="col-md-9">
                                                                    <p class="text-danger"><?php echo $task['due_date']; ?></p>
                                                                </div> <!-- /controls -->

                                                            </div> <!-- /control-group -->

                                                            <div class="form-group">
                                                                <label for="job_vacancy" class="col-md-3"> Task Description </label>
                                                                <div class="col-md-6">
                                                                    <p><?php echo $task['description']; ?></p>
                                                                </div> <!-- /controls -->
                                                            </div> <!-- /control-group -->

                                                            <div class="form-group">
                                                                <label class="col-md-3" for="agency"> Task Status </label>
                                                                <div class="col-md-4">
                                                                    <h5 class="label label-success job-status text-right"><?php echo $task['status']; ?></h5>
                                                                    <hr />
                                                                    <select class="form-control" id="work_type" name="status">
                                                                        <option value="">------</option>
                                                                        <option value="Started">Started</option>
                                                                        <option value="Completed">Completed</option>
                                                                    </select>
                                                                </div> <!-- /controls -->
                                                            </div>

                                                            <div class="form-group">
                                                                <div class=" col-md-12">
                                                                    <?php

                                                                        if($task['status'] !== 'Completed'){
                                                                            ?>
                                                                            <button type="submit" name="btn-update"class="btn btn-primary"><i class=""></i> Save Changes </button>
                                                                            <?php
                                                                        }
                                                                    ?>
                                                                    <a href="tasks.php" class="btn btn-default">Cancel</a>
                                                                </div>
                                                            </div> <!-- /form-actions -->
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php include '../includes/footer.php';
