<?php
include '../includes/user_header.php';
?>
    <div class="main">

    <div class="container">

        <div class="row">

            <div class="col-md-9">

                <div class="widget stacked">

                    <div class="widget-header">
                        <i class="icon-group"></i>
                        <h3>Search Candidate</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <form class="form-inline" role="form">

                            <div class="form-group">
                                <select class="form-control col-md-4" id="gender" name="job_title">
                                    <option value="">Job Vacancy</option>
                                    <option value="">Accountant</option>
                                    <option value="">Developer</option>
                                    <option value="">Human Resource</option>
                                </select>
                            </div><!-- /controls -->

                            <div class="form-group">
                                <select class="form-control" id="gender" name="job_title">
                                    <option value="">Candidate</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div><!-- /controls -->

                            <div class="form-group">
                                <select class="form-control" id="gender" name="job_title">
                                    <option value="">Status</option>
                                    <option value="Male">Pending Review</option>
                                    <option value="Female">Rejected</option>
                                </select>
                            </div><!-- /controls -->

                            <div class="form-group">
                                <button type="submit" class="btn btn-info"><i class="icon-search"></i> Search</button>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-warning">Reset</button>
                            </div>

                        </form>

                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->

                <div class="widget stacked">

                    <div class="widget-header">
                        <i class="icon-tasks"></i>
                        <h3>Candidates</h3>
                    </div> <!-- /widget-header -->

                    <?php include'../Tables/review_application.php'; ?>
                </div>
            </div>

            <div class="col-sm-3"><!--left col-->
                <div class="panel panel-default active">
                    <div class="panel-heading"><i class="icon-tasks"></i> <strong>Quick Stats</strong> <i class="fa fa-link fa-1x"></i></div>
                    <ul class="list-group">
                        <li class="list-group-item"><strong class="">Total Applications </strong><span class="badge"> <?php echo application_count(); ?></span></li>
                        <li class="list-group-item "><span class=""><strong>Short Listed</strong></span> <span class="badge"><?php echo short_listed(); ?></span></li>
                        <li class="list-group-item "><span class=""><strong> Pending Review </strong></span><span class="badge"> <?php echo pending(); ?></span></li>
                        <li class="list-group-item "><span class=""><strong>Departments </strong></span><span class="badge"> <?php echo department_count(); ?></span></li>

                    </ul>
                </div>

            </div> <!-- /container -->

        </div>
    </div><!-- /main -->


<?php
include '../includes/footer.php';