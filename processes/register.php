<?php
//check if form is submitted
if(empty($_POST) === false){
    $required_fields = array('firstname','lastname','phone','email','username','password');
    foreach ($_POST as $key=>$value) {
        //if every value is empty
        if(empty($value) && in_array($key, $required_fields) === true){
            $errors[] = "<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a><strong>Oh snap!</strong> Please provide details to register</div>";
            break 1;
        }
    }
    //Validate form input
if(empty($errors) === true){
    //Check if user exists
    if(user_exists($_POST['username']) === true){
        $errors[] = "<div class='alert alert-danger fade in'><a href='#' class='close' data-dismiss='alert'>&times;</a><strong>Oh snap!</strong> Sorry that Username is in use</div>";
    }
    if(preg_match("/\\s/", $_POST['phone']) == true){
        $errors[] = "<div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                       <strong>Oh Snap! </strong>Sorry your username must not contain any spaces</div>";
    }
    //Check password length
    if(strlen($_POST['password']) < 8){
        $errors[] = "<div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                       <strong>Oh Snap! </strong>Sorry your password must be at least 8 characters long </div>";
    }
    //check if confirm password matches
    if($_POST['password'] !== $_POST['password2']){
        $errors[] = "<div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                       <strong>Oh Snap! </strong>Sorry passwords do not match </div>";
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

    $dob = ($_POST['day'].'-'.$_POST['month'].'-'.$_POST['year']);

    $register_person = array(

        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'middle_name' => $_POST['other_name'],
        'username' => $_POST['username'],
        'address' => $_POST['address'],
        'country' => $_POST['country'],
        'gender' => $_POST['gender'],
        'dob' => date('Y-m-d', strtotime($_POST['year']. "-" . $_POST['month']. "-" . $_POST['day'])),
        'postal_code' => $_POST['zip'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'password' => $_POST['password'],
    );

    register_user($register_person);
    //redirect user
    header("Location: login.php?success");
    //exit
    exit();

}elseif(empty($errors) === false){
    echo output_errors($errors);
}
