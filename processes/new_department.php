<?php
//check if form is submitted
if(empty($_POST) === false){
    $required_fields = array('d_name','d_description','d_category','d_location');
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

    $department_details = array(

        'department_name' => $_POST['d_name'],
        'description' => $_POST['d_description'],
        'department_head' => $_POST['hod'],
        'location' => $_POST['d_location'],
        'category' => $_POST['d_category']
    );

    if(create_department($department_details) === true) {

        if($update_user_role === true){
            echo "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Department Successful created</div>
              <script>window.location.href='dashboard.php';</script>";
        }else{
            echo "<div class='alert alert-danger fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>ERROR !</strong> Creating new Department</div>";
        }
    }

}elseif(empty($errors) === false){
    echo output_errors($errors);
}
