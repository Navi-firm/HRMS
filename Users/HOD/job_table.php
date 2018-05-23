<div class="block-content collapse in" xmlns="http://www.w3.org/1999/html">
    <div class="table-container">
        <table class="table table-striped">
            <thead>
            &#32;
            </thead>
            &#32;
            <?php
            $owner = $user_data['username'];
            //Load table from database
            $job_posts = mysql_query("SELECT job_id, job_title, category, work_type, status, location, position, DATE_FORMAT(deadline, '%d %b %Y') AS deadline, DATE_FORMAT(DATE(created), '%d %b %Y') AS posted FROM jobs WHERE author = '$owner' ORDER BY created DESC") or die(mysql_error());

            if(mysql_num_rows($job_posts) != 0){

                While($row = mysql_fetch_assoc($job_posts)){ ?>
                    <tbody>
                    &#32;
                    <tr class="odd">
                        &#32;
                        <td class="title">
                            <h5 class="text-info">
                                <span class="label label-success"><?php echo $row['work_type']; ?></span>
                            </h5>
                        </td>
                        &#32;
                        <td class="bid_end_date">
                            <h4><strong><a href="view_job.php?job_id=<?php echo $row['job_id']; ?>"><?php echo $row['job_title']; ?></a></strong></h4>
                            <p class="help-block">Posted on <?php echo $row['posted']; ?></p>
                            <p class="help-block">Status : <?php echo $row['status']; ?></p>
                        </td>
                        &#32;
                        <td class="budget">
                            <h5 style="color: #000000;"><?php echo $row['position']; ?> Posts</h5>
                            <h5 style="color: #000000;"><?php echo $row['location']; ?></h5>
                        </td>
                        &#32;
                        <td class="budget">
                            <p class="help-block">Dead-Line</p>
                            <h5 class="text-danger"><strong><?php echo $row['deadline']; ?></strong></h5>
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








