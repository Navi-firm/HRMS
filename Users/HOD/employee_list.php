<div class="block-content collapse in">
    <table id="shortlisted" class="table table-striped" cellspacing="0" width="100%">
        <thead>
        <th>Reg No</th>
        <th>Employee</th>
        <th>Department</th>
        <th>Employment</th>
        <th>Status</th>
        <th></th>
        </thead>

        <?php
        //Load table from database
        $department = $user['department'];

        $application = mysql_query("SELECT staff_id, CONCAT(first_name, ' ', middle_name, ' ', last_name)AS full_name, role, department, employement, status, created FROM staff WHERE role = 'Employee' AND department = '$department' AND department = '$department' ORDER BY created DESC ") or die(mysql_error());

        if(mysql_num_rows($application) != 0){

            While($row = mysql_fetch_assoc($application)){ ?>
                <tbody>
                <tr>
                    <td><?php echo $row['staff_id']; ?></td>
                    <td><p class="text-success"><?php echo $row['full_name']; ?></p><p class="help-block"><?php echo $row['role']; ?></p></td>
                    <td><?php echo $row['department']; ?></td>
                    <td><span class="label label-success job-status text-right"><?php echo $row['employement'];?></span></td>
                    <td><?php echo $row['status'];?></td>
                    <td>
                        <a href="employee_info.php?staff_id=<?php echo $row['staff_id']; ?>" alt="edit" class="btn btn-info btn-sm"><i class="icon-pencil"></i> Manage</a>
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








