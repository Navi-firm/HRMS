<?php
     if(isset($_POST['btn-update'])){

        $job_title = $_POST['job_name'];
        $category = $_POST['category'];
        $details = $_POST['details'];
        $responsibilities= $_POST['responsibilities'];
        $salary = $_POST['salary'];
        $agency = $_POST['agency'];
        $position = $_POST['position'];
        $experience = $_POST['experience'];
        $work_type = $_POST['work_type'];
        $location = $_POST['location'];

        $update_job = mysql_query("UPDATE jobs SET job_title='$job_title', category='$category', details='$details', position='$position', experience='$experience', location='$location', responsibilities='$responsibilities', salary='$salary', agency='$agency', work_type='$work_type' WHERE job_id=" . $_GET['job_id']);

        if($update_job){
            echo "<script> alert('Vacancy Successfully Updated. !'); </script>";
        }else{
            echo "<script> alert('Error Updating Vacancy. !'); </script>";
        }
    }