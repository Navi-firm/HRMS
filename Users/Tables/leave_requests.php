<div class="table-container">
    <div class="table-responsive">
        <table class="table table-striped" id="myUsers" width="100%">
            <thead>
            &#32;
            <tr>&#32;
                <th class="title">Applicant</th>
                &#32;
                <th class="bid_end_date">Leave Type</th>
                &#32;
                <th class="budget">Start Date</th>
                &#32;
                <th class="budget">End Date</th>
                &#32;
                <th class="bids">Status</th>
                &#32;
                <th class="bids">Actions</th>
                &#32;
            </tr>
            &#32;
            </thead>
            &#32;
            <?php
            //Load table from database
            $leave_requests = mysql_query("SELECT leave_id, applicant, leave_type, duration, department, description, status, applied_date, DATE_FORMAT(start_date, '%d/%m/%Y') AS start_date, DATE_FORMAT(end_date, '%d/%m/%Y') AS end_date FROM leave_request WHERE status = 'Pending' OR status = 'Rejected' ORDER BY applied_date DESC") or die(mysql_error());

            if(mysql_num_rows($leave_requests) != 0){

                While($row = mysql_fetch_assoc($leave_requests)){ ?>
                    <tbody>
                    &#32;
                    <tr class="odd">
                        &#32;
                        <td class="title">
                            <p class="text-info">
                                <?php echo $row['applicant']; ?>
                            </p>

                        </td>
                        &#32;
                        <td class="bid_end_date">
                            <h5><strong><?php echo $row['leave_type']; ?></strong></h5>
                        </td>
                        &#32;
                        <td class="budget">
                            <p class="text-success"><?php echo $row['start_date']; ?></p>
                        </td>
                        &#32;
                        <td class="budget">
                            <p class="text-danger"><?php echo $row['end_date']; ?></p>
                        </td>
                        &#32;
                        <td class="budget">
                            <span class="label label-warning"><?php echo $row['status']; ?></span>
                        </td>
                        &#32;
                        <td class="bids">
                            <a href="leave_review.php?leave_id=<?php echo $row['leave_id']; ?>" class="btn btn-info btn-sm"><i class="icon-eye-open"></i> View </a>
                        </td>
                        &#32;
                    </tr>
                    &#32;
                    </tbody>
                    &#32;
                    <tfoot>

                    </tfoot>
                <?php } ?>

            <?php }else {?>

                <div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                    <strong>Oh Snap! </strong>No Records could be found</div>
            <?php }

            ?>
        </table>
        <ul class="pagination">
            <li class="cardinality">
            </li>
        </ul>
    </div>
</div>