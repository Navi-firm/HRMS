<?php
include '../includes/hod_header.php';
?>

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="widget stacked">
                        <?php
                        $task_id = $_GET['task_id'];

                        $task_details = mysql_query("SELECT title, description, author, start_time, end_date, status, DATE_FORMAT(DATE(created), '%D %M %Y') AS posted FROM tasks WHERE task_id='$task_id'") or die(mysql_error());
                        $details = mysql_fetch_assoc($task_details);
                        ?>
                        <div class="widget-header">
                            <i class="icon-bookmark"></i>
                            <h3><?php echo $details['title']?></h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <?php include '../../processes/post_task.php'; ?>
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#profile" data-toggle="tab">Edit Task details</a></li>
                            </ul>
                            <br>
                            <div class="tab-content">
                                <div class="tab-pane active" id="profile">
                                    <h4> Task Info</h4>
                                    <hr>
                                    <br />
                                    <form id="edit-profile" class="form-horizontal col-md-8" method="post" action="">
                                        <fieldset>

                                            <div class="form-group">
                                                <label for="firstname" class="col-md-4"> Title * </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="title" value="<?php echo $details['title']?>" name="title">
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label class="col-md-4" for="lastname"> Description </label>
                                                <div class="col-md-8">
                                                    <textarea class="form-control" name="description" id="description" rows="5"><?php echo $details['description']?></textarea>
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <hr>

                                            <div class="form-group">
                                                <label class="col-md-4" for="lastname"> No. of Employees </label>
                                                <div class="col-md-8">
                                                    <input type="text" class="form-control" id="no_employee" value="<?php echo $details['no_employee']?>" name="no_employee">
                                                </div> <!-- /controls -->
                                            </div> <!-- /control-group -->

                                            <div class="form-group">
                                                <label class="col-md-4" for="email"><i class="ui-icon-clock"></i> Start time </label>
                                                <div class="col-md-8 input-append date" id="datepicker" data-format="dd-MM-yyyy hh:mm:ss" data-date="12-02-2014">
                                                    <input type="text" class="form-control" name="start_date" >
                                                </div> <!-- /controls -->
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="email"><i class="ui-icon-clock"></i> End time </label>
                                                <div class="col-md-8 input-append date" id="datetimepicker">
                                                    <input type="text" class="form-control"  name="end_date">
                                                    <span class="add-on"><i class="icon-calendar"></i></span>
                                                </div> <!-- /controls -->
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4" for="gender">Priority </label>
                                                <div class="col-md-8">
                                                    <select class="form-control" id="priority" name="priority">
                                                        <option ><?php echo $details['priority']?></option>
                                                        <option value="Critical">Critical</option>
                                                        <option value="High">High</option>
                                                        <option value="Moderate">Moderate</option>
                                                        <option value="Low">Low</option>
                                                    </select>
                                                </div> <!-- /controls -->
                                            </div>

                                            <hr />

                                            <br />

                                            <div class="form-group">

                                                <div class="col-md-offset-4 col-md-8">
                                                    <button type="submit" name="" class="btn btn-success"> Edit Task</button>
                                                    <a href="index.php" class="btn btn-default"><i class="icon-trash"></i> Cancel</a>
                                                </div>
                                            </div> <!-- /form-actions -->
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div> <!-- /widget-content -->

                    </div> <!-- /widget -->

                </div>

                <div class="col-sm-3"><!--left col-->
                    <div class="panel panel-default active">
                        <div class="panel-heading text-warning"><i class="icon-tasks"></i> <strong>Quick Stats</strong> <i class="fa fa-link fa-1x"></i></div>
                        <ul class="list-group">
                            <li class="list-group-item"><strong class="">Total Employees </strong><span class="badge"> <?php echo staff_count(); ?></span></li>
                            <li class="list-group-item "><span class=""><strong>Applicants</strong></span> <span class="badge"><?php echo application_count(); ?></span></li>
                            <li class="list-group-item "><span class=""><strong>Job Posts </strong></span><span class="badge"> <?php echo jobs_count(); ?></span></li>
                            <li class="list-group-item "><span class=""><strong>Open Jobs</strong></span><span class="badge"> <?php echo open_job(); ?></span></li>
                            <li class="list-group-item "><span class=""><strong>Closed Jobs </strong></span><span class="badge"><?php echo closed_job(); ?></span></li>

                        </ul>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading text-warning"><i class="icon-bar-chart"></i> <strong>Productivity</strong><i class="fa fa-link fa-1x"></i></div>
                        <ul class="list-group">
                            <li class="list-group-item "><span class=""><strong> Tasks </strong></span><span class="badge"><?php echo closed_job(); ?></span></li>
                            <li class="list-group-item "><span class=""><strong> Completed </strong></span><span class="badge"><?php echo closed_job(); ?></span></li>
                            <li class="list-group-item "><span class=""><strong> In Progess </strong></span><span class="badge"><?php echo closed_job(); ?></span></li>
                        </ul>
                    </div><!-- /row -->

                </div> <!-- /container -->

            </div>
        </div>
    </div>

<?php include '../includes/footer.php';

