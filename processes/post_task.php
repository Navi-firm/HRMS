<?php
//check if form is submitted
if(empty($_POST) === false){
    $required_fields = array('t_name','reason', 'start_date','end_date');
    foreach ($_POST as $key=>$value) {
        //if every value is empty
        if(empty($value) && in_array($key, $required_fields) === true){
            $errors[] = "<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a><strong>Sorry!</strong> Please provide details to create new task</div>";
            break 1;
        }
    }

}

//Register valid user
    if (empty($_POST) === false && empty($errors) === true) {

        $date1 = $_POST['start_date'];
        $date2 = $_POST['end_date'];

        if(!($date1 <= $date2))
        {
            echo "<div class='alert alert-danger fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>ERROR !</strong> Date Error</div>";
        }else {

            $task_details = array(

                'task_name' => $_POST['t_name'],
                'description' => $_POST['reason'],
                'start_time' => date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $_POST['start_date']))),
                'due_date' => date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $_POST['end_date']))),
                'creator' => $user_data['user_id'],
            );

            if (create_task($task_details) === true) {
                echo "<div class='alert alert-danger fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>ERROR !</strong> Something went Wrong</div>";
            } else {
                echo "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Task Successful created</div>";
            }
        }

    } elseif (empty($errors) === false) {
        echo output_errors($errors);
    }