<div class="block-content collapse in">
    <table id="applications" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Employee Number</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Gender</th>
            <th>Department</th>
            <th>Location</th>
            <th>Work Status</th>
            <th>Action</th>
        </tr>
        </thead>

        <?php
        //Load table from database
        $staff = mysql_query("SELECT CONCAT(first_name,' ', middle_name, ' ', last_name)AS fullname, staff_id, email, phone, gender, department, CONCAT(county,' ,', country) AS location, work_status FROM staff WHERE status = 'Active' AND role = 'Employee' ORDER BY created ASC") or die(mysql_error());

        if(mysql_num_rows($staff) != 0){

            While($row = mysql_fetch_assoc($staff)){ ?>
                <tbody>
                <tr>
                    <td><?php echo $row['staff_id'] ?></td>
                    <td><?php echo $row['fullname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['department']; ?></td>
                    <td><?php echo $row['location'];?></td>
                    <td><?php echo $row['work_status'];?></td>
                    <td>
                        <a href="edit_employee.php?staff_id=<?php echo $row['staff_id']; ?>" alt="edit" class="btn btn-warning btn-sm"><i class="icon-edit-sign"></i> Review Performance</a>
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








