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

            $author = $user_data['username'];

            $job_posts = mysql_query("SELECT job_id, job_title, category, work_type, status, location, position, DATE_FORMAT(deadline, '%b %Y') AS deadline, DATE_FORMAT(DATE(created), '%b %Y') AS posted, author FROM jobs WHERE author = '$author' ORDER BY created DESC LIMIT " . $start_from .", 15") or die(mysql_error());

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

<div class="block-content collapse in">

    <table id="jobs" class="table table-striped table-bordered">
        <?php
        $author = $user_data['username'];
        //Load table from database
        $jobs = mysql_query("SELECT * FROM jobs WHERE author = '$author' ORDER BY created DESC ") or die(mysql_error());

        if(mysql_num_rows($jobs) != 0){

            While($row = mysql_fetch_assoc($jobs)){ ?>
                <tbody>
                <tr>
                    <td>
                        <div class="form-horizontal">
                            <br>
                            <div class="form-signin-heading">
                            <h4 class="">
                                <a href="view_job.php?job_id=<?php echo $row['job_id']; ?>"><?php echo $row['job_title']; ?></a>
                            </h4>
                            </div>
                            <div class="form-horizontal">
                                <b><?php echo $row['salary']; ?></b>
                                <span class="text-muted pipe">|</span>
                                <span class="fa fa-fw fa-clock-o"></span> 2 days, 5 hours left
                                <span class="text-muted pipe">|</span>
                                <span class="fa fa-fw fa-dot-circle-o"></span>Positions <?php echo $row['position']; ?>
                            </div>
                            <div class="form-horizontal">
                                <?php echo $row['details']; ?>
                            </div>
                            <br>
                            <div class="form-horizontal">
                            <div class="col-xs-9 ">
                                    <P><strong>Responsibilities : </strong> <?php echo $row['responsibilities']; ?>,</P>
                            </div>
                            <div class="col-xs-3 text-right">
                                <label>Status : <span class="label label-success job-status text-right"><?php echo $row['status']; ?></span></label>
                            </div>
                            </div>
                            <div class="form-horizontal">
                                <div class="col-xs-9">
                                    <P><strong>Experience : </strong> <?php echo $row['experience']; ?></P>
                                    <P><strong>Work Type : </strong> <?php echo $row['work_type']; ?></P>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            <?php } ?>

        <?php }else {?>

            <div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                <strong>Oh Snap! </strong>No jobs could be found</div>

        <?php }

        ?>

    </table>
</div>








