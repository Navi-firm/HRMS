<?php
include '../includes/header.php';
?>
    <div class="main">

    <div class="container">

        <div class="row">

            <div class="col-md-3">

                <div class="list-group">
                    <a class="list-group-item active" href="dashboard.php">
                        <span class="icon-home"></span> Dashboard
                    </a>
                </div>

                <div class="list-group">
                    <p id="bids" class="list-group-item">
                        <span class="badge">4</span>
                        <span class="icon-file"></span> Applications
                    </p>
                    <p id="bids" class="list-group-item">
                        <span class="badge"><?php echo open_job(); ?></span>
                        <span class="icon-briefcase"></span> Open Jobs
                    </p>
                    <p id="bids" class="list-group-item">
                        <span class="badge"><?php echo closed_job(); ?></span>
                        <span class="icon-briefcase"></span> Closed Jobs
                    </p>
                </div>

                <div class="list-group">
                    <a class="list-group-item" href="settings.php">
                        <span class="icon-cogs"></span> Settings
                    </a>
                </div>

            </div>

            <div class="col-md-9">

                <div class="widget stacked">

                    <div class="widget-header">
                        <h3>#Job</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <div class="tab-pane profile active" id="profile">
                            <form id="edit-profile2" class="form-horizontal col-md-12" method="post" action="">
                                <fieldset>
                                    <h4>Applicant Details</h4>
                                    <hr />
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label for="username" class="col-md-6"><i class="icon-user"></i> First Name *</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="username" value="" name="first_name" placeholder="eg. John">
                                            </div> <!-- /controls -->
                                        </div>
                                        <div class="col-md-6">
                                            <label for="username" class="col-md-6">Last Name *</label>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" id="username" value="" name="last_name" placeholder="eg. Doe">
                                            </div> <!-- /controls -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="col-md-3"><i class="icon-envelope"></i> Email </label>
                                        <div class="col-md-6">
                                            <input type="email" class="form-control" id="username" value="" name="email" placeholder="eg. johndoe@mail.com">
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->
                                    <div class="form-group">
                                        <label for="username" class="col-md-3"><i class="icon-phone"></i> Contact </label>
                                        <div class="col-md-6">
                                            <input type="email" class="form-control" id="username" value="" name="contact" placeholder="eg. +254 705 000000">
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->
                                    <div class="form-group">
                                        <label for="username" class="col-md-3"><i class="icon-tags"></i> Address </label>
                                        <div class="col-md-6">
                                            <input type="email" class="form-control" id="username" value="" name="address" placeholder="">
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->
                                    <div class="form-group">
                                        <label for="username" class="col-md-3"><i class="icon-briefcase"></i> Zip Code * </label>
                                        <div class="col-md-3">
                                            <input type="number" class="form-control" id="zip_code" value="" name="zip_code" maxlength="5" placeholder="eg. 254">
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->
                                    <div class="form-group">
                                        <label for="username" class="col-md-3"><i class="icon-briefcase"></i> City, State * </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" id="zip_code" value="" name="zip_code" maxlength="100" placeholder="eg. Nairobi, Kenya">
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->
                                    <hr />
                                    <h4>Vacancy Details</h4>
                                    <br>
                                    <div class="form-group">
                                        <label for="username" class="col-md-3"><i class="icon-briefcase"></i> Job Title </label>
                                        <div class="col-md-9">
                                            <input type="email" class="form-control" id="username" value="" disabled name="email" placeholder="Internal Auditor">
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->
                                    <div class="form-group">
                                        <label for="username" class="col-md-3"><i class="icon-file-alt"></i> Cover Letter </label>
                                        <div class="col-md-9">
                                            <input type="file" class=" form-control" name="cover_letter">
                                            <p class="help-block">Accepts .docx, .doc, .odt, .pdf, .rtf, .txt up to 1MB</p>
                                        </div> <!-- /controls -->
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="col-md-3"><i class="icon-file-alt"></i> Resume </label>
                                        <div class="col-md-9">
                                            <input type="file" class=" form-control" name="resume">
                                            <p class="help-block">Accepts .docx, .doc, .odt, .pdf, .rtf, .txt up to 1MB</p>
                                        </div> <!-- /controls -->
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="col-md-3"><i class="icon-briefcase"></i> Summary </label>
                                        <div class="col-md-9">
                                            <textarea name="summary" class="form-control" rows="6" maxlength="550"></textarea>
                                        </div> <!-- /controls -->
                                    </div> <!-- /control-group -->
                                    <hr />
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <button type="submit" class="btn btn-primary"><i class="icon-file-alt"></i> Save Changes</button>
                                                </div>
                                                <div class="col-md-6 pull-right">
                                                    <a href="dashboard.php" class="btn btn-danger"><i class="icon-trash"></i> Cancel</a>
                                                </div>
                                            </div> <!-- /.form-group -->

                                        </div>
                                    </div> <!-- /.form-group -->
                                </fieldset>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>


<?php include '../includes/footer.php';