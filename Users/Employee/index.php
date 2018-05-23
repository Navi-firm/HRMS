<?php
include '../includes/employee_header.php';
?>
    <div class="main">

    <div class="container">
    <?php
        $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, pro_pic, hire_date, department, phone, postal_code, CONCAT(county, ', ', country) AS location, gender, email, postal_code, DATE_FORMAT(created, '%d %M %Y') AS joined FROM staff WHERE staff_id =". $user_data['user_id']);
        $user = mysql_fetch_array($applicant);
    ?>

         <div class="row">
            <div class="col-md-12">
                <div class="col-md-3">

                    <div class="list-group">
                        <a class="list-group-item active" href="index.php">
                            <span class="icon-home"></span> Dashboard <i class="icon-chevron-right pull-right"></i>
                        </a>
                        <a class="list-group-item" href="leave.php">
                            <span class="icon-arrow-left"></span>My Leave
                        </a>
                        <a class="list-group-item" href="tasks.php">
                            <span class="icon-tasks"></span>My Tasks
                        </a>
                        <a class="list-group-item" href="events.php">
                            <span class="icon-list-alt"></span> Events
                        </a>
                        <a class="list-group-item" href="../Jobs/dashboard.php">
                            <span class="icon-briefcase"></span> Find Work
                        </a>
                        <a class="list-group-item" href="profile.php">
                            <span class="icon-user"></span> My Profile
                        </a>
                    </div>

                </div>
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><strong><i class=""></i> Welcome </strong><a class="pull-right" href="settings.php"><span class="badge badge-info"><i class="icon-edit"></i> EDIT</span></a></h4>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-4">
                                <p class="">
                                   <img data-src="holder.js/260x180" alt="180x150" style="width: 180px; height: 150px;" src="../images/<?php echo $user['pro_pic']; ?>">
                                 </p>
                                <h4><strong><i class=""></i> <?php echo $user['fullname'];?> </strong></h4>
                            </div>
                            <div class="span5">
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>Department:</td>
                                        <td><?php echo $user['department'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Role:</td>
                                        <td><?php echo $user_data['role']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Hire date:</td>
                                        <td><?php echo $user['hire_date'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Home Address</td>
                                        <td><?php echo $user['location'];?></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><a href="mailto:info@support.com"><?php echo $user['email'];?></a></td>
                                    </tr>
                                    <td>Phone Number</td>
                                    <td><?php echo $user['phone'];?>
                                    </td>

                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
              	        <h5><strong><i class="icon-time"></i> </strong></h5>
                    </div>
              	<div class="panel-body">
              		<div class="col-md-8">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <span class="glyphicon glyphicon-tasks"></span>
                                    My Tasks
                                </h3>
                            </div>
                            <div class="panel-body">
                            <table id="shortlisted" class="table table-striped" cellspacing="0" width="100%">
								<thead>
								<th>Task Name</th>
								<th>Due Date</th>
								<th>Status</th>
								<th></th>
								</thead>

								<?php
								//Load table from database
								$assigned = $user['staff_id'];

								$application = mysql_query("SELECT task_id, task_name, description, DATE_FORMAT(start_time, '%d/%m/%Y') AS start_time, DATE_FORMAT(due_date, '%d/%m/%Y') AS due_date, estimated_hours, status, DATE_FORMAT(created, '%d %M %Y') AS created FROM tasks WHERE assigned_to = '$assigned' OR creator = '$assigned' ORDER BY created DESC LIMIT 0, 10") or die(mysql_error());

								if(mysql_num_rows($application) != 0){

									While($row = mysql_fetch_assoc($application)){ ?>
										<tbody>
										<tr>
											<td><?php echo $row['task_name']; ?></td>
											<td><p class="text-danger"><?php echo $row['due_date'];?></p></td>
											<td><span class="label label-success job-status"><?php echo $row['status'];?></span></td>
											<td>
												<a href="view_task.php?task_id=<?php echo $row['task_id']; ?>" alt="edit" class="btn btn-info btn-sm"><i class="icon-eye-open"></i></a>
											</td>
										</tr>
										</tbody>
									<?php } ?>

								<?php }else {?>

									<div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
										<strong>Oh Snap! </strong>No Tasks Assigned </div>

								<?php }

								?>

							</table>
                            </div>
                        </div>
					</div>
              		<div class="col-md-4">
              			<div class="">
                                    <div class="">

                                        <!-- Fluid width widget -->
                                        <div class="panel panel-danger">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                    Calendar Events
                                                </h3>
                                            </div>
                                            <div class="panel-body">

                                                <ul class="media-list">
                                                <?php
                                                $application = mysql_query("SELECT event_id, event_name, description, venue, DATE_FORMAT(start_date, '%d/%m/%Y') AS start_time, DATE_FORMAT(start_date, '%d') AS event_day, DATE_FORMAT(start_date, '%b') AS event_month, DATE_FORMAT(start_date, '%Y') AS event_year, DATE_FORMAT(end_date, '%d/%m/%Y') AS due_date, venue, status, DATE_FORMAT(created, '%d/8%m/%Y') AS created FROM events ORDER BY created DESC LIMIT 0, 3 ") or die(mysql_error());
                                                if(mysql_num_rows($application) != 0){

                                                    While($row = mysql_fetch_assoc($application)){
                                                ?>
                                                    <li class="media">
                                                        <div class="media-left col-md-3">
                                                            <div class="panel panel-danger text-center date">
                                                                <div class="panel-heading month">
                                                                    <span class="panel-title strong">
                                                                        <?php echo $row['event_month']; ?>
                                                                    </span>
                                                                </div>
                                                                <div class="panel-body day text-danger">
                                                                    <?php echo $row['event_day']; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media-body col-md-9">
                                                            <h4 class="media-heading">
                                                                <?php echo $row['event_name']; ?>
                                                            </h4>
                                                            <p class="help-block"><?php echo $row['venue']; ?></p>
                                                        </div>
                                                    </li>
                                                 <?php } } ?>
                                                </ul>
                                                <a href="events.php" class="btn btn-default btn-block">More Events »</a>
                                            </div>
                                        </div>
                                        <!-- End fluid width widget -->

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