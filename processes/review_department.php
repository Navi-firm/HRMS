<?php
if(isset($_POST['btn-update'])){

        $department_name = $_POST['d_name'];
        $description = $_POST['d_description'];
        $department_head = $_POST['hod'];
        $location = $_POST['d_location'];
        $category = $_POST['d_category'];
        $status = $_POST['status'];

        $update_job = mysql_query("UPDATE department SET department_name = '$department_name', description = '$description', department_head = '$department_head', location = '$location', status = '$status', category = '$category' WHERE department_id = " . $_GET['department_id']) or die(mysql_error());

    if($update_job){
        echo "<script> alert('Department Info Successfully Updated. !');
                window.location.href='dashboard.php';</script>";
    }else{
        echo "<div class='alert alert-danger fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Error!</strong> Updating Department Info</div>";
    }
}