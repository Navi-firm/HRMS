<?php
//Process user login
if(empty($_POST) === false){
    //Get user inputs
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Get if empty
    if(empty($username) === true || empty($password) === true){
        //Print the errors
        $errors[] = "<div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                       <strong>Oh Snap! </strong>You need to provide a username and password</div>";
    }elseif(user_exists($username) === false){
        $errors[] = "<div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                       <strong>Oh Snap! </strong>No user with that username found. Did you register ?</div>";
    }elseif(user_active($username) === false){
        $errors[] = "<div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                       <strong>Oh Snap! </strong>Your account is De-activated</div>";
    }else{
        //check string length
        if(strlen($username) >20){
            $errors[] = "<div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                       <strong>Oh Snap! </strong>Username too long </div>";
        }
        $login = login($username, $password);
        //check if username password combo is correct
        if($login === false){
            $errors[] = "<div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                       <strong>Oh Snap! </strong>That username and password combo is incorrect</div>";
        }else{
            //set user session
            $_SESSION['user_id'] = $login;
            //redirect user to dashboard
            if(user_admin($username) === true){
                header('Location: Users/Admin/index.php');
                exit();
            }elseif(user_hod($username) === true){
                header("Location: Users/HOD/index.php");
                exit();
            }elseif(user_applicant($username) === true){
                header("Location: Users/User/index.php");
            }elseif(user_employee($username) === true){
                header("Location: Users/Employee/index.php");
            }
        }
    }
    //Display the errors
    echo output_errors($errors);
}