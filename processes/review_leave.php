<?php
if(isset($_POST['btn-review'])){

    $status = $_POST['status'];
    $now = date("y-m-d hh:mm:ss");

    $update_job = mysql_query("UPDATE leave_request SET status = '$status' WHERE leave_id =" . $_GET['leave_id']);

    if($update_job){
        echo "<script>
                alert('Leave Request Reviewed');
                window.location.href = 'leave.php';
              </script>";
    }else{
        echo "<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a> <strong>ERROR !</strong> Job Vacancy update error</div>";
    }
}