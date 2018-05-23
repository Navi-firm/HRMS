<?php
//check if form is submitted
if(empty($_POST) === false){
    $required_fields = array('job_title','deadline','details','position','responsibilities','agency');
    foreach ($_POST as $key=>$value) {
        //if every value is empty
        if(empty($value) && in_array($key, $required_fields) === true){
            $errors[] = "<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a><strong>Sorry!</strong> Please provide all details create job post</div>";
            break 1;
        }
    }

}
//Register valid user
if(empty($_POST) === false && empty($errors) === true){

    $job_details = array(

        'job_title' => $_POST['job_title'],
        'category' => $_POST['category'],
        'location' => $_POST['location'],
        'deadline' => date('Y-m-d', strtotime($_POST['deadline'])),
        'details' => $_POST['details'],
        'department' => $user['department'],
        'purpose' => $_POST['purpose'],
        'responsibilities' => $_POST['responsibilities'],
        'salary' => $_POST['salary'],
        'duration' => $_POST['duration'],
        'experience' => $_POST['experience'],
        'agency' => $_POST['agency'],
        'position' => $_POST['position'],
        'advertisement' => $_POST['advertisement'],
        'work_type' => $_POST['work_type'],
        'author' => $user['fullname'],
    );

    if(create_job($job_details) === true) {
        ?>
        <script type="text/javascript">
            alert('Job Vacancy created Successfully');
            window.location.href='jobs.php';
        </script>
        <?php
    }else{
        echo "<div class='alert alert-danger fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Error!</strong> Creating Vacancy</div>";
    }

}elseif(empty($errors) === false){
    echo output_errors($errors);
}
