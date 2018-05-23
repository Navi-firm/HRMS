<?php
//include '../../Includes/Core/init.php';
include '../includes/jobs.php';
?>
    <div class="main">
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <input type="text" class="form-control text-center" name="search" placeholder="Enter Key word...">
                        <span class="input-group-btn">
                        <button class="btn btn-primary" type="button"><i class="icon-search"></i> Find Job !</button>
                        </span>
                    </div>
                    <div class="list-group">

                        <?php
                        if($user_data['role'] == 'Employee'){ ?>
                            <a href="../Employee/index.php" class="btn btn-block btn-info"><i class="icon-user"></i> My Account</a>
                        <?php }
                        elseif($user_data['role'] == 'Applicant'){ ?>
                            <a href="../User/index.php" class="btn btn-block btn-info"><i class="icon-user"></i> My Account</a>
                        <?php }
                        elseif($user_data['role'] == 'HOD'){ ?>
                            <a href="../HOD/index.php" class="btn btn-block btn-info"><i class="icon-user"></i> My Account</a>
                        <?php }
                        elseif($user_data['role'] == 'admin'){ ?>
                            <a href="../Admin/index.php" class="btn btn-block btn-info"><i class="icon-user"></i> My Account</a>
                        <?php }
                        ?>

                    </div>
                    <div class="list-group">
                        <p class="list-group-item text-success">
                            <span class="icon-folder-open"></span> OPEN JOB<span class="badge">4</span>
                        </p>
                        <p class="list-group-item text-danger">
                            <span class="icon-folder-close"></span> CLOSED<span class="badge">4</span>
                        </p>
                        <p class="list-group-item">
                            <span class="icon-"></span> JOB POSTS<span class="badge">4</span>
                        </p>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <br>
                            <div class="text-center">
                                <h3 class=" text-primary"><i class="icon-search text-success"></i> I am looking for .........</h3>
                            </div>
                            <br>
                            <div class="col-xs-2"></div>
                            <div class="input-group col-xs-8">

                            </div><!-- /input-group -->
                            <br>
                            <hr />
                            <br>
                            <div style="background-color: ; margin-bottom: 5%;" class="text-center">
                                <div class="panel panel-info">
                                    <div class="panel-body" style="background-color: #CCFFFF;">
                                        <div class="col-xs-4">
                                            <h5 style="color: #000000;"><strong><i class="icon-home"></i> Local jobs</strong></h5>
                                            <h5 class="text-primary">search your area</h5>
                                        </div>
                                        <div class="col-xs-4">
                                            <h5 style="color: #000000;"><strong><i class="icon-plane"></i> International jobs</strong></h5>
                                            <h5 class="text-primary">search all over</h5>
                                        </div>
                                        <div class="col-xs-4">
                                            <h5 style="color: #000000;"><strong><i class="icon-upload-alt"></i> Upload your CV</strong></h5>
                                            <h5 class="text-primary">let employers find you</h5>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                            </div>
                            <hr />
                            <h4 style="color: #000000;"><strong><i class="icon-briefcase"></i> Job listings Found</strong></h4>
                            <br>
                            <div>
                                <?php include 'jobs_table.php'; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include '../includes/footer.php';