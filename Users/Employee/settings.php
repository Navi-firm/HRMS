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

        <link href="../../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

        <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

        <link href="../../assets/css/font-awesome.min.css" rel="stylesheet">

        <link href="../../assets/js/datetimepicker_css.js">

        <link href="../../assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <script type="text/javascript" src="../../assets/js/bootstrap-datetimepicker.min.js"></script>

        <link href="../../assets/css/dataTables.bootstrap.min.css" rel="stylesheet">

        <link href="../../assets/css/ui-lightness/jquery-ui-1.10.0.custom.min.css" rel="stylesheet">

        <link href="../../assets/css/base-admin-3.css" rel="stylesheet">
        <link href="../../assets/css/base-admin-3-responsive.css" rel="stylesheet">

        <link href="../../assets/css/pages/dashboard.css" rel="stylesheet">
        <link href="../../assets/css/custom.css" rel="stylesheet">

        <script>
            $(document).ready(function(){
                $("#mytable #checkall").click(function () {
                    if ($("#mytable #checkall").is(':checked')) {
                        $("#mytable input[type=checkbox]").each(function () {
                            $(this).prop("checked", true);
                        });

                    } else {
                        $("#mytable input[type=checkbox]").each(function () {
                            $(this).prop("checked", false);
                        });
                    }
                });

                $("[data-toggle=tooltip]").tooltip();
            });
        </script>

        <script type="text/javascript">
            function call()
            {
                var kcyear = document.getElementsByName("year1")[0],
                    kcmonth = document.getElementsByName("month1")[0],
                    kcday = document.getElementsByName("day1")[0];
                var d = new Date();
                var n = d.getFullYear();
                for (var i = n;
                     i >= 2015;
                     i--)
                {
                    var opt = new Option();
                    opt.value = opt.text = i;
                    kcyear.add(opt);
                }
                kcyear.addEventListener("change", validate_date);
                kcmonth.addEventListener("change", validate_date);
                function validate_date()
                {
                    var y = +kcyear.value,
                        m = kcmonth.value,
                        d = kcday.value;
                    if (m === "2") var mlength = 28 + (!(y & 3) && ((y % 100) !== 0 || !(y & 15)));
                    else
                        var mlength = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][m - 1];
                    kcday.length = 0;
                    for
                    (var i = 1; i <= mlength; i++)
                    {
                        var opt = new Option();
                        opt.value = opt.text = i;
                        if (i == d) opt.selected = true;
                        kcday.add(opt);
                    }
                }
                validate_date();
            }
        </script>

        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#datetimepicker4').datetimepicker({
                    pickTime: false
                });
            });
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
                <a class="navbar-brand" href="../Employee/index.php">OpenHRMS</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">

                        <a href="javscript:;" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i>  { <?php echo $user_data['role']; ?> } ,
                            <?php echo $user_data['username']; ?>
                            <b class="caret"></b>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="../Employee/profile.php"><i class="icon-user"></i> My Profile</a></li>
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
                            <a href="../Employee/index.php">
                                <i class="icon-home"></i>
                                <span >Home</span>
                            </a>
                        </li>

                        <li class="">
                            <a href="../Employee/leave.php">
                                <i class="icon-copy"></i>
                                <span>Leave</span>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="../Employee/tasks.php">
                                <i class="icon-tasks"></i>
                                <span>Tasks</span>
                            </a>
                        </li>

                        <li>
                            <a href="../Employee/events.php">
                                <i class="icon-calendar"></i>
                                <span>Events</span>
                            </a>
                        </li>

                        <li class="active">
                            <a href="profile.php">
                                <i class="icon-user"></i>
                                <span>Profile</span>
                            </a>
                        </li>

                        <li>
                            <a href="../Jobs/dashboard.php">
                                <i class="icon-briefcase"></i>
                                <span>Find a Job</span>
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

                <div class="col-md-3">

                    <div class="">

                        <div class="list-group">
                            <a class="list-group-item" href="index.php">
                                <span class="icon-home"></span> Dashboard
                            </a>
                            <a class="list-group-item" href="leave.php">
                                <span class="icon-arrow-left"></span>My Leave
                            </a>
                            <a class="list-group-item" href="tasks.php">
                                <span class="icon-tasks"></span>My Tasks
                            </a>
                            <a class="list-group-item" href="events.php">
                                <span class="icon-list-alt"></span> Events
                            </a>
                            <a class="list-group-item" href="../Jobs/dashboard.php">
                                <span class="icon-briefcase"></span> Find Work
                            </a>
                            <a class="list-group-item active" href="profile.php">
                                <span class="icon-user"></span> My Profile <i class="icon-chevron-right pull-right"></i>
                            </a>
                        </div>

                    </div>

                </div>

                <div class="col-md-9">

                    <div class="widget stacked">

                        <div class="widget-header">
                            <h3>Settings</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">

                        <?php include '../../processes/update_setting.php';?>

                            <div class="tabbable">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#profile" data-toggle="tab">My Profile</a>
                                    </li>
                                    <li><a href="#experinces" data-toggle="tab">Experiences</a></li>
                                    <li><a href="#education" data-toggle="tab">Education</a></li>
                                    <li><a href="#account" data-toggle="tab">Statutory Info</a></li>
                                    <li><a href="#bank" data-toggle="tab">Bank</a></li>
                                    <li><a href="#password" data-toggle="tab">Change Password</a> </li>
                                    <li><a href="#more" data-toggle="tab">Profile Pic</a></li>
                                </ul>

                                <br>
                                <?php
                                $applicant = mysql_query("SELECT * FROM staff WHERE staff_id = ". $user_data['user_id']);
                                $user = mysql_fetch_array($applicant);
                                ?>

                                <div class="tab-content">
                                    <div class="tab-pane profile active" id="profile">
                                        <form id="edit-profile2" class="form-horizontal col-md-12" method="post" action="">
                                            <fieldset>

                                                <div class="col-md-4">
                                                    <div class="user-info-left">
                                                        <p class="">
                                                            <img data-src="holder.js/260x180" alt="180x150" style="width: 180px; height: 150px;" src="../images/<?php echo $user['pro_pic']; ?>">
                                                        </p>
                                                        <h3><?php echo $user['first_name'];?> <?php echo $user['middle_name'];?> <?php echo $user['last_name'];?><i class="fa fa-circle green-font online-icon"></i><sup class="sr-only">online</sup></h3>
                                                    </div>
                                                </div>

                                                <div class="col-md-8">
                                                    <div class="user-info-right">
                                                        <div class="basic-info">
                                                            <h3><i class="icon-user"></i> Basic Information</h3>
                                                            <hr />

                                                            <div class="form-group">
                                                                <label for="username" class="col-md-4">Username</label>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user_data['username']; ?>" name="username" disabled>
                                                                    <p class="help-block">Your username is for logging in and cannot be changed.</p>
                                                                </div> <!-- /controls -->
                                                            </div> <!-- /control-group -->

                                                            <div class="form-group">
                                                                <label for="username" class="col-md-4">First Name</label>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['first_name'];?>" name="first_name" placeholder="First Name">
                                                                    <p class="help-block">Only Letters</p>
                                                                </div> <!-- /controls -->
                                                            </div> <!-- /control-group -->

                                                            <div class="form-group">
                                                                <label for="username" class="col-md-4">Last Name</label>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['last_name'];?>" name="last_name" placeholder="Last Name">
                                                                    <p class="help-block">Only Letters</p>
                                                                </div> <!-- /controls -->
                                                            </div> <!-- /control-group -->

                                                            <div class="form-group">
                                                                <label for="username" class="col-md-4">Other Name</label>
                                                                <div class="col-md-8">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['middle_name'];?>" name="other_name" placeholder="Other Name">
                                                                    <p class="help-block">Only Letters</p>
                                                                </div> <!-- /controls -->
                                                            </div> <!-- /control-group -->

                                                            <div class="form-group">
                                                                <label for="username" class="col-md-4">ID/ Passport No.</label>
                                                                <div class="col-md-8">
                                                                    <input type="number" class="form-control" id="username" value="" name="passport" placeholder="ID/ Passport">
                                                                </div> <!-- /controls -->
                                                            </div>

                                                           <div class="form-group">
                                                                <label for="username" class="col-md-4"><i class="icon-calendar"></i> Date of Birth </label>
                                                                <div id="datetimepicker4" class="col-md-4 input-group">
                                                                    <input type="text" id="datepicker" value="<?php echo $user['dob']; ?>" class="form-control" name="birth_date"><span class="input-group-addon"><i data-time-icon="icon-time" class="icon-calendar"></i></span>
                                                                </div> <!-- /controls -->
                                                            </div> <!-- /control-group -->

                                                            <div class="form-group">
                                                                <label class="col-md-4" for="accounttype">Gender</label>
                                                                <div class="col-md-8">
                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="accounttype" value="option1" checked="checked" id="accounttype">
                                                                            Male
                                                                        </label>
                                                                    </div>

                                                                    <div class="radio">
                                                                        <label>
                                                                            <input type="radio" name="accounttype" value="option2">
                                                                            Female
                                                                        </label>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="username" class="col-md-4"> User Role </label>
                                                                <div class="col-md-8">
                                                                    <p class="help-block"><?php echo $user_data['role'];?></p>
                                                                </div> <!-- /controls -->
                                                            </div> <!-- /control-group -->

                                                            <div class="form-group">
                                                                <label for="username" class="col-md-4"> Date Joined </label>
                                                                <div class="col-md-8">
                                                                    <p class="help-block"><?php echo date($user['created']);?></p>
                                                                </div> <!-- /controls -->
                                                            </div> <!-- /control-group -->

                                                            <div class="contact_info">
                                                                <h3><i class="fa fa-square"></i> Contact Information</h3>
                                                                <hr />

                                                                <div class="form-group">
                                                                    <label for="username" class="col-md-4"><i class="icon-envelope"></i> Email </label>
                                                                    <div class="col-md-8">
                                                                        <input type="email" class="form-control" id="username" value="<?php echo $user['email'];?>" name="email" placeholder="Email eg. johndoe@mail.com">
                                                                    </div> <!-- /controls -->
                                                                </div> <!-- /control-group -->

                                                                <div class="form-group">
                                                                    <label for="username" class="col-md-4"><i class="icon-phone"></i> Phone </label>
                                                                    <div class="col-md-8">
                                                                        <input type="number" class="form-control" id="username" value="<?php echo $user['phone'];?>" maxlength="13" min="1000000000" name="phone" placeholder="Phone eg. +254 700 124568">
                                                                    </div> <!-- /controls -->
                                                                </div> <!-- /control-group -->

                                                                <div class="form-group">
                                                                    <label for="username" class="col-md-4"><i class="icon-location-arrow"></i> Address </label>
                                                                    <div class="col-md-8">
                                                                        <input type="text" class="form-control" id="username" value="" name="address" placeholder="227 - 01000 Nairobi, Kenya">
                                                                    </div> <!-- /controls -->
                                                                </div> <!-- /control-group -->

                                                            </div>
                                                            <hr />
                                                            <div class="form-group">
                                                                <h3><i class="fa fa-square"></i> About Me</h3>
                                                                <div class="col-md-12">
                                                                    <textarea class="form-control" name=about" id="reason" rows="15" cols="80" placeholder="Give description"><?php echo $user['about']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <hr />
                                                            <div class="form-group">

                                                                <div class="col-md-4">
                                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                                </div>

                                                            </div> <!-- /.form-group -->

                                                        </div>

                                                    </div>
                                                </div>

                                            </fieldset>
                                        </form>
                                    </div>

                                    <!-- END PROFILE TAB CONTENT -->

                                    <div class="tab-pane" id="experinces">
                                       <form id="edit-profile2" class="form-horizontal col-md-12" action="" method="post">
                                        <fieldset>
                                            <div class="col-md-12">
                                                <div class="user-info-right">
                                                    <div class="basic-info">
                                                        <h3><i class="icon-briefcase"></i> Employement Experiences </h3>
                                                        <hr />
                                                        <div class="form-group">
                                                            <h5><i class="icon-briefcase"></i> Work Experience 1 </h5>

                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Position</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['position2']; ?>" name="position_2" placeholder="eg. Human Resource Manager">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Company</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['company2']; ?>" name="company_2" placeholder="eg. Navicorp Inc">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Location</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['location2']; ?>" name="location_2" placeholder="eg CBD Nairobi, Kenya">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Duration</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['duration2']; ?>" name="duration_2" placeholder="eg. 4 months, 2 years">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Referee</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['referee2']; ?>" name="referee_2" placeholder="Referee Name">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Contact</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['contact2']; ?>" name="contact_2" placeholder="Referee Phone">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-10">
                                                                <label for="username" class="col-md-12">Duties</label>
                                                                <div class="col-md-12">
                                                                    <textarea name="duties_2" class="form-control" rows="6" placeholder="List duties performed" maxlength="400"><?php echo $user['duties2']; ?></textarea>
                                                                </div>
                                                            </div>

                                                        </div> <!-- /control-group -->

                                                        <hr />
                                                        <div class="form-group">
                                                            <h5><i class="icon-briefcase"></i> Work Experience 2 </h5>

                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Position</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['position1']; ?>" name="position_1" placeholder="Eg. Accountant">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Company</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['company1']; ?>" name="company_1" placeholder="eg. Urithi Sacco">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Location</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['location1']; ?>" name="location_1" placeholder="eg. Kahawa, Nairobi, Kenya">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Duration</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['duration1']; ?>" name="duration_1" placeholder="eg. 4 months, 2 years">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Referee</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['referee1']; ?>" name="referee_1" placeholder="eg. Referee Name">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Contact</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['contact1']; ?>" name="contact_1" placeholder="Referee Phone">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-10">
                                                                <label for="username" class="col-md-12">Duties</label>
                                                                <div class="col-md-12">
                                                                    <textarea name="duties_1" class="form-control" rows="6" placeholder="List duties performed" maxlength="400"><?php echo $user['duties1']; ?></textarea>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <hr />
                                                        <div class="form-group">

                                                            <div class="col-md-4">
                                                                <button type="submit" class="btn btn-primary" name="btn-experience">Save Changes</button>
                                                            </div>

                                                        </div> <!-- /.form-group -->

                                                    </div>

                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                    </div>

                                    <div class="tab-pane" id="education">
                                       <form id="edit-profile2" class="form-horizontal col-md-12" action="" method="post" enctype="multipart/form-data">
                                        <fieldset>
                                            <div class="col-md-12">
                                                <div class="user-info-right">
                                                    <div class="basic-info">
                                                        <h3><i class="icon-file-text"></i> Education </h3>
                                                        <hr />
                                                        <div class="form-group">
                                                            <h5><i class="icon-file"></i> Education 1 </h5>

                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Institution Name</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['institution_1']; ?>" name="institution_1" placeholder="eg.Long Horn University">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Location</label>
                                                                <div class="col-md-12">
                                                                    <select class="form-control" id="country" name="loc_1">
                                                                        <option value=""><?php echo $user['loc_1']; ?></option>
                                                                        <option value="Afganistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="American Samoa">American Samoa</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Anguilla">Anguilla</option>
                                                                        <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Aruba">Aruba</option>
                                                                        <option value="Australia">Australia</option>
                                                                        <option value="Austria">Austria</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="Bahamas">Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bermuda">Bermuda</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bonaire">Bonaire</option>
                                                                        <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Canada">Canada</option>
                                                                        <option value="Canary Islands">Canary Islands</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                                        <option value="Central African Republic">Central African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Channel Islands">Channel Islands</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Christmas Island">Christmas Island</option>
                                                                        <option value="Cocos Island">Cocos Island</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo">Congo</option>
                                                                        <option value="Cook Islands">Cook Islands</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote DIvoire">Cote D'Ivoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Curaco">Curacao</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Czech Republic">Czech Republic</option>
                                                                        <option value="Denmark">Denmark</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                                        <option value="East Timor">East Timor</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Finland">Finland</option>
                                                                        <option value="France">France</option>
                                                                        <option value="French Guiana">French Guiana</option>
                                                                        <option value="French Polynesia">French Polynesia</option>
                                                                        <option value="French Southern Ter">French Southern Ter</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="Gambia">Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Germany">Germany</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Gibraltar">Gibraltar</option>
                                                                        <option value="Great Britain">Great Britain</option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Greenland">Greenland</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                                        <option value="Guam">Guam</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Hawaii">Hawaii</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hong Kong">Hong Kong</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="Iceland">Iceland</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Isle of Man">Isle of Man</option>
                                                                        <option value="Israel">Israel</option>
                                                                        <option value="Italy">Italy</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea North">Korea North</option>
                                                                        <option value="Korea Sout">Korea South</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macau">Macau</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                                        <option value="Martinique">Martinique</option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mayotte">Mayotte</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Midway Islands">Midway Islands</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montserrat">Montserrat</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar">Myanmar</option>
                                                                        <option value="Nambia">Nambia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                                        <option value="Nevis">Nevis</option>
                                                                        <option value="New Caledonia">New Caledonia</option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Niue">Niue</option>
                                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                                        <option value="Norway">Norway</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau Island">Palau Island</option>
                                                                        <option value="Palestine">Palestine</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Phillipines">Philippines</option>
                                                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Portugal">Portugal</option>
                                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                                                        <option value="Reunion">Reunion</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="St Barthelemy">St Barthelemy</option>
                                                                        <option value="St Eustatius">St Eustatius</option>
                                                                        <option value="St Helena">St Helena</option>
                                                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                                        <option value="St Lucia">St Lucia</option>
                                                                        <option value="St Maarten">St Maarten</option>
                                                                        <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                                                        <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                                                        <option value="Saipan">Saipan</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="Samoa American">Samoa American</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Serbia">Serbia</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Singapore">Singapore</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="Spain">Spain</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Sweden">Sweden</option>
                                                                        <option value="Switzerland">Switzerland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Tahiti">Tahiti</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tokelau">Tokelau</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                                                        <option value="United Kingdom">United Kingdom</option>
                                                                        <option value="United States of America">United States of America</option>
                                                                        <option value="Uraguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City State">Vatican City State</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                                        <option value="Wake Island">Wake Island</option>
                                                                        <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zaire">Zaire</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Award</label>
                                                                <div class="col-md-12">
                                                                    <select class="form-control" id="certificate" name="award_1">
                                                                        <option><?php echo $user['award_1']; ?></option>
                                                                        <option value="Phd">Phd</option>
                                                                        <option value="Masters">Masters</option>
                                                                        <option value="Graduate">Graduate</option>
                                                                        <option value="Bachelors">Bachelors</option>
                                                                        <option value="Diploma">Diploma</option>
                                                                        <option value="Certificate">Certificate</option>
                                                                    </select>
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Award title</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['title_1']; ?>" name="title_1" placeholder="eg. BSc. Pure Mathematics">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Year</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['date_1']; ?>" name="date_1" placeholder="eg. 2010">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <!-- /control-group -->
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Upload Certificate</label>
                                                                <div class="col-md-12">
                                                                    <p class="help-block">Certificate 1 <a href="../resume/<?php echo $user['file1']; ?>"><?php echo $user['file1']; ?></a></p>
                                                                    <input type="file" class="" name="file1">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                        </div>

                                                        <hr />

                                                        <div class="form-group">
                                                            <h5><i class="icon-file"></i> Education 2 </h5>

                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Institution Name</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['institution_2']; ?>" name="institution_2" placeholder="eg.Long Horn University">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Location</label>
                                                                <div class="col-md-12">
                                                                    <select class="form-control" id="country" name="loc_2">
                                                                        <option value="<?php echo $user['loc_2']; ?>"><?php echo $user['loc_2']; ?></option>
                                                                        <option value="Afganistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="American Samoa">American Samoa</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Anguilla">Anguilla</option>
                                                                        <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Aruba">Aruba</option>
                                                                        <option value="Australia">Australia</option>
                                                                        <option value="Austria">Austria</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="Bahamas">Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bermuda">Bermuda</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bonaire">Bonaire</option>
                                                                        <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Canada">Canada</option>
                                                                        <option value="Canary Islands">Canary Islands</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                                        <option value="Central African Republic">Central African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Channel Islands">Channel Islands</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Christmas Island">Christmas Island</option>
                                                                        <option value="Cocos Island">Cocos Island</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo">Congo</option>
                                                                        <option value="Cook Islands">Cook Islands</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote DIvoire">Cote D'Ivoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Curaco">Curacao</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Czech Republic">Czech Republic</option>
                                                                        <option value="Denmark">Denmark</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                                        <option value="East Timor">East Timor</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Finland">Finland</option>
                                                                        <option value="France">France</option>
                                                                        <option value="French Guiana">French Guiana</option>
                                                                        <option value="French Polynesia">French Polynesia</option>
                                                                        <option value="French Southern Ter">French Southern Ter</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="Gambia">Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Germany">Germany</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Gibraltar">Gibraltar</option>
                                                                        <option value="Great Britain">Great Britain</option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Greenland">Greenland</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                                        <option value="Guam">Guam</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Hawaii">Hawaii</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hong Kong">Hong Kong</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="Iceland">Iceland</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Isle of Man">Isle of Man</option>
                                                                        <option value="Israel">Israel</option>
                                                                        <option value="Italy">Italy</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea North">Korea North</option>
                                                                        <option value="Korea Sout">Korea South</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macau">Macau</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                                        <option value="Martinique">Martinique</option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mayotte">Mayotte</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Midway Islands">Midway Islands</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montserrat">Montserrat</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar">Myanmar</option>
                                                                        <option value="Nambia">Nambia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                                        <option value="Nevis">Nevis</option>
                                                                        <option value="New Caledonia">New Caledonia</option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Niue">Niue</option>
                                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                                        <option value="Norway">Norway</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau Island">Palau Island</option>
                                                                        <option value="Palestine">Palestine</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Phillipines">Philippines</option>
                                                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Portugal">Portugal</option>
                                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                                                        <option value="Reunion">Reunion</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="St Barthelemy">St Barthelemy</option>
                                                                        <option value="St Eustatius">St Eustatius</option>
                                                                        <option value="St Helena">St Helena</option>
                                                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                                        <option value="St Lucia">St Lucia</option>
                                                                        <option value="St Maarten">St Maarten</option>
                                                                        <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                                                        <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                                                        <option value="Saipan">Saipan</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="Samoa American">Samoa American</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Serbia">Serbia</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Singapore">Singapore</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="Spain">Spain</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Sweden">Sweden</option>
                                                                        <option value="Switzerland">Switzerland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Tahiti">Tahiti</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tokelau">Tokelau</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                                                        <option value="United Kingdom">United Kingdom</option>
                                                                        <option value="United States of America">United States of America</option>
                                                                        <option value="Uraguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City State">Vatican City State</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                                        <option value="Wake Island">Wake Island</option>
                                                                        <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zaire">Zaire</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Award</label>
                                                                <div class="col-md-12">
                                                                    <select class="form-control" id="certificate" name="award_2">
                                                                        <option value="<?php echo $user['award_2']; ?>"><?php echo $user['award_2']; ?></option>
                                                                        <option value="Phd">Phd</option>
                                                                        <option value="Masters">Masters</option>
                                                                        <option value="Graduate">Graduate</option>
                                                                        <option value="Bachelors">Bachelors</option>
                                                                        <option value="Diploma">Diploma</option>
                                                                        <option value="Certificate">Certificate</option>
                                                                    </select>
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Award title</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['title_2']; ?>" name="title_2" placeholder="eg. BSc. Pure Mathematics">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Year</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['date_2']; ?>" name="date_2" placeholder="eg. 2010">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <!-- /control-group -->
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Upload Certificate</label>
                                                                <div class="col-md-12">
                                                                    <p class="help-block">Certificate 1 <a href="../resume/<?php echo $user['file2']; ?>"><?php echo $user['file2']; ?></a></p>
                                                                    <input type="file" class="" name="file2">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                        </div>

                                                        <hr />

                                                        <div class="form-group">
                                                            <h5><i class="icon-file"></i> Education 3 </h5>

                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Institution Name</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['institution_3']; ?>" name="institution_3" placeholder="eg.Long Horn University">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Location</label>
                                                                <div class="col-md-12">
                                                                    <select class="form-control" id="country" name="loc_3">
                                                                        <option value="<?php echo $user['loc_3']; ?>"><?php echo $user['loc_3']; ?></option>
                                                                        <option value="Afganistan">Afghanistan</option>
                                                                        <option value="Albania">Albania</option>
                                                                        <option value="Algeria">Algeria</option>
                                                                        <option value="American Samoa">American Samoa</option>
                                                                        <option value="Andorra">Andorra</option>
                                                                        <option value="Angola">Angola</option>
                                                                        <option value="Anguilla">Anguilla</option>
                                                                        <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                                                        <option value="Argentina">Argentina</option>
                                                                        <option value="Armenia">Armenia</option>
                                                                        <option value="Aruba">Aruba</option>
                                                                        <option value="Australia">Australia</option>
                                                                        <option value="Austria">Austria</option>
                                                                        <option value="Azerbaijan">Azerbaijan</option>
                                                                        <option value="Bahamas">Bahamas</option>
                                                                        <option value="Bahrain">Bahrain</option>
                                                                        <option value="Bangladesh">Bangladesh</option>
                                                                        <option value="Barbados">Barbados</option>
                                                                        <option value="Belarus">Belarus</option>
                                                                        <option value="Belgium">Belgium</option>
                                                                        <option value="Belize">Belize</option>
                                                                        <option value="Benin">Benin</option>
                                                                        <option value="Bermuda">Bermuda</option>
                                                                        <option value="Bhutan">Bhutan</option>
                                                                        <option value="Bolivia">Bolivia</option>
                                                                        <option value="Bonaire">Bonaire</option>
                                                                        <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                                                                        <option value="Botswana">Botswana</option>
                                                                        <option value="Brazil">Brazil</option>
                                                                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                                        <option value="Brunei">Brunei</option>
                                                                        <option value="Bulgaria">Bulgaria</option>
                                                                        <option value="Burkina Faso">Burkina Faso</option>
                                                                        <option value="Burundi">Burundi</option>
                                                                        <option value="Cambodia">Cambodia</option>
                                                                        <option value="Cameroon">Cameroon</option>
                                                                        <option value="Canada">Canada</option>
                                                                        <option value="Canary Islands">Canary Islands</option>
                                                                        <option value="Cape Verde">Cape Verde</option>
                                                                        <option value="Cayman Islands">Cayman Islands</option>
                                                                        <option value="Central African Republic">Central African Republic</option>
                                                                        <option value="Chad">Chad</option>
                                                                        <option value="Channel Islands">Channel Islands</option>
                                                                        <option value="Chile">Chile</option>
                                                                        <option value="China">China</option>
                                                                        <option value="Christmas Island">Christmas Island</option>
                                                                        <option value="Cocos Island">Cocos Island</option>
                                                                        <option value="Colombia">Colombia</option>
                                                                        <option value="Comoros">Comoros</option>
                                                                        <option value="Congo">Congo</option>
                                                                        <option value="Cook Islands">Cook Islands</option>
                                                                        <option value="Costa Rica">Costa Rica</option>
                                                                        <option value="Cote DIvoire">Cote D'Ivoire</option>
                                                                        <option value="Croatia">Croatia</option>
                                                                        <option value="Cuba">Cuba</option>
                                                                        <option value="Curaco">Curacao</option>
                                                                        <option value="Cyprus">Cyprus</option>
                                                                        <option value="Czech Republic">Czech Republic</option>
                                                                        <option value="Denmark">Denmark</option>
                                                                        <option value="Djibouti">Djibouti</option>
                                                                        <option value="Dominica">Dominica</option>
                                                                        <option value="Dominican Republic">Dominican Republic</option>
                                                                        <option value="East Timor">East Timor</option>
                                                                        <option value="Ecuador">Ecuador</option>
                                                                        <option value="Egypt">Egypt</option>
                                                                        <option value="El Salvador">El Salvador</option>
                                                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                                        <option value="Eritrea">Eritrea</option>
                                                                        <option value="Estonia">Estonia</option>
                                                                        <option value="Ethiopia">Ethiopia</option>
                                                                        <option value="Falkland Islands">Falkland Islands</option>
                                                                        <option value="Faroe Islands">Faroe Islands</option>
                                                                        <option value="Fiji">Fiji</option>
                                                                        <option value="Finland">Finland</option>
                                                                        <option value="France">France</option>
                                                                        <option value="French Guiana">French Guiana</option>
                                                                        <option value="French Polynesia">French Polynesia</option>
                                                                        <option value="French Southern Ter">French Southern Ter</option>
                                                                        <option value="Gabon">Gabon</option>
                                                                        <option value="Gambia">Gambia</option>
                                                                        <option value="Georgia">Georgia</option>
                                                                        <option value="Germany">Germany</option>
                                                                        <option value="Ghana">Ghana</option>
                                                                        <option value="Gibraltar">Gibraltar</option>
                                                                        <option value="Great Britain">Great Britain</option>
                                                                        <option value="Greece">Greece</option>
                                                                        <option value="Greenland">Greenland</option>
                                                                        <option value="Grenada">Grenada</option>
                                                                        <option value="Guadeloupe">Guadeloupe</option>
                                                                        <option value="Guam">Guam</option>
                                                                        <option value="Guatemala">Guatemala</option>
                                                                        <option value="Guinea">Guinea</option>
                                                                        <option value="Guyana">Guyana</option>
                                                                        <option value="Haiti">Haiti</option>
                                                                        <option value="Hawaii">Hawaii</option>
                                                                        <option value="Honduras">Honduras</option>
                                                                        <option value="Hong Kong">Hong Kong</option>
                                                                        <option value="Hungary">Hungary</option>
                                                                        <option value="Iceland">Iceland</option>
                                                                        <option value="India">India</option>
                                                                        <option value="Indonesia">Indonesia</option>
                                                                        <option value="Iran">Iran</option>
                                                                        <option value="Iraq">Iraq</option>
                                                                        <option value="Ireland">Ireland</option>
                                                                        <option value="Isle of Man">Isle of Man</option>
                                                                        <option value="Israel">Israel</option>
                                                                        <option value="Italy">Italy</option>
                                                                        <option value="Jamaica">Jamaica</option>
                                                                        <option value="Japan">Japan</option>
                                                                        <option value="Jordan">Jordan</option>
                                                                        <option value="Kazakhstan">Kazakhstan</option>
                                                                        <option value="Kenya">Kenya</option>
                                                                        <option value="Kiribati">Kiribati</option>
                                                                        <option value="Korea North">Korea North</option>
                                                                        <option value="Korea Sout">Korea South</option>
                                                                        <option value="Kuwait">Kuwait</option>
                                                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                                        <option value="Laos">Laos</option>
                                                                        <option value="Latvia">Latvia</option>
                                                                        <option value="Lebanon">Lebanon</option>
                                                                        <option value="Lesotho">Lesotho</option>
                                                                        <option value="Liberia">Liberia</option>
                                                                        <option value="Libya">Libya</option>
                                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                                        <option value="Lithuania">Lithuania</option>
                                                                        <option value="Luxembourg">Luxembourg</option>
                                                                        <option value="Macau">Macau</option>
                                                                        <option value="Macedonia">Macedonia</option>
                                                                        <option value="Madagascar">Madagascar</option>
                                                                        <option value="Malaysia">Malaysia</option>
                                                                        <option value="Malawi">Malawi</option>
                                                                        <option value="Maldives">Maldives</option>
                                                                        <option value="Mali">Mali</option>
                                                                        <option value="Malta">Malta</option>
                                                                        <option value="Marshall Islands">Marshall Islands</option>
                                                                        <option value="Martinique">Martinique</option>
                                                                        <option value="Mauritania">Mauritania</option>
                                                                        <option value="Mauritius">Mauritius</option>
                                                                        <option value="Mayotte">Mayotte</option>
                                                                        <option value="Mexico">Mexico</option>
                                                                        <option value="Midway Islands">Midway Islands</option>
                                                                        <option value="Moldova">Moldova</option>
                                                                        <option value="Monaco">Monaco</option>
                                                                        <option value="Mongolia">Mongolia</option>
                                                                        <option value="Montserrat">Montserrat</option>
                                                                        <option value="Morocco">Morocco</option>
                                                                        <option value="Mozambique">Mozambique</option>
                                                                        <option value="Myanmar">Myanmar</option>
                                                                        <option value="Nambia">Nambia</option>
                                                                        <option value="Nauru">Nauru</option>
                                                                        <option value="Nepal">Nepal</option>
                                                                        <option value="Netherland Antilles">Netherland Antilles</option>
                                                                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                                        <option value="Nevis">Nevis</option>
                                                                        <option value="New Caledonia">New Caledonia</option>
                                                                        <option value="New Zealand">New Zealand</option>
                                                                        <option value="Nicaragua">Nicaragua</option>
                                                                        <option value="Niger">Niger</option>
                                                                        <option value="Nigeria">Nigeria</option>
                                                                        <option value="Niue">Niue</option>
                                                                        <option value="Norfolk Island">Norfolk Island</option>
                                                                        <option value="Norway">Norway</option>
                                                                        <option value="Oman">Oman</option>
                                                                        <option value="Pakistan">Pakistan</option>
                                                                        <option value="Palau Island">Palau Island</option>
                                                                        <option value="Palestine">Palestine</option>
                                                                        <option value="Panama">Panama</option>
                                                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                                                        <option value="Paraguay">Paraguay</option>
                                                                        <option value="Peru">Peru</option>
                                                                        <option value="Phillipines">Philippines</option>
                                                                        <option value="Pitcairn Island">Pitcairn Island</option>
                                                                        <option value="Poland">Poland</option>
                                                                        <option value="Portugal">Portugal</option>
                                                                        <option value="Puerto Rico">Puerto Rico</option>
                                                                        <option value="Qatar">Qatar</option>
                                                                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                                        <option value="Republic of Serbia">Republic of Serbia</option>
                                                                        <option value="Reunion">Reunion</option>
                                                                        <option value="Romania">Romania</option>
                                                                        <option value="Russia">Russia</option>
                                                                        <option value="Rwanda">Rwanda</option>
                                                                        <option value="St Barthelemy">St Barthelemy</option>
                                                                        <option value="St Eustatius">St Eustatius</option>
                                                                        <option value="St Helena">St Helena</option>
                                                                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                                        <option value="St Lucia">St Lucia</option>
                                                                        <option value="St Maarten">St Maarten</option>
                                                                        <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                                                                        <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                                                                        <option value="Saipan">Saipan</option>
                                                                        <option value="Samoa">Samoa</option>
                                                                        <option value="Samoa American">Samoa American</option>
                                                                        <option value="San Marino">San Marino</option>
                                                                        <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                                                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                                                        <option value="Senegal">Senegal</option>
                                                                        <option value="Serbia">Serbia</option>
                                                                        <option value="Seychelles">Seychelles</option>
                                                                        <option value="Sierra Leone">Sierra Leone</option>
                                                                        <option value="Singapore">Singapore</option>
                                                                        <option value="Slovakia">Slovakia</option>
                                                                        <option value="Slovenia">Slovenia</option>
                                                                        <option value="Solomon Islands">Solomon Islands</option>
                                                                        <option value="Somalia">Somalia</option>
                                                                        <option value="South Africa">South Africa</option>
                                                                        <option value="Spain">Spain</option>
                                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                                        <option value="Sudan">Sudan</option>
                                                                        <option value="Suriname">Suriname</option>
                                                                        <option value="Swaziland">Swaziland</option>
                                                                        <option value="Sweden">Sweden</option>
                                                                        <option value="Switzerland">Switzerland</option>
                                                                        <option value="Syria">Syria</option>
                                                                        <option value="Tahiti">Tahiti</option>
                                                                        <option value="Taiwan">Taiwan</option>
                                                                        <option value="Tajikistan">Tajikistan</option>
                                                                        <option value="Tanzania">Tanzania</option>
                                                                        <option value="Thailand">Thailand</option>
                                                                        <option value="Togo">Togo</option>
                                                                        <option value="Tokelau">Tokelau</option>
                                                                        <option value="Tonga">Tonga</option>
                                                                        <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                                                        <option value="Tunisia">Tunisia</option>
                                                                        <option value="Turkey">Turkey</option>
                                                                        <option value="Turkmenistan">Turkmenistan</option>
                                                                        <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                                                                        <option value="Tuvalu">Tuvalu</option>
                                                                        <option value="Uganda">Uganda</option>
                                                                        <option value="Ukraine">Ukraine</option>
                                                                        <option value="United Arab Erimates">United Arab Emirates</option>
                                                                        <option value="United Kingdom">United Kingdom</option>
                                                                        <option value="United States of America">United States of America</option>
                                                                        <option value="Uraguay">Uruguay</option>
                                                                        <option value="Uzbekistan">Uzbekistan</option>
                                                                        <option value="Vanuatu">Vanuatu</option>
                                                                        <option value="Vatican City State">Vatican City State</option>
                                                                        <option value="Venezuela">Venezuela</option>
                                                                        <option value="Vietnam">Vietnam</option>
                                                                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                                        <option value="Wake Island">Wake Island</option>
                                                                        <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                                                                        <option value="Yemen">Yemen</option>
                                                                        <option value="Zaire">Zaire</option>
                                                                        <option value="Zambia">Zambia</option>
                                                                        <option value="Zimbabwe">Zimbabwe</option>
                                                                    </select>
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Award</label>
                                                                <div class="col-md-12">
                                                                    <select class="form-control" id="certificate" name="award_3">
                                                                        <option value="<?php echo $user['award_3']; ?>"><?php echo $user['award_3']; ?></option>
                                                                        <option value="Phd">Phd</option>
                                                                        <option value="Masters">Masters</option>
                                                                        <option value="Graduate">Graduate</option>
                                                                        <option value="Bachelors">Bachelors</option>
                                                                        <option value="Diploma">Diploma</option>
                                                                        <option value="Certificate">Certificate</option>
                                                                    </select>
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Award title</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['title_3']; ?>" name="title_3" placeholder="eg. BSc. Pure Mathematics">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Year</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['date_3']; ?>" name="date_3" placeholder="eg. 2010">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                            <!-- /control-group -->
                                                            <div class="col-md-6">
                                                                <label for="username" class="col-md-12">Upload Certificate</label>
                                                                <div class="col-md-12">
                                                                    <p class="help-block">Certificate 3 <a href="../resume/<?php echo $user['file3']; ?>"><?php echo $user['file3']; ?></a></p>
                                                                    <input type="file" class="" name="file3">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                        </div>

                                                        <hr />

                                                        <div class="form-group">

                                                            <div class="col-md-4">
                                                                <button type="submit" class="btn btn-primary" name="btn-education">Save Changes</button>
                                                            </div>

                                                        </div> <!-- /.form-group -->

                                                    </div>

                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                    </div>

                                    <div class="tab-pane" id="account">
                                        <form id="edit-profile2" class="form-horizontal col-md-12" action="" method="post">
                                        <fieldset>
                                            <div class="col-md-12">
                                                <div class="user-info-right">
                                                    <div class="basic-info">
                                                        <h3><i class="icon-file-alt"></i> Statutory Information </h3>
                                                        <hr />
                                                        <div class="form-group">
                                                            <h5><i class="icon-file"></i> NHIF </h5>
                                                            <div class="col-md-12">
                                                                <label for="username" class="col-md-6">NHIF Number</label>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['nhif']; ?>" name="nhif">
                                                                </div> <!-- /controls -->
                                                            </div>

                                                        </div>

                                                        <div class="form-group">
                                                            <h5><i class="icon-file"></i> KRA </h5>
                                                            <div class="col-md-12">
                                                                <label for="username" class="col-md-6">KRA Pin</label>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['kra']; ?>" name="kra" >
                                                                </div> <!-- /controls -->
                                                            </div>

                                                        </div>

                                                        <div class="form-group">
                                                            <h5><i class="icon-file"></i> NSSF </h5>
                                                            <div class="col-md-12">
                                                                <label for="username" class="col-md-6">NSSF Number</label>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control"  value="<?php echo $user['nssf']; ?>" name="nssf">
                                                                </div> <!-- /controls -->
                                                            </div>

                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <label for="username" class="col-md-6"> Other </label>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control"  value="<?php echo $user['s_other']; ?>" name="other">
                                                                </div> <!-- /controls -->
                                                            </div>

                                                        </div>

                                                        <hr />

                                                        <div class="form-group">

                                                            <div class="col-md-4">
                                                                <button type="submit" class="btn btn-primary" name="btn-statutory">Save Changes</button>
                                                            </div>

                                                        </div> <!-- /.form-group -->

                                                    </div>

                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                    </div>

                                    <div class="tab-pane" id="bank">
                                        <form id="edit-profile2" class="form-horizontal col-md-12" action="" method="post">
                                        <fieldset>
                                            <div class="col-md-12">
                                                <div class="user-info-right">
                                                    <div class="basic-info">
                                                        <h3><i class="icon-archive"></i> Bank Details </h3>
                                                        <hr />
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <label for="username" class="col-md-3"> Account Name </label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['account']; ?>" name="account">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <label for="username" class="col-md-3"> Bank Name </label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['bank']; ?>" name="bank">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <label for="username" class="col-md-3"> Branch </label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['branch']; ?>" name="branch">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <label for="username" class="col-md-3"> Account Number </label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" id="username" value="<?php echo $user['account_number']; ?>" name="a_number">
                                                                </div> <!-- /controls -->
                                                            </div>
                                                        </div>

                                                        <hr />

                                                        <div class="form-group">

                                                            <div class="col-md-4">
                                                                <button type="submit" class="btn btn-primary" name="btn-bank">Save Changes</button>
                                                            </div>

                                                        </div> <!-- /.form-group -->

                                                    </div>

                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                    </div>

                                    <div class="tab-pane" id="password">
                                        <form id="edit-profile2" class="form-horizontal col-md-12" action="" method="post" enctype="multipart/form-data">
                                            <fieldset>
                                                <div class="col-md-12">
                                                     <h4><i class="fa fa-square"></i>Change Password </h4>
                                                        <hr />
                                                        <div class="form-group">
                                                            <label for="username" class="col-md-4">New Password</label>
                                                            <div class="col-md-8">
                                                                <input type="password" class="form-control" id="username" value="" name="password">
                                                            </div> <!-- /controls -->
                                                        </div> <!-- /control-group -->
                                                        <div class="form-group">
                                                            <label for="username" class="col-md-4">Repeat Password</label>
                                                            <div class="col-md-8">
                                                                <input type="password" class="form-control" id="username" value="" name="password">
                                                            </div> <!-- /controls -->
                                                        </div> <!-- /control-group -->

                                                        <hr />
                                                        <div class="form-group">
                                                            <div class="col-md-4">
                                                                <button type="submit" class="btn btn-primary" name="btn-password">Save Changes</button>
                                                            </div>
                                                        </div> <!-- /.form-group -->
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>

                                    <div class="tab-pane" id="more">
                                        <form id="edit-profile2" class="form-horizontal col-md-12" action="" method="post">
                                            <fieldset>
                                                <div class="col-md-12">
                                                    <div class="user-info-right">
                                                        <div class="basic-info">
                                                            <h3><i class="icon-user"></i> Profile Picture </h3>
                                                            <hr />
                                                            <div class="form-group">
                                                                <div class="col-md-9">
                                                                    <p class="">
                                                                        <img data-src="holder.js/260x180" alt="180x150" style="width: 180px; height: 150px;" src="../images/<?php echo $user['pro_pic']; ?>">
                                                                    </p>
                                                                    <div class="col-md-8 ">
                                                                        <input type="file" class="">
                                                                    </div> <!-- /controls -->
                                                                </div>
                                                            </div>

                                                            <hr />

                                                            <div class="form-group">

                                                                <div class="col-md-4">
                                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                                </div>

                                                            </div> <!-- /.form-group -->

                                                        </div>

                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


<?php include '../includes/footer.php';