<?php

    if(@$_POST['btn-upload'])
    {
        $file = $_FILES['pro_pic'];
        $file_name = $file['name'];
        $file_type = $file['type'];
        $file_size = $file['size'];
        $file_path = $file['tmp_name'];

        if($file_name!="" && ($file_type = "image/jpg" || $file_type = "image/png" || $file_type = "image/gif") && $file_size <= 2048576)
        {
            if(move_uploaded_file($file_path, '../../processes/uploads/images/'.$file_name))
            {
                $owner = $user_data['user_id'];
                $upload_pic = mysql_query("UPDATE staff SET pro_pic = '../../processes/uploads/images/$file_name' WHERE staff_id = '$owner'");

                if($upload_pic === true){
                    ?>
                    <script type="text/javascript">
                        alert('Profile pic Updated Successfully');
                        window.location.href='settings.php';
                    </script>
                    <?php
                }else{
                    ?>
                    <script type="text/javascript">
                        alert('ERROR! While uploading Pic');
                    </script>
                    <?php
                }
            }
        }

    }