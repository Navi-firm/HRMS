<div class="block-content collapse in">
    <table id="shortlisted" class="table table-striped" cellspacing="0" width="100%">
        <thead>
        <th>Position</th>
        <th>Applicant</th>
        <th>Email</th>
        <th>Status</th>
        <th>Interview Date</th>
        </thead>

        <?php
        //Load table from database
        $my_department = $user['department'];
        $application = mysql_query("SELECT interview_id, applicant, position, email, hiring_manager, subject, message, department, status, posted, interview_date FROM interview WHERE department = '$my_department' ORDER BY posted DESC ") or die(mysql_error());

        if(mysql_num_rows($application) != 0){

            While($row = mysql_fetch_assoc($application)){ ?>
                <tbody>
                <tr>
                    <td><?php echo $row['position']; ?></td>
                    <td><p class="text-success"><?php echo $row['applicant']; ?></p></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><span class="label label-success job-status text-right"><?php echo $row['status'];?></span></td>
                    <td><?php echo $row['interview_date'];?></td>
                    <td>
                        <a href="interview_candidate.php?interview_id=<?php echo $row['interview_id']; ?>" alt="edit" class="btn btn-info btn-sm">Interview </a>
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








