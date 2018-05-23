<?php
if(empty($_POST) === false && empty($errors) === true){

    $account = array(

        'name' => $_POST['name'],
        'website' => $_POST['website'],
        'contact1' => $_POST['contact1'],
        'contact2' => $_POST['contact2'],
        'address1' => $_POST['address1'],
        'address2' => $_POST['address2'],
        'email' => $_POST['email'],
        'location' => $_POST['location'],
        'owner' => $user_data['username'],
    );

        //check info already exists
        $check_up = mysql_query("SELECT COUNT(account_id) FROM account");

        if(account_count() == '0')
        {

            if(account_info($account) === true){
                echo "<div class='alert alert-danger fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>ERROR !</strong> Something went wrong</div>";
            } else {
                echo "<div class='alert alert-success fade in'>
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              <strong>Success !</strong> Account Info Updated</div>";
            }

        }
        else{

        $name = $_POST['name'];
        $website = $_POST['website'];
        $contact1 = $_POST['contact1'];
        $contact2 = $_POST['contact2'];
        $address1 = $_POST['address1'];
        $address2 = $_POST['address2'];
        $email = $_POST['email'];
        $location = $_POST['location'];
        $owner = $user_data['username'];

            //update info
            $look_for_info = mysql_query("UPDATE account SET name = '$name', website = '$website', contact1 = '$contact1', contact2 = '$contact2', address1 = '$address1', address2 = '$address2', email = '$email', location = '$location', owner = '$owner' WHERE owner = '$owner'");

            if($look_for_info){
                echo "<div class='alert alert-success fade in'>
                      <a href='#' class='close' data-dismiss='alert'>&times;</a>
                      <strong>Success !</strong> Account Info Updated</div>";
            }else{
                echo "<div class='alert alert-danger fade in'>
                      <a href='#' class='close' data-dismiss='alert'>&times;</a>
                      <strong>ERROR !</strong> Something went wrong</div>";
            }
        }

}elseif(empty($errors) === false){
    echo output_errors($errors);
}