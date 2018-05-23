<?php
//start a session
//error_reporting(0);

session_start();
// call db.class.php
include('Database/connection.php');
//Include the main functions
include 'Functions/users.php';
include 'Functions/general.php';

if(logged_in() === true){
    $session_user_id = $_SESSION['user_id'];
    $user_data = user_data($session_user_id, 'user_id', 'username', 'role', 'status', 'created');

    //check if user account is activated
    if(user_active($user_data['username']) === false){
        session_destroy();
        header('Location: index.php');
        exit;
    }
}
//Errors array to capture all errors
$errors = array();

