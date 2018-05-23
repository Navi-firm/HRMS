<?php
//check if form is submitted
if(empty($_POST) === false){
    $required_fields = array('t_name','description','start_time','end_time','status');
    foreach ($_POST as $key=>$value) {
        //if every value is empty
        if(empty($value) && in_array($key, $required_fields) === true){
            $errors[] = "<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a><strong>Sorry!</strong> Please provide task details to assign new task</div>";
            break 1;
        }
    }

}
//Register valid user
if(empty($_POST) === false && empty($errors) === true){

   $start = $_POST['start_time'];
   $end = $_POST['end_time'];

    if(($start <= $end)&&(strtotime($start)>=time())) {

        $task_details = array(

            'task_name' => $_POST['t_name'],
            'description' => $_POST['description'],
            'start_time' => date('Y-m-d', strtotime($_POST['start_time'])),
            'due_date' => date('Y-m-d', strtotime($_POST['end_time'])),
            'status' => $_POST['status'],
            'creator' => $user_data['user_id'],
            'assigned_to' => $user['staff_id'],
        );

        if (create_task($task_details) === true) {
            echo "<div class='alert alert-danger fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>ERROR !</strong> Something went Wrong</div>";
        } else {
            echo "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Task Successful Assigned</div>";
        }

    } else {
        echo "<div class='alert alert-danger fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>ERROR !</strong> Date Range error try again!!</div>";
    }

}elseif(empty($errors) === false){
    echo output_errors($errors);
}
