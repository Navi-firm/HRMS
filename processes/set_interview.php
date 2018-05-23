<?php
//check if form is submitted
if(empty($_POST) === false){
    $required_fields = array('subject','message');
    foreach ($_POST as $key=>$value) {
        //if every value is empty
        if(empty($value) && in_array($key, $required_fields) === true){
            $errors[] = "<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a><strong>Sorry!</strong> Please provide details to create new task</div>";
            break 1;
        }
    }

}
//Register valid user
if(empty($_POST) === false && empty($errors) === true){

    $interview_details = array(

        'applicant' => $detail['applicant_name'],
        'email' => $detail['applicant_email'],
        'subject' => $_POST['subject'],
        'message' => $_POST['message'],
        'hiring_manager' => $user['fullname'],
        'position' => $detail['application_title'],
        'department' => $user['department'],
        'interview_date' => date('Y-m-d', strtotime($_POST['interview_date'])),
    );

    if(set_interview($interview_details) === true) {
        echo "<div class='alert alert-danger fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>ERROR !</strong> Scheduling The Interview</div>";

    }else{
        echo "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Interview Scheduled</div>";
    }

}elseif(empty($errors) === false){
    echo output_errors($errors);
}
