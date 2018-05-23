<div class="block-content collapse in">
    <table id="applications" class="table table-striped" cellspacing="0" width="100%">
        <thead>
        <th>#</th>
        <th>Job</th>
        <th>Applicant</th>
        <th>Phone</th>
        <th>Applied</th>
        <th>Work Status</th>
        <th>Action</th>
        </tr>
        </thead>

        <?php

        $candidate = $_GET['candidate_id'];
        //Load table from database
        $application = mysql_query("SELECT application_id, application_title, applicant_name, DATE_FORMAT(DATE(application_date), '%D %M %Y') AS app_date, applicant_contact, applicant_email, application_status, resume, cover_letter FROM applications WHERE applicant_name = '$candidate' ORDER BY application_date DESC ") or die(mysql_error());

        if(mysql_num_rows($application) != 0){

            While($row = mysql_fetch_assoc($application)){ ?>
                <tbody>
                <tr>
                    <td><?php echo $row['application_id'] ?></td>
                    <td><?php echo $row['application_title']; ?></td>
                    <td><?php echo $row['applicant_name']; ?></td>
                    <td><?php echo $row['applicant_contact']; ?></td>
                    <td><?php echo $row['app_date'];?></td>
                    <td><?php echo $row['application_status'];?></td>
                    <td>
                        <a href="edit_application.php?application_id=<?php echo $row['application_id']; ?>" alt="edit" class="btn btn-info btn-sm"><i class="icon-edit-sign"></i> Review </a>
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








