<div class="block-content collapse in" xmlns="http://www.w3.org/1999/html">
            <?php
            //Load table from database
            $my_id = $user['staff_id'];
            $request = mysql_query("SELECT resign_id, ref_no, applicant, department, email, phone, title, DATE_FORMAT(exit_date, '%d %M %Y') AS exit_date, DATE_FORMAT(last_date, '%d %M %Y') AS last_date, DATE_FORMAT(hire_date, '%d %M %Y') AS hire_date, reason, DATE_FORMAT(created, '%d %M %Y') AS created, status FROM resign_request WHERE ref_no = '$my_id'") or die(mysql_error()) ;
            $employee = mysql_fetch_array($request);
            $applied = mysql_query("SELECT COUNT(resign_id) FROM resign_request WHERE ref_no = '$my_id'");
            $count = mysql_num_rows($applied);

            if($count = 0){
                ?>
                <p><?php echo $employee['created']; ?></p>
                <br>
                <p><?php echo $employee['applicant']; ?>, <span class="pull-right">Hire Date : <?php echo $employee['hire_date']; ?></span></p>
                <p><?php echo $employee['department']; ?>,<span class="pull-right">Exit Date : <?php echo $employee['exit_date']; ?></span></p>
                <p><?php echo $employee['email']; ?>,</p>
                <p><?php echo $employee['phone']; ?>.</p>
                <br><br>
                <p><?php echo $employee['title']; ?></p>
                <br>
                <p>Dear Sir/Madam/Dr. , </p>
                <p><?php echo $employee['reason']; ?></p>
                <?php
            }else {?>
                <div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                    <strong>Oh Snap! </strong>No Records could be found</div>
            <?php } ?>
    </div>








