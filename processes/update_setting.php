<?php

    if(isset($_POST['btn-update']))
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $other_name = $_POST['other_name'];
        $passport = $_POST['passport'];
        $birth_date = date($_POST['birth_date']);
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $phone2 = $_POST['phone2'];
        $address = $_POST['address'];
        $about = $_POST['about'];
        $user = $user_data['user_id'];

        $update_personal = mysql_query("UPDATE staff SET first_name = '$first_name', phone2 = '$phone2', last_name = '$last_name', middle_name = '$other_name', passport = '$passport', dob = '$birth_date', gender = '$gender', email = '$email', phone = '$phone', address = '$address', country = '$country', about = '$about' WHERE staff_id = '$user'") or die(mysql_error());

        if($update_personal){
            ?>
            <script type="text/javascript">
                alert('Data Are Updated Successfully');
                window.location.href='settings.php';
            </script>
        <?php
        }
        else
        {
            ?>
            <script type="text/javascript">
                alert('ERROR! Occured while updating data');
            </script>
            <?php
        }
    }

if(isset($_POST['btn-experience']))
{
    $position_1 = $_POST['position_1'];
    $company_1 = $_POST['company_1'];
    $location_1 = $_POST['location_1'];
    $duration_1 = $_POST['duration_1'];
    $referee_1 = $_POST['referee_1'];
    $contact_1 = $_POST['contact_1'];
    $duties_1 = $_POST['duties_1'];
    $position_1 = $_POST['position_1'];
    $company_1 = $_POST['company_1'];
    $location_1 = $_POST['location_1'];
    $duration_1 = $_POST['duration_1'];
    $referee_1 = $_POST['referee_1'];
    $contact_1 = $_POST['contact_1'];
    $duties_1 = $_POST['duties_1'];
    $user = $user_data['user_id'];

    $update_personal = mysql_query("UPDATE staff SET position1 = '$position_1', company1 = '$company_1', location1 = '$location_1', duration1 = '$duration_1', referee1 = '$referee_1', contact1 = '$contact_1', duties1 = '$duties_1',position1 = '$position_1', company1 = '$company_1', location1 = '$location_1', duration1 = '$duration_1', referee1 = '$referee_1', contact1 = '$contact_1', duties1 = '$duties_1' WHERE staff_id = '$user'") or die(mysql_error());

    if($update_personal){
        ?>
        <script type="text/javascript">
            alert('Profile Updated Successfully');
            window.location.href='settings.php';
        </script>
        <?php
    }
    else
    {
        ?>
        <script type="text/javascript">
            alert('ERROR! Occured while updating Profile');
        </script>
        <?php
    }
}

if(isset($_POST['btn-statutory']))
{
    $kra = $_POST['kra'];
    $nhif = $_POST['nhif'];
    $nssf = $_POST['nssf'];
    $other = $_POST['other'];
    $user = $user_data['user_id'];

    $update_personal = mysql_query("UPDATE staff SET kra = '$kra', nhif = '$nhif', nssf = '$nssf', s_other = '$other' WHERE staff_id = '$user'") or die(mysql_error());

    if($update_personal){
        ?>
        <script type="text/javascript">
            alert('Profile Updated Successfully');
            window.location.href='settings.php';
        </script>
        <?php
    }
    else
    {
        ?>
        <script type="text/javascript">
            alert('ERROR! Occured while updating Profile');
        </script>
        <?php
    }
}

if(isset($_POST['btn-password']))
{
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $user = $user_data['user_id'];

    $update_personal = mysql_query("UPDATE users SET password = MD5('$password') WHERE staff_id = '$user'") or die(mysql_error());

    if($update_personal){
        ?>
        <script type="text/javascript">
            alert('Password changed Successfully');
            window.location.href='settings.php';
        </script>
        <?php
    }
    else
    {
        ?>
        <script type="text/javascript">
            alert('ERROR! Occured while updating Profile');
        </script>
        <?php
    }
}

if(isset($_POST['btn-bank']))
{
    $account = $_POST['account'];
    $bank = $_POST['bank'];
    $branch = $_POST['branch'];
    $a_number = $_POST['a_number'];
    $user = $user_data['user_id'];

    $update_personal = mysql_query("UPDATE staff SET bank = '$bank', account = '$account', branch = '$branch', account_number = '$a_number' WHERE staff_id = '$user'") or die(mysql_error());

    if($update_personal){
        ?>
        <script type="text/javascript">
            alert('Profile Updated Successfully');
            window.location.href='settings.php';
        </script>
        <?php
    }
    else
    {
        ?>
        <script type="text/javascript">
            alert('ERROR! Occured while updating Profile');
        </script>
        <?php
    }
}

if(isset($_POST['btn-education']))
{
    $institution1 = $_POST['institution_1'];
    $loc_1 = $_POST['loc_1'];
    $award_1 = $_POST['award_1'];
    $title_1 = $_POST['title_1'];
    $date_1 = $_POST['date_1'];
    $institution2 = $_POST['institution_2'];
    $loc_2 = $_POST['loc_2'];
    $award_2 = $_POST['award_2'];
    $title_2 = $_POST['title_2'];
    $date_2 = $_POST['date_2'];
    $institution3 = $_POST['institution_3'];
    $loc_3 = $_POST['loc_3'];
    $award_3 = $_POST['award_3'];
    $title_3 = $_POST['title_3'];
    $date_3 = $_POST['date_3'];
    $user = $user_data['user_id'];

    //File properties
    $file = rand(1000,1000000)."-".$_FILES['file1']['name'];
    $file_loc = $_FILES['file1']['tmp_name'];
    $file_size = $_FILES['file1']['size'];
    $file_type = $_FILES['file1']['type'];
    $folder = "../resume/";
    $new_size = $file_size/1024;
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ','-',$new_file_name);

    $file2 = rand(1000,1000000)."-".$_FILES['file2']['name'];
    $file_loc2 = $_FILES['file2']['tmp_name'];
    $file_size2 = $_FILES['file2']['size'];
    $file_type2 = $_FILES['file2']['type'];
    $new_size2 = $file_size2/1024;
    $new_file_name2 = strtolower($file2);
    $final_file2 = str_replace(' ','-',$new_file_name2);

    $file3 = rand(1000,1000000)."-".$_FILES['file3']['name'];
    $file_loc3 = $_FILES['file3']['tmp_name'];
    $file_size3 = $_FILES['file3']['size'];
    $file_type3 = $_FILES['file3']['type'];
    $new_size3 = $file_size3/1024;
    $new_file_name3 = strtolower($file3);
    $final_file3 = str_replace(' ','-',$new_file_name3);

    $update_personal = mysql_query("UPDATE staff SET institution_1 ='$institution1', loc_1 = '$loc_1', award_1 = '$award_1', title_1 = '$title_1', date_1 = '$date_1', file1 = '$final_file', file1_size = '$new_size',institution_2 ='$institution2', loc_2 = '$loc_2', award_2 = '$award_2', title_2 = '$title_2', date_2 = '$date_2', file2 = '$final_file2', file2_size = '$new_size2',institution_3 ='$institution3', loc_3 = '$loc_3', award_3 = '$award_3', title_3 = '$title_3', date_3 = '$date_3', file3 = '$final_file3', file3_size = '$new_size3' WHERE staff_id = '$user'") or die(mysql_error());

    if($update_personal){
        ?>
        <script type="text/javascript">
            alert('Profile Updated Successfully');
            window.location.href='settings.php';
        </script>
        <?php
    }
    else
    {
        ?>
        <script type="text/javascript">
            alert('ERROR! Occured while updating Profile');
        </script>
        <?php
    }
}