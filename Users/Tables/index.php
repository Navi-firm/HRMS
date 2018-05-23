<div class="block-content collapse in">

    <table id="jobs" class="table table-striped table-bordered">
        <?php
        //Load table from database
        $jobs = mysql_query("SELECT * FROM jobs  ORDER BY created DESC ") or die(mysql_error());

        if(mysql_num_rows($jobs) != 0){

            While($row = mysql_fetch_assoc($jobs)){ ?>
                <tbody>
                <tr>
                    <td>
                        <div class="form-horizontal">
                            <br>
                            <div class="form-signin-heading">
                                <h4 class="">
                                    <a href="Users/Jobs/view_job.php?job_id=<?php echo $row['job_id']; ?>"><?php echo $row['job_title']; ?></a>
                                </h4>
                            </div>
                            <div class="form-horizontal">
                                <b><?php echo $row['salary']; ?></b>
                                <span class="text-muted pipe">|</span>
                                <span class="icon-time"></span> 2 days, 5 hours left
                                <span class="text-muted pipe">|</span>
                                <span class="fa fa-fw fa-dot-circle-o"></span>Positions <?php echo $row['position']; ?>
                            </div>
                            <hr>
                            <div class="form-horizontal">
                                <?php echo $row['details']; ?>
                            </div>
                            <br>
                            <hr>
                            <div class="form-horizontal">
                                <div class="col-xs-9 ">
                                    <P><strong>Responsibilities : </strong> <?php echo $row['responsibilities']; ?>,</P>
                                </div>
                            </div>
                            <div class="form-horizontal">
                                <div class="col-xs-9">
                                    <P><strong>Experience : </strong> <?php echo $row['experience']; ?></P>
                                    <P><strong>Work Type : </strong> <?php echo $row['work_type']; ?></P>
                                </div>
                                <div class="col-xs-3 text-right">
                                    <label>Status : <span class="label label-success job-status text-right"><?php echo $row['status']; ?></span></label>
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








