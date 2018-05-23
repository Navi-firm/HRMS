<div class="block-content collapse in">
    <table id="applications" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <th>Department Code</th>
        <th>Department</th>
        <th>H.O.D</th>
        <th>Station</th>
        <th>Status</th>
        <th>Action</th>
        </thead>
        <?php
        //Load table from database
        $department = mysql_query("SELECT * FROM department ORDER BY department_name ASC ") or die(mysql_error());

        if(mysql_num_rows($department) != 0){

            While($row = mysql_fetch_assoc($department)){ ?>
                <tbody>
                <tr>
                    <td><?php echo $row['department_id'] ?></td>
                    <td><?php echo $row['department_name']; ?></td>
                    <td><?php echo $row['department_head']; ?></td>
                    <td><?php echo $row['location']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td>
                        <a href="review_department.php?department_id=<?php echo $row['department_id']; ?>" alt="edit" class="btn btn-warning btn-sm"><i class="icon-edit-sign"></i></a>
                        <a id="" href="javascript:delete_id(<?php echo $row['department_id']; ?>)" class="btn btn-danger btn-sm"><i class="icon-trash"></i></a>

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