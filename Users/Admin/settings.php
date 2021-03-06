<?php include '../../Includes/Core/init.php';
if(!logged_in())
{
    ?>
    <script type="text/javascript">
        window.location.href='../../login.php';
    </script>
    <?php
}
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>OpenHRMS | <?php echo $user_data['role']; ?> </title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

        <link href="../../assets/css/bootstrap-responsive.min.css" rel="stylesheet">

        <link href="../../assets/css/datepicker.css" rel="stylesheet">
        <link href="../../assets/css/calendrical.css" rel="stylesheet">

        <link href="../../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

        <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

        <link href="../../assets/css/font-awesome.min.css" rel="stylesheet">

        <link href="../../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

        <link href="../../assets/css/ui-lightness/jquery-ui-1.10.0.custom.min.css" rel="stylesheet">

        <link href="../../assets/css/base-admin-3.css" rel="stylesheet">
        <link href="../../assets/css/base-admin-3-responsive.css" rel="stylesheet">

        <link href="../../assets/css/pages/dashboard.css" rel="stylesheet">
        <link href="../../assets/css/custom.css" rel="stylesheet">

        <script>
            function currentDate(){
                var  strcount
                var current = new Date()

                var current_date = current.getDay() + "/" + current.getMonth() + "/" + current.getYear();
                current_date = current_date + " " + current.getHours() + ":" + current.getMinutes();

                document.getElementById('date_time').placeholder = current_date;
            }
        </script>

        <script type="text/javascript">

            /***********************************************
             * Drop Down Date select script- by JavaScriptKit.com
             * This notice MUST stay intact for use
             * Visit JavaScript Kit at http://www.javascriptkit.com/ for this script and more
             ***********************************************/

            var monthtext=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'];

            function populatedropdown(dayfield, monthfield, yearfield){
                var today=new Date()
                var dayfield=document.getElementById(dayfield)
                var monthfield=document.getElementById(monthfield)
                var yearfield=document.getElementById(yearfield)
                for (var i=0; i<32; i++)
                    dayfield.options[i]=new Option(i, i+1)
                dayfield.options[today.getDate()]=new Option(today.getDate(), today.getDate(), true, true) //select today's day
                for (var m=0; m<12; m++)
                    monthfield.options[m]=new Option(monthtext[m], monthtext[m])
                monthfield.options[today.getMonth()]=new Option(monthtext[today.getMonth()], monthtext[today.getMonth()], true, true) //select today's month
                var thisyear=today.getFullYear()
                for (var y=0; y<46; y++){
                    yearfield.options[y]=new Option(thisyear, thisyear)
                    thisyear+=1
                }
                yearfield.options[0]=new Option(today.getFullYear(), today.getFullYear(), true, true) //select today's year
            }

        </script>

        <script type="text/javascript">
            function delete_id(id)
            {
                if(confirm('Sure To Remove This Record ?'))
                {
                    window.location.href='dashboard.php?delete_id='+id;
                }
            }
        </script>

    </head>

