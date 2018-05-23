<?php
//check if form is submitted
if(empty($_POST) === false){
    $required_fields = array('firstname','lastname','contact_1','email','password','probation_date','hire_date', 'department');
    foreach ($_POST as $key=>$value) {
        //if every value is empty
        if(empty($value) && in_array($key, $required_fields) === true){
            $errors[] = "<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a><strong>Oh snap!</strong> Please provide details to new employee</div>";
            break 1;
        }
    }
    //Validate form input
    if(empty($errors) === true){

        if(preg_match("/\\s/", $_POST['contact_1']) == true){
            $errors[] = "<div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                       <strong>Oh Snap! </strong>Sorry your Phone number must not contain any spaces</div>";
        }
        //Check password length
        if(strlen($_POST['password']) < 8){
            $errors[] = "<div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                       <strong>Oh Snap! </strong>Sorry your password must be at least 8 characters long </div>";
        }
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
            $errors[] = "<div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                       <strong>Oh Snap! </strong>Provide a valid email address eg, johndoe@mail.com </div>";
        }
        if(email_exists($_POST['email']) === true){
            $errors[] = "<div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                       <strong>Oh Snap! </strong>Sorry that email is already taken </div>";
        }

    }
}

//Register valid user
if(empty($_POST) === false && empty($errors) === true){

    $employee_details = array(

    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'middle_name' => $_POST['other_name'],
    'address' => $_POST['address'],
    'country' => $_POST['country'],
    'gender' => $_POST['gender'],
    'dob' => date('Y-m-d', strtotime($_POST['dob'])),
    'email' => $_POST['email'],
    'marital_status' => $_POST['marital'],
    'phone' => $_POST['contact_1'],
    'account' => $_POST['account'],
    'branch' => $_POST['branch'],
    'bank' => $_POST['bank'],
    'phone2' => $_POST['contact_2'],
    'account_number' => $_POST['a_number'],
    'password' => $_POST['password'],
    'nhif' => $_POST['nhif'],
    'kra' => $_POST['kra'],
    'nssf' => $_POST['nssf'],
    'salary' => $_POST['salary'],
    'appointment' => date('Y-m-d', strtotime($_POST['appointment'])),
    'hire_date' => date('Y-m-d', strtotime($_POST['hire_date'])),
    'probation' => date('Y-m-d', strtotime($_POST['probation'])),
    'employement' => $_POST['work_type'],
    'department' => $_POST['department'],
    'username' => $_POST['first_name'] . "." . $_POST['last_name'],
    'role' => 'Employee',

);

//redirect user
    if(new_employee($employee_details) === true) {
        echo "<div class='alert alert-danger fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Error!</strong> Adding new Employee</div>";
    }else{
        echo "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Adding new Employee</div>";
    }

}elseif(empty($errors) === false){
    echo output_errors($errors);
}
