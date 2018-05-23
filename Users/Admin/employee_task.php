<div class="block-content collapse in">
    <table id="shortlisted" class="table table-striped" cellspacing="0" width="100%">
        <thead>
        <th>Task Name</th>
        <th>Created On</th>
        <th>Due Date</th>
        <th>Status</th>
        <th></th>
        </thead>

        <?php
        //Load table from database
        $assigned = $user['staff_id'];

        $application = mysql_query("SELECT task_id, task_name, description, DATE_FORMAT(start_time, '%d/%m/%Y') AS start_time, DATE_FORMAT(due_date, '%d/%m/%Y') AS due_date, estimated_hours, status, DATE_FORMAT(created, '%d %M %Y') AS created FROM tasks WHERE assigned_to = '$assigned' ORDER BY created DESC ") or die(mysql_error());

        if(mysql_num_rows($application) != 0){

            While($row = mysql_fetch_assoc($application)){ ?>
                <tbody>
                <tr>
                    <td><?php echo $row['task_name']; ?></td>
                    <td><p class="text-success"><?php echo $row['created']; ?></p></td>
                    <td><p class="text-danger"><?php echo $row['due_date'];?></p></td>
                    <td><span class="label label-success job-status"><?php echo $row['status'];?></span></td>
                    <td>
                        <a href="view_task.php?task_id=<?php echo $row['task_id']; ?>" alt="edit" class="btn btn-info btn-sm"><i class="icon-eye-open"></i></a>
                    </td>
                </tr>
                </tbody>
            <?php } ?>

        <?php }else {?>

            <div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                <strong>Oh Snap! </strong>No Tasks Assigned </div>

        <?php }

        ?>

    </table>
</div>