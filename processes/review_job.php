<?php
if(isset($_POST['btn-update'])){

    $status = $_POST['status'];

    $update_job = mysql_query("UPDATE jobs SET status = '$status' WHERE job_id = " . $_GET['job']);

    if($update_job){
        echo "<script>
                alert('Job Status changed to Open');
                window.location.href = 'jobs.php';
            </script>";
    }else{
        echo "<div class='alert alert-danger fade in'> <a href='#' class='close' data-dismiss='alert'>&times;</a> <strong>ERROR !</strong> Job Vacancy update error</div>";
    }
}