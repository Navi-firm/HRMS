<div class="block-content collapse in">
    <table id="shortlisted" class="table table-striped" cellspacing="0" width="100%">
        <thead>
        <th>Vacancy</th>
        <th>Applicant</th>
        <th>Email</th>
        <th>Interview Date</th>
        <th>Review</th>
        </thead>

        <?php
        //Load table from database
        $application = mysql_query("SELECT application_id, application_title, applicant_name, DATE_FORMAT(DATE(application_date), '%D %M %Y') AS app_date, applicant_contact, applicant_email, application_status, resume, cover_letter, interview_date FROM applications WHERE application_status = 'Schedule Interview' ORDER BY application_date DESC ") or die(mysql_error());

        if(mysql_num_rows($application) != 0){

            While($row = mysql_fetch_assoc($application)){ ?>
                <tbody>
                <tr>
                    <td><?php echo $row['application_title']; ?></td>
                    <td><?php echo $row['applicant_name']; ?></td>
                    <td><?php echo $row['applicant_email']; ?></td>
                    <td><?php echo $row['interview_date']; ?></td>
                    <td>
                        <a href="set_interview.php?application_id=<?php echo $row['application_id']; ?>" alt="edit" class="btn btn-info btn-sm"><i class="icon-edit-sign"></i>Interview </a>
                    </td>
                </tr>
                </tbody>
            <?php } ?>

        <?php }else {?>

            <div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                <strong>Oh Snap! </strong>No Interviews Scheduled yet</div>

        <?php }

        ?>

    </table>
</div>








