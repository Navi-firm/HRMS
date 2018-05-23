
<div class="widget stacked">

    <div class="widget-header">
        <i class="icon-tasks"></i>
        <h3>Candidates</h3>
    </div> <!-- /widget-header -->

    <div class="widget-content">

        <div class="form-group">
            <a href="../Admin/add_employee.php" class="btn btn-success"><i class="icon-plus-sign-alt"></i> Add New User</a>
        </div>
    <div class="block-content ">

        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" cellpadding="0" border="0">
            <thead>
            <tr>
                <th>Personal No.</th>
                <th>Username</th>
                <th>User Role</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            //Load table from database
            $applications = mysql_query("SELECT * FROM users");

            While($row = mysql_fetch_array($applications)){

                ?>
                <tr>
                    <td><?php echo $row['user_id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['role']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td>
                        <a href="../Admin/edit_user.php?edit_user=<?php echo $row['person_id']; ?>" class="btn btn-warning btn-sm"><i class="icon-edit-sign"></i> </a>
                        <button type="button" id="" class="btn btn-danger btn-sm"><i class="icon-trash"></i></button>

                    </td>
                </tr>
            <?php } ?>

            </tbody>
        </table>
    </div>
    </div>
</div>

<!-- sample modal content -->
<div id="review_application<?php echo $row['application_id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $row['application_id']; ?>">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span> </button>
            <h4 class="modal-title" id="myModalLabel">Candidate : <?php echo $row['application_number']; ?> </h4>
        </div>

        <div class="modal-body">
            <form id="reviewApplication" class="form-horizontal" method="post" action="">
                <fieldset>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="application_number">Username</label>
                        <div class="col-md-8">
                            <input type="text" name="application_number" class="form-control" id="application_number" value="<?php echo $row['application_number']; ?>"/>
                        </div> <!-- /controls -->
                    </div> <!-- /control-group -->


                    <div class="form-group">
                        <label class="col-md-4 control-label">Title</label>
                        <div class="col-md-8">
                            <input type="text" name="application_title" class="form-control" id="title" value="<?php echo $row['application_title']; ?>"/>
                        </div> <!-- /controls -->
                    </div> <!-- /control-group -->


                    <div class="form-group">
                        <label class="col-md-4 control-label">Application</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="applicant_name" name="applicant_name" value="<?php echo $row['applicant_name']; ?>">
                        </div> <!-- /controls -->
                    </div> <!-- /control-group -->

                    <div class="form-group">
                        <label class="col-md-4 control-label">Applicant Contact </label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="applicant_contact" value="<?php echo $row['applicant_contact']; ?>" name="applicant_contact">
                        </div> <!-- /controls -->
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Applied Date </label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="application_date" value="<?php echo $row['application_date']; ?>" name="id_number">
                        </div> <!-- /controls -->
                    </div>

                    <div class="form-group">

                        <div class="col-md-offset-4 col-md-8">
                            <button type="submit" class="btn btn-primary"><i class="icon-edit-sign"></i> Update </button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                    <!-- /form-actions -->
                </fieldset>
            </form>
        </div>

    </div>
</div>
</div>








