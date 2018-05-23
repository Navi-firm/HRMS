<div class="block-content collapse in">
    <table id="shortlisted" class="table table-striped" cellspacing="0" width="100%">
        <thead>
        <th>Leave Type</th>
        <th>Department</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Status</th>
        <th></th>
        </thead>

        <?php
        $applicant = $user['fullname'];
        //Load table from database
        $application = mysql_query("SELECT leave_id, leave_type, applicant, department, status, DATE_FORMAT(start_date, '%d/%m/%Y') AS start_date, DATE_FORMAT(end_date, '%d/%m/%Y') AS end_date FROM leave_request WHERE applicant = '110010' ORDER BY applied_date DESC ") or die(mysql_error());

        if(mysql_num_rows($application) != 0){

            While($row = mysql_fetch_assoc($application)){ ?>
                <tbody>
                <tr>
                    <td><?php echo $row['leave_type']; ?></td>
                    <td><p class="text-success"><?php echo $row['department']; ?></p></td>
                    <td><?php echo $row['start_date']; ?></td>
                    <td><?php echo $row['end_date'];?></td>
                    <td><span class="label label-success job-status text-right"><?php echo $row['status'];?></span></td>
                    <td>
                        <?php
                        if($row['end_date'] <= time()){
                            ?>
                            <a href="leave_review.php?leave_id=<?php echo $row['leave_id']; ?>" alt="edit" class="btn btn-info btn-sm"><i class="icon-pencil"></i> Review</a>
                            <?php
                        }else {
                            echo "PASSED";
                        } ?>
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








