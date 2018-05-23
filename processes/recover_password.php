<?php

if(isset($_POST['recover'])) {
    $user = $_POST['user'];
    //check if user details exits
    $result = mysql_query("SELECT username, email, password FROM staff WHERE username = '$user' or email = '$user'") or die(mysql_error());

    $count = mysql_num_rows($result);
    //if count is more than one or equal to one
    if ($count !== 0) {

        $user_id = $_POST['user'];
        $reset_password = mysql_query("UPDATE staff s INNER JOIN users u ON (s.email = u.email) SET s.password = MD5('password'), u.password = MD5('password') WHERE s.staff_id = '$user_id' AND u.user_id = '$user_id'")or die(mysql_error());

        $row = mysql_fetch_array($result);

        //Receiver Info
        $to = $row['email'];
        $username = $row['username'];

        $subject = "Login Reset Successful";
        $message = "<p><b>Your password reset was successful</b><br> Your login details are;</p>
                    <p>Email : $to </p>
                    <p>Username : $username</p>
                    <p>New Password : 'password' <i>without the quotes</i></p>
                    <br>
                    <p>Thank you for using OpenHRMS</p>";
        $headers = "navicorpdesigns@gmail.com";
        $mail = mail($to, $subject, $message, $headers);

        //Check if mail is sent successful
        if ($mail) {
            echo "<div class='alert alert-success alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                  <strong>Success! </strong>Password Reset successful. Please check your email.</div>
                  <script>window.location.href = 'login.php';</script>";
        } else {
            $errors[] = "<div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                         <strong>Oh Snap! </strong>Connection error cannot not send recovery message</div>";
        }
    } else {
        $errors[] = "<div class='alert alert-danger alert-dismissable' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span arial-hidden='true'>&times;</span></button>
                       <strong>Oh Snap! </strong>No user with that username found. Please register ?</div>";
    }
}
