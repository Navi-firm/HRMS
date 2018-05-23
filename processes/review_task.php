<?php
if(isset($_POST['btn-update'])){

    $task_name = $_POST['task_name'];
    $description = $_POST['description'];
    $start = $_POST['details'];
    $end = $_POST['responsibilities'];
    $estimated_hours = $_POST['estimated_hours'];
    $status = $_POST['agency'];

    $update_job = mysql_query("UPDATE tasks SET job_title='$job_title', category='$category', details='$details', position='$position', experience='$experience', location='$location', responsibilities='$responsibilities', salary='$salary', agency='$agency', work_type='$work_type' WHERE job_id=" . $_GET['job_id']);

    if($update_job){
        echo "<script> alert('Task Successfully Updated. !'); </script>";
    }else{
        echo "<script> alert('Error Updating Task. !'); </script>";
    }
}