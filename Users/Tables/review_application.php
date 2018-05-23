<div class="block-content collapse in">
    <table id="viewdata" class="table table-striped table-bordered" cellspacing="0" width="100%" cellpadding="0" border="0">
        <thead>
        <tr>
            <th>#</th>
            <th>Job Vacancy</th>
            <th>Candidate</th>
            <th>Application Date</th>
            <th>Contact</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>

        <?php
        //Load table from database
        $applications = mysql_query("SELECT application_id, applicant_name, applicant_contact, application_status, application_title, applicant_email, job_vacancy, DATE_FORMAT(DATE(application_date), '%D %M %Y') AS app_date FROM applications WHERE application_status = 'Pending Review' ORDER BY application_id") or die(mysql_error());

        if(mysql_num_rows($applications) != 0){

            While($row = mysql_fetch_assoc($applications)){ ?>
                <tbody>
                <tr>
                    <td><?php echo $row['application_id'] ?></td>
                    <td><?php echo $row['job_vacancy']; ?></td>
                    <td><?php echo $row['applicant_name']; ?></td>
                    <td><?php echo $row['app_date']; ?></td>
                    <td><?php echo $row['applicant_contact']; ?></td>
                    <td><?php echo $row['application_status']; ?></td>
                    <td>
                        <a href="../Applicants/edit_application.php?edit_id=<?php echo $row['application_id']; ?>" alt="edit" class="btn btn-warning btn-sm"><i class="icon-edit-sign"></i></a>
                        <button type="button" id="" class="btn btn-danger btn-sm"><i class="icon-trash"></i></button>

                    </td>
                </tr>
                </tbody>
            <?php } ?>

        <?php }else {?>

            <div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                <strong>Oh Snap! </strong>No Records could be found</div>

        <?php }

        ?>

    </table>
</div>








