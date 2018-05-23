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
                            <li class="list-group-item "><strong><i class="icon-folder-open"></i> Open</strong></span> <span class="badge"><?php echo application_count(); ?></span></li>
                            <li class="list-group-item "><strong><i class="icon-folder-close"></i> Closed </strong><span class="badge"> <?php echo jobs_count(); ?></span></li>
                            <li class="list-group-item "><strong><i class="icon-adjust"></i> Pending Review</strong><span class="badge"> <?php echo open_job(); ?></span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="widget stacked">

                        <?php

                        $job_details = mysql_query("SELECT job_id, job_name, category, description, position, contract, skills_required, budget, location, agency, status, DATE_FORMAT(DATE(created), '%D %M %Y') AS posted, work_type, experience FROM jobs WHERE job_id = " . $_GET['job_id']) or die(mysql_error());
                        $details = mysql_fetch_array($job_details);

                        ?>

                        <div class="widget-header">
                            <i class="icon-briefcase"></i>
                            <h3>Edit job <?php echo $details['job_name']; ?></h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">

                            <?php include '../../processes/review_job.php'; ?>

                            <div class="tab-pane active" id="profile">

                                <hr />
                                <label class="text-right">Status : <span class="label label-success job-status text-right"><?php echo $details['status']; ?></span></label>
                                <hr>
                                <br />
                                <form id="add_job" class="form-horizontal col-md-12" action="" method="post">
                                    <fieldset>

                                        <div class="form-group">
                                            <label for="job_vacancy" class="col-md-3"> Job Title * </label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" id="job_name" value="<?php echo $details['job_name']; ?>" name="job_name">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label class="col-md-3" for="category"> Category * </label>
                                            <div class="col-md-12">
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
                                            <label class="col-md-3" for="lastname"> Job Details * </label>
                                            <div class="col-md-12">
                                                <textarea class="form-control" name="description" id="description" rows="15" data-value=""><?php echo $details['description']; ?></textarea>
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label for="id_skills_required"  class="col-md-12" >Skills required * </label>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-xs-4"><label class="checkbox-inline"><input type="checkbox" name="skills_required[Accounting]"  value="true" >Accounting
                                                        </label></div><div class="col-xs-4"><label class="checkbox-inline"><input type="checkbox" name="skills_required[Animation]" value="true" >Animation
                                                        </label></div><div class="col-xs-4"><label class="checkbox-inline"><input type="checkbox" name="skills_required[Blog Writing]"  value="true" >Blog Writing
                                                        </label></div><div class="col-xs-4"><label class="checkbox-inline"><input type="checkbox" name="skills_required[Auditing]" value="true" >Auditing
                                                        </label></div><div class="col-xs-4"><label class="checkbox-inline"><input type="checkbox" name="skills_required[Compositing]" value="true" >Compositing
                                                        </label></div><div class="col-xs-4"><label class="checkbox-inline"><input type="checkbox" name="skills_required[Leadership]" value="true" >Leadership
                                                        </label></div><div class="col-xs-4"><label class="checkbox-inline"><input type="checkbox" name="skills_required[Graphic Design]" value="true" >Graphic Design
                                                        </label></div><div class="col-xs-4"><label class="checkbox-inline"><input type="checkbox" name="skills_required[Flash]" value="true" >Flash
                                                        </label></div><div class="col-xs-4"><label class="checkbox-inline"><input type="checkbox" name="skills_required[HTML5]" value="true" >HTML5
                                                        </label></div><div class="col-xs-4"><label class="checkbox-inline"><input type="checkbox" name="skills_required[Java]" value="true" >Java
                                                        </label></div><div class="col-xs-4"><label class="checkbox-inline"><input type="checkbox" name="skills_required[Javascript]" value="true" >Javascript
                                                        </label></div><div class="col-xs-4"><label class="checkbox-inline"><input type="checkbox" name="skills_required[Database]" value="true" >Database
                                                        </label></div><div class="col-xs-4"><label class="checkbox-inline"><input type="checkbox" name="skills_required[.Net]" value="true" >.Net
                                                        </label></div><div class="col-xs-4"><label class="checkbox-inline"><input type="checkbox" name="skills_required[Other]" value="true" >Other
                                                        </label></div><div class="col-xs-4"><label class="checkbox-inline"><input type="checkbox" name="skills_required[PHP]" value="true" >PHP
                                                        </label></div><div class="col-xs-4"><label class="checkbox-inline"><input type="checkbox" name="skills_required[Public Relation]" value="true" >Public Relation
                                                        </label></div><div class="col-xs-4"><label class="checkbox-inline"><input type="checkbox" name="skills_required[Programming]" value="true" >Programming
                                                        </label></div><div class="col-xs-4"><label class="checkbox-inline"><input type="checkbox" name="skills_required[Academic Writing]" value="true" >Academic writing
                                                        </label></div><div class="col-xs-4"><label class="checkbox-inline"><input type="checkbox" name="skills_required[Rigging]" value="true" >Rigging
                                                        </label></div><div class="col-xs-4"><label class="checkbox-inline"><input type="checkbox" name="skills_required[Translation]" value="true" >Translation
                                                        </label></div><div class="col-xs-4"><label class="checkbox-inline"><input type="checkbox" name="skills_required[USSD]" value="true" >USSD
                                                        </label></div><div class="col-xs-4"><label class="checkbox-inline"><input type="checkbox" name="skills_required[Technical Writing]" value="true" >Technical Writing
                                                        </label></div></div></div></div>

                                        <div class="form-group">
                                            <label class="col-md-3" for="budget"><i class="icon-adjust"></i> Job Category </label>
                                            <div class="col-md-12">
                                                <select class="form-control" id="budget" name="budget">
                                                    <option value="<?php echo $details['budget']; ?>" selected="selected"><?php echo $details['budget']; ?></option>
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
                                            <label class="col-md-4" for="agency"> Contract Type </label>
                                            <div class="col-md-12">
                                                <select class="form-control" id="work_type" name="work_type">
                                                    <option value="<?php echo $details['work_type']; ?>" ><?php echo $details['work_type']; ?></option>
                                                    <option value="Internship">Internship</option>
                                                    <option value="Part Time">Part Time</option>
                                                    <option value="Full Time">Full Time</option>
                                                    <option value="Consultant">Consultant</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4" for="agency"> Contract Length </label>
                                            <div class="col-md-12">
                                                <select class="form-control" id="experience" name="experience">
                                                    <option value="<?php echo $details['experience']; ?>"><?php echo $details['experience']; ?></option>
                                                    <option value="Internship">Internship</option>
                                                    <option value="1 year">1 year</option>
                                                    <option value="1 - 2 years">1 - 2 years</option>
                                                    <option value="2 - 5 years">2 - 5 years</option>
                                                    <option value="5 years +">5 years +</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4" for="agency"> Advertising Type </label>
                                            <div class="col-md-12">
                                                <select class="form-control" id="experience" name="experience">
                                                    <option value="<?php echo $details['experience']; ?>"><?php echo $details['experience']; ?></option>
                                                    <option value="Website">Website</option>
                                                    <option value="Newspaper">Newspaper</option>
                                                    <option value="Local Community">Local Community</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-4" for="agency"> Experience </label>
                                            <div class="col-md-12">
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
                                            <label class="col-md-4" for="agency"> Agency </label>
                                            <div class="col-md-12">
                                                <select class="form-control" id="agency" name="agency">
                                                    <option value="<?php echo $details['agency']; ?>"><?php echo $details['agency']; ?></option>
                                                    <option value="Critical">Critical</option>
                                                    <option value="Emergency">Emergency</option>
                                                    <option value="High">High</option>
                                                    <option value="Moderate">Moderate</option>
                                                    <option value="Low">Low</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label for=position" class="col-md-3"> Location * </label>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control" id="location" value="<?php echo $details['location']; ?>" name="location">
                                            </div> <!-- /controls -->
                                        </div>

                                        <div class="form-group">
                                            <label for=position" class="col-md-3"> Posistions * </label>
                                            <div class="col-md-12">
                                                <input type="number" class="form-control" id="position" value="<?php echo $details['position']; ?>" name="position">
                                            </div> <!-- /controls -->
                                        </div> <!-- /control-group -->

                                        <div class="form-group">
                                            <label class="col-md-4" for="agency"> Status </label>
                                            <div class="col-md-12">
                                                <select class="form-control" id="Status" name="status">
                                                    <option value="<?php echo $details['status']; ?>" ><?php echo $details['status']; ?></option>
                                                    <option value="Open">Open</option>
                                                    <option value="Re-edit">Re-edit</option>
                                                    <option value="Reject">Reject</option>
                                                </select>
                                            </div> <!-- /controls -->
                                        </div>

                                        <hr />
                                        <br />

                                        <div class="form-group">

                                            <div class=" col-md-12">
                                                <button type="submit" name="btn-update" class="btn btn-primary"><i class="icon-plus"></i> Edit Job </button>
                                                <a href="dashboard.php.php" class="btn btn-danger pull-right"><i class="icon-trash"></i> Cancel</a>
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
