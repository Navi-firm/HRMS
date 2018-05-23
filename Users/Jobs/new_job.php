<?php
include '../includes/header.php';
?>

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-default active">
                        <ul class="list-group">
                            <li class="list-group-item"><strong><i class="icon-tasks"></i> Jobs </strong><span class="badge"> <?php echo jobs_count(); ?></span></li>
                            <li class="list-group-item "><strong><i class="icon-folder-open"></i> Open</strong></span> <span class="badge"><?php echo open_job(); ?></span></li>
                            <li class="list-group-item "><strong><i class="icon-folder-close"></i> Closed </strong><span class="badge"> <?php echo closed_job(); ?></span></li>
                            <li class="list-group-item "><strong><i class="icon-adjust"></i> Pending Review</strong><span class="badge"> <?php echo job_pending(); ?></span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="widget stacked">

                        <div class="widget-header">
                            <i class="icon-briefcase"></i>
                            <h3>Create New Job</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">

                            <?php include '../../processes/post_job.php'; ?>

                            <div class="tab-pane active" id="profile">
                                <h4> Job Info</h4>
                                <hr>
                                <br />
                                <form id="add_job" class="form-horizontal col-md-12" name="" action="" method="post">
                                    <fieldset>

                                        <div class="form-group">
                                            <label for="job_vacancy" class="col-md-3 text-right"> Job Title * </label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" id="job_name" value="" name="job_title">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label class="col-md-3 text-right" for="category"> Job Category * </label>
                                            <div class="col-md-4">
                                                <select class="form-control" id="category" name="category">
                                                    <option >Select Job Category</option>
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
                                            <label for="job_vacancy" class="col-md-3 text-right"> Duty Station * </label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" id="job_name" value="" name="location">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label class="col-md-3 text-right" for="budget"> Salary Range * </label>
                                            <div class="col-md-4">
                                                <select class="form-control" id="budget" name="budget">
                                                    <option value="" selected="selected">---------</option>
                                                    <option value="KSh 15,000">KSh 15,000</option>
                                                    <option value="KSh 15,000 to 50,000">KSh 15,000 to 50,000</option>
                                                    <option value="KSh 50,000 to 100,000">KSh 50,000 to 100,000</option>
                                                    <option value="KSh 100,000 to 250,000">KSh 100,000 to 250,000</option>
                                                    <option value="KSh 250,000 to 500,000">KSh 250,000 to 500,000</option>
                                                    <option value="KSh 500,000 to 1,000,000">KSh 500,000 to 1,000,000</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 text-right" for="budget"> Contract Type * </label>
                                            <div class="col-md-3">
                                                <select class="form-control" id="budget" name="type">
                                                    <option value="" selected="selected">---------</option>
                                                    <option value="Standard">Standard</option>
                                                    <option value="Temporary">Temporary</option>
                                                    <option value="Casual">Casual</option>
                                                    <option value="Intern">Intern</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 text-right" for="budget"> Contract Duration * </label>
                                            <div class="col-md-3">
                                                <select class="form-control" id="budget" name="contract">
                                                    <option value="" selected="selected">---------</option>
                                                    <option value="1 - 4 Months">1 - 4 Months</option>
                                                    <option value="1 Year">1 Year</option>
                                                    <option value="1 - 2 Year">1 - 2 Year</option>
                                                    <option value="2 - 5 Year">2 - 5 Year</option>
                                                    <option value="5 Year +">5 Year +</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 text-right" for="budget"> Type of Advert * </label>
                                            <div class="col-md-3">
                                                <select class="form-control" id="budget" name="advert">
                                                    <option value="" selected="selected">---------</option>
                                                    <option value="Website">Website</option>
                                                    <option value="Newspaper">Newspaper</option>
                                                    <option value="Local">Local</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label for="username" class="col-md-3 text-right"><i class="icon-calendar"></i> Closing Date </label>
                                            <div class="col-md-6">
                                                <input id="datepicker" class="form-control" value="" name="exit_date" placeholder="01/12/2016"/>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label class="col-md-3 text-right" for="lastname"> Job Details * </label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" name="details" id="description" rows="15" maxlength="1000"></textarea>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label class="col-md-3 text-right" for="lastname"> Purpose * </label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" name="purpose" id="description" rows="6" maxlength="250"></textarea>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label for="id_skills_required"  class="col-md-3 text-right" > Responsibilities </label>
                                            <div class="col-md-9">
                                                <textarea class="form-control" name="responsibilities" id="description" rows="6" maxlength="300"></textarea>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 text-right" for="budget"> Salary Range* </label>
                                            <div class="col-md-4">
                                                <select class="form-control" id="budget" name="salary">
                                                    <option value="" selected="selected">---------</option>
                                                    <option value="KSh 15,000">15,000</option>
                                                    <option value="KSh 15,001 to 50,000">KSh 15,001 to 50,000</option>
                                                    <option value="KSh 50,001 to 100,000">KSh 50,001 to 100,000</option>
                                                    <option value="KSh 100,001 to 250,000">KSh 100,000 to 250,000</option>
                                                    <option value="KSh 250,001 to 500,000">KSh 250,000 to 500,000</option>
                                                    <option value="KSh 500,001 to 1,000,000">KSh 500,000 to 1,000,000</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 text-right" for="agency"> Experience </label>
                                            <div class="col-md-4">
                                                <select class="form-control" id="experience" name="experience">
                                                    <option >Select experience</option>
                                                    <option value="Entry Level">Entry Level</option>
                                                    <option value="1 year">1 year</option>
                                                    <option value="1 - 2 years">1 - 2 years</option>
                                                    <option value="2 - 5 years">2 - 5 years</option>
                                                    <option value="5 years +">5 years +</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-3 text-right" for="agency"> Vacancy Urgency </label>
                                            <div class="col-md-3">
                                                <select class="form-control" id="agency" name="agency">
                                                    <option >Select Priority</option>
                                                    <option value="Critical">Critical</option>
                                                    <option value="Emergency">Emergency</option>
                                                    <option value="High">High</option>
                                                    <option value="Moderate">Moderate</option>
                                                    <option value="Low">Low</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label for=position" class="col-md-3 text-right"> Positions * </label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id="position" value="" name="position">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

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
