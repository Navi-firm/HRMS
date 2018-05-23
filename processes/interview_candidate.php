<?php
//check if form is submitted
if(empty($_POST) === false){
    $required_fields = array('oral','written');
    foreach ($_POST as $key=>$value) {
        //if every value is empty
        if(empty($value) && in_array($key, $required_fields) === true){
            $errors[] = "<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a><strong>Sorry!</strong> Please provide details For Interview</div>";
            break 1;
        }
    }

}
//Register valid interview details
if(empty($_POST) === false && empty($errors) === true){

    $interview_summary = array(

        'applicant' => $detail['applicant'],
        'position' => $detail['position'],
        'email' => $detail['email'],
        'interview_date' => date('Y-m-d', strtotime($detail['interview_date'])),
        'hiring_manager' => $detail['hiring_manager'],
        'department' => $detail['department'],
        'oral' => $_POST['rating'],
        'written' => $_POST['written'],
        'total' => $_POST['total'],
        'summary' => $_POST['application_summary'],

    );

    if(interview_candidate($interview_summary) === true) {

        $interview_id = $detail['applicant'];

        mysql_query("UPDATE applications SET application_status = 'Interviewed' WHERE applicant_name = '$interview_id'");

        echo "<div class='alert alert-danger fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>ERROR !</strong> Adding Interview Summary Details</div>
              <script>window.location.href = 'interviews.php'; </script>";

    }else{
        echo "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Details Added </div>";
    }

}elseif(empty($errors) === false){
    echo output_errors($errors);
}
