<?php
include '../includes/hod_header.php';
?>

    <div class="main">
        <div class="container">
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
                        <a class="list-group-item active" href="jobs.php">
                            <span class="icon-briefcase"></span> Jobs <i class="icon-chevron-right pull-right"></i>
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

                <div class="col-md-9">
                    <div class="widget stacked">

                        <?php

                            $job_details = mysql_query("SELECT job_id, job_title, category, details, purpose, duration, advertisement, position, responsibilities, salary, location, agency, status, DATE_FORMAT(DATE(created), '%D %M %Y') AS posted, work_type, experience FROM jobs WHERE job_id = " . $_GET['job_id']) or die(mysql_error());
                            $details = mysql_fetch_array($job_details);

                        ?>

                        <div class="widget-header">
                            <i class="icon-briefcase"></i>
                            <h3>Edit job <?php echo $details['job_title']; ?></h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">

                            <?php include '../../processes/edit_job.php'; ?>

                            <div class="tab-pane active" id="profile">

                                <hr />
                                <label class="text-right">Status : <span class="label label-success job-status text-right"><?php echo $details['status']; ?></span></label>
                                <hr>
                                <br />
                                <form id="add_job" class="form-horizontal col-md-12" name="" action="" method="post">
                                    <fieldset>

                                        <div class="form-group">
                                            <label for="job_vacancy" class="col-md-3"> Job Title * </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="job_name" value="<?php echo $details['job_title']; ?>" name="job_title">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label class="col-md-3" for="category"> Category * </label>
                                            <div class="col-md-4">
                                                <select class="form-control" id="category" name="category">
                                                    <option value="<?php echo $details['category']; ?>"><?php echo $details['category']; ?></option>
                                                    <optgroup label="Design">
                                                        <option value="Graphic Design">Graphic Design</option>
                                                        <option value="Creative Writing">Creative Writing</option>
                                                        <option value="Film & Photography">Film & Photography</option>
                                                    </optgroup>
                                                    <optgroup label="Developers">
                                                        <option value="Software Development">Software Development</option>
                                                        <option value="Web Developmet">Web Development</option>
                                                        <option value="Database Development">Database Development</option>
                                                        <option value="Application Development">Application Development</option>
                                                    </optgroup>
                                                    <optgroup label="Finance">
                                                        <option value="Accountant 01">Accountant 01</option>
                                                        <option value="Accountant 02">Accountant 02</option>
                                                        <option value="Auditor 01">Auditor 01</option>
                                                        <option value="Auditor 02">Auditor 02</option>
                                                        <option value="Finance Planning">Finance Planning</option>
                                                        <option value="Human Resource">Human Resource</option>
                                                    </optgroup>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label for="job_vacancy" class="col-md-3"> Location * </label>
                                            <div class="col-md-5">
                                                <input type="text" class="form-control" id="job_name" value="<?php echo $details['location']; ?>" name="location">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label for="job_vacancy" class="col-md-3"> Date </label>
                                            <div class="col-md-4">
                                                <select class="" id="daydropdown" name="day"></select>

                                                <select class="" id="monthdropdown" name="month"></select>

                                                <select class="" id="yeardropdown" name="year"></select>

                                                <script type="text/javascript">

                                                    //populatedropdown(id_of_day_select, id_of_month_select, id_of_year_select)
                                                    window.onload=function(){
                                                        populatedropdown("daydropdown", "monthdropdown", "yeardropdown")
                                                    }
                                                </script>

                                            </div> <!-- /controls -->

                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label class="col-md-3" for="lastname"> Job Details * </label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" name="details" id="description" rows="15" maxlength="1000"><?php echo $details['details']; ?></textarea>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label class="col-md-3" for="lastname"> Purpose * </label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" name="purpose" id="description" rows="6" maxlength="250"><?php echo $details['purpose']; ?></textarea>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label for="id_skills_required"  class="col-md-3" > Responsibilities </label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" name="responsibilities" id="description" rows="6" maxlength="300"><?php echo $details['responsibilities']; ?></textarea>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3" for="budget"> Salary Type * </label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="budget" name="salary">
                                                    <option value="<?php echo $details['salary']; ?>" selected="selected"><?php echo $details['salary']; ?></option>
                                                    <option value="KSh 15,000">Micro: KSh 15,000</option>
                                                    <option value="KSh 15,000 to 50,000">Tiny: KSh 15,000 to 50,000</option>
                                                    <option value="KSh 50,000 to 100,000">Small: KSh 50,000 to 100,000</option>
                                                    <option value="KSh 100,000 to 250,000">Medium: KSh 100,000 to 250,000</option>
                                                    <option value="KSh 250,000 to 500,000">Large: KSh 250,000 to 500,000</option>
                                                    <option value="KSh 500,000 to 1,000,000">Macro: KSh 500,000 to 1,000,000</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3" for="agency">Contract Type </label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="work_type" name="work_type">
                                                    <option value="<?php echo $details['work_type']; ?>"><?php echo $details['work_type']; ?></option>
                                                    <option value="Internship">Internship</option>
                                                    <option value="Part Time">Part Time</option>
                                                    <option value="Full Time">Full Time</option>
                                                    <option value="Consultant">Consultant</option>

                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3" for="agency"> Contract Duration </label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="experience" name="duration">
                                                    <option value="duration"><?php echo $details['duration']; ?></option>
                                                    <option value="Less than 1 year">Less than 1 year</option>
                                                    <option value="1 year">1 year</option>
                                                    <option value="1 - 2 years">1 - 2 years</option>
                                                    <option value="2 - 5 years">2 - 5 years</option>
                                                    <option value="5 years +">5 years +</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3" for="agency"> Experience </label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="experience" name="experience">
                                                    <option value="<?php echo $details['experience']; ?>"><?php echo $details['experience']; ?></option>
                                                    <option value="Entry Level">Entry Level</option>
                                                    <option value="Graduate">Graduate</option>
                                                    <option value="1 year">1 year</option>
                                                    <option value="1 - 2 years">1 - 2 years</option>
                                                    <option value="2 - 5 years">2 - 5 years</option>
                                                    <option value="5 years +">5 years +</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3" for="agency"> Agency </label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="agency" name="agency">
                                                    <option ><?php echo $details['agency']; ?></option>
                                                    <option value="Critical">Critical</option>
                                                    <option value="Emergency">Emergency</option>
                                                    <option value="High">High</option>
                                                    <option value="Moderate">Moderate</option>
                                                    <option value="Low">Low</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label for=position" class="col-md-3"> Positions * </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="position" value="<?php echo $details['position']; ?>" name="position">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label class="col-md-3" for="budget"> Advertisement </label>
                                            <div class="col-md-9">
                                                <select class="form-control" id="budget" name="advertisement">
                                                    <option value="" selected="selected"><?php echo $details['advertisement']; ?></option>
                                                    <option value="Local">Local</option>
                                                    <option value="website">Website</option>
                                                    <option value="Paper">Paper</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <hr />

                                        <br />

                                        <div class="form-group">

                                            <div class=" col-md-12">
                                                <button type="submit" name="post" onclick="javascript:send_post()" class="btn btn-primary"><i class="icon-plus"></i> Publish Job </button>
                                                <a href="jobs.php" class="btn btn-danger pull-right"><i class="icon-trash"></i> Cancel</a>
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

<?php include '../includes/footer.php';
