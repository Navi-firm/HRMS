<div class="block-content collapse in">
    <table id="shortlisted" class="table table-striped" cellspacing="0" width="100%">
        <thead>
        <th>Position</th>
        <th>Applicant</th>
        <th>Total Score</th>
        <th>Status</th>
        <th>Interview Date</th>
        <th></th>
        </thead>

        <?php
        //Load table from database
        $application = mysql_query("SELECT summary_id, applicant, position, email, DATE_FORMAT(interview_date, '%d %M %Y') AS interview_date, total, hiring_manager, department, oral, written, total, summary, status, created FROM interview_summary  ORDER BY created DESC ") or die(mysql_error());

        if(mysql_num_rows($application) != 0){

            While($interview = mysql_fetch_assoc($application)){ ?>
                <tbody>
                <tr>
                    <td><?php echo $interview['position']; ?></td>
                    <td><p class="text-success"><?php echo $interview['applicant']; ?></p></td>
                    <td><p class="text-center"><?php echo $interview['total']; ?></p></td>
                    <td><span class="label label-success job-status text-right"><?php echo $interview['status'];?></span></td>
                    <td><?php echo $interview['interview_date'];?></td>
                    <td>
                        <a href="employ.php?interview_id=<?php echo $interview['summary_id']; ?>" alt="edit" class="btn btn-info btn-sm"><i class="icon-plus"></i> Employ</a>
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








