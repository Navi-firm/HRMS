<?php
//check if form is submitted
if(empty($_POST) === false){
    $required_fields = array('e_name','reason','venue');
    foreach ($_POST as $key=>$value) {
        //if every value is empty
        if(empty($value) && in_array($key, $required_fields) === true){
            $errors[] = "<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a><strong>Sorry!</strong> Please provide details to create new Event</div>";
            break 1;
        }
    }

}
//Register valid user
if(empty($_POST) === false && empty($errors) === true){

    $today = date('m/d/Y');
    $start = $_POST['start_date'];
    $end = $_POST['end_date'];

    if($start >= $today)
    {
        if($start <= $end)
        {
            $event = array(

                'event_name' => $_POST['e_name'],
                'description' => $_POST['reason'],
                'start_date' => date('Y-m-d H:i:s', strtotime(str_replace('-','/', $_POST['start_date']))),
                'end_date' => date('Y-m-d H:i:s', strtotime(str_replace('-','/', $_POST['end_date']))),
                'venue' => $_POST['venue'],
                'creator' => $user_data['user_id'],
            );

            if(event_info($event) === true) {
                echo "<div class='alert alert-danger fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>ERROR !</strong> Something went Wrong</div>";
            }else{
                echo "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Event Created</div>
              <script>window.location.href = 'events.php'; </script>";
            }
        }else{
            echo "<div class='alert alert-danger fade in'>
                  <a href='#' class='close' data-dismiss='alert'>&times;</a>
                  <strong>ERROR !</strong> Date Error End date cannot be in the past.</div>";
        }
    }else{
        echo "<div class='alert alert-danger fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>ERROR !</strong> Date Error! Cannot create an event in the past.</div>";
    }


}elseif(empty($errors) === false){
    echo output_errors($errors);
}