<body onload="currentDate()">

    <nav class="navbar navbar-inverse" role="navigation">

        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="icon-cog"></i>
                </button>
                <a class="navbar-brand" href="../Admin/index.php">OpenHRMS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">

                        <a href="../Jobs/dashboard.php" >
                            <i class="icon-briefcase"></i>
                            Browse Jobs
                        </a>

                    </li>

                    <li class="dropdown">

                        <a href="javscript:;" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i>  { <?php echo $user_data['role']; ?> } ,
                            <?php echo $user_data['username']; ?>
                            <b class="caret"></b>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="../Admin/profile.php"><i class="icon-user"></i> My Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="../../Sign/Logout.php">Logout</a></li>
                        </ul>

                    </li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div> <!-- /.container -->
    </nav>
    <div class="subnavbar">

        <div class="subnavbar-inner">

            <div class="container">

                <a href="javascript:;" class="subnav-toggle" data-toggle="collapse" data-target=".subnav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="icon-reorder"></i>

                </a>

                <div class="collapse subnav-collapse">
                    <ul class="mainnav">

                        <li>
                            <a href="../Admin/index.php">
                                <i class="icon-home"></i>
                                <span>Home</span>
                            </a>
                        </li>

                        <li>
                            <a href="../Admin/users.php">
                                <i class="icon-user"></i>
                                <span>Users</span>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="../Departments/dashboard.php">
                                <i class="icon-list-ul"></i>
                                <span>Departments</span>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="../Admin/leave.php">
                                <i class="icon-arrow-left"></i>
                                <span> Leave</span>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="../Admin/employee.php">
                                <i class="icon-group"></i>
                                <span> Employee </span>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="../Admin/events.php">
                                <i class="icon-list-alt"></i>
                                <span>Events</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="../Admin/tasks.php">
                                <i class="icon-tasks"></i>
                                <span>Tasks</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="../Admin/jobs.php">
                                <i class="icon-briefcase"></i>
                                <span>Jobs</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="../Admin/settings.php">
                                <i class="icon-cogs"></i>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="../Admin/profile.php">
                                <i class="icon-info"></i>
                                <span>Profile</span>
                            </a>
                        </li>

                    </ul>
                </div> <!-- /.subnav-collapse -->

            </div> <!-- /container -->

        </div> <!-- /subnavbar-inner -->

    </div> <!-- /subnavbar -->

    <div class="main">

    <div class="container">

        <div class="row">

            <?php
            $applicant = mysql_query("SELECT staff_id, CONCAT(first_name,' ', middle_name, ' ', last_name) AS fullname, first_name, middle_name, last_name, phone, linkedin, postal_code, county, country, address, postal_code, email, department, work_status, dob, marital_status, about, passport, about, CONCAT(county, ', ', country) AS location, gender, email, postal_code, department, address, position1, position2, company1, company2, location1, location2, duration1, duration2, referee1, referee2, contact1, contact2, duties1, duties2, DATE_FORMAT(created, '%d %M %Y') AS joined, kra, nhif, nssf, s_other, account, bank, branch, account_number, pic_name,pro_pic, institution_1, award_1, loc_1, date_1, title_1, file1, file1_size FROM staff WHERE staff_id = ". $user_data['user_id']);
            $user = mysql_fetch_array($applicant);

            include '../../processes/update_setting.php';
            //display profile pic


            $owner = $user_data['user_id'];
            if(isset($_POST['btn-upload'])){
                $id = $_POST['profileID'];
                $filename = md5($id);
                $name = $_FILES['imagefile']['name'];
                $type = $_FILES["imagefile"]["type"];
                $size = $_FILES["imagefile"]["size"];
                $tmp =  $_FILES["imagefile"]["tmp_name"];
                $err =  $_FILES["imagefile"]["error"];

                if($err > 0)
                    die("Error uploading file! Code: $err.");
                else
                {

                    if($size > 2000000 || $size < 7000) //conditions for the file
                    {
                        echo "<script>alert('Upload Failed!<br/>Image size should be  7Kb to 2MB.')</script>";
                    }
                    else{
                        if($type == "image/gif") {
                            $ext = "gif";
                            $profile = $filename . "." . $ext;
                            mysql_query("UPDATE staff SET pro_pic = '$profile' WHERE staff_id = '$owner'");
                            move_uploaded_file($tmp, "../images/" . $profile);
                            echo "<script>alert('Upload succesful.')</script>";
                        }
                        elseif($type == "image/png"){
                            $ext = "png";
                            $profile = $filename.".".$ext;
                            mysql_query("UPDATE staff SET pro_pic = '$profile' WHERE staff_id = '$owner'");
                            move_uploaded_file($tmp, "../images/".$profile);
                            echo "<script>alert('Upload succesful.')</script>";

                        }
                        elseif($type == "image/jpg"){
                            $ext = "jpg";
                            $profile = $filename.".".$ext;
                            mysql_query("UPDATE staff SET pro_pic = '$profile' WHERE staff_id = '$owner'");
                            move_uploaded_file($tmp, "../images/".$profile);
                            echo "<script>alert('Upload succesfull.')</script>";

                        }
                        elseif($type == "image/jpeg"){
                            $ext = "jpg";
                            $profile = $filename.".".$ext;
                            mysql_query("UPDATE staff SET pro_pic = '$profile' WHERE staff_id = '$owner'");
                            move_uploaded_file($tmp, "../images/".$profile);
                            echo "<script>alert('Upload succesful.')</script>";

                        }
                        else{
                            echo "<script>alert('Upload Failed!<br/>Recommend File Type : JPG, JPEG, GIF, PNG')</script>";
                        }
                    }
                }
            }
            ?>

            <div class="col-md-3">
                <div class="list-group">
                    <a class="list-group-item" href="index.php">
                        <span class="icon-home"></span> Dashboard
                    </a>
                    <a class="list-group-item" href="users.php">
                        <span class="icon-user"></span> Users
                    </a>
                    <a class="list-group-item" href="../Departments/dashboard.php">
                        <span class="icon-list-ul"></span> Departments
                    </a>
                    <a class="list-group-item" href="leave.php">
                        <span class="icon-arrow-left"></span> Leave
                    </a>
                    <a class="list-group-item" href="employee.php">
                        <span class="icon-group"></span> Employee
                    </a>
                    <a class="list-group-item" href="jobs.php">
                        <span class="icon-briefcase"></span> Jobs
                    </a>
                    <a class="list-group-item" href="events.php">
                        <span class="icon-list-alt"></span> Events
                    </a>
                    <a class="list-group-item" href="tasks.php">
                        <span class="icon-tasks"></span> Tasks
                    </a>
                    <a class="list-group-item" href="profile.php">
                        <span class="icon-user"></span> Profile
                    </a>
                    <a class="list-group-item active" href="settings.php">
                        <span class="icon-cogs"></span> Settings <i class="icon-chevron-right pull-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="widget stacked">

                    <div class="widget-header">
                        <h3><i class="icon-cogs"></i> Settings</h3>
                    </div> <!-- /widget-header -->

                    <div class="widget-content">
                        <?php
                        $settings = mysql_query("SELECT * FROM account") or die(mysql_error());
                        $company = mysql_fetch_assoc($settings);

                        include '../../processes/account.php';
                        ?>
                        <form id="edit-profile2" class="form-horizontal col-md-12" method="post" action="">
                            <fieldset>
                                <h4 style="color: #000000;"><strong>General Info</strong></h4>
                                <hr />
                                <div class="form-group">
                                    <label for="username" class="col-md-4"> Company Name </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="username" value="<?php echo $company['name']; ?>" name="name">
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="form-group">
                                    <label for="username" class="col-md-4"> Website </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="username" value="<?php echo $company['website']; ?>" name="website">
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="form-group">
                                    <label for="username" class="col-md-4"> Contact 1 </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="username" value="<?php echo $company['contact1']; ?>" name="contact1">
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="form-group">
                                    <label for="username" class="col-md-4"> Contact 2 </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="username" value="<?php echo $company['contact2']; ?>" name="contact2">
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="form-group">
                                    <label for="username" class="col-md-4"> Address 1 </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="username" value="<?php echo $company['address1']; ?>" name="address1">
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="form-group">
                                    <label for="username" class="col-md-4"> Address 2 </label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="username" value="<?php echo $company['address2']; ?>" name="address2">
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="form-group">
                                    <label for="username" class="col-md-4"> City, State</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" id="username" value="<?php echo $company['location']; ?>" name="location">
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <div class="form-group">
                                    <label for="username" class="col-md-4"><i class="icon-envelope"></i> Email </label>
                                    <div class="col-md-6">
                                        <input type="email" class="form-control" id="username" value="<?php echo $company['email']; ?>" name="email">
                                    </div> <!-- /controls -->
                                </div> <!-- /control-group -->
                                <hr />
                                <div class="form-group">
                                    <button class="btn btn-primary" name="btn-update" type="submit">Save Changes</button>
                                </div> <!-- /control-group -->
                            </fieldset>
                        </form>
                    </div>

                </div>

            </div>

        </div>

    </div>


<?php include '../includes/footer.php';