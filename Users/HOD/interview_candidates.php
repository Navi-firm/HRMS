<div class="block-content collapse in">
    <table id="interview" class="table table-striped" cellspacing="0" width="100%">
        <thead>
        <th>Vacancy</th>
        <th>Applicant</th>
        <th>Email</th>
        <th>Status</th>
        <th>Review</th>
        </thead>

        <?php
        $my_department = $user['department'];
        //Load table from database
        $application = mysql_query("SELECT application_id, application_title, applicant_name, department, DATE_FORMAT(DATE(application_date), '%D %M %Y') AS app_date, applicant_contact, applicant_email, application_status, resume, cover_letter FROM applications WHERE application_status = 'Short List' AND department = '$my_department' OR application_status = '50 -50' AND department = '$my_department' OR application_status = 'Pending Review' AND department = '$my_department' ORDER BY application_date DESC ") or die(mysql_error());

        if(mysql_num_rows($application) != 0){

            While($row = mysql_fetch_assoc($application)){ ?>
                <tbody>
                <tr>
                    <td><?php echo $row['application_title']; ?></td>
                    <td><?php echo $row['applicant_name']; ?></td>
                    <td><?php echo $row['applicant_email']; ?></td>
                    <td><span class="label label-success job-status text-right"><?php echo $row['application_status'];?></span></td>
                    <td>
                        <a href="review_candidate.php?application_id=<?php echo $row['application_id']; ?>" alt="edit" class="btn btn-info btn-sm"><i class="icon-edit-sign"></i> Review </a>
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








