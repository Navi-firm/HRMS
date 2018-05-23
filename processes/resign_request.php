<?php
//check if form is submitted
if(empty($_POST) === false){
    $required_fields = array('title','exit_date','last_date','reason');
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

    $resign_details = array(

        'applicant' => $user['fullname'],
        'ref_no' => $user_data['user_id'],
        'department' => $user['department'],
        'exit_date' => date('Y-m-d', strtotime($_POST['exit_date'])),
        'last_date' => date('Y-m-d', strtotime($_POST['last_date'])),
        'hire_date' => date('Y-m-d', strtotime($_POST['hire_date'])),
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'title' => $_POST['title'],
        'reason' => $_POST['reason']

    );

    if(resign_request($resign_details) === true) {
        echo "<div class='alert alert-danger fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Error!</strong> Submitting request</div>";
    }else{
        ?>
        <script type="text/javascript">
            alert('Job Resignation request submitted Successfully');
            window.location.href='profile.php';
        </script>
        <?php
    }

}elseif(empty($errors) === false){
    echo output_errors($errors);
}
