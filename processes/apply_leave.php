<?php

if(empty($_POST) === false){
    $required_fields = array('start_date','end_date','reason','leave_type');
    foreach ($_POST as $key=>$value) {
        //if every value is empty
        if(empty($value) && in_array($key, $required_fields) === true){
            $errors[] = "<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a><strong>Sorry!</strong> Please provide all leave details to apply leave</div>";
            break 1;
        }
    }

}

if(empty($_POST) === false && empty($errors) === true){

    $today = date('m/d/Y');
    $start = $_POST['start_date'];
    $end = $_POST['end_date'];

    if($start >= $today) {
        if ($start < $end) {
            if ($_POST['leave_type'] == 'Sick Leave') {
                $total_days = 20;
                $applied_days = date_diff($start, $end);

                if ($applied_days <= $total_days) {
                    $apply_leave = array(

                        'applicant' => $user_data['user_id'],
                        'leave_type' => $_POST['leave_type'],
                        'start_date' => date('Y-m-d', strtotime($_POST['start_date'])),
                        'end_date' => date('Y-m-d', strtotime($_POST['end_date'])),
                        'duration' => date_diff($_POST['end_date'], $_POST['start_date']),
                        'department' => $user['department'],
                        'description' => $_POST['reason'],
                    );

                    $pending = mysql_query("SELECT * FROM leave_request WHERE status = 'Approved' OR status = 'Pending' AND applicant = '" . $user_data['user_id'] . "' AND applied_date < CURRENT_DATE() ");

                    if ($pending === true) {

                        echo "<div class='alert alert-danger fade in'>
                      <a href='#' class='close' data-dismiss='alert'>&times;</a>
                      <strong>ERROR !</strong> Something went wrong</div>";
                    } else {
                        //redirect user
                        if (new_leave($apply_leave) === true) {
                            echo "<div class='alert alert-danger fade in'>
                                  <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                  <strong>ERROR !</strong> Something went wrong</div>";
                        } else {
                            echo "<div class='alert alert-success fade in'>
                                  <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                  <strong>Success !</strong> Leave Requested</div>";
                        }
                    }
                } else {
                    echo "<div class='alert alert-danger fade in'>
                      <a href='#' class='close' data-dismiss='alert'>&times;</a>
                      <strong>ERROR !</strong> Date error cannot apply more than 20 days per year. </div>";
                }
            }
            elseif ($_POST['leave_type'] == 'Casual Leave') {

                $today = date('m/d/Y');
                $start = $_POST['start_date'];
                $end = $_POST['end_date'];

                $total_days = 20;
                $applied_days = $_POST['end_date'] - $_POST['start_date'];

                if ($applied_days <= $total_days) {
                    $apply_leave = array(

                        'applicant' => $user_data['user_id'],
                        'leave_type' => $_POST['leave_type'],
                        'start_date' => date('Y-m-d', strtotime($_POST['start_date'])),
                        'end_date' => date('Y-m-d', strtotime($_POST['end_date'])),
                        'duration' => date_diff($_POST['end_date'], $_POST['start_date']),
                        'department' => $user['department'],
                        'description' => $_POST['reason'],
                    );

                    $pending = mysql_query("SELECT * FROM leave_request WHERE status = 'Approved' OR status = 'Pending' AND applicant = '" . $user_data['user_id'] . "' AND applied_date < CURRENT_DATE() ");

                    if ($pending === true) {

                        echo "<div class='alert alert-danger fade in'>
                      <a href='#' class='close' data-dismiss='alert'>&times;</a>
                      <strong>ERROR !</strong> Something went wrong</div>";
                    } else {
                        //redirect user
                        if (new_leave($apply_leave) === true) {
                            echo "<div class='alert alert-danger fade in'>
                                  <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                  <strong>ERROR !</strong> Something went wrong</div>";
                        } else {
                            echo "<div class='alert alert-success fade in'>
                                  <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                  <strong>Success !</strong> Leave Requested</div>";
                        }
                    }
                } else {
                    echo "<div class='alert alert-danger fade in'>
                      <a href='#' class='close' data-dismiss='alert'>&times;</a>
                      <strong>ERROR !</strong> Date error cannot apply more than 20 days per year. </div>";
                }
            }
            elseif ($_POST['leave_type'] == 'Maternity Leave') {
                $today = date('m/d/Y');
                $start = $_POST['start_date'];
                $end = $_POST['end_date'];
                $total_days = 100;
                $applied_days = date_diff($start, $end);

                if ($applied_days <= $total_days) {
                    $apply_leave = array(

                        'applicant' => $user_data['user_id'],
                        'leave_type' => $_POST['leave_type'],
                        'start_date' => date('Y-m-d', strtotime($_POST['start_date'])),
                        'end_date' => date('Y-m-d', strtotime($_POST['end_date'])),
                        'duration' => date_diff($_POST['end_date'], $_POST['start_date']),
                        'department' => $user['department'],
                        'description' => $_POST['reason'],
                    );

                    $pending = mysql_query("SELECT * FROM leave_request WHERE status = 'Approved' OR status = 'Pending' AND applicant = '" . $user_data['user_id'] . "' AND applied_date < CURRENT_DATE() ");

                    if ($pending === true) {

                        echo "<div class='alert alert-danger fade in'>
                          <a href='#' class='close' data-dismiss='alert'>&times;</a>
                          <strong>ERROR !</strong> Something went wrong</div>";
                    } else {
                        //redirect user
                        if (new_leave($apply_leave) === true) {
                            echo "<div class='alert alert-danger fade in'>
                                      <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                      <strong>ERROR !</strong> Something went wrong</div>";
                        } else {
                            echo "<div class='alert alert-success fade in'>
                                      <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                      <strong>Success !</strong> Leave Requested</div>";
                        }
                    }
                } else {
                    echo "<div class='alert alert-danger fade in'>
                          <a href='#' class='close' data-dismiss='alert'>&times;</a>
                          <strong>ERROR !</strong> Date error cannot apply more than 100 days per year. </div>";
                }
            }
            elseif ($_POST['leave_type'] == 'Paternity Leave') {
                $total_days = 30;
                $today = date('m/d/Y');
                $start = $_POST['start_date'];
                $end = $_POST['end_date'];
                $applied_days = $_POST['end_date'] - $_POST['start_date'];

                if ($applied_days <= $total_days) {
                    $apply_leave = array(

                        'applicant' => $user_data['user_id'],
                        'leave_type' => $_POST['leave_type'],
                        'start_date' => date('Y-m-d', strtotime($_POST['start_date'])),
                        'end_date' => date('Y-m-d', strtotime($_POST['end_date'])),
                        'duration' => date_diff($_POST['end_date'], $_POST['start_date']),
                        'department' => $user['department'],
                        'description' => $_POST['reason'],
                    );

                    $pending = mysql_query("SELECT * FROM leave_request WHERE status = 'Approved' OR status = 'Pending' AND applicant = '" . $user_data['user_id'] . "' AND applied_date < CURRENT_DATE() ");

                    if ($pending === true) {

                        echo "<div class='alert alert-danger fade in'>
                          <a href='#' class='close' data-dismiss='alert'>&times;</a>
                          <strong>ERROR !</strong> Something went wrong</div>";
                    } else {
                        //redirect user
                        if (new_leave($apply_leave) === true) {
                            echo "<div class='alert alert-danger fade in'>
                                      <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                      <strong>ERROR !</strong> Something went wrong</div>";
                        } else {
                            echo "<div class='alert alert-success fade in'>
                                      <a href='#' class='close' data-dismiss='alert'>&times;</a>
                                      <strong>Success !</strong> Leave Requested</div>";
                        }
                    }
                } else {
                    echo "<div class='alert alert-danger fade in'>
                          <a href='#' class='close' data-dismiss='alert'>&times;</a>
                          <strong>ERROR !</strong> Date error cannot apply more than 30 days per year. </div>";
                }
            }

        } else {
            echo "<div class='alert alert-danger fade in'>
                          <a href='#' class='close' data-dismiss='alert'>&times;</a>
                          <strong>ERROR !</strong> Start date cannot be in the past</div>";
        }
    }

}elseif(empty($errors) === false){
echo output_errors($errors);
}