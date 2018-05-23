<?php
error_reporting(0);
//Check if username is in database
    $username = mysql_real_escape_string($_POST['username']);

    $check = mysql_query("SELECT username FROM users WHERE username = '$username'");

    $check_num_rows = mysql_num_rows($check);

    if($username == NULL){
        echo '<span class="help-block">Enter your Username</span>';
    }elseif(strlen($username) <= 3){
        echo '<span style="color: #A40000">Too short</span>';
    }else{
        if($check_num_rows == 0){
            echo '<span style="color: #A40000">You are not registered</span>';
        }else{
            echo '<span style="color: #4cae4c">Okay</span>';
        }
    }