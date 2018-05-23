<div class="block-content collapse in" xmlns="http://www.w3.org/1999/html">
    <div class="table-container">
        <table class="table table-striped" cellpadding="0" cellspacing="0" id="jobs">
            <thead>
            &#32;
            <th></th>
            <th><p class="help-block"> Job Name</p></th>
            <th><p class="help-block">Employer</p></th>
            <th><p class="help-block">Employment Type</p></th>
            <th><p class="help-block">Date Posted</p></th>
            <th><p class="help-block">Expires</p></th>
            </thead>
            &#32;
            <?php
            //Load table from database
            $job_posts = mysql_query("SELECT job_id, job_title, category, work_type, status, author, location, position, DATE_FORMAT(deadline, '%d %b %Y') AS deadline, DATE_FORMAT(DATE(created), '%d %b %Y') AS posted FROM jobs WHERE status = 'Pending Approval' ORDER BY created DESC") or die(mysql_error());

            if(mysql_num_rows($job_posts) != 0){

                While($row = mysql_fetch_assoc($job_posts)){ ?>
                    <tbody>
                    &#32;
                    <tr class="odd">
                        &#32;
                        <td class="title">
                            <input type="checkbox" class="form-control">
                        </td>
                        &#32;
                        <td class="title">
                            <h5 class="text-info">
                                <h5><strong><a href="view_job.php?job=<?php echo $row['job_id']; ?>"><?php echo $row['job_title']; ?></a></strong></h5>
                            </h5>
                        </td>
                        &#32;
                        <td class="bid_end_date">
                            <h5><?php echo $row['author']; ?></h5>
                        </td>
                        &#32;
                        <td class="budget">
                            <h5><?php echo $row['work_type']; ?></h5>
                        </td>
                        &#32;
                        <td class="budget">
                            <h5 class=""><?php echo $row['posted']; ?></h5>
                        </td>
                        &#32;
                        <td class="budget">
                            <h5 class=""><?php echo $row['deadline']; ?></h5>
                        </td>
                        &#32;
                        <td class="budget">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-small"><?php echo $row['status']; ?></button>
                                <button type="button" class="btn btn-default btn-small dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="view_job.php?job=<?php echo $row['job_id']; ?>"><i class="icon-eye-open"></i> View</a></li>
                                </ul>
                            </div><!-- /btn-group -->
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








