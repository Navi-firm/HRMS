<div class="block-content collapse in" xmlns="http://www.w3.org/1999/html">
    <div class="table-container">
        <table class="table table-striped">
            <thead>
            &#32;
            <th><p class="help-block"> Job Name</p></th>
            <th><p class="help-block">Employer</p></th>
            <th><p class="help-block">Employment Type</p></th>
            <th><p class="help-block">Date Posted</p></th>
            <th><p class="help-block">Expires</p></th>
            </thead>
            &#32;
            <?php
            //Load table from
            if(isset($_GET['page'])){ $page = $_GET['page']; } else {$page =1;}

            $start_from = ($page-1) * 4;

            $job_posts = mysql_query("SELECT job_id, job_title, category, work_type, status, location, position, DATE_FORMAT(deadline, '%b %Y') AS deadline, DATE_FORMAT(DATE(created), '%b %Y') AS posted, author FROM jobs WHERE status = 'Approved' ORDER BY created DESC LIMIT " . $start_from .", 15") or die(mysql_error());

            if(mysql_num_rows($job_posts) != 0){

                While($row = mysql_fetch_assoc($job_posts)){ ?>
                    <tbody>
                    &#32;
                    <tr class="odd">
                        &#32;
                        <td class="title">
                            <h5 class="text-info">
                                <h5><strong><a href="view_job.php?job=<?php echo $row['job_id']; ?>"><?php echo $row['job_title']; ?></a></strong></h5>
                            </h5>
                        </td>
                        &#32;
                        <td class="bid_end_date">
                            <p class="help-block"><?php echo $row['author']; ?></p>
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
                                <button type="button" class="btn btn-success"><?php echo $row['status']; ?></button>
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
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
            <?php } ?>
        </table>
        <ul class="pagination pull-right">
            <li class="active"><a href="javascript:;">&laquo;</a></li>
            <?php

            $count = mysql_query("SELECT COUNT(job_id) FROM jobs") or die(mysql_error());
            $row = mysql_fetch_row($count);
            $total_records = $row['0'];
            $total_pages = ceil($total_records / 15);

            for($i = 1; $i<=$total_pages; $i++){
                echo "<li><a href='jobs.php?page=" . $i . "'><b>" . $i . "</b></a></li>";
            };
            ?>
            <li><a href="javascript:;">&raquo;</a></li>
        </ul>
        <ul class="pagination">
            <li class="cardinality">
            </li>
        </ul>
    </div>
</div>








